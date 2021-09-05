<?php
if (isset($_POST['signup'])) {

  $email = $_POST['email'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = $_POST['password'];
  $confirmation = $_POST['confirmation'];

  if(!empty($email) && !empty($firstname) && !empty($lastname) && !empty($password) && !empty($confirmation)){

    $encryptedpass = md5($password);
    
    include 'include/connect.php';

    if($password != $confirmation){
      echo "<div class='alert alert-danger' role='alert'>
              Kata sandi tidak sama!
            </div>";
    }
    else{
      //connecting & inserting data
      $query = "INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `password`, `role`) VALUES (NULL, '$email', '$firstname', '$lastname', '$encryptedpass', 'client');";

      if ($connection->query($query) === TRUE) {
        echo "<meta http-equiv='refresh' content='0;url=success' />";
      }
      else {
        echo "<h5 class='red-text'>Error: " . $query . "</h5>" . $connection->error;
      }
    }
    $connection->close();
  }
  else{
    echo "<div class='alert alert-danger' role='alert'>
            Data tidak boleh kosong!
          </div>";
  }
}

?>
