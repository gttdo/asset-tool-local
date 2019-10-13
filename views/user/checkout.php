<?php
	include("../../includes/config.php");
	include("../../includes/classes/Device.php");

	$device = new Device($con);
	include("../../includes/handlers/device-handler.php");
	include("../partials/u2-header.php");
	include("../partials/u2-navigation.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}


	if(isset($_GET['deviceID'])) {
		$deviceID = $_GET['deviceID'];
	}
	else {
		echo "ID is not set";
	}

	$selectUserLoggedInQuery = "SELECT * FROM users WHERE email='$userLoggedIn'";
	$userLoggedResult = mysqli_query($con, $selectUserLoggedInQuery);
	$users = mysqli_fetch_array($userLoggedResult);

	$userID = $users['id'];

	if(isset($_POST['checkout_button'])) {
		$checkout = $_POST['checkout_date'];
		$checkin = $_POST['checkin_date'];


		$updateLoanTableQuery = "INSERT INTO loans (deviceName, userName, checkout, checkin) VALUES ('$deviceID', '$userID', '$checkout', '$checkin')";
		$updateLoanResult = mysqli_query($con, $updateLoanTableQuery);
		$notAvailable = "Not Available";

		$updateDeviceAvailQuery = "UPDATE devices SET availability='$notAvailable' WHERE id='$deviceID'";
		$updateDeviceResult = mysqli_query($con, $updateDeviceAvailQuery);

		header("Location: /wcd-asset-tool/views/user/user-device-info.php/?deviceID=$deviceID"  );
	}

?>

<section class="newUser">
	<div class="container">
	<div class="row"><a class="btn black_button" href="/wcd-asset-tool/views/user/user-view-devices.php">Go Back</a></div>
	<div class="row newUser_container">
		<h1 class="text-center pt-4" style="width: 100%; margin: 1rem auto">Checkout Device</h1>


		<div style="width: 30%; margin: auto;">
			<form action="/wcd-asset-tool/views/user/checkout.php/<?php echo  "?deviceID=" . $deviceID ?>" method="POST" style="margin: 1rem auto" class="pb-4">
				<div class="form-group mb_5">
					<label for="checkout_date" class="font_15">Loan Start Date</label>

					<input id="checkout_date" class="form-control" type="date" name="checkout_date"/>
				</div>
				<div class="form-group">
					<label for="checkin_date" class="font_15">Loan Return Date</label>

					<input id="checkin_date" class="form-control" type="date" name="checkin_date"/>
				</div>



				<button type="submit" name="checkout_button" class="btn btn-lg black_button btn-block m-auto">Submit!</button>
			</form>

		</div>

	</div>
</div>
</section>
<?php include("../partials/footer.php"); ?>
