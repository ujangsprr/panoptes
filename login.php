<?php
require_once __DIR__.'/vendor/autoload.php';
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panoptes - Login</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/gh/ujangsprr/panoptes@master/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    
    <!-- Favicons -->
    <link rel="icon" media="all" href="assets/img/logo.png">
    <link rel="panoptes-icon" media="all" href="assets/img/panoptesapple-touch-icon.png">

    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/gh/ujangsprr/panoptes@master/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-white">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Masuk!</h1>
                                    </div>
                                    <form class="user" method="POST">
                                        <?php require 'include/loginconfirmation.php';?>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                name="emaillog" placeholder="Masukkan alamat surel">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="passworddb" id="exampleInputPassword" placeholder="Masukkan kata sandi">
                                        </div>
                                        <div class="row">
                                            <div class="col text-left">
                                                <a class="small" href="forgotpass">Lupa kata sandi?</a>
                                            </div>
                                            <div class="col text-right">
                                                <a class="small" href="sign">Buat akun baru!</a>
                                            </div>
                                        </div>                                
                                        <hr> 
                                            <div class="center-align">
                                                <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Masuk</button>
                                            </div>
                                        
                                        <hr>
                                        <a href="auth" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Masuk via Google
                                        </a>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/gh/ujangsprr/panoptes@master/assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/ujangsprr/panoptes@master/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdn.jsdelivr.net/gh/ujangsprr/panoptes@master/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
</body>

</html>