<?php

if (isset($_POST['login'])) {

  $email = $_POST['emaillog'];
  $password=md5($_POST['passworddb']);

  include 'include/connect.php';

  if(isset($_POST['emaillog']) && !empty($_POST['emaillog']) || isset($_POST['passworddb']) && !empty($_POST['passworddb'])){

    $email=mysqli_real_escape_string($connection, $email);
    $query = "SELECT * FROM users WHERE email='{$email}' and password = '{$password}'";
    $select_user_query = mysqli_query($connection, $query);

    if (!$select_user_query) {
      DIE("QUERY FAILED". mysqli_error($connection));
    }
    $row = mysqli_fetch_array($select_user_query);

    if(isset($row['email']) && !empty($row['email'])){
      if ($email == $row['email'] && $password == $row['password']) {
        $user_id = $row['id'];
        $user_email = $row['email'];
        $user_password = $row['password'];
        $user_firstname= $row['firstname'];
        $user_lastname= $row['lastname'];
        $user_role = $row['role'];

        if($user_role == 'admin'){

          $_SESSION['id'] = $user_id;
          $_SESSION['firstname'] = $user_firstname;
          $_SESSION['lastname'] = $user_lastname;
          $_SESSION['email'] = $user_email;
          $_SESSION['role'] = 'admin';
          $_SESSION['logged_in']= 'True';
          //echo '<meta http-equiv="refresh" content="0;url=' . $back . '">';
          // echo "<meta http-equiv='refresh' content='0;url=http://gunstore.epizy.com/admin/index' />";
        }
        else {
          $_SESSION['id'] = $user_id;
          $_SESSION['firstname'] = $user_firstname;
          $_SESSION['lastname'] = $user_lastname;
          $_SESSION['email'] = $user_email;
          $_SESSION['role'] = 'client';
          $_SESSION['logged_in']= 'True';
          $back = $_SERVER['HTTP_REFERER'];
          // echo '<meta http-equiv="refresh" content="0;url=' . $back . '">';
          echo "<meta http-equiv='refresh' content='0;url=edukasi' />";
        }
      }
    }
    else{
      echo "<div class='alert alert-danger' role='alert'>
              Data yang dimasukkan salah!
            </div>";
    }
  }
  else{
    echo "<div class='alert alert-danger' role='alert'>
            Alamat surel dan kata sandi tidak boleh kosong!
          </div>";
  }
}

?>