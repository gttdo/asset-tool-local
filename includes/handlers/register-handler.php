<?php

function sanitizeRegularForm($inputText){
  return $inputText;
}

function sanitizeUsernameForm($inputText){
  $inputText = strip_tags($inputText);
  $inputText = ucfirst(strtolower($inputText));
  return $inputText;
}

function sanitizePasswordForm($inputText){
  $inputText = strip_tags($inputText);
  return $inputText;
}

function sanitizeEmailForm($inputText) {
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  $inputText = strtolower($inputText);
  return $inputText;
}

// if(isset($_POST['register_button'])){
//   $avatar = sanitizeEmailForm($_POST['register_avatar']);
//   $name = sanitizeUsernameForm($_POST['register_name']);
//   $email = sanitizeRegularForm($_POST['register_email']);
//   $password = sanitizePasswordForm($_POST['register_password']);
//
//   $wasSuccessful = $account->register($avatar, $name, $email, $password);
//
//   if($wasSuccessful == true) {
//     $_SESSION['userLoggedIn'] = $email;
//     header("Location: register.php");
//   }
// }

if(isset($_POST['create_userButton'])) {
  $avatar = sanitizeEmailForm($_POST['create_avatar']);
  $name = sanitizeUsernameForm($_POST['create_username']);
  $email = sanitizeRegularForm($_POST['create_useremail']);
  $password = sanitizePasswordForm($_POST['create_userpassword']);

  $wasSuccessful = $account->createUser($avatar, $name, $email, $password);

  if($wasSuccessful == true) {
    header("Location: admin-view-users.php");
  }
}


?>
