<?php

if(isset($_POST['login_button'])){
  // Login button was clicked.

  $email = $_POST['login_email'];
  $password = $_POST['login_password'];

  $result = $account->login($email, $password);

  if($result == true && $email == "jacpare@gap.com"){

  $_SESSION['userLoggedIn'] = "Admin";
  header("Location: views/admin-view-devices.php");
  }
  else if ($result == true) {

  $_SESSION['userLoggedIn'] = $email;
  header("Location: views/user-view-devices.php");
  }
}

 ?>
