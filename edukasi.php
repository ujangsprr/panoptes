<!DOCTYPE html>
<html lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168357827-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-168357827-1');
</script>

  <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Panoptes - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" media="all" href="assets/img/logo.png">
  <link rel="panoptes-icon" media="all" href="assets/img/panoptesapple-touch-icon.png">

  <!-- Google Fonts -->
 <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->
  <link href="{{font_url}}" rel="stylesheet"/>

  <!-- Vendor CSS Files -->
  <link type="text/css" href="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link type="text/css" href="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link type="text/css" href="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link type="text/css" href="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link type="text/css" href="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link type="text/css" href="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/venobox/venobox.css" rel="stylesheet">
  <link type="text/css" href="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link type="text/css" href="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link type="text/css" href="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link type="text/css" href="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/quiz2.css" rel="stylesheet">

  <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
  <script type="text/javascript">
  window.addeventasync = function(){
      addeventatc.settings({
          appleical  : {show:true, text:"Apple Calendar"},
          google     : {show:true, text:"Google <em>(online)</em>"},
          office365  : {show:true, text:"Office 365 <em>(online)</em>"},
          outlook    : {show:true, text:"Outlook"},
          outlookcom : {show:true, text:"Outlook.com <em>(online)</em>"},
          yahoo      : {show:true, text:"Yahoo <em>(online)</em>"}
      });
  };
</script>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index"><img src="assets/img/logoblack.png"></a></h1> 
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index">New Product</a></li>
          <li><a href="kesehatan">Eye Care</a></li>
          <li><a href="jelajahi">Explore</a></li>
          <li class="active"><a href="edukasi">Education</a></li>

      <?php
      // session_start();
        // $idsess = $_SESSION['id'];
        if (!isset($_SESSION['logged_in'])) {
          echo "<meta http-equiv='refresh' content='0;url=login'/>";
        }
        else{
          $namess = $_SESSION['firstname'];
          // echo "<li><a href='include/logout' class='bi bi-people-fill'> $namess</a></li>";
          echo "<a href='#' class=' container d-flex align-items-center ml-2 bi bi-people-fill' data-toggle='dropdown'>$namess</a>
                <li class='dropdown-menu'>
                    <a href='include/logout' class='dropdown-item bi bi-door-closed-fill'> Logout</a>
                </li>
                </ul>
                </nav>";
        }
      ?>
    </div>
  </header><!-- End Header -->

<!-- ======= Hero Section ======= -->
  <div id="carouselpromo" class="carousel slide" data-ride="carousel" style="margin-top: 70px;">
    <ol class="carousel-indicators">
      <li data-target="#carouselpromo" data-slide-to="0" class="active"></li>
      <li data-target="#carouselpromo" data-slide-to="1"></li>
      <li data-target="#carouselpromo" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/slide/edukasi-1.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/slide/edukasi-2.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/slide/edukasi-3.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselpromo" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselpromo" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- End Hero -->

  <main id="main">

  <!-- ======= About Section ======= -->
    <section id="articel" class="articel mt-5">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Articles</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="articel-img">
              <img src="assets/img/artikel.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Atropine drug therapy at an early age can eliminate the risk of minus eye</h3></br>
            <p class="text-justify">
              Until now, the only way to cure minus eye is with LASIK surgery. But it turns out there is a drug that can prevent your minus eye from getting worse. This minus eye drug is atropine. Atropine is a drug used to treat muscle spasms.
            </p>
            <p class="text-justify">
              Atropine is available in the form of eye drops. This drug works by paralyzing the accommodation muscle of the eye (the muscle that regulates the thickness of the lens of the eye) and dilates the pupil. Several studies reported that children who had myopia and were prescribed atropine drops experienced a reduction in the severity of myopia, than children who were not given atropine.
            </p>
            </br><hr>
            <p>
              If you want to get information on other interesting articles, please join the Panoptes telegram group.
            </p>
            <hr>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-left text-lg-start">
            <h3>Telegram groups</h3>
            <p>You can join the Panoptes telegram group to get reliable information about eye health.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://t.me/joinchat/SEqe7dmXFFM3YTJl" target="blank">Join</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

  </main><!-- End #main -->

  <!-- ======= Specials Section ======= -->
  <section id="specials" class="specials">
    <div class="container mt-4" data-aos="fade-up">
      <div class="section-title">
        <h2>Online Consultation</h2>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-9 mt-4 mt-lg-0 order-2 order-lg-1">
          </br>
          <h3>Consultation with an Ophthalmologist</h3>
            </br>
            <p class="text-justify">
              Panoptes Insight is here in our midst to facilitate online eye consultations. We will meet you with an Ophthalmologist for a remote consultation. Don't worry about forgetting the results of the consultation, because we will provide a document of the results of the consultation.  
            </p>
            <p class="text-justify">
              Remote eye consultation is not impossible anymore. With this online consultation, we become more flexible in determining the routine control schedule and we can even prevent early risk of more severe eye damage without us knowing it.
            </p>
        </div>
        <div class="col-lg-3 text-center order-1 order-lg-2">
          <div class="pic">
              <img src="assets/img/doctors/doctors-1.jpg" alt="" class="img-fluid">
          </div>
        </div>        
      </div>
      <div class="cta-btn-container text-center">
          <a class="cta-btn align-middle" target="blank" href="https://api.whatsapp.com/send/?phone=62895366740711&text=Pesan%0ANama%3A+%0ATTL%3A+%0ARS%2FKlinik%3A+%0AHari%3A+%0AKeluhan%3A">Consultation Now</a>
      </div>
    </div>
  </section><!-- End Specials Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Webinar</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="video-box2 d-flex justify-content-center align-items-stretch">
              <a href="https://youtu.be/p_M6bKLE9CA" target="blank" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Talkshow Ask Me Anything</h3>
            <h5>"Questions About Eye Health"</h5>
            </br>
            <p class="text-justify">
              Is a question and answer event and discuss thoroughly about eye health with Specialist Doctors. This talkshow was organized by Panoptes Insight with Moderator Maulida Mardhatillah, Junior Doctor of Saiful Anwar Hospital Malang and resource person Dr. Trianggadewi, Ophthalmologist.
            </p>
            <p class="text-justify">
              With this event, participants get new insights from the experiences of other participants or interesting information from the answers of the Ophthalmologist. Panoptes Insight hopes that all those present can be a motivator for people to care about their eye health.
            </p>
            <div class="cta-btn-container text-center">
                <a class="cta-btn align-middle" href="https://drive.google.com/file/d/1KnhJGgAiPQjQqWRdfGhhGV4yt5UXp9RV/view?usp=sharing" target="blank">Download Material</a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Panoptes</h3>
            <p>
              Politeknik Elektronika Negeri Surabaya (PENS)<br>
              Surabaya<br>
              Indonesia<br><br>
              <strong>Telephone:</strong>+62 8953-6674-0711<br>
              <strong>Email:</strong> panoptes.id@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">Eye Clinic</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Cataract Eye Test</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="">Tes Buta Warna</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Panoptes</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
<!--         <a href="https://web.facebook.com/panoptes.insight/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a> -->
        <a href="https://www.instagram.com/panoptes.id/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/jquery/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/venobox/venobox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/counterup/counterup.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/purecounter/purecounter.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/HakimIhsan/p@master/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/submission.js"></script>
  <script src="assets/js/quiz2.js"></script>

</body>

</html>