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

  <!-- Template Main CSS File -->
  <!--<link href="assets/css/style.css" rel="stylesheet">-->
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
<script src="https://embed.widgetpack.com/widget.js" async></script>
<script type="text/javascript">
function wpac_ajax_init() {
    WPac.init({widget: 'Rating', id: 12345, el: 'wpac-rating-ajax'});
}
</script>
  <!-- =======================================================
  * Template Name: Medilab - v2.1.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:panoptes.id@gmail.com">panoptes.id@gmail.com</a>
        <i class="icofont-phone"></i> +62 8953-6674-0711
        <i class="icofont-google-map"></i> Electronic Engineering Polytechnic Institute of Surabaya
      </div>
      <div class="social-links">
        <!-- <a href="https://web.facebook.com/panoptes.insight/" target="_blank" class="facebook"><i class="icofont-facebook"></i></a> -->
        <a href="https://www.instagram.com/panoptes.id/" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </div>
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index"><img src="assets/img/logoblack.png"></a></h1> 
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index">Perawatan Mata</a></li>
          <li class="active"><a href="jelajahi">Jelajahi</a></li>
          <li><a href="edukasi">Edukasi</a></li>
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
      ?>

    </div>
  </header><!-- End Header -->

  <!-- ======= Jelajahi Section ======= -->
  <section id="jelajahi" class="d-flex align-items-start">
    <div class="container mt-5">
      <h1>Panoptes</h1>
      <h2>Panoptes memberikan pengalaman informasi dan layanan kesehatan mata yang lebih baik. </h2>
      <!--<a href="/loginp" class="btn-get-started scrollto">Get Started</a> -->
    </div>
  </section><!-- End Jelajahi -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="content">
              <div class="new">
                <h3 class="font-weight-bold">Tes Mata Katarak</h3>
              </div>            
              <div class="container coba">         
                <div class="center">
                    <div class="loader">
                        <div id="quiz">
                            <div class="question">
                                <h4 class="text-left">
                                  <span id="question">Apakah penglihatan terasa kabur saat melihat sesuatu?</span>
                                </h4>
                            </div>
                            <ul>
                            <div class="row set-margin">
                              <div class="col">
                                <li class="text-center">    
                                  <input type="radio" id="s-option" name="selector" value="2">
                                  <button for="s-option" class="btn btn-primary set-font">Tidak</button>
                                  <!-- <div class="check"></div> -->
                                </li>
                              </div>
                              <div class="col">                            
                              <li class="text-center">
                                <input type="radio" id="f-option" name="selector" value="1">
                                <button for="f-option" class="btn btn-outline-primary set-font">Ya</button>
                                <!-- <div class="check"></div> -->                                
                              </li>
                            </div>
                            <div class="col"></div>
                            </div>
                            </ul>
                        </div>
                    </div>
                    <div class="text-muted">
                        <span id="answer"></span>
                    </div>
                </div>
                
                <div id="result-of-question" class="pulse animated" style="display: none; padding: 60px 40px 0px 40px;">
                    <span id="totalCorrect" class="pull-right"></span>
                    <br/>
                    <br/>
                    <span id="totalCorrect2" class="pull-right"></span>
                    <br/>
                    <span id="totalCorrect3" class="pull-right"></span>
                    
                    <a href="https://calendar.google.com/calendar/u/0/r/eventedit?text=Panoptes+:+Waktunya+Tes+Rutin&details=Lakukan+tes+rutin+untuk+pencegahan+katarak.+Kunjungi+Panoptes.id+sekarang!&pli=1&sf=true">Jadwalkan Tes Berikutnya!</a>
                    <br/>
                    <form action="jelajahi" class="align-items-center">
                      <input class="appointment-btn" outline="none" border="none" type="submit" value="Kembali"></input>
                    </form>
                    
                    <!-- <form action="/quizResult" method="POST"> -->
                        <!-- <div class="text-left"> -->
                          <!-- <br/>
                          <a href="/login" type="submit" class="btn btn-primary">Simpan hasil</a>
                          <a href="/consultation" type="submit" class="btn btn-secondary">Konsultasi</a> -->
                        <!-- </div> -->
                    <!-- </form> -->
              </div>
            </div>
            <!-- <div class="row">
                <div class="col">
                    
                </div>
              </div> -->
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <a href="#doctors"><div class="col-lg-6 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i><img src="assets/img/icon/hospital.png"></i>
                    <h4>Poli Mata Online</h4>
                   <a href="#doctors">Periksa mata tanpa harus ke rumah sakit.</a>
                  </div>
                </div></a>
                <a href="#faq"><div class="col-lg-6 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0 ">
                    <i><img src="assets/img/icon/bantuan.png"></i>
                    <h4>Bantuan</h4>
                   <a href="#faq">Informasi Pemesanan dan FAQ.</a>
                  </div>
                </div></a>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
    

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Daftar Poli Mata</h2>
          <p>Periksa mata bersama dengan dokter spesialis mata lebih mudah.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <a href="" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access" data-whatever="0">
               <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/klinik/1.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Klinik Mata Utama (KMU)</h4>
                  <span>Eye Hospital and Clinics</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <a href="" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access" data-whatever="1">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/klinik/2.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Klinik Mata Nusantara (KMN)</h4>
                  <span>EyeCare</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <a href="" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access" data-whatever="2">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/klinik/3.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Klinik Mata JEC</h4>
                  <span>Eye Hospitals and Clinics</span>
                </div>
              </div>
            </a>
          </div>

        </div>
      </div>

      <!-- Modal Order Form -->
      <div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-4 form-group center">
                  <img class="pic2 img-fluid" id="image">
                </div>
                <div class="col-md-8 form-group mt-3 mt-md-0">
                    <div class="text-center mt-3">
                      <a target="blank" id="kunjungi" class="btn btn-primary btn-lg btn-block">Kunjungi</a>
                      <a class="btn btn-secondary btn-lg btn-block" data-dismiss="modal">Close</a>
                    </div>
                </div>
              </div>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

    </section><!-- End Doctors Section -->

   <!-- ======= Award Section ======= -->
   <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
            <a href="https://www.youtube.com/watch?v=l4auCoNy6U8" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Penghargaan Panoptes</h3>
            <!-- <p class="justify">Panoptes memberikan pengalaman layanan pesan, periksa, dan tebus obat mata yang lebih baik.</p> -->

            <div class="icon-box">
              <div class="icon"><i class="bx bx-award"></i></div>
              <h4 class="title">Medali Emas</h4>
              <p class="description">Bangkok International Intellectual Property, Invention, Innovation, and Technology Exposition (IPITEx) 2021.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-award"></i></div>
              <h4 class="title">Medali Emas</h4>
              <p class="description">Youth International Science Fair 2021.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-award"></i></div>
              <h4 class="title">Medali Emas</h4>
              <p class="description"> Global Young Scientist Challenge di India, 2020.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bi bi-patch-check"></i></div>
              <h4 class="title">Penghargaan Spesial</h4>
              <p class="description">Malaysia Innovation, Invention and Creativity Association (MIICA).</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bi bi-trophy"></i></div>
              <h4 class="title">Juara 3</h4>
              <p class="description">Paragon Innovation Circle 2021.</p>
            </div>

          </div>
        </div>

      </div>
    </section> <!-- End About Section-->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Pertanyaan yang Sering Diajukan</h2>
          <p>Bagian ini mencakup apa yang sering ditanyakan orang</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Bagaimana Akurasi Tes Mata Katarak Panoptes ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Kami mengembangkan program AI bersama dokter spesialis mata. Program kami mengadopsi dan mengotomasi metode anamnesis yang biasa dilakukan di medis.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Apa itu Panoptes Insight? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Kami adalah sebuah perusahaan dengan misi penyediaan layanan digital pencegahan dan mitigasi kesehatan mata. Layanan Panoptes Insight mulai dikembangkan tahun 2018.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Bagaimana proses pemesanan poli mata online?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Anda dapat melakukan pemesanan dengan klik tombol Poli Mata di atas. Anda akan diarahkan untuk memilih rumah sakit atau klinik dan mengisi data diri. Konfirmasi data dan pembayaran akan dilakukan melalui WhatsApp.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Bagaimana skema pemeriksaan di poli mata online?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  <!-- <img src="assets/img/skema.png"> -->
                  <br>
                  Setelah melakukan pemesanan, Anda akan dihubungi untuk melakukan anamnesis melalui online meeting. Anamnesis dilakukan bersama dokter langsung selama lebih kurang 45 menit. Jika diperlukan pemeriksaan lebih lanjut Anda akan diarahkan untuk ke rumah sakit atau klinik yang Anda pilih. Obat akan diantar langsung ke alamat rumah.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="owl-carousel testimonials-carousel">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/doctors/doctors-1.jpg" class="testimonial-img" alt="">
              <h3>dr. Trianggadewi</h3>
              <h4>Ophthalmologist at Jombang Islamic Hospital</h4>
              <p class="justify">
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Panoptes membantu kita dalam program berantas kebutaan khususnya akibat katarak. 
                  Skrining katarak yg dikembangkan oleh panoptes.id dapat dilakukan dengan mudah, cepat, 
                  dan dapat dijangkau dimanapun berada. Harapannya panoptes.id semakin mengembangkan 
                  fitur-fiturnya dan memberikan manfaat positif bagi banyak orang. Mari kita lakukan cek mata rutin 
                  dan deteksi dini katarak mulai dari sekarang."
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/doctors/doctors-5.jpeg" class="testimonial-img" alt="">
              <h3>Maulida Mardhatillah</h3>
              <h4>Dokter Muda RS Syaiful Anwar</h4>
              <p class="justify">
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Panoptes hadir sebagai satu-satunya platform di Indonesia yang turut berkontribusi untuk 
                  menurunkan angka kebutaan akibat katarak. Kemudahan akses dalam menyediakan layanan fasilitas 
                  kesehatan mata, fleksibilitas memilih akses faskes mata yang memadai, serta pelayanan tes mata 
                  untuk katarak yang tervalidasi menjadikan panoptes memiliki peran penting untuk masyarakat di 
                  era digitalisasi ini. Besar harapan saya untuk panoptes semakin maju dan bergerak aktif untuk 
                  mengembangkan berbagai layanan yang cepat, akurat serta memudahkan agar manfaat dari panoptes 
                  semakin bisa dirasakan oleh masyarakat Indonesia. Jadi, jangan ragu untuk peduli 
                  kesehatan mata sekarang!."
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/doctors/doctors-2.jpg" class="testimonial-img" alt="">
              <h3>Muhammad Firdaus Maulana</h3>
              <h4>RnD Staff at Youth Care for Cataract (YCC)</h4>
              <p class="justify">
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                A good cataract detection application to apply for public, especially for people who still don't understand the symptoms of cataracts.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/doctors/doctors-3.jpg" class="testimonial-img" alt="">
              <h3>Aditia Yuliyanto</h3>
              <h4>Deputy Leader Youth Care for Cataract (YCC)</h4>
              <p class="justify">
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I do believe that Panoptes is not only providing a service that can be helpful for mainstream society, but also can embrace its service to help remote communities. Together, with the help of you all, Panoptes is working to realizing this dreams.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/doctors/doctors-4.jpg" class="testimonial-img" alt="">
              <h3>Lusiana Dian Ningrum</h3>
              <h4>RnD Lead at Youth Care for Cataract (YCC)</h4>
              <p class="justify">
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                This platform is very helpful for the community and the state to improve the quality of life for a better, more prosperous, and all elements of society can have equal rights to health services.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Mitra</h2>
        </div>

        <div class="clients-slider swiper-container mt-4">
          <div class="swiper-wrapper align-items-center" style="height: 120px">
            <div class="swiper-slide"><img src="assets/img/logos/1.png" class="img-fluid mitra" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos/2.png" class="img-fluid mitra" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos/3.png" class="img-fluid mitra" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos/4.png" class="img-fluid mitra" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos/5.png" class="img-fluid mitra" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos/6.png" class="img-fluid mitra" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos/7.png" class="img-fluid mitra" alt=""></div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Clients Section -->
    
          
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
              <strong>Telepon:</strong>+62 8953-6674-0711<br>
              <strong>Email:</strong> panoptes.id@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Poli Mata</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Cek Mata Katarak</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="">Tes Buta Warna</a></li> -->
            </ul>
          </div>
          
          <div class="col-lg col-md-6 footer-links">
            <h4>Berikan Penilaian</h4>
            <div id="wpac-rating" class="container text-left"></div>
          
            <script type="text/javascript">
            wpac_init = window.wpac_init || [];
            wpac_init.push({widget: 'Rating', id: 31999});
            (function() {
                if ('WIDGETPACK_LOADED' in window) return;
                WIDGETPACK_LOADED = true;
                var mc = document.createElement('script');
                mc.type = 'text/javascript';
                mc.async = true;
                mc.src = 'https://embed.widgetpack.com/widget.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
            })();
            </script>
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

  <!-- Template Main JS File -->

  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/submission.js"></script>
  <script src="assets/js/quiz2.js"></script>

</body>

</html>