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
                                        <h3 class="">Tempahan Selesai</h3>
                                        <p>Terima kasih membuat tempahan bersama kami,<br>sebarang maklumat lanjut akan dimaklumkan oleh pihak kami.</p>
                                        <br><br>
                                        <p>Sebarang pertanyaan terus rujuk kami melalui Whatsapp</p>
                                        <a href="https://wa.link/wjmk2a" style="font-weight:600;">Al Hazril&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+60 14-515 6050</a><br><br>
                                        <a href="https://wa.link/3kjbg8" style="font-weight:600;">Syafiq&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+60 11-6937 0388</a><br><br>
                                        <a href="https://wa.link/9pnwal" style="font-weight:600;">Farris&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+60 11-2861 1680</a>
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
</body>

</html>