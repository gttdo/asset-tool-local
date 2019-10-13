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

?>
  <section class="newUser">
	<div class="container">
	<div class="row"><a class="btn black_button" href="/wcd-asset-tool">Go Back</a></div>
	<div class="row newUser_container">
		<h1 class="text-center pt-4" style="width: 100%; margin: 1rem auto">Create New Account</h1>
    <div id="register" style="width: 30%; margin: auto;">


			<form id="register_form" action="register.php" method="POST" style="margin: 1rem auto" class="pb-4">
        <div class="form-group">
          <?php echo $account->getError(Constants::$imageFiletype); ?>
          <input id="register_avatar" class="form-control" type="text" name="register_avatar" placeholder="image" value="<?php getInputValue('register_avatar') ?>" required/>
				</div>
        <div class="form-group">
          <?php echo $account->getError(Constants::$nameCharacters); ?>
					<input id="register_name" class="form-control" type="text" name="register_name" placeholder="Enter name" value="<?php getInputValue('register_name') ?>" required/>
				</div>
				<div class="form-group">
          <?php echo $account->getError(Constants::$emailInvalid); ?>
          <?php echo $account->getError(Constants::$emailTaken); ?>
					<input id="register_email" class="form-control" type="email" name="register_email" placeholder="Enter email" value="<?php getInputValue('register_email') ?>" required/>
				</div>
				<div class="form-group">
          <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
          <?php echo $account->getError(Constants::$passwordCharacters); ?>
					<input id="register_password" class="form-control" type="password" name="register_password" placeholder="Enter password" value="<?php getInputValue('register_password') ?>" required/>
				</div>



				<button type="submit" name="register_button" onclick="register()" class="btn btn-lg black_button btn-block m-auto">Sign Up</button>
			</form>

		</div>

	</div>
</div>
</section>
<?php
include("views/partials/main-footer.php");
?>
