<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Al Car Rental provides car rentals all around West Malaysia, with over 50 cars in option. We wish to deliver comfortable and simple service to our customers, with hope to maintain great customer relationships...">
  <meta name="author" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
  <title>Al Car Rental | About Our Company</title>
</head>
<body>
    <style>
      /* nav bar css  */
      body{
        color: #000000;
      }
        .navbar {
        margin-bottom: -1px !important;
        border-radius: 0px !important;
      }

      nav .navbar-brand {
        color: white !important;
        font-family: 'Fugaz One', cursive;
        }


      nav .navbar-nav a{
        padding-right: 25px !important;
        color: white !important;
        }
      nav .navbar-nav:last-child{
        float: right !important;

      }
    </style>
    <!--START OF NAVIGATION BAR      START OF NAVIGATION BAR     START OF NAVIGATION BAR-->
    <nav class="navbar navbar-expand-md navbar-black bg-black">
      <a href="{{ route('website.index') }}" class="navbar-brand">
          <img src="assets/images/logo-icon.png" height="60">&nbsp;AL Car Rental
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon">
            <i class="fas fa-bars" style="color: white; font-size:20px;"></i>
          </span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav">
              <a href="{{ route('website.index') }}" class="nav-item nav-link active">  HOME  </a>
              <a href="{{ route('website.car') }}" class="nav-item nav-link">  OUR CAR  </a>
              <a href="{{ route('website.about') }}" class="nav-item nav-link">  ABOUT  </a>
              <a href="testimonial.php" class="nav-item nav-link">  TESTIMONIAL  </a>
              <a href="cardelivery.php" class="nav-item nav-link">  CAR DELIVERY  </a>
              <a href="contact.php" class="nav-item nav-link">  CONTACT  </a>
              <a href="https://www.facebook.com/alcarental" class="nav-item nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 20 20"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg></a>
          </div>
      </div>
  </nav>
      <!--END OF NAVIGATION BAR      END OF NAVIGATION BAR     END OF NAVIGATION BAR-->

      <!--START OF HEADER     START OF HEADER      START OF HEADER-->
      <style>
          .paddingTB60 {padding:60px 0px 60px 0px;}
        .gray-bg {background: #000000 !important;}
        .about-title h1 {color: #9c9c9c; font-size:45px;font-weight:600;}
        .about-title span {color: rgb(255, 255, 255); font-size:45px;font-weight:700;}
        .about-title h3 {color: #9c9c9c; font-size:23px;margin-bottom:24px;}
        .about-title p {color: #9c9c9c;line-height: 1.8;margin: 0 0 15px;}
        .about-paddingB {padding-bottom: 12px;}
        .about-img {padding-left: 57px;}
        .about-img img{width:450px; display: flex;}

        /* Social Icons */
        .about-icons {margin:48px 0px 48px 0px ;}
        .about-icons i{margin-right: 10px;padding: 0px; font-size:35px;color:#f8f8f8;box-shadow: 0 0 3px rgba(0, 0, 0, .2);}
        .about-icons li {margin:0px;padding:0;display:inline-block;}
        #social-fb:hover {color: #3b71e6;transition:all .001s;}

        @media (max-width: 990px){
          .about-img{
            flex-direction: column;
          }
          .about-img img{
            max-width: 250px;
          }
        }
      </style>
      <div class="about-section paddingTB60 gray-bg">
        <div class="container">
          <div class="row">
						<div class="col-md-8 col-sm-6">
							<div class="about-title clearfix">
								<h1>About <span>Al Car Rental</span></h1>
								<h3>Alhazril Gemilang Enterprise </h3>
								<p class="about-paddingB">ALCar Rental owned by alhazril Gemilang Enterprise( ) is based in Johor Bahru. We provide car rental from all sorts of selections such as small cars, Sedans, SUVs, MPVs and 4x4. You can rely on us to provide you self-drive cars with affordable prices. Book your car early with us to guarantee the best car.</p><br>
                <p class="about-paddingB">Al Car rental has been running the car rental business for 7 years. We provide car rentals for individuals and companies around West Malaysia. Our main corporate client includes Petronas Rapid Pengerang, Shell Malaysia and other oil and gas companies. We can also supply man power transfer from state to state by Hyundai Starex and buses.</p>
                <div class="about-icons"> 
                  <ul >
                    <li><a href="https://www.facebook.com/profile.php?id=100013350733686"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a> </li>
                  </ul>       
                </div>
						  </div>
					  </div>
						<div class="col-md-4 col-sm-6">
							<div class="about-img">
								<img src="assets/images/logo-icon.png" alt="">
							</div>
						</div>	
          </div>
        </div>
      </div>
        <!--END OF HEADER     END OF HEADER     END OF HEADER-->
        <!--START OF SERVICE    START OF SERVICE     START OF SERVICE-->
        <style>
            @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
            
        section{
            padding: 60px 0;
        }
        section .section-title{
            text-align:center;
            color:rgb(255, 255, 255);
            margin-bottom:50px;
            text-transform:uppercase;
        }
        #what-we-do{
            background:#000000;
        }
        #what-we-do .card{
            padding: 1rem!important;
            border: none;
            margin-bottom:1rem;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }
        #what-we-do .card:hover{
            -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        }
        #what-we-do .card .card-block{
            padding-left: 50px;
            position: relative;
        }
        #what-we-do .card .card-block a{
            color: rgb(107, 73, 0) !important;
            font-weight:700;
            text-decoration:none;
        }
        #what-we-do .card .card-block a i{
            display:none;
            
        }
        #what-we-do .card:hover .card-block a i{
            display:inline-block;
            font-weight:700;
            
        }
        #what-we-do .card .card-block:before{
            font-family: FontAwesome;
            position: absolute;
            font-size: 39px;
            color: rgb(107, 73, 0);
            left: 0;
            -webkit-transition: -webkit-transform .2s ease-in-out;
            transition:transform .2s ease-in-out;
        }
        #what-we-do .card .block-1:before{
            content: "\f0e7";
        }
        #what-we-do .card .block-2:before{
            content: "\f0eb";
        }
        #what-we-do .card .block-3:before{
            content: "\f00c";
        }
        #what-we-do .card .block-4:before{
            content: "\f209";
        }
        #what-we-do .card .block-5:before{
            content: "\f0a1";
        }
        #what-we-do .card .block-6:before{
            content: "\f218";
        }
        #what-we-do .card:hover .card-block:before{
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);	
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }
        </style>
        <section id="what-we-do">
            <div class="container-fluid">
                <h2 class="section-title mb-2 h1">What we do</h2>
                <p class="text-center text-muted h5">The best car rental that is affordable and reliable.</p>
                <div class="row mt-5">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="card">
                          <div class="card-block block-1">
                            <h3 class="card-title">Safety Ensured</h3>
                            <p class="card-text">Our cars’ road tax and insurance are always renewed and updated before handing them to our customers<br><br></p>
                        </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="card">
                          <div class="card-block block-2">
                            <h3 class="card-title">Easy Deal and Fast Service</h3>
                            <p class="card-text">Customer can easily deal with us via Whatsapp or our facebook page.<br><br><br></p>
                        </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="card">
                          <div class="card-block block-3">
                            <h3 class="card-title">Ready-to-Rent Car</h3>
                            <p class="card-text">We have over 50 rental cars ready for our customer.<br><br><br></p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="card">
                          <div class="card-block block-4">
                            <h3 class="card-title">Guaranted comfortable car</h3>
                            <p class="card-text">We always prepare the most comfortable car to our customer.<br><br><br></p>
                        </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="card">
                          <div class="card-block block-5">
                            <h3 class="card-title">All over West Malaysia</h3>
                            <p class="card-text">Our company has always been trying our best to reach our customer from anywhere.<br><br><br></p>
                        </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="card">
                          <div class="card-block block-6">
                            <h3 class="card-title">Cheapest price</h3>
                            <p class="card-text">Our company provide the cheapest price on any booking for our customer.<br><br><br></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>	
        </section>
        <!--END OF SERVICE     END OF SERVICE     END OF SERVICE-->

        <!--START OF MAP     START OF MAP     START OF MAP-->
        <style>
         
          @media (max-width: 990px){
            .container .row .col-md-8 iframe{
              max-width: 450px;
            }
          }
        </style>
        <div class="container">
  
            <div class="row">
              <div class="col-md-8">
                <h2></h2>
                <div class="googlemp">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1410.1267942707486!2d103.91512931156257!3d1.5056043883239507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da4103972f19af%3A0x3b75665d01de7af6!2saL%20Car%20Rental!5e0!3m2!1sen!2smy!4v1630560508629!5m2!1sen!2smy" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
              </div>
              <div class="col-md-4">
                <h2>Pasir Gudang, Johor</h2>
                <h5>
                 Our company was established in 2015, based in Pasir Gudang starting with only 1 car. Now, we have over 50 cars from all types for you to choose. We provide car rental for our customers all around West Malaysia, generally in Johor.
                </h5>
              </div>
            </div>
        </div>
        <br><br>
        <!--END OF MAP     END OF MAP     END OF MAP-->


      <!-- START OF FOOTER    START OF FOOTER    START OF FOOTER -->
      <footer class="text-center text-lg-start bg-dark text-muted">
        <!-- Section: Social media -->
      
        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3"></i>AL Car Rental
                </h6>
                <p>
                  Al Car Rental provides car rentals all around West Malaysia, with over 50 cars in option. We wish to deliver comfortable and simple service to our customers, with hope to maintain great customer relationships.
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Car
                </h6>
                <p>
                  <a href="{{ route('website.car') }}" class="text-reset">Regular</a>
                </p>
                <p>
                  <a href="{{ route('website.car') }}" class="text-reset">Sedan</a>
                </p>
                <p>
                  <a href="{{ route('website.car') }}" class="text-reset">MPV</a>
                </p>
                <p>
                  <a href="{{ route('website.car') }}" class="text-reset">SUV</a>
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Useful link
                </h6>
                <p>
                  <a href="{{ route('website.index') }}" class="text-reset">Home</a>
                </p>
                <p>
                  <a href="{{ route('website.car') }}" class="text-reset">Car Selection</a>
                </p>
                <p>
                  <a href="{{ route('website.about') }}" class="text-reset">About</a>
                </p>
                <p>
                  <a href="contact.php" class="text-reset">Contact</a>
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Contact
                </h6>
                <p><i class="fas fa-home me-3"></i>No.4 Lot Inkubator PIJ, Taman Bukit Dahlia, 81700 Pasir Gudang, Johor</p>
                <p>
                  <i class="fas fa-envelope me-3"></i>
                  alcarrentalpasirgudang@gmail.com
                </p>
                <p><i class="fas fa-phone me-3"></i>014-515 6050</p>
                <p><i class="fab fa-whatsapp me-3"></i>014-515 6050</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->
      
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2021 Copyright:
          <a class="text-reset fw-bold" href="https://mdbootstrap.com/">alrentalauto.com</a>
        </div>
        <!-- Copyright -->
      </footer>
  <!-- END OF FOOTER      END OF FOOTER    END OF FOOTER -->
  </body>
  </html>
