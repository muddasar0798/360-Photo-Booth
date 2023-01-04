<?php
if(isset($_POST['submit'])){
  $to = "md.quadri1801@gmail.com"; // this is your Email address
  $from = $_POST['email']; // this is the sender's Email address
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $subject = "Form submission";
  $subject2 = "Copy of your form submission";
  $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
  $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

  $headers = "From:" . $from;
  $headers2 = "From:" . $to;
  mail($to,$subject,$message,$headers);
  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
  echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
  // You can also use header('Location: thank_you.php'); to redirect to another page.
  }
        ?>

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
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">

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
    include 'navbar.html';
?>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
    data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Let us make the <span>World</span> revolve around you!
            <!-- I'm Name</span> a Professional Photographer from Toronto City -->
          </h2>
          <p>Toronto | Montreal | Calgary | Edmonton </p>
          <button type="button" class="btn-get-started" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Get Quote
          </button>
          <!-- <a href="contact.html" class="">Get Quote</a> -->
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->
  <!-- Button trigger modal -->

  <section id="modal">
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 style="color: black" class="modal-title fs-5" id="staticBackdropLabel">Get Quote</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

        <!-- <form method="post" name="myemailform" action="forms/contact.php">

          Enter Name:	<input type="text" name="name">

          Enter Email Address:	<input type="email" name="email"> -->

          <!-- Enter Message:	<textarea name="message"></textarea> -->

          <!-- <input type="submit" value="Send Form">
          </form> -->

          <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-group mt-3">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group mt-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div> -->
            <!-- 
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="venue" id="venue" placeholder="Venue" required>
            </div>
            <div class="form-group mt-3">
              <input type="date" class="form-control" name="date" id="date" placeholder="Date" required>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="toi" id="toi" placeholder="Event Type" required>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="hrs" id="hrs" placeholder="Hours" required>
            </div> -->
          <!-- </form> -->

          
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
          <input type="submit" value="Send Form">
          <!-- <button type="submit" class="btn submit">submit</button> -->
        </div>
      </div>
    </div>
  </div>
  </section><!-- End Modal Section -->
  <main id="main" data-aos="fade" data-aos-delay="1500">
  <style>
    .video_div {
      position: relative;
      padding-top: 40%;
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
    <!-- ======= Gallery Section ======= -->

    <section id="gallery" class="gallery">
      <div class="container">
        <!-- <div class="video_div"> -->
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active video_div">
              <video autoplay loop muted>
                    <source src="assets/vid/1.mp4" type="video/mp4">
                  </video>
              </div>
              <div class="carousel-item video_div">
              <video autoplay loop muted>
                    <source src="assets/vid/2.mp4" type="video/mp4">
                  </video>
              </div>
              <div class="carousel-item video_div">
              <video autoplay loop muted>
                    <source src="assets/vid/3.mp4" type="video/mp4">
                  </video>
              </div>
              <div class="carousel-item video_div">
              <video autoplay loop muted>
                    <source src="assets/vid/4.mp4" type="video/mp4">
                  </video>
              </div>
              <div class="carousel-item video_div">
              <video autoplay loop muted>
                    <source src="assets/vid/5.mp4" type="video/mp4">
                  </video>
              </div>
              <div class="carousel-item video_div">
              <video autoplay loop muted>
                    <source src="assets/vid/6.mp4" type="video/mp4">
                  </video>
              </div>
              <div class="carousel-item video_div">
              <video autoplay loop muted>
                    <source src="assets/vid/7.mp4" type="video/mp4">
                  </video>
              </div>
              <div class="carousel-item video_div">
              <video autoplay loop muted>
                    <source src="assets/vid/8.mp4" type="video/mp4">
                  </video>
              </div>
              <div class="carousel-item video_div">
              <video autoplay loop muted>
                    <source src="assets/vid/9.mp4" type="video/mp4">
                  </video>
              </div>
              <div class="carousel-item video_div">
              <video autoplay loop muted>
                    <source src="assets/vid/10.mp4" type="video/mp4">
                  </video>
              </div>
              <div class="carousel-item video_div">
              <video autoplay loop muted>
                    <source src="assets/vid/11.mp4" type="video/mp4">
                  </video>
              </div>
              <div class="carousel-item video_div">
              <video autoplay loop muted>
                    <source src="assets/vid/12.mp4" type="video/mp4">
                  </video>
              </div>
              <div class="carousel-item video_div">
              <video autoplay loop muted>
                    <source src="assets/vid/13.mp4" type="video/mp4">
                  </video>
              </div>
              <div class="carousel-item video_div">
              <video autoplay loop muted>
                    <source src="assets/vid/14.mp4" type="video/mp4">
                  </video>
              </div>
            </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
          </div>
        <!-- </div> -->
      </div>

      <div class="container">

        <div class="mt-5 row gy-4 justify-content-center">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-2.jpg" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-3.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-4.jpg" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->

      </div>

   
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Google Reviews</p>
          <!-- <p>What they are saying</p> -->
        </div>

        <div class="slides-3 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  My friends and family had such a great time using the 360 Photo Booth! We made so many cute and funny memories. 
                  Their set up was super smooth. It was easy to communicate with them too. Would definitely hire 360 Photo Booth for future events 
                  and will recommend them to all family and friends!               
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/1.png" class="testimonial-img" alt="">
                  <h3>Pavnit Dhaliwal</h3>
                  <!-- <h4>Ceo &amp; Founder</h4> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Sonia and her team were amazing!! We booked a 360 video booth for our client's event and it was perfect. 
                  You have to give these guys a try!! Booking and logistics were easy with the online booking system and they were total pros!!!”
                  <br>
                  Absolutely love it! Just the best product and an incredible team. 360 photobooth is literally a show stopper!”                
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/2.png" class="testimonial-img" alt="">
                  <h3>Sunitha Prasanna</h3>
                  <!-- <h4>Designer</h4> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  360 Photo Booth was amazing to work with. We hosted a large charity fundraising event. 
                  They were so kind and helpful to all of our guests, their videos were sent to us promptly after the event. 
                  We will definitely hire them again. We highly recommend them for your event!                
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/3.png" class="testimonial-img" alt="">
                  <h3>Michelle</h3>
                  <!-- <h4>Store Owner</h4> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  The 360 Booth team arrived on time to my event with high energy and provided exceptional service.
                  <br>
                  Such a fun activity to have at any event and the great price and friendly service is the cherry on top!
                  <br>
                  I will find any excuse to book them again!                
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Mahana S</h3>
                  <!-- <h4>Freelancer</h4> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  I booked the 360 photo booth for my wedding on December 17th and it was the best experience from beginning to end! 
                  Binu and Sonia were absolutely amazing!! They were so friendly and patient with our guests. 
                  I highly recommend this company for anyone looking for a great experience! Thank you sooo much for everything!!                
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/5.png" class="testimonial-img" alt="">
                  <h3>Nadia Yousif</h3>
                  <!-- <h4>Entrepreneur</h4> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

        <!-- ======= Companies Section ======= -->
        <section id="companies" class="companies">
      <div class="container">

        <div class="section-header">
          <h2>Companies</h2>
          <p>We worked with </p>
        </div>

        <div class="slides-4 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="company-item">
                  <img src="assets/img/logos/1.png" alt="">
              </div>
            </div><!-- End company item -->
            <div class="swiper-slide">
              <div class="company-item">
                  <img src="assets/img/logos/2.png" alt="">
              </div>
            </div><!-- End company item -->
            <div class="swiper-slide">
              <div class="company-item">
                  <img src="assets/img/logos/3.jpeg" alt="">
              </div>
            </div><!-- End company item -->
            <div class="swiper-slide">
              <div class="company-item">
                  <img src="assets/img/logos/4.png" alt="">
              </div>
            </div><!-- End company item -->
            <div class="swiper-slide">
              <div class="company-item">
                  <img src="assets/img/logos/5.png" alt="">
              </div>
            </div><!-- End company item -->
            <div class="swiper-slide">
              <div class="company-item">
                  <img src="assets/img/logos/6.png" alt="">
              </div>
            </div><!-- End company item -->
            <div class="swiper-slide">
              <div class="company-item">
                  <img src="assets/img/logos/7.png" alt="">
              </div>
            </div><!-- End company item -->
            <div class="swiper-slide">
              <div class="company-item">
                  <img src="assets/img/logos/8.png" alt="">
              </div>
            </div><!-- End company item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Companies Section -->



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

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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