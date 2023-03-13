<?php

namespace App\Http\Controllers;

use GuzzleHttp;
use Carbon\Carbon;
use App\Models\Car;
use App\Models\Booking;
use App\Models\Customer;
use App\Mail\BookingMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables as DataTables;

class BookingController extends Controller
{
    public $bookingLicenseFilePath;
    public $bookingLicenseStorageFilePath;

    public $bookingIcFilePath;
    public $bookingIcStorageFilePath;

    public $bookingSelfieFilePath;
    public $bookingSelfieStorageFilePath;

    public $bookingReceiptFilePath;
    public $bookingReceiptStorageFilePath;

    public function __construct()
    {
        $this->bookingLicenseFilePath = 'public/uploads/booking/license/';
        $this->bookingLicenseStorageFilePath = 'storage/uploads/booking/license/';

        $this->bookingIcFilePath = 'public/uploads/booking/ic/';
        $this->bookingIcStorageFilePath = 'storage/uploads/booking/ic/';

        $this->bookingSelfieFilePath = 'public/uploads/booking/selfie/';
        $this->bookingSelfieStorageFilePath = 'storage/uploads/booking/selfie/';

        $this->bookingReceiptFilePath = 'public/uploads/booking/receipt/';
        $this->bookingReceiptStorageFilePath = 'storage/uploads/booking/receipt/';

    }


    public function form()
    {  
        $carData = Car::get();
        
        return view('booking.booking-form', compact('carData'));
    }

    public function formBm()
    {  
        $carData = Car::get();
        
        return view('booking.booking-form-bm', compact('carData'));
    }

