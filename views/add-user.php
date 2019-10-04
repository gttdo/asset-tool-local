<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	include("../includes/config.php");
	include("../includes/classes/Account.php");
	include("../includes/classes/Constants.php");

	$con = mysqli_connect("localhost", "root", "root", "asset_tool");
	$account = new Account($con);

	include("../includes/handlers/register-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}

	include("partials/header.php");
	include("partials/navigation-info-pages.php");
?>
<section class="newUser">
	<div class="container">
	<div class="row"><a class="btn black_button" href="admin-view-users.php">Go Back</a></div>
	<div class="row newUser_container">
		<h1 class="text-center pt-4" style="width: 100%; margin: 1rem auto">Create New User</h1>


		<div style="width: 30%; margin: auto;">
			<form action="add-user.php" method="POST" style="margin: 1rem auto" class="pb-4">
				<div class="form-group">
					<?php echo $account->getError(Constants::$imageFiletype); ?>
					<input id="create_avatar" class="form-control" type="text" name="create_avatar" value="<?php getInputValue('create_avatar') ?>" placeholder="Enter image url" required/>
				</div>
				<div class="form-group">
					<?php echo $account->getError(Constants::$nameCharacters); ?>
					<input id="create_username" class="form-control" type="text" name="create_username" value="<?php getInputValue('create_username') ?>" placeholder="Enter name" required/>
				</div>
				<div class="form-group">
					<?php echo $account->getError(Constants::$emailInvalid); ?>
					<input id="create_useremail" class="form-control" type="email" name="create_useremail" value="<?php getInputValue('create_useremail') ?>" placeholder="Enter email" required/>
				</div>
				<div class="form-group">
					<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
					<?php echo $account->getError(Constants::$passwordCharacters); ?>
					<input id="create_userpassword" class="form-control" type="password" name="create_userpassword" value="<?php getInputValue('create_userpassword') ?>" placeholder="Enter Password" required/>
				</div>



				<button type="submit" name="create_userButton" class="btn btn-lg black_button btn-block m-auto">Submit!</button>
			</form>

		</div>

	</div>
</div>
</section>
<?php include("partials/footer.php"); ?>
