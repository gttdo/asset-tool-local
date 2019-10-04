<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	include("../includes/config.php");
	include("../includes/classes/Account.php");
  include("../includes/classes/Constants.php");
	$con = mysqli_connect("localhost", "root", "root", "asset_tool");
  $account = new Account($con);

  include("../includes/handlers/register-handler.php");

	if(isset($_GET['userID'])) {
		$userID = $_GET['userID'];
		echo $userID;
	}
	else {
		echo "ID is not set";
	}
  function getInputValue($name) {
 	 if(isset($_POST[$name])) {
 		 echo $_POST[$name];
 	 }
  }

	if(isset($_POST['editUser_button'])) {
		$editAvatar = $_POST['edit_avatar'];
		$editName = $_POST['edit_name'];
		$editEmail = $_POST['edit_email'];
		$editPassphrase = $_POST['edit_passphrase'];
		$editPW = md5($editPassphrase);

		$editUserQuery = "UPDATE users SET image='$editAvatar', name='$editName', email='$editEmail', passphrase='$editPW' WHERE id='$userID'";
		$editUserResult = mysqli_query($con, $editUserQuery);

		header("Location: /wcd-asset-tool/views/admin-view-users.php");
	}

	include("partials/header.php");
	include("partials/navigation-info-pages.php");
?>
<section class="editUser">
	<div class="container">
	<div class="row"><a class="btn black_button" href="/wcd-asset-tool/views/admin-view-users.php">Go Back</a></div>
	<div class="row newUser_container">
		<h1 class="text-center pt-4" style="width: 100%; margin: 1rem auto">Edit User</h1>


		<div style="width: 30%; margin: auto;">
			<form action="/wcd-asset-tool/views/edit-user.php/<?php echo  "?userID=" . $userID ?>" method="POST" style="margin: 1rem auto" class="pb-4">
				<div class="form-group">
					<?php echo $account->getError(Constants::$imageFiletype); ?>
					<input id="edit_avatar" class="form-control" type="text" name="edit_avatar" value="<?php getInputValue('register_avatar') ?>" placeholder="Enter image url" required/>
				</div>
				<div class="form-group">
					<?php echo $account->getError(Constants::$nameCharacters); ?>
					<input id="edit_name" class="form-control" type="text" name="edit_name" value="<?php getInputValue('register_name') ?>" placeholder="Enter name" required/>
				</div>
				<div class="form-group">
					<?php echo $account->getError(Constants::$emailInvalid); ?>
					<input id="edit_email" class="form-control" type="email" name="edit_email" value="<?php getInputValue('register_email') ?>" placeholder="Enter email" required/>
				</div>
				<div class="form-group">
					<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
					<?php echo $account->getError(Constants::$passwordCharacters); ?>
					<input id="edit_password" class="form-control" type="password" name="edit_passphrase" value="<?php getInputValue('register_password') ?>" placeholder="Enter Password" required/>
				</div>



				<button type="submit" name="editUser_button" class="btn btn-lg black_button btn-block m-auto">Submit!</button>
			</form>

		</div>

	</div>
</div>
</section>
<?php include("partials/footer.php"); ?>
