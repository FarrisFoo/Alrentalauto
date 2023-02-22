<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables as DataTables;

class CustomerController extends Controller
{
    public function index()
    {
        $customerData = Customer::get();

        return view('admin.customer.list', compact('customerData'));
    }

    public function customerListing(Request $request)
    {
        if($request->ajax()) {
            $customerData = Customer::latest()->get();
            
            return Datatables::of($customerData)
                ->addIndexColumn()
                ->editColumn('occupation', function($customerData) {
                    if ($customerData->occupation == 1) {
                        $customerOccupation = 'Student';
                    } else if ($customerData->occupation == 2) {
                        $customerOccupation = 'Worker @ ' . $customerData->company_name;
                    } else if ($customerData->occupation == 3) {
                        $customerOccupation = 'Personal Business';
                    } else if ($customerData->occupation == 4) {
                        $customerOccupation = 'House Wife/Husband';
                    }

                    return $customerOccupation;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="view btn btn-success btn-sm">View</a>
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';

                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
            
    }
}
