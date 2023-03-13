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
        html {
            background-color: black !important;
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
                                    <div class="text-center" style="padding-top: 20px; ">
                                        <h3 class="">Booking Payment</h3>
                                        <p>Please complete your payment for us to confirm your booking.</p>
                                    </div>

                                    <div class="col-12 text-center">
                                        <span style="font-weight:600;">Please make sure any information and the payment made are TRUE, any faulty and misinformation will not be consider and might be blacklist and report.</span>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <table class="w-100" style="border: 1px solid">
                                            <tr style="border: 1px solid">
                                                <th class="col-mb-3"></th>
                                                <th class="col-3">Info</th>
                                                <th class="col-3">Price</th>
                                            </tr>
                                            <tr>
                                                <td class="col-4">Deposit</td>
                                                <td class="col-4"></td>
                                                <td class="col-4">RM100</td>
                                            </tr>
                                            <tr>
                                                <td class="col-4">Car</td>
                                                <td class="col-4">{{ $carModel }} | RM{{ $carPrice }}</td>
                                                <td class="col-4">RM{{ $totalRent }}</td>
                                            </tr>
                                            <tr class="col-4">
                                                <td class="col-4">Duration</td>
                                                <td class="col-4">{{ $bookingDuration }} Days</td>
                                                <td class="col-4"></td>
                                            </tr>
                                            @if ($bookingData->pickup_method != 0)
                                            <tr class="col-4">
                                                <td class="col-4">Delivery Charge</td>
                                                <td class="col-4">{{ $pickupPlace }}</td>
                                                <td class="col-4">RM{{ $deliveryCharge }}</td>
                                            </tr>
                                            @endif
                                            <tr class="col-4">
                                                <td class="col-4">&nbsp;</td>
                                                <th class="col-4">&nbsp;</th>
                                                <td class="col-4">&nbsp;</td>
                                            </tr>
                                            <tr class="col-4">
                                                <td class="col-4"></td>
                                                <th class="col-4">Total</th>
                                                <td class="col-4" style="font-weight:600;font-size:20px;">RM{{ $overallTotal }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                        
									<div class="login-separater text-center mb-4"> <span>SELECT PAYMENT METHOD</span>
										<hr/>
									</div>
									<div class="form-body">
										<form class="row g-3" id="receipt-form" enctype="multipart/form-data">
                                            
                                            <div class="col-12">
                                                <label for="payment_method" class="form-label">Payment Method</label>
                                                <select class="form-select mb-3" id="payment_method" name="payment_method" aria-label="Default select example">
                                                    <option selected disabled>Select Payment Method</option>
                                                    <option value="1" disabled>Online Banking/FPX (Coming soon)</option>
                                                    <option value="2">Manual Transfer</option>
                                                    <option value="3">Cash On Pickup</option>
                                                </select>
                                            </div>
                                            
                                            <div class="col-12 d-none" id="receipt_div">
                                                <div class="login-separater text-center mb-4"> <span>Manual Transfer</span>
                                                    <hr/>
                                                </div>
                                                <p class="text-center mb-0"> Please Transfer the amount needed on </p>
                                                <h5 class="text-center mb-0" style="font-weight:600;">551146531049</h5>
                                                <h5 class="text-center mb-0" style="font-weight:600;">Maybank</h5>
                                                <br>
                                                <p class="text-center mb-0"> and upload the <span style="font-weight:600;">receipt</span></p>
										        
                                                <form class="row g-3" id="receipt-form" enctype="multipart/form-data">
                                                    <p class="mb-0">Upload Receipt</p>
                                                    <input type="hidden" name="booking_id" value="{{ $bookingData->id }}">
                                                    <div class="input-group control-group mt-0">
                                                        <input type="file" accept="image/*" name="payment_receipt" class="form-control">
                                                    </div>
                                                    <p class="mt-4 text-center mb-0">click <span style="font-weight:600;">Submit Receipt</span> before clicking on <span style="font-weight:600;">Complete Booking</span></p>
                                                    <div class=" col-12">
                                                        <div class="d-grid">
                                                            <button type="submit" class="btn btn-primary">Submit Receipt</button>
                                                        </div>
                                                    </div>
                                                </form>

                                                <h6 class="text-center mb-4 mt-4">OR</h6>
                                                <p>Please send the <span style="font-weight:600;">Transfer Receipt</span> to one of our admin on Whatsapp and wait for the confirmation from them before click on <span style="font-weight:600;">Complete Booking</span>.</p>
                                                <a href="https://wa.link/wjmk2a" target="_blank" style="font-weight:600;">Al Hazril&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+60 14-515 6050</a>
                                                <br>
                                                <a href="https://wa.link/3kjbg8" target="_blank" style="font-weight:600;">Syafiq&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+60 11-6937 0388</a>
                                                <br><br>
                                            </div>

                                            <div class="col-12 d-none text-center" id="cash_div">
                                                <p>Please standby cash upon pickup.</p>
                                                <br>
                                            </div>

                                            
                                            
                                            <br/>
											<div class="col-12">
												<div class="d-grid">
													<button type="button" class="btn btn-primary" onclick="window.location='{{ route("booking.completed") }}'">Complete Booking</button>
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
        $(document).on('change', '#payment_method', function () {
            if($('#payment_method').val() == 2){
                $('#receipt_div').removeClass('d-none');
            } else {
                $('#receipt_div').addClass('d-none');
            }
        });

        $(document).on('change', '#payment_method', function () {
            if($('#payment_method').val() == 3){
                $('#cash_div').removeClass('d-none');
            } else {
                $('#cash_div').addClass('d-none');
            }
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('submit', '#receipt-form', function (e) {
            e.preventDefault();
            // showLoading();
            
            var formData = new FormData();
            formData.append('id', $('input[name="booking_id"]').val());
            formData.append('payment_receipt', $('input[name="payment_receipt"]')[0].files[0]);

            $.ajax({
                type: 'POST',
                url: '{{ route("booking.receipt") }}',
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
                            }
                            focusFirst = true;

                            // -- Hold the error message HTML.
                            var inputError = `<div class="cbwus-error-after-input text-danger">replaceErrorHere</div>`

                            // -- Append error message in the parent element and style the input.
                            $('input[name="' + errorInput + '"]').addClass('cbwus-error-input');
                            $('input[name="' + errorInput + '"]').parent().append(inputError.replace('replaceErrorHere', data.error[errorInput]));

                            $('select[name="' + errorInput + '"]').addClass('cbwus-error-input');
                            $('select[name="' + errorInput + '"]').parent().append(inputError.replace('replaceErrorHere', data.error[errorInput]));
                        }
                    } else {
                        Swal.fire({
                            icon: 'success', 
                            title: 'Thank you!', 
                            text: 'Your receipt will be view by the admin, please click on Complete Booking.',
                        })
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
        });
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>