<?php
	include("../../includes/config.php");
	include("../../includes/classes/Device.php");
	include("../../includes/classes/Constants.php");
	$device = new Device($con);
	include("../../includes/handlers/device-handler.php");
	include("../partials/a2-header.php");
	include("../partials/a2-navigation.php");

	if(isset($_GET['deviceID'])) {
		$deviceID = $_GET['deviceID'];
	}
	else {
		echo "ID is not set";
	}

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>
<section class="editDevice">
	<div class="container form_container">
	<div class="row"><a class="btn black_button" href="/wcd-asset-tool/views/admin/admin-view-devices.php">Go Back</a></div>
	<div class="row form_container">
		<h1 class="text-center pt-4" style="width: 100%; margin: 1rem auto">Edit Device</h1>

		<div class="form_container-wrapper">
			<form action="/wcd-asset-tool/views/edit-device.php/<?php echo  "?deviceID=" . $deviceID ?>" method="POST" style="margin: 1rem auto" class="pb-4">
				<div class="form-group">
					<label class="font_15" for="device_name">Name:</label>
					<input id="device_name" class="form-control" type="text" name="device_name" placeholder="Device name" value="<?php getInputValue('device_name') ?>"  required/>
				</div>
				<div class="form-group">
					<label class="font_15" for="device_image">Image URL:</label>
					<?php echo $device->getError(Constants::$imageFiletype); ?>
					<input id="device_image" class="form-control"  type="text" name="device_image" placeholder="Device image url" value="<?php getInputValue('device_image') ?>"  required/>
				</div>
				<div class="form-group">
					<label class="font_15" for="device_serial">Serial No:</label>
					<input id="device_serial" class="form-control"  type="text" name="device_serial" placeholder="Device serial no." value="<?php getInputValue('device_serial') ?>" required/>
				</div>
				<div class="form-group">
					<label class="font_15" for="device_notes">Notes:</label>
    				<textarea id="device_notes" class="form-control" name="device_notes" rows="3" placeholder="Device notes" value="<?php getInputValue('device_notes') ?>"></textarea>
  				</div>
				<div class="form-group mb-5">
					<label class="font_15" for="device_availability">Availability:</label>
					<select id="device_availability" class="form-control" name="device_availability" value="">
						<option>Available</option>
						<option>Not Available</option>
					</select>
				</div>
				<div class="form-group mb-5">
					<label class="font_15" for="device_category">Category:</label>
					<select id="device_category" class="form-control" name="device_category" value="">
						<option>ios</option>
						<option>android</option>
						<option>tablet</option>
						<option>ipad</option>
						<option>pc</option>
						<option>macbook</option>
					</select>
				</div>
				<button type="submit" name="editDevice_button" class="btn btn-lg black_button btn-block m-auto">Submit!</button>
			</form>

		</div>

	</div>
</div>
</section>

<?php include("../partials/footer.php"); ?>
