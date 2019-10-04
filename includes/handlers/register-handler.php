<?php
function sanitizeRegularForm($inputText){
  $inputText = strip_tags($inputText); // strip HTML tags
  // $inputText = str_replace($inputText);
  return $inputText;
}
function sanitizeUsernameForm($inputText){
  $inputText = strip_tags($inputText);
  // $inputText = str_replace(" ", "", $inputText); // string replace ("find all spaces", "replace with empty string", $for_variable)
  $inputText = ucfirst(strtolower($inputText)); // uppercase first string, lower case the rest of the string.
  return $inputText;
}
function sanitizePasswordForm($inputText){
  $inputText = strip_tags($inputText);
  return $inputText;
}

function sanitizeEmailForm($inputText) {
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  $inputText = ucfirst(strtolower($inputText));
  return $inputText;
}

if(isset($_POST['register_button'])){
  // Register button was clicked.
  $avatar = sanitizeEmailForm($_POST['register_avatar']);
  $name = sanitizeUsernameForm($_POST['register_name']);
  $email = sanitizeRegularForm($_POST['register_email']);
  $password = sanitizePasswordForm($_POST['register_password']);

  $wasSuccessful = $account->register($avatar, $name, $email, $password);

  if($wasSuccessful == true) {
    $_SESSION['userLoggedIn'] = $email;
    header("Location: index.php");
  }
}

if(isset($_POST['create_userButton'])) {
  $avatar = sanitizeEmailForm($_POST['create_avatar']);
  $name = sanitizeUsernameForm($_POST['create_username']);
  $email = sanitizeRegularForm($_POST['create_useremail']);
  $password = sanitizePasswordForm($_POST['create_userpassword']);

  $wasSuccessful = $account->createUser($avatar, $name, $email, $password);

  if($wasSuccessful == true) {

    // Email Confirmation:
    $admin = "jacpare@gap.com"; // change to admin account.
    $to = $email;
    $emailHeader = "WCD Asset Management Tool";
    $emailMsg = "This email confirms that your account has been registered.";
    $headers = "CC: ". $admin;
    $mail($to, $emailHeader, $emailMsg, $headers);

    header("Location: admin-view-users.php");
  }
}


?>
