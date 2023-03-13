<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Al Car Rental | Car Rental In West Malaysia</title>
    <meta name="description" content="Al Car Rental provides car rentals all around West Malaysia, with over 50 cars in option. We wish to deliver comfortable and simple service to our customers, with hope to maintain great customer relationships...">

    <style>
        body{
  background-image: linear-gradient(black 55%,grey)
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

.carousel-caption {
  padding-bottom: 160px !important;
  font-size: 60px;
}
.carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
@media (max-width:991px){
.carousel-item{
  height: auto;
  width: 110%;
}
}

.ytvid {
  display: flex;
  align-items: center;
  justify-content: center;
}

.hpabout h1{
  color: #fff;
  font-size: 45px;
  text-align: center;
  font-family: 'Audiowide', cursive;
}
.hpabout p{
  color: white;
  font-size: 15px;
  padding: 20px 200px 0px 200px;
  text-align: center;
}
@media (max-width:991px){
  .hpabout p{
    padding: 20px 15px 0px 15px;
  }
}
.hcontent{
  position: relative;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.hcontent .htext{
  width: 100%;
  max-width: 600px;
}

.hcontent .htext h2{
  color: #fff;
  font-size: 5em;
  font-weight: 300;
}

.hcontent .htext h2 span{
  font-weight: 700;
}

.hcontent .htext p{
  color: #fff;
  font-weight: 400;
  font-size: 1.1em;
  line-height: 1.5em;
  margin: 20px 0;
}

.hbtn{
  position: relative;
  display: inline-block;
  padding: 20px 50px;
  background: rgb(0, 0, 0);
  color: #333;
  font-size: 1.1em;
  font-weight: 500;
  border-radius: 40px;
  text-decoration: none;
  transition: 0.25s;
}



.hfooter{
  position: absolute;
  bottom: 0;
  width: 100%;
  display: flex;
  padding: 20px 100px;
  justify-content: space-between;
  align-items: flex-end;
}



.hprevnext{
  position: relative;
  user-select: none;
}

.hprevnext span{
  position: relative;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  width: 25px;
  height: 25px;
  border: 1px solid #fff;
  cursor: pointer;
  font-size: 1em;
  color: #fff;
}
.hprevnext span:nth-child(2){
  margin-right: 20px;
}

/*FOR SEARCH BOX*/
.booksearchbox{
  margin-top: 45px;
  display: flex;
  justify-content: center;
  align-items: center;
  bottom: 0;
  position: relative;
  flex-wrap: wrap;
  background: rgb(0, 0, 0);
  padding: 30px 50px;
  transform: translateY(-50%);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 1);
}
.booksearchbox .bookinputbox{
  margin: 0 20px;
}
.booksearchbox .bookinputbox p{
  color: rgb(255, 255, 255);
  margin-bottom: 10px;
}
.booksearchbox .bookinputbox p.nonesense{
  color: rgb(0, 0, 0);
}
.booksearchbox .bookinputbox input{
  border: 1px solid rgb(255, 255, 255);
  outline: none;
  padding: 10px;
  width: 100%;
  min-width: 150px;
  font-size: 1.1em;
}
.booksearchbox .bookinputbox input[type="submit"]{
  outline: none;
  border: none;
  background: #707070;
  color: rgb(0, 0, 0);
  cursor: pointer;
  letter-spacing: 8px;
  padding: 13px;
}

/*FOR STEPPER*/
.dstepper{
  margin: 10px auto;
  font-family: sans-serif;
  color: #f8f8f8;
}

.dstepper img{
  width: 80px;
  margin-bottom: 20px;
}
.dstepper ul{
  text-align: center;
}
.dstepper ul li{
  display: inline-block;
  width: 200px;
  position: relative;
}
.dstepper ul li .fa{
  background-color: #ffffff;
  width: 30px;
  height: 30px;
  color: rgb(0, 0, 0);
  border-radius: 50%;
  padding: 8px;
}

.dstepper ul li .fa::after{
  content: '';
  background: #ffffff;
  height: 5px;
  width: 205px;
  display: block;
  position: absolute;
  left: 0;
  top: 112px;
  z-index: -1;
}
.dstepper ul li:first-child .fa::after{
  width: 105px;
  left: 100px;
}
.dstepper ul li:last-child .fa::after{
  width: 105px;
  right: 100px;
}

.wrapper .items span:first-child{
  background-color: black;
  border: 0px;
  color: black;
}
.text-muted {
  color: #b7b7b7 !important;
}


@media (max-width:991px){
  .hmain{
    padding: 5px;
  }
  .hcontent{
    flex-direction: column;
    margin-top: 120px 0 40px;
  }
  .hcontent .htext{
    max-width: 100%;
  }
  .hcontent .htext h2{
    font-size: 4em;
  }
  .hslider{
    margin-top: 40px;
  }
  .hslider .hslides img{
    width: 100%;
    max-width: 420px;
  }
  .hfooter{
    position: relative;
    padding: 0;
  }
  .hfooter .hsci{
    position: relative;
    padding: 0;
  }
  .booksearchbox{
    flex-direction: column;
    margin-top: 150px;
    margin-bottom: -200px;
  }
  .booksearchbox .bookinputbox p{
    margin-top: 10px;
  }
  .dstepper{
    margin-top: -180px;
    max-width: 990px;
  }
  .dstepper ul li{
    max-width: 150px;
  }
  .dstepper ul li .fa::after{
    max-width: 154px;
  }
  .dstepper ul li:first-child .fa::after{
    width: 84.5px;
    left: 70px;
  }
  .dstepper ul li:last-child .fa::after{
    width: 84.5px;
    right: 70px;
  }
  .googlemp{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
}

.googlemp iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
}
@media (max-width:1400px){
  .dstepper{
    margin-top: -10px;
    max-width: 990px;
  }
  .dstepper ul li{
    max-width: 150px;
  }
  .dstepper ul li .fa::after{
    max-width: 154px;
  }
  .dstepper ul li:first-child .fa::after{
    width: 84.5px;
    left: 70px;
  }
  .dstepper ul li:last-child .fa::after{
    width: 84.5px;
    right: 70px;
  }
}
@media (max-width:1200px){
  .dstepper{
    margin-top: -10px;
    max-width: 990px;
  }
  .dstepper ul li{
    max-width: 150px;
  }
  .dstepper ul li .fa::after{
    max-width: 154px;
  }
  .dstepper ul li:first-child .fa::after{
    width: 84.5px;
    left: 70px;
  }
  .dstepper ul li:last-child .fa::after{
    width: 84.5px;
    right: 70px;
  }
}
@media (max-width:426px){
  .dstepper{
    margin-top: -10px;
    max-width: 550px;
    display: block;
  }
  .dstepper img{
    width: 40px;
    margin-bottom: 20px;
  }
  .dstepper ul li{
    max-width: 70px;
  }
  .dstepper ul li .fa::after{
    max-width: 75px;
    top: 73px;
  }
  .dstepper ul li:first-child .fa::after{
    width: 44.5px;
    left: 37px;
  }
  .dstepper ul li:last-child .fa::after{
    width: 44.5px;
    right: 37px;
  }
}

@media (max-width:767px){
  .lightbox-gallery .photos {
    padding-bottom: 20px
  }

  .lightbox-gallery .item {
    padding-bottom: 30px
  }
}
    </style>

</head>
<body>
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
              <a href="{{ route('login-page') }}" class="nav-item nav-link">  LOGIN  </a>
              <a href="https://www.facebook.com/alcarental" class="nav-item nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 20 20"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg></a>
          </div>
      </div>
  </nav>
    <!--END OF NAVIGATION BAR      END OF NAVIGATION BAR     END OF NAVIGATION BAR-->
     
    <!-- START OF HEADER     START OF HEADER     START OF HEADER-->
    <section class="hmain">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('assets/images/booking-form-cover.png') ;background-size:contain;background-position:center;">
        <div class="carousel-caption">
          <p></p>
        </div>
      </div>
    </div>
  </div>
</header>

    </section>
    <br>
    <!-- END OF HEADER     END OF HEADER     END OF HEADER-->
    <!--START OF SEARCH BAR     START OF SEARCH BAR     START OF SEARCH BOX-->
    <div class="booksearchbox">
      <div class="bookinputbox">
        <p>Enter Car</p>
        <input type="text" placeholder="Ex: Perodua Axia">
      </div>
      <div class="bookinputbox">
        <p>Pick Up Date</p>
        <input type="date">
      </div>
      <div class="bookinputbox">
        <p>Return Date</p>
        <input type="date">
      </div>
      <div class="bookinputbox">
        <p class="nonesense">_</p>
        <a href="booking.php"><input type="submit" value="Book"></a>
      </div>
    </div>
    <!--END OF SEARCH BAR     END OF SEARCH BAR     END OF SEARCH BAR-->
    <br> <br>
    <div style="display: flex; align-items: center; justify-content: center;"> 
    <iframe width="560" height="315" src="https://www.youtube.com/embed/PzkbseXcQ80?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
      <br><br>
    <div class="hpabout">
      <h1>ABOUT</h1>
      <p>ALCar Rental owned by alhazril Gemilang Enterprise( ) is based in Johor Bahru. We provide car rental from all sorts of selections such as small cars, Sedans, SUVs, MPVs and 4x4. You can rely on us to provide you self-drive cars with affordable prices. Book your car early with us to guarantee the best car.</p>
      
      <p>Al Car rental has been running the car rental business for 7 years. We provide car rentals for individuals and companies around West Malaysia. Our main corporate client includes Petronas Rapid Pengerang, Shell Malaysia and other oil and gas companies. We can also supply man power transfer from state to state by Hyundai Starex and buses.</p>
      <br><br>
    </div>
      <!--START OF STEPPER     START OF STEPPER     START OF STEPPER-->
    <div class="dstepper">
      <ul>
        <li>
          <img src="assets/images/website-images/bookingicon.webp"><br>
          <i class="fa fa-check"></i>
          <p>Book Any Car</p>
        </li>
        <li>
          <img src="assets/images/website-images/dealingicon.webp"><br>
          <i class="fa fa-check"></i>
          <p>Deal Confirmation</p>
        </li>
        <li>
          <img src="assets/images/website-images/payingicon.webp"><br>
          <i class="fa fa-check"></i>
          <p>Pay The Rent</p>
        </li>
        <li>
          <img src="assets/images/website-images/carrenticon.webp"><br>
          <i class="fa fa-check"></i>
          <p>Deliver The Car</p>
        </li>
      </ul>
    </div>
    <br><br>
    <!--END OF STEPPER     END OF STEPPER     END OF STEPPER-->
    <style>
            @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        section{
            padding: 40px 0;
        }
        section .section-title{
            text-align:center;
            color: white;
            margin-bottom:50px;
            text-transform:uppercase;
            font-family: 'Audiowide', cursive;
        }
        #what-we-do .card{
            padding: 1rem!important;
            border-radius: 15px;
            margin-bottom:3rem;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
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
        .card {
          background-color: whitesmoke !important;
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
        </style>
        <section id="what-we-do">
            <div class="container-fluid">
                <h2 class="section-title mb-2 h1">Why Al Car Rental</h2>
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

    <!--START OF PRODUCT DISPLAY     START OF PRODUCT DISPLAY     START OF PRODUCT DISPLAY-->
  

      <!--END OF FEEDBACK     END OF FEEDBACK     END OF FEEDBACK-->   
    <!-- START OF FOOTER    START OF FOOTER    START OF FOOTER -->,,
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
          AL Car Rental
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
            <a href="car.html" class="text-reset">Regular</a>
          </p>
          <p>
            <a href="car.html" class="text-reset">Sedan</a>
          </p>
          <p>
            <a href="car.html" class="text-reset">MPV</a>
          </p>
          <p>
            <a href="car.html" class="text-reset">SUV</a>
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
            <a href="index.php" class="text-reset">Home</a>
          </p>
          <p>
            <a href="car.html" class="text-reset">Car Selection</a>
          </p>
          <p>
            <a href="about.html" class="text-reset">About</a>
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
          <p>No.4 Lot Inkubator PIJ, Taman Bukit Dahlia, 81700 Pasir Gudang, Johor</p>
          <p>
            alcarrentalpasirgudang@gmail.com
          </p>
          <p>014-515 6050</p>
          <p>014-515 6050</p>
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

<script src="script.js"></script>
</body>
</html>