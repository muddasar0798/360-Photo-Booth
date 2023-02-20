<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>360 PHOTO BOOTH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpeg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio - v1.1.1
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<?php
    include 'navbar_services.html';
?>


  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Services</h2>
            <!-- <p>Our 360 booth is here to enchant your guests! With a camera mounted to a rotating arm 
              and guests standing on our LED platform, create 360-degree slow-motion videos that will 
              take your breath away. The 360 Booth allows guests to pose, dance, and get creative while 
              being captured from a rotating 360-degree angle, creating a high-resolution video they can 
              share instantly on Instagram or Tik Tok.
            </p> -->

            <a class="cta-btn" href="book.php">Enquire Now!</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->
    <style>
    .video_div {
      position: relative;
      /* padding-top: 40%; -- For mobile */
    }

    video {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;

    }
  </style>
    
    <!-- ======= Mirror Section ======= -->
    <section id="mirror" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4 video_div">
            <!-- <img src="assets/img/services/1.jpg" class="img-fluid" alt=""> -->
            <video autoplay loop muted>
                    <source src="assets/img/services/360.mp4" type="video/mp4">
                  </video>
          </div>
          <div class="col-lg-5 content">
            <h2>Encompass 360 Photo Booth</h2>
            <!-- <p class="fst-italic py-3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <p class="py-3">
            We are here to enchant your guests with our 360 Booth! Create slow-motion 360-degree videos with a camera mounted
             on a rotating arm and guests standing on our LED platform. A rotating 360-degree angle captures guests posing, dancing,
              and getting creative, creating an instant high-resolution video that can be shared on Instagram or Tik Tok. Our clients 
              also receive a Digital Gallery by the end of the event. There are many add-ons you can choose from, such as custom
               designing your video, adding <b>special effects</b>, and adding <b>Hollywood black and white filters.</b></p>
            <!-- <p class="m-0"> -->
            <!-- <a class="cta-btn" href="book.php">Book Now!</a> -->
            <a href="book.php">
              <button type="button" class="btn-get-started">
            Book now
          </button>
          </a>
          <!-- </p> -->
          </div>
        </div>
        <hr>
      </div>
    </section><!-- End Mirror Section -->

    <!-- ======= 360 Photo Booth Section ======= -->
    <section id="mirror1" class="mt-4 about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/services/Roaming.png" class="img-fluid" alt="">

          </div>
          <div class="col-lg-5 content">
            <h2>Encompass Roaming Photographer</h2>
            <!-- <p class="fst-italic py-3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <p class="py-3">
            Are you looking for the most stunning candid shots, group photos from different angles, 
            and different angles of your event to be captured? Are you interested in making those images available 
            for guests to share on the spot or after the party? Our roaming event photography service will create lasting 
            memories for your event!</p>
            <a href="book.php">
              <button type="button" class="btn-get-started">
            Book now
          </button>
          </a>
          </div>
        </div>
        <hr>

      </div>
    </section><!-- End 360 Photo Booth Section -->

    <!-- ======= Regular Photo Booth Section ======= -->
    <section id="mirror2" class="mt-4 about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/services/3.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2>Encompass Magic Mirror Booth</h2>
            <!-- <p class="fst-italic py-3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <p class="py-3">
            This Magic Mirror Photo Booth features a hidden professional DLSR camera, special animations, 
            and graphic effects. You'll be able to make your guests feel like royalty at your event with this. 
            You can make your own photo strip or postcard by customizing the theme or logo. 
            Share your photo or GIF on Instagram, Tik Tok Email, or Twitter. All our staff members are trained to 
            install everything for you and maintain the highest level of professionalism. Additionally, we provide our
             clients with a Digital Gallery of the Event. Take your beauty to another level with Hollywood B&W beauty filters. 
             <b>Video, boomerangs, GIFs, greenscreen, Email Sharing, and more are all possible.</b></p>
             <a href="book.php">
              <button type="button" class="btn-get-started">
            Book now
          </button>
          </a>
          </div>
        </div>
        <hr>

      </div>
    </section><!--End Regular Photo Booth Section -->

    <!-- ======= Regular Photo Booth Section ======= -->
    <section id="mirror3" class="mt-4 about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/services/Instapod.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2>Encompass Instapod Booth</h2>
            <!-- <p class="fst-italic py-3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <p class="py-3">
            Encompass Instapod Photo Booths can enhance any event, no matter how big or small. 
            It is one of the most popular open-air photo booth rentals we offer. 
            With this carefully crafted device, studio-quality photos can be printed instantly. 
            With this sophisticated and timeless design, you can enjoy all the modern bells and whistles. 
            You'll be able to provide your guests with a memorable experience when they interact with this. 
            The following add-ons can always take your photos to another level: Hollywood B&W beauty filters. 
            <b>Boomerangs, GIFs, Videos, Greenscreen, Email Sharing, and more are possible.</b></p>
            <a href="book.php">
              <button type="button" class="btn-get-started">
            Book now
          </button>
          </a>
          </div>
        </div>

      </div>
    </section><!--End Regular Photo Booth Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>360 Photo Booth</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Mohammed</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>