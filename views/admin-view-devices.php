<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	include("../includes/config.php");
	include("../includes/classes/Device.php");

	//$device = new Device($con);
	//$con = mysqli_connect("localhost", "root", "root", "asset_tool");

	$query = "SELECT * FROM `devices`";
	$result = mysqli_query($con, $query);

	include("partials/header.php");
	include("partials/navigation.php");

?>
<section class="adminDashboard">
	<div class="container-fluid">
		<div class="">
			<ul class="nav nav-tabs mb-5">
				<li class="nav-item">
					<a class="nav-link active" href="admin-view-devices.php">View Devices</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="admin-view-users.php">View Users</a>
				</li>
			</ul>
		</div>
		<?php
			include("partials/table-header-admin-devices.php");

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$deviceID = $row['id'];
					$deviceImage = $row['image'];
					$deviceName = $row ['name'];
					$deviceNotes = $row ['notes'];
					$deviceAvailability = $row ['availability'];
		?>
						<tr class="text-center font_13">

							<td class="adminDashboard_imageCol">
								<img class="adminDashboard_imageCol-image" src="<?php echo $deviceImage ?>" alt="">
							</td>
							<td>
								<?php echo $deviceID ?>
							</td>
							<td>
								<?php echo $deviceName ?>
							</td>
							<td>
								<?php echo $deviceNotes ?>
							</td>
							<td>
								<?php echo $deviceAvailability ?>
							</td>
							<td>
								<a href="admin-device-info.php/<?php echo  "?deviceID=" . $deviceID ?>" class="btn btn-outline-secondary font_13">View</a>

							</td>
						</tr>
						<?php
						        }
						      } else {
						          echo "0 results";
						  }
						?>
					</tbody>
			</table>
		</div>
	</section>

<?php include("partials/footer.php"); ?>