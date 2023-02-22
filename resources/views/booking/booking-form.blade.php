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
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Alrentalauto | Booking</title>

    <style>
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
	<!--wrapper-->
    
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
											</div>

                                            <label for="renter_name" class="form-label">Identity Card</label>
                                            <div class="input-group" style="margin-top:0;">
                                                <input type="text" class="form-control" placeholder="991231" id="renter_ic_front" name="renter_ic_front"> <span class="input-group-text">-</span>
                                                <input type="text" class="form-control" placeholder="00" id="renter_ic_mid" name="renter_ic_mid"> <span class="input-group-text">-</span>
                                                <input type="text" class="form-control" placeholder="1111" id="renter_ic_end" name="renter_ic_end">
                                            </div>

											<div class="col-12">
												<label for="renter_address" class="form-label">Address</label>
												<textarea class="form-control" aria-label="With textarea" id="renter_address" name="renter_address"></textarea>
											</div>

                                            <div class="col-12">
												<label for="renter_phone" class="form-label">Phone Number</label>
												<input type="text" class="form-control" id="renter_phone" name="renter_phone" placeholder="011-00000000">
											</div>

                                            <div class="col-12">
												<label for="emergency_renter_phone" class="form-label">Emergency Phone Number</label>
												<input type="text" class="form-control" id="emergency_renter_phone" name="emergency_renter_phone" placeholder="011-00000000">
											</div>

                                            <div class="login-separater text-center mb-4"> <span>RENTER DETAILS</span>
                                                <hr/>
                                            </div>

											<div class="col-12">
												<label for="renter_occupation" class="form-label">Occupation</label>
												<select class="form-select mb-3" id="renter_occupation" name="renter_occupation" aria-label="Default select example">
                                                    <option selected disabled>Select Occupation</option>
                                                    <option value="1">Student</option>
                                                    <option value="2">Worker</option>
                                                    <option value="3">Personal Business</option>
                                                    <option value="4">House Wife/Husband</option>
                                                </select>
											</div>

                                            <div class="col-12 d-none" id="company_name_div">
												<label for="company_name" class="form-label">Company Name</label>
												<input type="text" class="form-control" id="company_name" name="company_name" placeholder="Al Rental Auto">
											</div>

                                            <div class="col-12">
												<label for="destination" class="form-label">Destination</label>
												<input type="text" class="form-control" id="destination" name="destination" placeholder="Pasir Gudang">
											</div>

                                            <div class="login-separater text-center mb-4"> <span>RENT INFORMATION</span>
                                                <hr/>
                                            </div>

                                            <div class="col-12">
												<label for="rental_car" class="form-label">Rental Car</label>
												<select class="form-select mb-3" id="rental_car" name="rental_car">
                                                    <option selected disabled>Select Car</option>
                                                    @foreach ($carData as $car)
                                                        <option value="{{ $car->id }}" data-car-model="{{ $car->model }}" data-car-price="{{ $car->price }}">{{ $car->model }} | RM{{ $car->price }}</option>
                                                    @endforeach
                                                </select>
											</div>

                                            <div class="col-12">
												<label for="pickup_method" class="form-label">Pickup Method</label>
												<select class="form-select mb-3" id="pickup_method" name="pickup_method" aria-label="Default select example">
                                                    <option selected disabled>Select Method</option>
                                                    <option value="0">Pickup At Our Office</option>
                                                    <option value="1">Delivery</option>
                                                </select>
											</div>

                                            <div class="col-12 d-none" id="pickup_area_div">
                                                <label for="pickup_area" class="form-label">Pickup Area</label>
                                                <select class="form-select mb-3" id="pickup_area" name="pickup_area" aria-label="Default select example">
                                                    <option selected disabled>Select Area</option>
                                                    <option value="1">RM15 | Pasir Gudang</option>
                                                    <option value="2">RM20 | Permas</option>
                                                    <option value="3">RM30 | Johor Bahru</option>
                                                    <option value="4">RM30 | Larkin</option>
                                                    <option value="6">RM60 | Senai Airport</option>
                                                    <option value="5">RM50 | Outside of Johor Bahru (exp: Gelang Patah, Iskandar, Senai)</option>
                                                </select>
                                            </div>

                                            <div class="col-12 d-none" id="outside_area_div">
												<label for="outside_area" class="form-label">Pickup Area (Outside Johor Bahru)</label>
												<input type="text" class="form-control" id="outside_area" name="outside_area" placeholder="Gelang Patah">
											</div>

                                            <div class="mb-3">
                                                <label for="pickup_date" class="form-label">Pickup Date:</label>
                                                <input type="date" id="pickup_date" name="pickup_date" class="form-control" min="{{ $minimumDatePickUp }}">
                                            </div>

                                            <div class="col-12">
                                                <label for="pickup_time" class="form-label">Pickup Time</label>
                                                <select class="form-select mb-3" id="pickup_time" name="pickup_time" aria-label="Default select example">
                                                    <option selected disabled>Select Pickup Time</option>
                                                    <option value="7:00 AM">7:00 AM</option>
                                                    <option value="8:00 AM">8:00 AM</option>
                                                    <option value="9:00 AM">9:00 AM</option>
                                                    <option value="10:00 AM">10:00 AM</option>
                                                    <option value="11:00 AM">11:00 AM</option>
                                                    <option value="12:00 PM">12:00 PM</option>
                                                    <option value="1:00 PM">1:00 PM</option>
                                                    <option value="2:00 PM">2:00 PM</option>
                                                    <option value="3:00 PM">3:00 PM</option>
                                                    <option value="4:00 PM">4:00 PM</option>
                                                    <option value="5:00 PM">5:00 PM</option>
                                                    <option value="6:00 PM">6:00 PM</option>
                                                    <option value="7:00 PM">7:00 PM</option>
                                                    <option value="7:00 PM">8:00 PM</option>
                                                    <option value="9:00 PM">9:00 PM</option>
                                                    <option value="10:00 PM">10:00 PM</option>
                                                    <option value="11:00 PM">11:00 PM</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="return_date" class="form-label">Return Date:</label>
                                                <input type="date" id="return_date" name="return_date" class="form-control" min="{{ $minimumDateReturn }}">
                                            </div>

                                            <div class="col-12">
                                                <label for="return_time" class="form-label">Return Time</label>
                                                <select class="form-select mb-3" id="return_time" name="return_time" aria-label="Default select example">
                                                    <option selected disabled>Select Return Time</option>
                                                    <option value="7:00 AM">7:00 AM</option>
                                                    <option value="8:00 AM">8:00 AM</option>
                                                    <option value="9:00 AM">9:00 AM</option>
                                                    <option value="10:00 AM">10:00 AM</option>
                                                    <option value="11:00 AM">11:00 AM</option>
                                                    <option value="12:00 PM">12:00 PM</option>
                                                    <option value="1:00 PM">1:00 PM</option>
                                                    <option value="2:00 PM">2:00 PM</option>
                                                    <option value="3:00 PM">3:00 PM</option>
                                                    <option value="4:00 PM">4:00 PM</option>
                                                    <option value="5:00 PM">5:00 PM</option>
                                                    <option value="6:00 PM">6:00 PM</option>
                                                    <option value="7:00 PM">7:00 PM</option>
                                                    <option value="7:00 PM">8:00 PM</option>
                                                    <option value="9:00 PM">9:00 PM</option>
                                                    <option value="10:00 PM">10:00 PM</option>
                                                    <option value="11:00 PM">11:00 PM</option>
                                                </select>
                                            </div>

                                            <div class="login-separater text-center"> <span>IDENTITY CONFIRMATION</span>
                                                <hr/>
                                            </div>

                                            <h5 for="renter_ic mb-1" class="form-label">Identity Card Image</h5>
                                            <p class="mb-0">Front</p>
                                            <div class="input-group control-group mt-0">
                                                <input type="file" name="renter_ic" class="form-control">
                                            </div>
                                            <p class="mb-0">Back</p>
                                            <div class="input-group control-group mt-0 mb-4">
                                                <input type="file" name="renter_ic_back" class="form-control">
                                            </div>

                                            <h5 for="renter_license mb-1" class="form-label">License Image</h5>
                                            <p class="mb-0">Front</p>
                                            <div class="input-group mt-0 control-group">
                                                <input type="file" name="rental_license" class="form-control">
                                            </div>
                                            <p class="mb-0">Back</p>
                                            <div class="input-group mt-0 control-group mb-4">
                                                <input type="file" name="rental_license_back" class="form-control">
                                            </div>

                                            <h5 for="renter_selfie mb-1" class="form-label">Selfie with License Image</h5>
                                            <p class="mb-0"></p>
                                            <div class="input-group mt-0 control-group">
                                                <input type="file" name="renter_selfie" class="form-control">
                                            </div>

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
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
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
        //get total day
        var pickupDate = new Date($('date'))
        var carModel = '';
        var carPrice = 0;
        var deliveryCharge = 0;
        var totalCarPrice = 0;
        var totalDuration = 0;

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
            $('.set-duration').html(totalDuration + ' Day(s)');
            $('.set-duration-price').html('RM' + ((totalDuration * carPrice) + deliveryCharge + 100));
            $('#total_price').val((totalDuration * carPrice) + deliveryCharge);
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
            // showLoading();
            
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

            if ($('input[name="tnc-check"]').val() != '1') {
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
                        // closeLoading();
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