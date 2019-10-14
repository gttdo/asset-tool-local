<?php
include("../../includes/config.php");
include("../../includes/classes/Account.php");

//$con = mysqli_connect("10.8.40.43", "assetMgmt", "assetPassword", "wcd_asset_management");
$account = new Account($con);

$id = $_GET["userID"];
$query = "SELECT * FROM `users` WHERE id = $id";
$result = mysqli_query($con, $query);


include("../partials/a2-header.php");
include("../partials/a2-navigation.php");

?>
<section class="viewUser">

		<div class="container box-shadow">
			<a class="btn black_button" href="/wcd-asset-tool/views/admin/admin-view-users.php">Go Back</a>

			<div class="row">
				<div class="col bold viewUser_top"><h2 class="text-center">User</h2></div>
			</div>
			<div class="row">
					<div class="col m-auto text-center viewDevice_middle">
						<img class="viewDevice_middle-image" src="http://tinygraphs.com/squares/tinygraphs?theme=frogideas&numcolors=2&size=220&fmt=svg" alt="" />
					</div>
					<div class="col container">
						<?php
							if($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									$userID = $row['id'];
									$userImage = $row['image'];
									$userName = $row['name'];
									$userEmail = $row['email'];
									$userPW = $row['passphrase'];
									$userSignupDate = $row['signupDate'];


						?>
						<p class="list header_primary">
							<span class="bold">Name:</span>
							<?php  echo $userName ?>
						</p>
						<p class="list header_primary">
							<span class="bold">Email:</span>
							<?php  echo $userEmail ?>
						</p>
						<p class="list font_20">
							<span class="bold">Passphrase:</span>
							<?php  echo $userPW ?>
						</p>
						<p class="list font_20">
							<span class="bold">Created On:</span>
							<?php  echo $userSignupDate ?>
						</p>
						<p class="edit_buttons">
							<a href="/wcd-asset-tool/views/admin/edit-user.php/<?php echo  "?userID=" . $userID ?>" class="btn-alt font_22"><i class="fas fa-edit"></i></a>
						</p>

						<?php
										}
									} else {
											echo "0 results";
							}
						?>



					</div>
			</div>
		</div>

	</section>
<?php include("../partials/footer.php"); ?>
