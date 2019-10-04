<?php
// phpinfo();
ini_set('display_errors', 1);
error_reporting(E_ALL);

  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");

  $account = new Account($con);

  include("includes/handlers/register-handler.php");

  function getInputValue($name) {
    if(isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home | Register</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/main.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand header_one" href="/asset-tool-php.php">WCD Asset Management Tool</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
      </ul>
    </div>
  </div>
</nav>
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
<script>
function register(){
  alert("Your account has been registered! You'll be receiving an email confirmation soon.");
}
</script>
<?php
include("views/partials/footer.php");
?>
