<?php

if(isset($_POST['login_button'])){
  // Login button was clicked.

  $email = $_POST['login_email'];
  $password = $_POST['login_password'];

  $result = $account->login($email, $password);

  if($result == true && $email == "admin@admin.com"){

  $_SESSION['userLoggedIn'] = "Admin";
  header("Location: views/admin/admin-view-devices.php");
  }
  else if ($result == true) {

  $_SESSION['userLoggedIn'] = $email;
  header("Location: views/user/user-view-devices.php");
  }
}

 ?>
