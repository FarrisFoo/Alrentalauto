<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Al Car Rental provides car rentals all around West Malaysia, with over 50 cars in option. We wish to deliver comfortable and simple service to our customers, with hope to maintain great customer relationships...">
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
    <title>Al Car Rental | Our Car List</title>
</head>
<body>
    <!--START OF NAVIGATION BAR      START OF NAVIGATION BAR     START OF NAVIGATION BAR-->
    <nav class="navbar navbar-expand-md navbar-black bg-black">
      <a href="{{ route('website.index') }}" class="navbar-brand">
          <img src="assets/images/logo-icon.png" height="60">AL Car Rental
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

      <!--START OF PRODUCT LIST      START OF PRODUCT LIST     START OF PRODUCT LIST-->
      <style>
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

      .card-product:after {
        content: "";
        display: table;
        clear: both;
        visibility: hidden; }
      .card-product .price-new, .card-product .price {
        margin-right: 5px; }
      .card-product .price-old {
        color: #999; }
      .card-product .img-wrap {
        border-radius: 3px 3px 0 0;
        overflow: hidden;
        position: relative;
        height: 220px;
        text-align: center; }
        .card-product .img-wrap img {
          max-height: 100%;
          max-width: 100%;
          object-fit: cover; }
          
          .card-product .info-wrap {
        overflow: hidden;
        padding: 15px;
        border-top: 1px solid #eee; }
      .card-product .action-wrap {
        padding-top: 4px;
        margin-top: 4px; }
      .card-product .bottom-wrap {
        padding: 15px;
        border-top: 1px solid #eee; }
      .card-product .title {
        margin-top: 0; }
      </style>

      <div class="container">
        <!--ROW 1-->
        <br>
        <div class="row">
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"> 
              <br><br>
              <img src="assets/images/website-images/myvi biru baru.png">
            </div>
            <figcaption class="info-wrap">
              <h6 class="title text-dots"><a href="#">Perodua Myvi 2021</a></h6>
              <div class="action-wrap">
                <a href="booking.php" class="btn btn-warning btn-sm float-right"> Book </a>
                <div class="price-wrap h5">
                  <span class="price-new">RM140</span>
                  <!--<del class="price-old">$1980</del>-->
                </div> <!-- price-wrap.// -->
              </div> <!-- action-wrap -->
            </figcaption>
          </figure> <!-- card // -->
        </div> <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"><br><img src="assets/images/website-images/myvie hitam.jpg">
            </div>
            <figcaption class="info-wrap">
              <h6 class="title text-dots"><a href="#">Perodua Myvi 2010</a></h6>
              <div class="action-wrap">
                <a href="booking.php" class="btn btn-warning btn-sm float-right"> Book </a>
                <div class="price-wrap h5">
                  <span class="price-new">RM110</span>
                </div> <!-- price-wrap.// -->
              </div> <!-- action-wrap -->
            </figcaption>
          </figure> <!-- card // -->
        </div> <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"><br><br><img src="assets/images/website-images/axia hitam.jpg"> 
            </div>
            <figcaption class="info-wrap">
              <h6 class="title text-dots"><a href="#">Perodua Axia</a></h6>
              <div class="action-wrap">
                <a href="booking.php" class="btn btn-warning btn-sm float-right"> Book </a>
                <div class="price-wrap h5">
                  <span class="price-new">RM120</span>
                </div> <!-- price-wrap.// -->
              </div> <!-- action-wrap -->
            </figcaption>
          </figure> <!-- card // -->
        </div> <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"> <img src="assets/images/website-images/viva putih.jfif.png">
            </div>
            <figcaption class="info-wrap">
              <h6 class="title text-dots"><a href="#">Perodua Viva</a></h6>
              <div class="action-wrap">
                <a href="booking.php" class="btn btn-warning btn-sm float-right"> Book </a>
                <div class="price-wrap h5">
                  <span class="price-new">RM110</span>
                </div> <!-- price-wrap.// -->
              </div> <!-- action-wrap -->
            </figcaption>
          </figure> <!-- card // -->
        </div> <!-- col // -->
        </div> <!-- row.// -->
        <br>
        <!--ROW 2-->
        <div class="row">
          <div class="col-md-3">
            <figure class="card card-product">
              <div class="img-wrap"> 
                <img src="assets/images/website-images/bezza.jpg">
              </div>
              <figcaption class="info-wrap">
                <h6 class="title text-dots"><a href="#">Perodua Bezza</a></h6>
                <div class="action-wrap">
                  <a href="booking.php" class="btn btn-warning btn-sm float-right"> Book </a>
                  <div class="price-wrap h5">
                    <span class="price-new">RM130</span>
                  </div> <!-- price-wrap.// -->
                </div> <!-- action-wrap -->
              </figcaption>
            </figure> <!-- card // -->
          </div> <!-- col // -->
          <div class="col-md-3">
            <figure class="card card-product">
              <div class="img-wrap">
                <img src="assets/images/website-images/saga hitam.jpg.png">
              </div>
              <figcaption class="info-wrap">
                <h6 class="title text-dots"><a href="#">Proton Saga</a></h6>
                <div class="action-wrap">
                  <a href="booking.php" class="btn btn-warning btn-sm float-right"> Book </a>
                  <div class="price-wrap h5">
                    <span class="price-new">RM120</span>
                  </div> <!-- price-wrap.// -->
                </div> <!-- action-wrap -->
              </figcaption>
            </figure> <!-- card // -->
          </div> <!-- col // -->
          <div class="col-md-3">
            <figure class="card card-product">
              <div class="img-wrap">
                <br><br><img src="assets/images/website-images/perodua-alza-advanced-1.jpg"> 
              </div>
              <figcaption class="info-wrap">
                <h6 class="title text-dots"><a href="#">Perodua Alza</a></h6>
                <div class="action-wrap">
                  <a href="booking.php" class="btn btn-warning btn-sm float-right"> Book </a>
                  <div class="price-wrap h5">
                    <span class="price-new">RM180</span>
                  </div> <!-- price-wrap.// -->
                </div> <!-- action-wrap -->
              </figcaption>
            </figure> <!-- card // -->
          </div> <!-- col // -->
          <div class="col-md-3">
            <figure class="card card-product">
              <div class="img-wrap"><br><img src="assets/images/website-images/starrex putih.jfif.png">
              </div>
              <figcaption class="info-wrap">
                <h6 class="title text-dots"><a href="#">Hyundai Starex</a></h6>
                <div class="action-wrap">
                  <a href="booking.php" class="btn btn-warning btn-sm float-right"> Book </a>
                  <div class="price-wrap h5">
                    <span class="price-new">RM450</span>
                  </div> <!-- price-wrap.// -->
                </div> <!-- action-wrap -->
              </figcaption>
            </figure> <!-- card // -->
          </div> <!-- col // -->
        </div> <!-- row.// -->
          <BR>
          <!--ROW 3-->
          <div class="row">
            <div class="col-md-3">
              <figure class="card card-product">
                <div class="img-wrap"> <br><br>
                  <img src="assets/images/website-images/vellfirehitam.png">
                </div>
                <figcaption class="info-wrap">
                  <h6 class="title text-dots"><a href="#">Toyota Vellfire</a></h6>
                  <div class="action-wrap">
                    <a href="booking.php" class="btn btn-warning btn-sm float-right"> Book </a>
                    <div class="price-wrap h5">
                      <span class="price-new">RM600</span>
                    </div> <!-- price-wrap.// -->
                  </div> <!-- action-wrap -->
                </figcaption>
              </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-3">
              <figure class="card card-product">
                <div class="img-wrap"><br><img src="assets/images/website-images/navara silver.webp">
                </div>
                <figcaption class="info-wrap">
                  <h6 class="title text-dots"><a href="#">Nissan Navara</a></h6>
                  <div class="action-wrap">
                    <a href="booking.php" class="btn btn-warning btn-sm float-right"> Book </a>
                    <div class="price-wrap h5">
                      <span class="price-new">RM450</span>
                    </div> <!-- price-wrap.// -->
                  </div> <!-- action-wrap -->
                </figcaption>
              </figure> <!-- card // -->
            </div> 
          </div><!-- col // -->
            <br><br><br>
      </div>
        <!--END OF PRODUCT LIST    END OF PRODUCT LIST     END OF PRODUCT LIST-->


        

        <!-- START OF FOOTER    START OF FOOTER    START OF FOOTER -->
        <footer class="text-center text-lg-start bg-dark text-muted">
          <!-- Section: Social media -->
          <br>
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


