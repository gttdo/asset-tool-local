<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");
  //
  $account = new Account($con);
  //
  include("includes/handlers/login-handler.php");
  //
  function getInputValue($name) {
    if(isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }
  //
  if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
  }
  else {
    //header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home | Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/main.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand header_one" href="/asset-tool-php.php">
      <img class="navbar_logo" src="public/images/wcd_favicon.png" alt="">
    </a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
      </ul>
    </div>
  </div>
</nav>

<div class="container">
	<section id="landing">

		<form class="landing_form" action="index.php" method="POST">
			<h2 class="landing_form--welcome font_30">Welcome</h2>
			<div class="form-group">
        <?php echo $account->getError(Constants::$loginFailed); ?>
				<label class="form_label" for="login_email">Email address</label>
				<input id="login_email" type="email" name="login_email" class="form-control" placeholder="Enter email" value="<?php getInputValue('login_email') ?>" required>
			</div>
			<div class="form-group">
				<label class="form_label" for="login_password">Password</label>
				<input id="login_password" type="password" name="login_password" class="form-control" placeholder="Password" required>
			</div>
			<div class="button_container">
				<button type="submit" name="login_button" class="btn black_button button_container-login">Login</button>

			</div>
      <div class="signup_container">
        <a class="signup_container-signup font_15" href="register.php">Sign Up</a>

        <a class="signup_container-forgot font_15" href="/">Forgot Password?</a>
      </div>

		</form>

	</section>
</div>


<?php
  include("views/partials/footer.php");
?>
