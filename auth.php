<?php
require_once __DIR__.'/vendor/autoload.php';
 
// session_start();
 
$client = new Google_Client();
$client->setAuthConfigFile('./client_secret.json');
$client->setRedirectUri("http://localhost/panoptes/auth");
$client->setScopes(array(
    "https://www.googleapis.com/auth/userinfo.email",
    "https://www.googleapis.com/auth/userinfo.profile",
    "https://www.googleapis.com/auth/plus.me"
));
 
if (!isset($_GET['code'])) {
  $auth_url = $client->createAuthUrl();
  header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
 $token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);

 if(!isset($token['error']))
 {
  $client->setAccessToken($token['access_token']);
  $_SESSION['access_token'] = $token['access_token'];
  $google_service = new Google_Service_Oauth2($client);
  $data = $google_service->userinfo->get();

  if(!empty($data['given_name']))
  {
   $_SESSION['firstname'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['lastname'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['email'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['image'] = $data['picture'];
  }

  $_SESSION['logged_in']= 'True';

  include 'include/connect.php';

  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $email = $_SESSION['email'];
  $image = $_SESSION['image'];

  $query = "INSERT INTO `history` (`id`, `firstname`, `lastname`, `email`, `picture`) VALUES (NULL, '$firstname', '$lastname', '$email', '$image');";
  
  if ($connection->query($query) === TRUE) {
    echo "<meta http-equiv='refresh' content='0;url=edukasi' />";
  }
  else {
    echo "<h5 class='red-text'>Error: " . $query . "</h5>" . $connection->error;
  }
  $connection->close();
}
}
?>