    public function create(Request $request)
    {
        $rules = [
            'renter_name' => 'required',
            'renter_ic_front' => 'required',
            'renter_ic_mid' => 'required',
            'renter_ic_end' => 'required',
            'renter_address' => 'required',
            'renter_phone' => 'required',
            'emergency_renter_phone' => 'required',
            'renter_occupation' => 'required',
            'company_name' => 'required_if:renter_occupation,==,2', //required only if renter occupation == worker(2)
            'destination' => 'required',
            'rental_car' => 'required',
            'pickup_method' => 'required',
            'pickup_area' => 'required_if:pickup_method,==,1', //required only if pick_up Method == delivery(1) 
            'outside_area' => 'required_if:pickup_area,==,5', //required only if pickup_area == outside JB(5) 
            'pickup_date' => 'required',
            'pickup_time' => 'required',
            'return_date' => 'required',
            'return_time' => 'required',
            'renter_ic' => 'required',
            'renter_ic_back' => 'required',
            'rental_license' => 'required',
            'rental_license_back' => 'required',
            'renter_selfie' => 'required'

        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => 'error',
            ]);
        }
        
        //make ic num
        $formatted_ic = $request->renter_ic_front . '-' . $request->renter_ic_mid . '-' . $request->renter_ic_end;


        $createNewCustomer = new Customer();
        $createNewCustomer->name = $request->renter_name;
        $createNewCustomer->ic_num = $formatted_ic;
        $createNewCustomer->address = $request->renter_address;
        $createNewCustomer->phone_num = $request->renter_phone;
        $createNewCustomer->emergency_phone_num = $request->emergency_renter_phone;
        $createNewCustomer->occupation = $request->renter_occupation;
        $createNewCustomer->company_name = $request->company_name;
        $createNewCustomer->save();

        $createNewBooking = new Booking();
        $createNewBooking->customer_id = $createNewCustomer->id;
        $createNewBooking->car_id = $request->rental_car;
        $createNewBooking->destination = $request->destination;
        $createNewBooking->pickup_method = $request->pickup_method;
        $createNewBooking->pickup_area = $request->pickup_area;
        $createNewBooking->area_outside_jb = $request->outside_area;
        $createNewBooking->pickup_date = $request->pickup_date;
        $createNewBooking->pickup_time = $request->pickup_time;
        $createNewBooking->return_date = $request->return_date;
        $createNewBooking->return_time = $request->return_time;
        $createNewBooking->renter_license = 1;
        $createNewBooking->renter_ic = 1;
        $createNewBooking->renter_selfie = 1;
        $createNewBooking->total_price = $request->total_price;
        $createNewBooking->status = 0;

        if ($request->file('renter_ic')) {
            $icFile = $request->file('renter_ic');
            $icFilename = $createNewCustomer->id . '_ic' . $formatted_ic . '.' . $icFile->getClientOriginalExtension();

            storage::put($this->bookingIcFilePath . $icFilename, file_get_contents($icFile));

            // Upload file
            $createNewBooking->renter_ic = $icFilename;
        }

        if ($request->file('renter_ic_back')) {
            $icFile_back = $request->file('renter_ic_back');
            $icFilename_back = $createNewCustomer->id . '_icback' . '.' . $icFile_back->getClientOriginalExtension();

            storage::put($this->bookingIcFilePath . $icFilename_back, file_get_contents($icFile_back));

            // Upload file
            $createNewBooking->renter_ic_back = $icFilename_back;
        }
        
        if ($request->file('rental_license')) {
            $licenseFile = $request->file('rental_license');
            $licenseFilename = $createNewCustomer->id . '_license' . '.' . $licenseFile->getClientOriginalExtension();

            storage::put($this->bookingLicenseFilePath . $licenseFilename, file_get_contents($licenseFile));

            // Upload file
            $createNewBooking->renter_license = $licenseFilename;
        }

        if ($request->file('rental_license_back')) {
            $licenseFile_back = $request->file('rental_license_back');
            $licenseFilename_back = $createNewCustomer->id . '_licenseback' . '.' . $licenseFile_back->getClientOriginalExtension();

            storage::put($this->bookingLicenseFilePath . $licenseFilename_back, file_get_contents($licenseFile_back));

            // Upload file
            $createNewBooking->renter_license_back = $licenseFilename_back;
        }

        if ($request->file('renter_selfie')) {
            $selfieFile = $request->file('renter_selfie');
            $selfieFilename = $createNewCustomer->id . '_selfie' . '.' . $selfieFile->getClientOriginalExtension();

            storage::put($this->bookingSelfieFilePath . $selfieFilename, file_get_contents($selfieFile));

            // Upload file
            $createNewBooking->renter_selfie = $selfieFilename;
        }
         
        $createNewBooking->save();

        $bookingDetails = Booking::where('id', $createNewBooking->id)->with('customer')->first();

        if($bookingDetails->renter_ic) {
            $bookingDetails->renter_ic = asset($this->bookingIcStorageFilePath . $bookingDetails->renter_ic);
        }

        if($bookingDetails->renter_ic_back) {
            $bookingDetails->renter_ic_back = asset($this->bookingIcStorageFilePath . $bookingDetails->renter_ic_back);
        }

        if($bookingDetails->renter_license) {
            $bookingDetails->renter_license = asset($this->bookingLicenseStorageFilePath . $bookingDetails->renter_license);
        }

        if($bookingDetails->renter_license_back) {
            $bookingDetails->renter_license_back = asset($this->bookingLicenseStorageFilePath . $bookingDetails->renter_license_back);
        }

        if($bookingDetails->renter_selfie) {
            $bookingDetails->renter_selfie = asset($this->bookingSelfieStorageFilePath . $bookingDetails->renter_selfie);
        }

        Mail::to('alcarrentalpasirgudang@gmail.com')->send(new BookingMail($bookingDetails));

        return response()->json([
            'status' => true,
        ]);

    }

    public function payment()
    {   
        $bookingData = Booking::with(['car', 'customer'])->latest()->first();
        
        $carPrice = $bookingData->car->price;
        $carModel = $bookingData->car->model;

        //get total booking day
        $pickupDate = $bookingData->pickup_date;
        $returnDate = $bookingData->return_date;
        $pickupDateArr = explode('-', trim($pickupDate));
        $returnDateArr = explode('-', trim($returnDate));
        $getPickupDate = Carbon::createFromDate($pickupDateArr[0], $pickupDateArr[1], $pickupDateArr[2]);
        $getReturnDate = Carbon::createFromDate($returnDateArr[0], $returnDateArr[1], $returnDateArr[2]);

        $bookingDuration = $getPickupDate->diffInDays($getReturnDate);
        
        $totalRent = $carPrice * $bookingDuration;

        if ($bookingData->pickup_area == 1) {
            $deliveryCharge = 15;
        }else if ($bookingData->pickup_area == 2) {
            $deliveryCharge = 20;
        }else if ($bookingData->pickup_area == 3) {
            $deliveryCharge = 30;
        }else if ($bookingData->pickup_area == 4) {
            $deliveryCharge = 30;
        }else if ($bookingData->pickup_area == 5) {
            $deliveryCharge = 50;
        }else if ($bookingData->pickup_area == 6) {
            $deliveryCharge = 60;
        }else {
            $deliveryCharge = 0;
        }

        if ($bookingData->pickup_area == 1) {
            $pickupPlace = 'Pasir Gudang';
        } else if ($bookingData->pickup_area == 2) {
            $pickupPlace = 'Permas';
        } else if ($bookingData->pickup_area == 3) {
            $pickupPlace = 'Johor Bahru';
        } else if ($bookingData->pickup_area == 4) {
            $pickupPlace = 'Larkin';
        } else if ($bookingData->pickup_area == 5) {
            $pickupPlace = $bookingData->area_outside_jb;
        }else if ($bookingData->pickup_area == 6) {
            $pickupPlace = 'Senai Airport';
        }else {
            $pickupPlace = '';
        }

        $overallTotal = ($carPrice * $bookingDuration) + $deliveryCharge + 100; 

        // dd($totalRent);

        return view('booking.booking-payment', compact('bookingData', 'carPrice', 'carModel', 'bookingDuration', 'totalRent', 'deliveryCharge', 'overallTotal', 'pickupPlace'));
    }

    public function paymentBm()
    {   
        $bookingData = Booking::with(['car', 'customer'])->latest()->first();
        
        $carPrice = $bookingData->car->price;
        $carModel = $bookingData->car->model;

        //get total booking day
        $pickupDate = $bookingData->pickup_date;
        $returnDate = $bookingData->return_date;
        $pickupDateArr = explode('-', trim($pickupDate));
        $returnDateArr = explode('-', trim($returnDate));
        $getPickupDate = Carbon::createFromDate($pickupDateArr[0], $pickupDateArr[1], $pickupDateArr[2]);
        $getReturnDate = Carbon::createFromDate($returnDateArr[0], $returnDateArr[1], $returnDateArr[2]);

        $bookingDuration = $getPickupDate->diffInDays($getReturnDate);
        
        $totalRent = $carPrice * $bookingDuration;

        if ($bookingData->pickup_area == 1) {
            $deliveryCharge = 15;
        }else if ($bookingData->pickup_area == 2) {
            $deliveryCharge = 20;
        }else if ($bookingData->pickup_area == 3) {
            $deliveryCharge = 30;
        }else if ($bookingData->pickup_area == 4) {
            $deliveryCharge = 30;
        }else if ($bookingData->pickup_area == 5) {
            $deliveryCharge = 50;
        }else if ($bookingData->pickup_area == 6) {
            $deliveryCharge = 60;
        }else {
            $deliveryCharge = 0;
        }

        if ($bookingData->pickup_area == 1) {
            $pickupPlace = 'Pasir Gudang';
        } else if ($bookingData->pickup_area == 2) {
            $pickupPlace = 'Permas';
        } else if ($bookingData->pickup_area == 3) {
            $pickupPlace = 'Johor Bahru';
        } else if ($bookingData->pickup_area == 4) {
            $pickupPlace = 'Larkin';
        } else if ($bookingData->pickup_area == 5) {
            $pickupPlace = $bookingData->area_outside_jb;
        }else if ($bookingData->pickup_area == 6) {
            $pickupPlace = 'Senai Airport';
        }else {
            $pickupPlace = '';
        }

        $overallTotal = ($carPrice * $bookingDuration) + $deliveryCharge + 100; 

        return view('booking.booking-payment-bm', compact('bookingData', 'carPrice', 'carModel', 'bookingDuration', 'totalRent', 'deliveryCharge', 'overallTotal', 'pickupPlace'));
    }

    public function receipt(Request $request)
    {   
        $insertReceipt = Booking::find($request->id);
        // dd($insertReceipt);

        if (is_null($insertReceipt)) {
            return response()->json([
                'status' => false,
                'error' => 'Booking Invalid',
            ]);
        }

        if ($request->file('payment_receipt')) {
            $receiptFile = $request->file('payment_receipt');
            $receiptFilename = $insertReceipt->id . '_receipt_' . $insertReceipt->id . '.' . $receiptFile->getClientOriginalExtension();

            storage::put($this->bookingReceiptFilePath . $receiptFilename, file_get_contents($receiptFile));

            // Upload file
            $insertReceipt->payment_receipt = $receiptFilename;
            $insertReceipt->save();
        }

        return response()->json([
            'status' => true,
        ]);
    }

    public function completed()
    {
        return view('booking.booking-completed');
    }

    public function completedBm()
    {
        return view('booking.booking-completed-bm');
    }



    /*
    *
    * Need Auth to continue.
    *
    */

    public function index()
    {  
        $bookingData = Booking::get();

        return view('admin.booking.list', compact('bookingData'));
    }


    public function bookingListing(Request $request)
    {
        if($request->ajax()) {
            $bookingData = Booking::with(['car', 'customer'])->latest()->get();
            
            return Datatables::of($bookingData)
                ->addIndexColumn()
                ->editColumn('customer_name', function($bookingData) {
                    $customerName = $bookingData->customer->name;

                    return $customerName;
                })
                ->editColumn('selected_car', function($bookingData) {
                    $selectedCar = $bookingData->car->model .' | ' . $bookingData->car->plate_num;

                    return $selectedCar;
                })
                ->editColumn('pickup_place', function($bookingData) {
                    if ($bookingData->pickup_method == 0) {
                        $pickupPlace = 'Lot Inkubator PIJ, Taman Bukit Dahlia';
                    } else{
                        if ($bookingData->pickup_area == 1) {
                            $pickupPlace = 'Pasir Gudang';
                        } else if ($bookingData->pickup_area == 2) {
                            $pickupPlace = 'Permas';
                        } else if ($bookingData->pickup_area == 3) {
                            $pickupPlace = 'Johor Bahru';
                        } else if ($bookingData->pickup_area == 4) {
                            $pickupPlace = 'Larkin';
                        } else if ($bookingData->pickup_area == 5) {
                            $pickupPlace = 'Other : '. $bookingData->area_outside_jb;
                        }else if ($bookingData->pickup_area == 6) {
                            $pickupPlace = 'Senai Airport';
                        }
                    }

                    return $pickupPlace;
                })
                ->editColumn('pickup_datetime', function($bookingData) {
                    $formatted_pickup_datetime = Carbon::createFromFormat('Y-m-d', $bookingData->pickup_date)->format('d/m/Y') . ' at ' . $bookingData->pickup_time;

                    return $formatted_pickup_datetime;
                })
                ->editColumn('return_datetime', function($bookingData) {
                    $formatted_return_datetime = Carbon::createFromFormat('Y-m-d', $bookingData->return_date)->format('d/m/Y') . ' at ' . $bookingData->return_time;

                    return $formatted_return_datetime;
                })
                ->editColumn('booking_earning', function($bookingData) {
                    $formatted_booking_earning = 'RM '. $bookingData->total_price;
                    // Carbon::createFromFormat('Y-m-d', $bookingData->return_date)->format('d/F/Y');

                    return $formatted_booking_earning;
                })
                ->addColumn('action', function($bookingData){
                    $actionBtn = '<a class="view btn btn-success btn-sm" href="' . route('booking.view', $bookingData->id) . '">View</a>
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';

                    return $actionBtn;
                })
                ->rawColumns(['customer_name', 'selected_car', 'pickup_place', 'pickup_datetime', 'return_datetime', 'booking_earning', 'action'])
                ->make(true);
        }
            
    }

    public function viewBooking(Request $request)
    {   
        $bookingData = Booking::where('id', $request->id)->with(['car', 'customer'])->first();

        //reformat customer occupation
        if ($bookingData->customer->occupation == 1) {
            $customerOccupation = 'Student';
        } else if ($bookingData->customer->occupation == 2) {
            $customerOccupation = 'Worker @ ' . $bookingData->customer->company_name;
        } else if ($bookingData->customer->occupation == 3) {
            $customerOccupation = 'Personal Business';
        } else if ($bookingData->customer->occupation == 4) {
            $customerOccupation = 'House Wife/Husband';
        }

        //reformat selected car
        $selectedCar = $bookingData->car->model .' | ' . $bookingData->car->plate_num;

        //reformat pickup area
        if ($bookingData->pickup_method == 0) {
            $pickupPlace = 'Lot Inkubator PIJ, Taman Bukit Dahlia';
        } else{
            if ($bookingData->pickup_area == 1) {
                $pickupPlace = 'Pasir Gudang';
            } else if ($bookingData->pickup_area == 2) {
                $pickupPlace = 'Permas';
            } else if ($bookingData->pickup_area == 3) {
                $pickupPlace = 'Johor Bahru';
            } else if ($bookingData->pickup_area == 4) {
                $pickupPlace = 'Larkin';
            } else if ($bookingData->pickup_area == 5) {
                $pickupPlace = ucfirst($bookingData->area_outside_jb);
            }
        }

        //reformat pickup Date
        $formatted_pickup_date = Carbon::createFromFormat('Y-m-d', $bookingData->pickup_date)->format('d F Y');
        //reformat return Date
        $formatted_return_date = Carbon::createFromFormat('Y-m-d', $bookingData->return_date)->format('d F Y');

        //get total booking day
        $totalBookingDays = Carbon::createFromFormat('Y-m-d', $bookingData->pickup_date)->diffInDays(Carbon::createFromFormat('Y-m-d', $bookingData->return_date));

        //calculate total rental
        $rentTotal = 0;
        $rentTotal = $bookingData->car->price * $totalBookingDays;

        //get delivery fee
        $delivery_fee = 0;
        if($bookingData->pickup_method == 1) {
            if($bookingData->pickup_area == 1) {
                $delivery_fee = 15;
            } else if ($bookingData->pickup_area == 2) {
                $delivery_fee = 20;
            } else if ($bookingData->pickup_area == 3) {
                $delivery_fee = 30;
            } else if ($bookingData->pickup_area == 4) {
                $delivery_fee = 30;
            } else if ($bookingData->pickup_area == 5) {
                $delivery_fee = 50;
            } else {
                $delivery_fee = 0;
            }
        }

        //deposit value
        $deposit = 100;

        //calculate overall total
        $overallTotal = $deposit + $rentTotal + $delivery_fee;

        if($bookingData->renter_license) {
            $bookingData->renter_license = asset($this->bookingLicenseStorageFilePath . $bookingData->renter_license);
        }

        if($bookingData->renter_license_back) {
            $bookingData->renter_license_back = asset($this->bookingLicenseStorageFilePath . $bookingData->renter_license_back);
        }

        if($bookingData->renter_ic) {
            $bookingData->renter_ic = asset($this->bookingIcStorageFilePath . $bookingData->renter_ic);
        }

        if($bookingData->renter_ic_back) {
            $bookingData->renter_ic_back = asset($this->bookingIcStorageFilePath . $bookingData->renter_ic_back);
        }

        if($bookingData->renter_selfie) {
            $bookingData->renter_selfie = asset($this->bookingSelfieStorageFilePath . $bookingData->renter_selfie);
        }

        if($bookingData->payment_receipt) {
            $bookingData->payment_receipt = asset($this->bookingReceiptStorageFilePath . $bookingData->payment_receipt);
        }


        return view('admin.booking.view', compact('bookingData' , 'customerOccupation', 'selectedCar', 'pickupPlace', 'formatted_pickup_date', 'formatted_return_date', 'totalBookingDays' ,'rentTotal', 'delivery_fee', 'overallTotal'));
    }

    public function changeStatus(Request $request)
    {
        $bookingData = Booking::find($request->id);

        if ($bookingData) {
            $bookingData->status = $request->status;
            $bookingData->save();
        

            return response()->json([
                'status' => true,
                'message' => null
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Unable to fetch booking information.'
        ]);
    }
}
