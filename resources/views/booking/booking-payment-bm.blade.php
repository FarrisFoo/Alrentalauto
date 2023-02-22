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
                                    <div class="text-center" style="padding-top: 20px; padding-bottom: 20px;">
                                        <h3 class="">Bayaran Tempahan</h3>
                                        <p>Sila sahkan bayaran anda untuk kami tetapkan tempahan</p>
                                    </div>

                                    <div class="col-12 text-center">
                                        <span style="font-weight:600;">Sila pastikan informasi dimasukkan dan bayaran adalah TEPAT, sebarang kesilapan dan informasi yang tidak tepat akan ditolak dan disenari hitam.</span>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <table class="w-100" style="border: 1px solid">
                                            <tr style="border: 1px solid">
                                                <th class="col-mb-3"></th>
                                                <th class="col-3">Maklumat</th>
                                                <th class="col-3">Harga</th>
                                            </tr>
                                            <tr>
                                                <td class="col-4">Deposit</td>
                                                <td class="col-4"></td>
                                                <td class="col-4">RM100</td>
                                            </tr>
                                            <tr>
                                                <td class="col-4">Kereta</td>
                                                <td class="col-4">{{ $carModel }} | RM{{ $carPrice }}</td>
                                                <td class="col-4">RM{{ $totalRent }}</td>
                                            </tr>
                                            <tr class="col-4">
                                                <td class="col-4">Tempoh Sewa</td>
                                                <td class="col-4">{{ $bookingDuration }} Hari</td>
                                                <td class="col-4"></td>
                                            </tr>
                                            @if ($bookingData->pickup_method != 0)
                                            <tr class="col-4">
                                                <td class="col-4">Penghantaran</td>
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
                                                <th class="col-4">Jumlah</th>
                                                <td class="col-4" style="font-weight:600;font-size:20px;">RM{{ $overallTotal }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                        
									<div class="login-separater text-center mb-4"> <span>PILIH CARA BAYARAN</span>
										<hr/>
									</div>
                                        <div class="col-12">
                                            <label for="payment_method" class="form-label">Cara Bayaran</label>
                                            <select class="form-select mb-3" id="payment_method" name="payment_method" aria-label="Default select example">
                                                <option selected disabled>Pilih Cara Bayaran</option>
                                                <option value="1" disabled>Bayaran Atas Talian/FPX (Akan datang)</option>
                                                <option value="2">Pembayaran Manual</option>
                                                <option value="3">Bayaran Semasa Ambil Kenderaan</option>
                                            </select>
                                        </div>
                                            
                                            <div class="col-12 d-none" id="receipt_div">
                                                <div class="login-separater text-center mb-4"> <span>Pembayaran Manual</span>
                                                    <hr/>
                                                </div>
                                                <p class="text-center mb-0"> Sila buat bayaran seperti ditetapkan ke </p>
                                                <h5 class="text-center mb-0" style="font-weight:600;">551146531049</h5>
                                                <h5 class="text-center mb-0" style="font-weight:600;">Maybank</h5>
                                                <br>
                                                <p class="text-center mb-0"> dan muat naik <span style="font-weight:600;">resit bayaran</span></p>
										        
                                                <form class="row g-3" id="receipt-form" enctype="multipart/form-data">
                                                    <p class="mb-0">Muat Naik Resit</p>
                                                    <input type="hidden" name="booking_id" value="{{ $bookingData->id }}">
                                                    <div class="input-group control-group mt-0">
                                                        <input type="file" name="payment_receipt" class="form-control">
                                                    </div>
                                                    <p class="mt-4 text-center mb-0">Tekan <span style="font-weight:600;">Hantar Resit</span> sebelum menekan<span style="font-weight:600;"> Pengesahan Tempahan</span></p>
                                                    <div class=" col-12">
                                                        <div class="d-grid">
                                                            <button type="submit" class="btn btn-primary">Hantar Resit</button>
                                                        </div>
                                                    </div>
                                                </form>

                                                <h6 class="text-center mb-4 mt-4">ATAU</h6>
                                                <p>Sila hantar <span style="font-weight:600;">Resit Bayaran</span> kepada salah seorang wakil kami melalui Whatsapp dan tunggu pengesahan bayaran sebelum menekan <span style="font-weight:600;">Pengesahan Tempahan</span>.</p>
                                                <a href="https://wa.link/wjmk2a" target="_blank" style="font-weight:600;">Al Hazril&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+60 14-515 6050</a>
                                                <br>
                                                <a href="https://wa.link/3kjbg8" target="_blank" style="font-weight:600;">Syafiq&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+60 11-6937 0388</a>
                                                <br><br>
                                            </div>

                                            <div class="col-12 d-none text-center" id="cash_div">
                                                <p>Pastikan jumlah duit tepat semasa mengambil kenderaan.</p>
                                                <br>
                                            </div>

                                            <br/>
											<div class="col-12">
												<div class="d-grid">
													<button type="button" class="btn btn-primary" onclick="window.location='{{ route("booking.completed-bm") }}'">Pengesahan Tempahan</button>
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
			<p class="mb-0">Hak Cipta © 2023. Hak Cipta Terpelihara.</p>
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
                            title: 'Terima Kasih!', 
                            text: 'Resit akan dihantarkan kepada admin, sila tekan butang pengesahan tempahan.',
                        })
                    }
                }, 
                error: function () {
                    Swal.fire({
                        icon: 'warning', 
                        title: 'Ada Masalah!', 
                        text: 'Sila cuba lagi ataupun hubungi admin kami.',
                    });
                }
            });
        });
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>