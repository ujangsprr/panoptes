<?php

if (isset($_POST['login'])) {

  $email = $_SESSION['email'];
  $passnew = md5($_POST['passwordlog']);
  $passcon = $_POST['passconfirm'];

  include 'include/connect.php';

  if(isset($_POST['passwordlog']) && !empty($_POST['passwordlog']) || isset($_POST['passconfirm']) && !empty($_POST['passconfirm'])){
    if($_POST['passwordlog'] != $passcon){
      echo "<div class='alert alert-danger' role='alert'>
              Sorry, your password do not match
            </div>";
    }
    else{
      $query = "UPDATE `users` SET `password` = '$passnew' WHERE `users`.`email` = '$email' and `users`.`role` = 'client';";

      if(mysqli_query($connection, $query)){
        echo "<meta http-equiv='refresh' content='0;url=success' />";
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
      }
    }
  }
  else{
    echo "<div class='alert alert-danger' role='alert'>
              Please input your new password!
            </div>";
  }
}

?>