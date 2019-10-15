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



// if(isset($_POST["register_button"])) {
//   $admin_email = "pareja.jackie@gmail.com";
//   $email_subject = "WCD Asset Tool New Registration Confirmation";
//
//   $name = $_POST['register_name'];
//   $new_user_email = $_POST['register_email'];
//
//   $email_message = "<span style="font-weight: 500; color: green;">Thanks for registering your account! Your account details are below:</span>\n\n";
//
//   function clean_string($string) {
//     $bad = array("content-type", "bcc:", "to:", "cc:", "href");
//     return str_replace($bad, "", $string);
//   }
//   $sendAll = $admin_email . " " . $new_user_email;
//   $email_message .= "Welcome " . $name . "!\n\n" . "You can sign in with your email, <span style='font-weight: 500;'>" . $new_user_email . "</span>\n\n" . "This email does not contain your password for security purposes.";
//
//   $email_headers = "From: Admin Asset Tool" . "\r\n" . "Reply-To: " . $admin_email . "\r\n" . "X-Mailer: PHP/" . phpversion();
//   @mail($sendAll, $email_subject, $email_message, $email_headers);
//   ?>
<!-- //   <div class="m-auto success_msg">
//     <span class="font_20 m-auto success_msg-text">Thank you for sending a support ticket. Someone will be in touch shortly.</span>
//   </div> -->
   <?php
// }
// ?>
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
