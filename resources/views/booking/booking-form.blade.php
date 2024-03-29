<!doctype html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/logo-icon.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Alrentalauto | Booking</title>

    <style>
        #loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: rgba(255, 255, 255, 0.8);
        }

        #loading-inner {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .spinner {
            width: 70px;
            height: 70px;
            margin: 0 auto;
            border: 3px solid #ddd;
            border-top-color: #000;
            border-radius: 100%;
            animation: spin 1s infinite linear;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .booking-card {
            margin-top:300px;
            margin-bottom: 80px;
        }
        @media screen and (max-width: 570px) {
            .booking-card {
                margin-top: 200px !important;
            }
        }
        @media screen and (max-width: 380px) {
            .booking-card {
                margin-top: 150px !important;
            }
        }
    </style>
</head>

@php
    $minimumDatePickUp = date('Y-m-d', strtotime(date('Y-m-d')));
    $minimumDateReturn = date('Y-m-d', strtotime(date('Y-m-d').' +1 day'));
@endphp
<body>
	<div class="wrapper">
        <div class="booking-header">
            <div class="img-wrap">
                <img src="assets/images/booking-form-cover.png" width="100%" alt="" />
            </div>
        </div>
		<div class="d-flex align-items-center justify-content-center" style="background-color: black;">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="card booking-card">
                            <div class="card-body">
								<div class="border p-4 rounded">
                                        <div class="text-center" style="padding-top: 20px; padding-bottom: 20px;">
                                            <h3 class="">Booking Form</h3>
                                            <p>Thank you for choosing us, please make your booking below.</a>
                                            </p>
                                        </div>
									<div class="login-separater text-center mb-4"> <span>PERSONAL INFORMATION</span>
										<hr/>
									</div>
									<div class="form-body">
										<form class="row g-3" id="cust-booking-form" enctype="multipart/form-data">
											<div class="col-12">
												<label for="renter_name" class="form-label">Name</label>
												<input type="text" class="form-control" id="renter_name" name="renter_name">
                                                <p id="name-errormsg" class="d-none" style="color: red"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter your name</p>
											</div>

                                            <label for="renter_name" class="form-label">Identity Card</label>
                                            <div class="input-group" style="margin-top:0;">
                                                <input type="text" class="form-control" id="renter_ic_front" name="renter_ic_front"> <span class="input-group-text">-</span>
                                                <input type="text" class="form-control" id="renter_ic_mid" name="renter_ic_mid"> <span class="input-group-text">-</span>
                                                <input type="text" class="form-control" id="renter_ic_end" name="renter_ic_end">
                                            </div>
                                            <p id="ic-errormsg" class="d-none" style="color: red;margin-top: 0"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter your identity card number</p>

											<div class="col-12">
												<label for="renter_address" class="form-label">Address</label>
												<textarea class="form-control" aria-label="With textarea" id="renter_address" name="renter_address"></textarea>
                                                <p id="address-errormsg" class="d-none" style="color: red"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter your address</p>
											</div>

                                            <div class="col-12">
												<label for="renter_phone" class="form-label">Phone Number</label>
												<input type="text" class="form-control" id="renter_phone" name="renter_phone">
                                                <p id="phone-errormsg" class="d-none" style="color: red"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter your phone number</p>
											</div>

                                            <div class="col-12">
												<label for="emergency_renter_phone" class="form-label">Emergency Phone Number</label>
												<input type="text" class="form-control" id="emergency_renter_phone" name="emergency_renter_phone">
                                                <p id="ephone-errormsg" class="d-none" style="color: red"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter your emergency phone number</p>
											</div>

                                            <div class="login-separater text-center mb-4"> <span>RENTER DETAILS</span>
                                                <hr/>
                                            </div>

											<div class="col-12">
												<label for="renter_occupation" class="form-label">Occupation</label>
												<select class="form-select" id="renter_occupation" name="renter_occupation" aria-label="Default select example">
                                                    <option selected value="" style="color: gray">Select Occupation</option>
                                                    <option value="1">Student</option>
                                                    <option value="2">Worker</option>
                                                    <option value="3">Personal Business</option>
                                                    <option value="4">House Wife/Husband</option>
                                                </select>
                                                <p id="occupation-errormsg" class="d-none" style="color: red;margin-top: 0"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please select an occupation</p>
											</div>

                                            <div class="col-12 d-none" id="company_name_div">
												<label for="company_name" class="form-label">Company Name</label>
												<input type="text" class="form-control" id="company_name" name="company_name">
                                                <p id="company-errormsg" class="d-none" style="color: red"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter your current working company name</p>
											</div>

                                            <div class="col-12">
												<label for="destination" class="form-label">Destination to go</label>
												<input type="text" class="form-control" id="destination" name="destination">
                                                <p id="destination-errormsg" class="d-none" style="color: red"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter your rental destination to go</p>
											</div>

                                            <div class="login-separater text-center mb-4"> <span>RENT INFORMATION</span>
                                                <hr/>
                                            </div>

                                            <div class="col-12">
												<label for="rental_car" class="form-label">Rental Car</label>
												<select class="form-select" id="rental_car" name="rental_car">
                                                    <option selected value="" style="color: gray">Select Car</option>
                                                    @foreach ($carData as $car)
                                                        <option value="{{ $car->id }}" data-car-model="{{ $car->model }}" data-car-price="{{ $car->price }}">{{ $car->model }} | RM{{ $car->price }}</option>
                                                    @endforeach
                                                </select>
                                                <p id="car-errormsg" class="d-none" style="color: red;margin-top: 0"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please select a rental car</p>
											</div>

                                            <div class="col-12">
												<label for="pickup_method" class="form-label">Pickup Method</label>
												<select class="form-select" id="pickup_method" name="pickup_method" aria-label="Default select example">
                                                    <option selected value="" style="color: gray">Select Method</option>
                                                    <option value="0">Pickup At Our Office</option>
                                                    <option value="1">Delivery</option>
                                                </select>
                                                <p id="pickup-method-errormsg" class="d-none" style="color: red;margin-top: 0"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please select a pickup method</p>
											</div>

                                            <div class="col-12 d-none" id="pickup_area_div">
                                                <label for="pickup_area" class="form-label">Pickup Area</label>
                                                <select class="form-select  " id="pickup_area" name="pickup_area" aria-label="Default select example">
                                                    <option selected value="" style="color: gray">Select Area</option>
                                                    <option value="1">RM15 | Pasir Gudang</option>
                                                    <option value="2">RM20 | Permas</option>
                                                    <option value="3">RM30 | Johor Bahru</option>
                                                    <option value="4">RM30 | Larkin</option>
                                                    <option value="6">RM60 | Senai Airport</option>
                                                    <option value="5">RM50 | Outside of Johor Bahru (exp: Gelang Patah, Iskandar, Senai)</option>
                                                </select>
                                                <p id="pickup-area-errormsg" class="d-none" style="color: red;margin-top: 0"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please select a pickup area</p>
                                            </div>

                                            <div class="col-12 d-none" id="outside_area_div">
												<label for="outside_area" class="form-label">Pickup Area (Outside Johor Bahru)</label>
												<input type="text" class="form-control" id="outside_area" name="outside_area">
                                                <p id="outside-errormsg" class="d-none" style="color: red"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter your pickup area</p>
											</div>

                                            <div class="mb-3">
                                                <label for="pickup_date" class="form-label">Pickup Date:</label>
                                                <input type="date" id="pickup_date" name="pickup_date" class="form-control" min="{{ $minimumDatePickUp }}">
                                                <p id="pickup-date-errormsg" class="d-none" style="color: red"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter pickup date</p>
                                            </div>

                                            <div class="col-12">
                                                <label for="pickup_time" class="form-label">Pickup Time</label>
                                                <select class="form-select" id="pickup_time" name="pickup_time" aria-label="Default select example">
                                                    <option selected value="" style="color: gray">Select Pickup Time</option>
                                                    <option value="7">7:00 AM</option>
                                                    <option value="8">8:00 AM</option>
                                                    <option value="9">9:00 AM</option>
                                                    <option value="10">10:00 AM</option>
                                                    <option value="11">11:00 AM</option>
                                                    <option value="12">12:00 PM</option>
                                                    <option value="13">1:00 PM</option>
                                                    <option value="14">2:00 PM</option>
                                                    <option value="15">3:00 PM</option>
                                                    <option value="16">4:00 PM</option>
                                                    <option value="17">5:00 PM</option>
                                                    <option value="18">6:00 PM</option>
                                                    <option value="19">7:00 PM</option>
                                                    <option value="20">8:00 PM</option>
                                                    <option value="21">9:00 PM</option>
                                                    <option value="22">10:00 PM</option>
                                                    <option value="23">11:00 PM</option>
                                                </select>
                                                <p id="pickup-time-errormsg" class="d-none" style="color: red;margin-top: 0"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please select a pickup time</p>
                                            </div>

                                            <div class="mb-3">
                                                <label for="return_date" class="form-label">Return Date:</label>
                                                <input type="date" id="return_date" name="return_date" class="form-control" min="{{ $minimumDateReturn }}">
                                                <p id="return-date-errormsg" class="d-none" style="color: red"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter return date</p>
                                            </div>

                                            <div class="col-12">
                                                <label for="return_time" class="form-label">Return Time</label>
                                                <select class="form-select" id="return_time" name="return_time" aria-label="Default select example">
                                                    <option selected value="" style="color: gray">Select Return Time</option>
                                                    <option value="7">7:00 AM</option>
                                                    <option value="8">8:00 AM</option>
                                                    <option value="9">9:00 AM</option>
                                                    <option value="10">10:00 AM</option>
                                                    <option value="11">11:00 AM</option>
                                                    <option value="12">12:00 PM</option>
                                                    <option value="13">1:00 PM</option>
                                                    <option value="14">2:00 PM</option>
                                                    <option value="15">3:00 PM</option>
                                                    <option value="16">4:00 PM</option>
                                                    <option value="17">5:00 PM</option>
                                                    <option value="18">6:00 PM</option>
                                                    <option value="19">7:00 PM</option>
                                                    <option value="20">8:00 PM</option>
                                                    <option value="21">9:00 PM</option>
                                                    <option value="22">10:00 PM</option>
                                                    <option value="23">11:00 PM</option>
                                                </select>
                                                <p id="return-time-errormsg" class="d-none" style="color: red;margin-top: 0"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please select a return time</p>

                                            </div>

                                            <div class="login-separater text-center"> <span>IDENTITY CONFIRMATION</span>
                                                <hr/>
                                            </div>

                                            <h5 for="renter_ic mb-1" class="form-label">Identity Card Image</h5>
                                            <p class="mb-0">Front</p>
                                            <div class="input-group control-group mt-0">
                                                <input type="file" accept="image/*" name="renter_ic" class="form-control">
                                            </div>
                                            <p id="renter-ic-errormsg" class="d-none" style="color: red;margin-top: 0"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter your identity card front picture</p>
                                            
                                            <p class="mb-0">Back</p>
                                            <div class="input-group control-group mt-0">
                                                <input type="file" accept="image/*" name="renter_ic_back" class="form-control">
                                            </div>
                                            <p id="renter-ic-back-errormsg" class="d-none" style="color: red;margin-top: 0"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter your identity card back picture</p>


                                            <h5 for="renter_license mb-1" class="form-label">License Image</h5>
                                            <p class="mb-0">Front</p>
                                            <div class="input-group mt-0 control-group">
                                                <input type="file" accept="image/*" name="rental_license" class="form-control">
                                            </div>
                                            <p id="renter-license-errormsg" class="d-none" style="color: red;margin-top: 0"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter your license picture</p>

                                            <p class="mb-0">Back</p>
                                            <div class="input-group mt-0 control-group">
                                                <input type="file" accept="image/*" name="rental_license_back" class="form-control">
                                            </div>
                                            <p id="renter-license-back-errormsg" class="d-none" style="color: red;margin-top: 0"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter your license back picture</p>

                                            <h5 for="renter_selfie mb-1" class="form-label">Selfie with License Image</h5>
                                            <p class="mb-0"></p>
                                            <div class="input-group mt-0 control-group">
                                                <input type="file" accept="image/*" name="renter_selfie" class="form-control">
                                            </div>
                                            <p id="renter-selfie-errormsg" class="d-none" style="color: red;margin-top: 0"><i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please enter your selfie with your license picture</p>

                                            <div class="login-separater text-center"> <span>BOOKING CALCULATION</span>
                                                <hr/>
                                            </div>
                                            <div class="col-12">
                                                <table class="w-100" style="border: 1px solid">
                                                    <tr style="border: 1px solid">
                                                        <th class="col-mb-3"></th>
                                                        <th class="col-3">Info</th>
                                                        <th class="col-3">Price</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-4">Deposit</td>
                                                        <td class="col-4"></td>
                                                        <td class="col-4 set-deposit-price">RM100</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-4">Car</td>
                                                        <td class="col-4 set-car-model"></td>
                                                        <td class="col-4 set-car-price"></td>
                                                    </tr>
                                                    <tr class="col-4">
                                                        <td class="col-4">Duration</td>
                                                        <td class="col-4 set-duration"></td>
                                                        <td class="col-4"></td>
                                                    </tr>
                                                    <tr class="col-4 d-none" id="add_additional_time">
                                                        <td class="col-4">Add-on Time</td>
                                                        <td class="col-4 addon-time"></td>
                                                        <td class="col-4 addon-cost"></td>
                                                    </tr>
                                                    <tr class="col-4 d-none" id="delivery_calculation">
                                                        <td class="col-4">Delivery Charge</td>
                                                        <td class="col-4 delivery-area"></td>
                                                        <td class="col-4 delivery-charge"></td>
                                                    </tr>
                                                    <tr class="col-4">
                                                        <td class="col-4">&nbsp;</td>
                                                        <th class="col-4">&nbsp;</th>
                                                        <td class="col-4">&nbsp;</td>
                                                    </tr>
                                                    <tr class="col-4">
                                                        <td class="col-4"></td>
                                                        <th class="col-4">Total</th>
                                                        <td class="col-4 set-duration-price"></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <p style="color: red;margin-top: 0;font-size:11px;">*This is not the final amount, any additional cost such as add-on time/etc are negotiable between customer and provider.</p>

                                            <div class="col-12">
												<input type="hidden" class="form-control" id="total_price" name="total_price" value="">
											</div>
		
											<div class="col-12">
												<div class="form-check form-switch">
													<input class="form-check-input tnc-check" name="tnc-check" type="checkbox" id="tnc-check" value="0">
													<label class="form-check-label" for="tnc-check">I read and agree to 
                                                        <a href="https://drive.google.com/file/d/1943BZEDNq3To4AeegR9vVEd_twD2a3D1/view?usp=drivesdk" target="_blank" style="font-weight:600;">Terms & Conditions</a>
                                                    </label>
												</div>
											</div>
											<div class="col-12">
												<div>
													<label>Please Wait 5 to 20 seconds after you click "Book Now" </label>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Book Now</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<footer class="bg-white shadow-sm border-top p-2 text-center fixed-bottom">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>


	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <!-- file uploader -->
    <script src="assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
	<script src="assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
	<script src="assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
	<script src="assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
	<script src="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>

    <!-- Sweet Aleart -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

	<script>
        document.addEventListener("DOMContentLoaded", function() {

            Swal.fire({
            position: 'top',
            html: '<i class="fa fa-exclamation-circle" style="color:red;padding-right:5px"></i>Please make sure your browser is updated to the latest version.<br><br>Updated browser make a better experience for customer while using our booking form 😃🌟',
            showConfirmButton: false 
            });
        });

        // pre-loader
        function showLoading() {
            // create the pre-loader element
            var loading = document.createElement('div');
            loading.id = 'loading';
            loading.innerHTML = '<div id="loading-inner"><div class="spinner"><img src="assets/images/logo-icon.png" width="100%"></div></div>';

            // add the pre-loader element to the page
            document.body.appendChild(loading);
        }

        function closeLoading() {
            // remove the pre-loader element from the page
            var loading = document.getElementById('loading');
            if (loading) {
                loading.parentNode.removeChild(loading);
            }
        }

        //get total day
        var pickupDate = new Date($('date'))
        var carModel = '';
        var carPrice = 0;
        var deliveryCharge = 0;
        var totalCarPrice = 0;
        var totalDuration = 0;
        var additionalTimePeriod = 0;
        var additionalTimeCost = 0;

        $(document).on('change', '#renter_occupation', function () {
            if($('#renter_occupation').val() == 2){
                $('#company_name_div').removeClass('d-none');
            } else {
                $('#company_name_div').addClass('d-none');
            }
        });

        $(document).on('change', '#pickup_method', function () {
            if($('#pickup_method').val() == 1){
                $('#pickup_area_div').removeClass('d-none');
            } else {
                $('#pickup_area_div').addClass('d-none');
            }
        });

        $(document).on('change', '#pickup_area', function () {
            if($('#pickup_area').val() == 5){
                $('#outside_area_div').removeClass('d-none');
            } else {
                $('#outside_area_div').addClass('d-none');
            }
        });

        $(document).on('change', '#pickup_method', function () {
            if($('#pickup_method').val() == 1){
                $('#delivery_calculation').removeClass('d-none');
            } else {
                $('#delivery_calculation').addClass('d-none');
            }
        });

        $(document).on('change', '#pickup_time', function () {
            var pickupTime = parseInt($('#pickup_time').val());
            var returnTime = parseInt($('#return_time').val());

            if(pickupTime < returnTime){
                $('#add_additional_time').removeClass('d-none');
            }else {
                $('#add_additional_time').addClass('d-none');
                additionalTimeCost = 0;
            }
        });

        $(document).on('change', '#return_time', function () {
            var pickupTime = parseInt($('#pickup_time').val());
            var returnTime = parseInt($('#return_time').val());

            if(pickupTime < returnTime){
                $('#add_additional_time').removeClass('d-none');
            }else {
                $('#add_additional_time').addClass('d-none');
                additionalTimeCost = 0;
            }
        });

        $(function () {

            $(document).on('change', '#pickup_area', function () {
                var selected_area = $(this).val();
                var area_name = '';

                if (selected_area == 1) {
                    deliveryCharge = 15;
                }else if (selected_area == 2) {
                    deliveryCharge = 20;
                }else if (selected_area == 3) {
                    deliveryCharge = 30;
                }else if (selected_area == 4) {
                    deliveryCharge = 30;
                }else if (selected_area == 5) {
                    deliveryCharge = 50;
                }else if (selected_area == 6) {
                    deliveryCharge = 60;
                }

                if (selected_area == 1) {
                    area_name = 'Pasir Gudang';
                }else if (selected_area == 2) {
                    area_name = 'Permas';
                }else if (selected_area == 3) {
                    area_name = 'Johor Bahru';
                }else if (selected_area == 4) {
                    area_name = 'Larkin';
                }else if (selected_area == 5) {
                    area_name = 'Outside Johor Bahru';
                }

                $('.delivery-area').html(area_name);
                $('.delivery-charge').html('RM' + deliveryCharge);

                durationAndPrice();
            });

            $(document).on('change', '#pickup_date', function () {
                var today = new Date($(this).val());
                var plusOneDay = new Date(today.setDate(today.getDate() + 1)).toISOString().substr(0, 10);

                $('#return_date').attr('min', plusOneDay);
                // Calculate and populate duration.
                calculationDuration();

                // Set duration and total.
                durationAndPrice();
            });

            $(document).on('change', '#return_date', function () {
                // Calculate and populate duration.
                calculationDuration();

                // Set duration and total.
                durationAndPrice();
            });

            $(document).on('change', '#pickup_time', function () {
                calculationTime();

                durationAndPrice();
            });


            $(document).on('change', '#return_time', function () {
                calculationTime();

                durationAndPrice();
            });

            $(document).on('change', '#rental_car', function () {
                // Get the car model and price.
                carModel = $(this).find(':selected').attr('data-car-model')
                carPrice = parseInt($(this).find(':selected').attr('data-car-price'))

                // Set the car model and price.
                $('.set-car-model').html(carModel);
                $('.set-car-price').html('RM' + carPrice);

                // Set duration and total.
                durationAndPrice();
            });
        });

        function durationAndPrice() {
            $('.addon-time').html(additionalTimePeriod + ' Hour(s)');
            $('.addon-cost').html('RM' + additionalTimeCost);
            $('.set-duration').html(totalDuration + ' Day(s)');
            $('.set-duration-price').html('RM' + ((totalDuration * carPrice) + deliveryCharge + 100 + additionalTimeCost));
            
            $('#total_price').val((totalDuration * carPrice) + deliveryCharge + additionalTimeCost);
        }

        function calculationTime() {
            var pickupTime = parseInt($('#pickup_time').val());
            var returnTime = parseInt($('#return_time').val());

            if(pickupTime < returnTime){
                additionalTimePeriod = returnTime - pickupTime;
                additionalTimeCost = additionalTimePeriod * 10;
            }
        }

        function calculationDuration() {
            if($('#pickup_date').val() != '' && $('#return_date').val() != '') {
                var returnDate = new Date($('#return_date').val());
                var pickupDate = new Date($('#pickup_date').val());
                totalDuration = Math.ceil((returnDate - pickupDate) / (1000 * 60 * 60 * 24)); 
            }
        }

        $('#tnc-check').on('change', function() {
            this.value = this.checked ? 1 : 0 ;
            // alert(this.value);
        }).change();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('submit', '#cust-booking-form', function (e) {
            e.preventDefault();
            showLoading();
            
            var formData = new FormData();

            formData.append('renter_name', $('input[name="renter_name"]').val());
            formData.append('renter_ic_front', $('input[name="renter_ic_front"]').val());
            formData.append('renter_ic_mid', $('input[name="renter_ic_mid"]').val());
            formData.append('renter_ic_end', $('input[name="renter_ic_end"]').val());
            formData.append('renter_address', $('textarea[name="renter_address"]').val());
            formData.append('renter_phone', $('input[name="renter_phone"]').val());
            formData.append('emergency_renter_phone', $('input[name="emergency_renter_phone"]').val());
            formData.append('renter_occupation', $('select[name="renter_occupation"]').val());
            formData.append('company_name', $('input[name="company_name"]').val());
            formData.append('destination', $('input[name="destination"]').val());
            formData.append('rental_car', $('select[name="rental_car"]').val());
            formData.append('pickup_method', $('select[name="pickup_method"]').val());
            formData.append('outside_area', $('input[name="outside_area"]').val());
            formData.append('pickup_area', $('select[name="pickup_area"]').val());
            formData.append('pickup_date', $('input[name="pickup_date"]').val());
            formData.append('pickup_time', $('select[name="pickup_time"]').val());
            formData.append('return_date', $('input[name="return_date"]').val());
            formData.append('return_time', $('select[name="return_time"]').val());
            formData.append('total_price', $('input[name="total_price"]').val());

            formData.append('rental_license', $('input[name="rental_license"]')[0].files[0]);
            formData.append('rental_license_back', $('input[name="rental_license_back"]')[0].files[0]);

            formData.append('renter_ic', $('input[name="renter_ic"]')[0].files[0]);
            formData.append('renter_ic_back', $('input[name="renter_ic_back"]')[0].files[0]);
            
            formData.append('renter_selfie', $('input[name="renter_selfie"]')[0].files[0]);

            formData.append('tnc_check', $('input[name="tnc-check"]').val());

            if ($('input[name="renter_name"]').val() == ''){
                $('#name-errormsg').removeClass('d-none');
            } else {
                $('#name-errormsg').addClass('d-none');
            }

            if (($('input[name="renter_ic_front"]').val() == '') || ($('input[name="renter_ic_mid"]').val() == '') || ($('input[name="renter_ic_end"]').val() == '')){
                $('#ic-errormsg').removeClass('d-none');
            }else {
                $('#ic-errormsg').addClass('d-none');
            }

            if ($('textarea[name="renter_address"]').val() == ''){
                $('#address-errormsg').removeClass('d-none');
            } else {
                $('#address-errormsg').addClass('d-none');
            }

            if ($('input[name="renter_phone"]').val() == ''){
                $('#phone-errormsg').removeClass('d-none');
            } else {
                $('#phone-errormsg').addClass('d-none');
            }

            if ($('input[name="emergency_renter_phone"]').val() == ''){
                $('#ephone-errormsg').removeClass('d-none');
            } else {
                $('#ephone-errormsg').addClass('d-none');
            }

            if ($('select[name="renter_occupation"]').val() === ""){
                $('#occupation-errormsg').removeClass('d-none');
            } else {
                $('#occupation-errormsg').addClass('d-none');
            }

            if ($('input[name="company_name"]').val() == ''){
                $('#company-errormsg').removeClass('d-none');
            } else {
                $('#company-errormsg').addClass('d-none');
            }

            if ($('input[name="destination"]').val() == ''){
                $('#destination-errormsg').removeClass('d-none');
            } else {
                $('#destination-errormsg').addClass('d-none');
            }

            if ($('select[name="rental_car"]').val() === ""){
                $('#car-errormsg').removeClass('d-none');
            } else {
                $('#car-errormsg').addClass('d-none');
            }

            if ($('select[name="pickup_method"]').val() === ""){
                $('#pickup-method-errormsg').removeClass('d-none');
            } else {
                $('#pickup-method-errormsg').addClass('d-none');
            }

            if ($('select[name="pickup_area"]').val() === ""){
                $('#pickup-area-errormsg').removeClass('d-none');
            } else {
                $('#pickup-area-errormsg').addClass('d-none');
            }

            if ($('input[name="outside_area"]').val() == ''){
                $('#outside-errormsg').removeClass('d-none');
            } else {
                $('#outside-errormsg').addClass('d-none');
            }

            if ($('input[name="pickup_date"]').val() == ''){
                $('#pickup-date-errormsg').removeClass('d-none');
            } else {
                $('#pickup-date-errormsg').addClass('d-none');
            }

            if ($('select[name="pickup_time"]').val() === ""){
                $('#pickup-time-errormsg').removeClass('d-none');
            } else {
                $('#pickup-time-errormsg').addClass('d-none');
            }

            if ($('input[name="return_date"]').val() == ''){
                $('#return-date-errormsg').removeClass('d-none');
            } else {
                $('#return-date-errormsg').addClass('d-none');
            }

            if ($('select[name="return_time"]').val() === ""){
                $('#return-time-errormsg').removeClass('d-none');
            } else {
                $('#return-time-errormsg').addClass('d-none');
            }

            if ($('input[name="renter_ic"]')[0].files[0] == null){
                $('#renter-ic-errormsg').removeClass('d-none');
            } else {
                $('#renter-ic-errormsg').addClass('d-none');
            }

            if ($('input[name="renter_ic_back"]')[0].files[0] == null){
                $('#renter-ic-back-errormsg').removeClass('d-none');
            } else {
                $('#renter-ic-back-errormsg').addClass('d-none');
            }

            if ($('input[name="rental_license"]')[0].files[0] == null){
                $('#renter-license-errormsg').removeClass('d-none');
            } else {
                $('#renter-license-errormsg').addClass('d-none');
            }

            if ($('input[name="rental_license_back"]')[0].files[0] == null){
                $('#renter-license-back-errormsg').removeClass('d-none');
            } else {
                $('#renter-license-back-errormsg').addClass('d-none');
            }

            if ($('input[name="renter_selfie"]')[0].files[0] == null){
                $('#renter-selfie-errormsg').removeClass('d-none');
            } else {
                $('#renter-selfie-errormsg').addClass('d-none');
            }

            if ($('input[name="tnc-check"]').val() != '1') {
                closeLoading();
                Swal.fire({
                    icon: 'question', 
                    title: 'Disagree with us?', 
                    text: 'Please read and confirm our Term and Condition before making a booking.',
                });
            } else {
                $.ajax({
                    type: 'POST',
                    url: '{{ route("booking.post") }}',
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(data) {
                        closeLoading();
                        if (!data.status) {
                            // -- Remove all previous error.
                            $('.cbwus-error-after-input').remove();
                            $('input').removeClass('cbwus-error-input');
                            $('select').removeClass('cbwus-error-input');
    
                            var focusFirst = false;
                            for (var errorInput in data.error) {
                                if (!focusFirst) {
                                    $('input[name="' + errorInput + '"]').focus();
                                    $('textarea[name="' + errorInput + '"]').focus();
                                    $('select[name="' + errorInput + '"]').focus();
                                }
                                focusFirst = true;
    
                                // -- Hold the error message HTML.
                                var inputError = `<div class="cbwus-error-after-input text-danger">replaceErrorHere</div>`
    
                                // -- Append error message in the parent element and style the input.
                                $('input[name="' + errorInput + '"]').addClass('cbwus-error-input');
                                $('input[name="' + errorInput + '"]').parent().append(inputError.replace('replaceErrorHere', data.error[errorInput]));

                                // -- Append error message in the parent element and style the textarea.
                                $('textarea[name="' + errorInput + '"]').addClass('cbwus-error-input');
                                $('textarea[name="' + errorInput + '"]').parent().append(inputError.replace('replaceErrorHere', data.error[errorInput]));
                                
                                // -- Append error message in the parent element and style the select.
                                $('select[name="' + errorInput + '"]').addClass('cbwus-error-input');
                                $('select[name="' + errorInput + '"]').parent().append(inputError.replace('replaceErrorHere', data.error[errorInput]));
                            }
                        } else {
                            Swal.fire({
                                icon: 'success', 
                                title: 'Thank you!', 
                                text: 'You will be redirect to payment page.',
                            }).then(function() {
                                window.location.href = "{{ route('booking.payment') }}";
                            });
                        }
                    }, 
                    error: function () {
                        Swal.fire({
                            icon: 'warning', 
                            title: 'Something went wrong!', 
                            text: 'Please try again later or contact the administator.',
                        });
                    }
                });
            }
        });
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>