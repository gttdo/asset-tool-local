<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

  include("includes/config.php");
  include("views/partials/main-header.php");


?>
  <section class="newUser">
	<div class="container">
	<div class="row"><a class="btn black_button" href="/wcd-asset-tool">Go Back</a></div>
	<div class="row newUser_container">
		<h1 class="text-center pt-4" style="width: 100%; margin: 1rem auto">Create A Ticket</h1>
    <div id="support_ticket" style="width: 30%; margin: auto;">


			<form id="support_ticket" action="support_ticket.php" method="POST" style="margin: 1rem auto" class="pb-4">
        <div class="form-group">
          <input id="ticketForm_name" class="form-control" type="text" name="ticketForm_name" placeholder="Full Name" required/>
				</div>
        <div class="form-group">
					<input id="register_name" class="form-control" type="text" name="register_name" placeholder="Enter name" required/>
				</div>
				<div class="form-group">
					<input id="register_email" class="form-control" type="email" name="register_email" placeholder="Enter email" required/>
				</div>
				<div class="form-group">
					<input id="register_password" class="form-control" type="password" name="register_password" placeholder="Enter password" required/>
				</div>



				<button type="submit" name="register_button" onclick="register()" class="btn btn-lg black_button btn-block m-auto">Sign Up</button>
			</form>

		</div>

	</div>
</div>
</section>
<?php
include("views/partials/footer.php");
?>
