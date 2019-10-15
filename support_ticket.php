<?php
  include("includes/config.php");
  include("views/partials/main-header.php");
  // Uncomment to enable email. 
  // if(isset($_POST['support_button'])) {
  //
  //   $email_to = "pareja.jackie@gmail.com";
  //   $email_subject = "WCD Asset Tool Support Ticket";
  //
  //   function died($error) {
  //     echo "There are errors in the form that you submitted <br>";
  //     echo $error . "<br>";
  //     die();
  //   }
  //
  //   if(!isset($_POST['ticketForm_name'])) ||
  //      !isset($_POST['ticketForm_email']) ||
  //      !isset($_POST['ticketForm_headline']) ||
  //      !isset($_POST['ticketForm_message']) {
  //        died("There are errors in the form you submitted");
  //      }
  //
  //   $name = $_POST["ticketForm_name"];
  //   $email_from = $_POST["ticketForm_email"];
  //   $headline = $_POST["ticketForm_headline"];
  //   $message = $_POST["ticketForm_message"];
  //
  //   $error_message = "";
  //   $email_validation = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  //
  //   if(!preg_match($email_validation, $email_from)) {
  //     $error_message .= "The email you provided is not in the correct format.";
  //   }
  //
  //   $email_message = "Support Ticket details below:\n\n";
  //
  //   function clean_string($string) {
  //     $bad = array("content-type", "bcc:", "to:", "cc:", "href");
  //     return str_replace($bad,"",$string);
  //   }
  //
  //   $email_message .= "Name: " . clean_string($name) . "\n";
  //   $email_message .= "Email: " . clean_string($email_from) . "\n";
  //   $email_message .= "Issue: " . clean_string($headline) . "\n";
  //   $email_message .= "Details: " . clean_string($message) . "\n";
  //
  //   $email_headers = "From: " . $email_from . "\r\n" . "Reply-To: " . $email_from . "\r\n" . "X-Mailer: PHP/" . phpversion();
  //   @mail($email_to, $email_subject, $email_message, $email_headers);
?>
  <!-- <div class="m-auto success_msg">
    <span class="font_20 m-auto success_msg-text">Thank you for sending a support ticket. Someone will be in touch shortly.</span>
  </div> -->
<?php
  //}
?>

  <section class="newUser">
	<div class="container">
	<div class="row"><a class="btn black_button" href="/wcd-asset-tool">Go Back</a></div>
	<div class="row newUser_container form_container">
		<h1 class="text-center pt-4" style="width: 100%; margin: 1rem auto">Create A Ticket</h1>
    <div id="support_ticket" class="form_container-wrapper">


			<form id="support_ticket" action="support_ticket.php" method="POST" style="margin: 1rem auto" class="pb-4">
        <div class="form-group mb-3">
          <label class="form_label font_15" for="ticketForm_name">Full Name:</label>
          <input id="ticketForm_name" class="form-control ticket_input" type="text" name="ticketForm_name" placeholder="Dexter McPherson" required/>
				</div>
        <div class="form-group mb-3">
          <label class="form_label font_15" for="ticketForm_email">Email:</label>
					<input id="ticketForm_email" class="form-control ticket_input" type="email" name="ticketForm_email" placeholder="dexters@laboratory.com" required/>
				</div>
        <div class="form-group mb-3">
          <label class="form_label font_15" for="ticketForm_headline">Support Issue:</label>
					<select id="ticketForm_headline" class="form-control ticket_input" name="ticketForm_headline" required>
						<option selected disabled>Choose Support Issue</option>
						<option>Password Help</option>
						<option>Devices</option>
						<option>Other</option>
					</select>
				</div>
				<div class="form-group mb-5">
          <label class="form_label font_15" for="ticketForm_message">Message:</label>
					<textarea id="ticketForm_message" class="form-control ticket_message" type="text" name="ticketForm_message" placeholder="Type your message..." required>
          </textarea>
				</div>

				<button type="submit" name="support_button" class="btn btn-lg black_button btn-block m-auto mb-5">Send Message</button>
			</form>

		</div>

	</div>
</div>
</section>
<?php
include("views/partials/footer.php");
?>
