<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");
  $account = new Account($con);
  include("includes/handlers/register-handler.php");
  include("views/partials/main-header.php");

  function getInputValue($name) {
    if(isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }



  if(isset($_POST["register_button"])) {

    $emailTo_admin = "jacpare@gap.com";
    $email_subject = "WCD Asset Tool New Registration Confirmation";

    function died($error) {
      echo "There are errors in the form that you submitted. <br>";
      echo $error . "<br>";
      die();
    }

    if(!isset($_POST['register_avatar']) ||
       !isset($_POST['register_name']) ||
       !isset($_POST['register_email']) ||
       !isset($_POST['register_password'])) {
         died("There are errors in the form you submitted");
       }

    $name = $_POST['register_name'];
    $emailTo_newUser = $_POST['register_email'];


    $error_message = "";
    $email_validation = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_validation, $emailTo_newUser)) {
      $error_message .= "The email you provided is not in the correct format.";
    }

    $email_message = "Thanks for registering your account! Your account details are below:\n\n";

    function clean_string($string) {
      $bad = array("content-type", "bcc:", "to:", "cc:", "href");
      return str_replace($bad, "", $string);
    }

    $email_message .= "Welcome " . clean_string($name) . "!\n";
    $email_message .= "You can sign in with your email, " . clean_string($emailTo_newUser) . " and with your password.\n";
    $email_message .= "This email does not contain your password for security purposes.\n";

    $recipients = array($emailTo_admin, $emailTo_newUser);
    $sendAll = implode(',', $recipients);

    $email_headers = "WCD Asset Tool\r\n"."Reply-To: " . $emailTo_admin . "\r\n" . "X-Mailer: PHP/" . phpversion();
    @mail($sendAll, $email_subject, $email_message, $email_headers);
?>
    <div class="m-auto success_msg">
      <span class="font_20 m-auto success_msg-text">Your account was successfully created!</span>
    </div>
<?php
  }
?>
  <section class="newUser">
	<div class="container">
	<div class="row"><a class="btn black_button" href="/wcd-asset-tool">Go Back</a></div>
	<div class="row newUser_container form_container">
		<h1 class="text-center pt-4" style="width: 100%; margin: 1rem auto">Create New Account</h1>
    <div id="register" class="form_container-wrapper">


			<form id="register_form" action="register.php" method="POST" style="margin: 1rem auto" class="pb-4">
        <div class="form-group mb-3">
          <label class="form_label font_15" for="register_avatar">Image URL:</label>
          <?php echo $account->getError(Constants::$imageFiletype); ?>
          <input id="register_avatar" class="form-control" type="text" name="register_avatar" placeholder="image" value="<?php getInputValue('register_avatar') ?>" required/>
				</div>
        <div class="form-group mb-3">
          <label class="form_label font_15" for="register_name">Full Name:</label>
          <?php echo $account->getError(Constants::$nameCharacters); ?>
					<input id="register_name" class="form-control" type="text" name="register_name" placeholder="Enter name" value="<?php getInputValue('register_name') ?>" required/>
				</div>
				<div class="form-group mb-3">
          <label class="form_label font_15" for="register_email">Email:</label>
          <?php echo $account->getError(Constants::$emailInvalid); ?>
          <?php echo $account->getError(Constants::$emailTaken); ?>
					<input id="register_email" class="form-control" type="email" name="register_email" placeholder="Enter email" value="<?php getInputValue('register_email') ?>" required/>
				</div>
				<div class="form-group mb-3">
          <label class="form_label font_15" for="register_password">Password:</label>
          <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
          <?php echo $account->getError(Constants::$passwordCharacters); ?>
					<input id="register_password" class="form-control" type="password" name="register_password" placeholder="Enter password" value="<?php getInputValue('register_password') ?>" required/>
				</div>



				<button type="submit" name="register_button" class="btn btn-lg black_button btn-block m-auto">Sign Up</button>
			</form>

		</div>

	</div>
</div>
</section>
<?php
include("views/partials/footer.php");
?>
