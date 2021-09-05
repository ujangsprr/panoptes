<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panoptes- Register</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    
    <!-- Favicons -->
    <link rel="icon" media="all" href="assets/img/logo.png">
    <link rel="panoptes-icon" media="all" href="assets/img/panoptesapple-touch-icon.png">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-white">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block"></div> -->
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                            </div>
                            <form class="user" method="POST" enctype="multipart/form-data">
                                <?php require 'include/signupconfirmation.php'; ?>  
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="firstname" id="exampleFirstName"
                                            placeholder="Nama Depan">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="lastname" id="exampleLastName"
                                            placeholder="Nama Belakang">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Alamat Surel">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Kata Sandi">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="confirmation"
                                            id="exampleRepeatPassword" placeholder="Konfirmasi Kata Sandi">
                                    </div>
                                </div>

                                <hr>                                                           
                                <div class="center-align">
                                    <button type="submit" id="confirmed" name="signup" class="btn btn-primary btn-user btn-block">Buat Akun</button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login">Sudah punya akun? Masuk!</a>
                            </div>
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
                            <form action="login">
                                <!-- <div class="row"> -->
                                <!-- <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="Nama" placeholder="Nama">
                                </div> -->
                                <!-- <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="output form-control" name="Rumah Sakit">
                                </div>
                                </div> -->
                                <!-- <div class="row">
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="datetime" name="Tanggal Lahir" class="form-control datepicker" id="date" placeholder="Tanggal Lahir">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="WhatsApp" placeholder="WhatsApp">
                                </div>
                                </div>
                                <div class="form-group">
                                <textarea type="text" class="form-control" name="Keluhan" placeholder="Keluhan"></textarea>
                                </div> -->
                                <div class="text-center mt-3">
                                <!-- <button type="button" class="tutup-btn" data-dismiss="modal" aria-label="Close">Tutup</button>
                                <button type="submit" class="appointment-btn" id="pesan">Pesan</button> -->
                                <button type="submit" class="btn btn-primary btn-lg btn-block" id="pesan">Pesan</button>
                                <button type="button" class="btn btn-secondary btn-lg btn-block" data-dismiss="modal" aria-label="Close">Tutup</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>