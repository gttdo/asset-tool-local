<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	include("../includes/config.php");
	include("../includes/classes/Account.php");

	$account = new Account($con);
	$con = mysqli_connect("localhost", "root", "root", "asset_tool");

	$query = "SELECT * FROM `users`";
	$result = mysqli_query($con, $query);

	include("partials/header.php");
	include("partials/navigation.php");
?>

<section class="viewUsers">
		<div class="container-fluid">
			<div class="">
				<ul class="nav nav-tabs mb-5">
					<li class="nav-item">
						<a class="nav-link" href="admin-view-devices.php">View Devices</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="admin-view-users.php">View Users</a>
					</li>
				</ul>
			</div>

			<?php
				include("partials/table-header-admin-users.php");

				if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$userID = $row['id'];
							$userEmail = $row['email'];
							$userPassphrase = $row['passphrase'];

				?>
					<tr class="text-center font_13">
						<td><?php echo $userID ?></td>
						<td><?php echo $userEmail ?></td>
						<td><?php echo $userPassphrase ?></td>
						<td>
								<a href="admin-user-info.php/<?php echo "?userID=" . $userID ?>" class="btn btn-outline-secondary font_13">View</a>
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