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
  <link  rel="icon" media="all" href="assets/img/logo.png">
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

  <link href="https://cdn.jsdelivr.net/gh/ujangsprr/panoptes@master/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/gh/ujangsprr/panoptes@master/assets/css/quiz2.css" rel="stylesheet">
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
  <!-- =======================================================
  * Template Name: Medilab - v2.1.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapM-->
  <?php
    // session_start();
  ?>
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index"><img src="assets/img/logoblack.png"></a></h1> 
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index">Eye Care</a></li>
          <li><a href="jelajahi">Explore</a></li>
          <li><a href="edukasi">Education</a></li>

      <?php
      // session_start();
      if (!isset($_SESSION['logged_in'])) {
        echo "</ul></nav><a href='login' class='appointment-btn scrollto'>Masuk</a>";
      }
      else {
        // $idsess = $_SESSION['id'];
        $namess = $_SESSION['firstname'];
        // echo "<li><a href='include/logout' class='bi bi-people-fill'> $namess</a></li>";
        echo "
                  <a href='#' class=' container d-flex align-items-center ml-2 bi bi-people-fill' data-toggle='dropdown'>$namess</a>
                  <li class='dropdown-menu'>
                      <a href='include/logout' class='dropdown-item bi bi-door-closed-fill'> Logout</a>
                  </li>
                  </ul>
                  </nav>";
      }

        if (isset($_GET['key'])) {
            $word = $_GET['key'];
        }

      ?>
      
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="carouselpromo" class="carousel slide" data-ride="carousel" style="padding-top: 70px;">
    <ol class="carousel-indicators">
      <li data-target="#carouselpromo" data-slide-to="0" class="active"></li>
      <li data-target="#carouselpromo" data-slide-to="1"></li>
      <li data-target="#carouselpromo" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/slide/1.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/slide/2.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/slide/3.png" alt="Third slide">
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

    <!--================ New Product Area =================-->
    <section class="new_product_area section_gap_top section_gap_bottom_custom">
      <div class="container ">
          <div class="container d-flex justify-content-center mb-4">
            <div class="advanced-search d-flex align-items-center">
              <select class="category-btn" onchange="location = this.value;">
                    <option >City</option>                      
                    <option value="index?id=1">Surabaya</option>
                    <option value="index?id=2">Bali</option>
                    <option value="index?id=3">Bangkalan</option>
                    <option value="index?id=4">Jombang</option>
                    <option value="index?id=5">Sampang</option>
                    <option value="index?id=6">Sidoarjo</option>
              </select>
              <form method="GET" action="search" class="input-group d-flex align-items-center">
                <div class="col-10">
                  <input id="search" type="search" class="px-2" name='key' placeholder=" Search Product" style="height: 40px;" required>
                </div>
                <div class="col-2">
                  <button type="submit"><i class="bi bi-search"></i></button>  
                </div>
              </form>
          </div>
        </div>

        <div class="row">
        <?php 
            include 'include/connect.php';

            $queryproduct = "SELECT SQL_CALC_FOUND_ROWS id, kota, product, harga, gambar, nomor FROM product WHERE product LIKE '%$word%' ORDER BY id ASC LIMIT 0, 25;";
            $result = $connection->query($queryproduct);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {                    
                        $kota = $row["kota"];
                        $product = $row["product"];
                        $harga = $row["harga"];
                        $gambar = $row["gambar"];
                        $nomor = $row["nomor"];
                    ?>
                        <div class="col-md-3">
                            <div class="single-product">
                                <div class="product-img">
                                <img class="img-fluid w-100" src="assets/img/product/<?= $gambar; ?>" alt="" />
                                </div>
                                <div class="product-btm">
                                <a class="d-block">
                                    <h4><?= $product; ?></h4></br>
                                    <h4><?= $kota; ?></h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">Rp. <?= $harga; ?></span>
                                </div>
                                <div>
                                    <a href="https://api.whatsapp.com/send?phone=<?=$nomor;?>" target="blank" class="main_btn2">Buy</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    $result->free();
                }
                else{
                    echo "Product not found";
                }
          ?>
          </div>
        </div>
      </div>
    </section>
    <!--================ End New Product Area =================-->
  </main><!-- End #main -->

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

  <script src="https://cdn.jsdelivr.net/gh/ujangsprr/panoptes@master/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="https://cdn.jsdelivr.net/gh/ujangsprr/panoptes@master/assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/ujangsprr/panoptes@master/assets/js/submission.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/ujangsprr/panoptes@master/assets/js/quiz2.js"></script>

</body>

</html>