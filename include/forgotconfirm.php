<?php

if (isset($_POST['login'])) {

  $email = $_POST['emaillog'];

  include 'include/connect.php';

  if(isset($_POST['emaillog']) && !empty($_POST['emaillog'])){
    $email=mysqli_real_escape_string($connection, $email);
    $query = "SELECT * FROM users WHERE email='{$email}' and role='client'";
    $select_user_query = mysqli_query($connection, $query);

    if (!$select_user_query) {
      DIE("QUERY FAILED". mysqli_error($connection));
    }
    $row = mysqli_fetch_array($select_user_query);

    if(isset($row['email']) && !empty($row['email'])){
      $user_id = $row['id'];
      $user_email = $row['email'];

      $_SESSION['id'] = $user_id;
      $_SESSION['email'] = $user_email;
      $back = $_SERVER['HTTP_REFERER'];
      echo "<meta http-equiv='refresh' content='0;url=resetpass' />";
    }
    else{
      echo "<div class='alert alert-danger' role='alert'>
                This email address does not exist!
              </div>";
    }
  }
  else{
    echo "<div class='alert alert-danger' role='alert'>
            Please input your email!
          </div>";
  }
}

?>