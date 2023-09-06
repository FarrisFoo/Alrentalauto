@extends("layouts.app")

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Booking Information</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0" style="background-color: white !important;">
                            <li class="breadcrumb-item">ID : {{ $bookingData->id }}</li> <!-- change here -->
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <div class="button-table float-right">
                            <a href="{{ route('booking.generate-pdf', $bookingData->id) }}"><button type="button" class="btn btn-primary btn-rounded">Generate Invoice</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="d-flex align-items-center mb-3">Booking Status</h5>
                            @if ($bookingData->status == 1)
                            <span class="badge rounded-pill bg-secondary" style="font-size:15px;margin-top: 8px;padding:5px 10px 5px 10px;">Booked</span>
                            @elseif ($bookingData->status == 2)
                            <span class="badge rounded-pill bg-primary" style="font-size:15px;margin-top: 8px;padding:5px 10px 5px 10px;">Ongoing</span>
                            @elseif ($bookingData->status == 3)
                            <span class="badge rounded-pill bg-danger" style="font-size:15px;margin-top: 8px;padding:5px 10px 5px 10px;">Pending Return</span>
                            @elseif ($bookingData->status == 4)
                            <span class="badge rounded-pill bg-success" style="font-size:15px;margin-top: 8px;padding:5px 10px 5px 10px;">Done</span>
                            @endif
                            {{-- <span class="badge badge-pill badge-'.(($fundData->fund_status == 0) ? 'danger text-white' : 'success').'">'.(($fundData->fund_status == 1) ? 'Active' : 'Inactive').'</span> --}}
                            <div class="float-right">
                                <input type="hidden" class="form-control" id="booking-id" name="booking-id" value="{{ $bookingData->id }}">
                                <select class="form-select mb-3 booking-status" name="booking-status" aria-label="Default select example">
                                    <option selected disabled>Change Status</option>
                                    <option value="1">Booked</option>
                                    <option value="2">Ongoing</option>
                                    <option value="3">Pending Return</option>
                                    <option value="4">Completed</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column">
                                <div class="my-3">
                                    <h4 class="align-items-center text-center mb-4">Customer Information</h4>
                                    <p class="text-secondary mb-1">Name :</p>
                                    <p class="mt-1 font-weight-bold">{{ $bookingData->customer->name }}</p> <!-- change here -->
                                    <p class="text-secondary mb-1">Identity Number :</p>
                                    <p class="mt-1 font-weight-bold">{{ $bookingData->customer->ic_num }}</p> <!-- change here -->
                                    <p class="text-secondary mb-1">Phone Number :</p>
                                    <p class="mt-1 font-weight-bold">{{ $bookingData->customer->phone_num }}</p> <!-- change here -->
                                    <p class="text-secondary mb-1">Emergency Contact :</p>
                                    <p class="mt-1 font-weight-bold">{{ $bookingData->customer->emergency_phone_num }}</p> <!-- change here -->
                                    <p class="text-secondary mb-1">Occupation :</p>
                                    <p class="mt-1 font-weight-bold">{{ $customerOccupation }}</p> <!-- change here -->
                                    <p class="text-secondary mb-1">Address :</p>
                                    <p class="mt-1 font-weight-bold">{{ $bookingData->customer->address }}</p> <!-- change here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="align-items-center text-center mb-4">Rental Information</h4>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mt-2 mb-0">Selected Car</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ $selectedCar }}" style="background-color: white !important;font-weight:600;" disabled/> <!-- change here -->
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mt-2 mb-0">Destination</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ $bookingData->destination }}" style="background-color: white !important;font-weight:600;" disabled/> <!-- change here -->
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mt-2 mb-0">Pickup Place</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    @if($bookingData->area_outside_jb == '')
                                    <input type="text" class="form-control" value="{{ $pickupPlace }}" style="background-color: white !important;font-weight:600;" disabled/> <!-- change here -->
                                    @else
                                    <input type="text" class="form-control" value="Other : {{ $pickupPlace }}" style="background-color: white !important;font-weight:600;" disabled/> <!-- change here -->
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-sm-6">
                                    <h6 class="mt-2 mb-0">Booking Calculation</h6>
                                </div>
                            </div>
                            
                            <table class="table table-bordered mb-0">
                                <tbody>
                                    <tr>
                                        <td>Deposit</td>
                                        <td></td>
                                        <td>RM 100</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $bookingData->car->model }} | RM{{ $bookingData->car->price }} Per Day</td>
                                        <td>{{ $totalBookingDays }} Day(s)</td>
                                        <td>RM {{ $rentTotal }}</td>
                                    </tr>
                                    @if($bookingData->pickup_method == 1)
                                        <tr>
                                            <td>Delivery To {{ $pickupPlace }}</td>
                                            <td></td>
                                            <td>RM {{ $delivery_fee }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td colspan="2">Total</td>
                                        <td>RM {{ $overallTotal }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row" style="margin-top:40px;justify-content: space-around">
                                <div class="card col-sm-5">
                                    <div class="card-body">
                                        <h4 class="align-items-center text-center mb-4">Pickup Details</h4>
                                        <p class="text-secondary mb-1">Pickup Date :</p>
                                        <p class="mt-1 font-weight-bold">{{ $formatted_pickup_date }}</p> <!-- change here -->
                                        <p class="text-secondary mb-1">Pickup Time :</p>
                                        <p class="mt-1 font-weight-bold">{{ $bookingData->pickup_time }}</p>  <!-- change here -->
                                    </div>
                                </div>
                                <div class="card col-sm-5">
                                    <div class="card-body">
                                        <h4 class="align-items-center text-center mb-4">Return Details</h4>
                                        <p class="text-secondary mb-1">Pickup Date :</p>
                                        <p class="mt-1 font-weight-bold">{{ $formatted_return_date }}</p> <!-- change here -->
                                        <p class="text-secondary mb-1">Pickup Time :</p>
                                        <p class="mt-1 font-weight-bold">{{ $bookingData->return_time }}</p> <!-- change here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="d-flex align-items-center mb-3">Supporting Documents</h5>
                            <div class="row">
                                <div class="col-sm-3">  
                                    <p>Renter's IC</p>
                                    <img src="{{ $bookingData->renter_ic }}" style="height: 120px" />
                                    @if ($bookingData->renter_ic_back != null)
                                    <img src="{{ $bookingData->renter_ic_back }}" style="height: 120px" />
                                    @endif
                                </div>
                                <div class="col-sm-3">
                                    <p>Renter's License</p>
                                    <img src="{{ $bookingData->renter_license }}" style="height: 120px" />
                                    @if ($bookingData->renter_license_back != null)
                                    <img src="{{ $bookingData->renter_license_back }}" style="height: 120px" />
                                    @endif
                                </div>
                                <div class="col-sm-3">
                                    <p>Renter's Selfie</p>
                                    <img src="{{ $bookingData->renter_selfie }}" style="height: 120px" />
                                </div> 
                                <div class="col-sm-3">
                                    <p>Renter's Receipt</p>
                                    <img src="{{ $bookingData->payment_receipt }}" style="height: 120px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
<script>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    $(document).on('change', '.booking-status', function (e) {
            e.preventDefault();
            
            var getId = $('input[name="booking-id"]').val();
            var getStatus = $('select[name="booking-status"]').val();

            var getData = {
                id : getId,
                status : getStatus
            };

            Swal.fire({
                title: 'Are you sure?',
                text: "Are you sure you want to change the booking status?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, change the status!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: '{{ route("booking.change-status") }}',
                        data: getData,
                        success: function(data) {
                            ajaxFlag = false;
                            // closeLoading();
                            if (!data.status) {
                                cbwUsFire({
                                    icon: 'warning', 
                                    title: 'Alert!', 
                                    desc: data.error,
                                    btnCancel: false,
                                    btn: 'Try Again'
                                });
                            } else {
                                window.location.reload();
                            }
                        }
                    });
                }
            });
        });
</script>
@endsection


