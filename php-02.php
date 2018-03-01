<?php

$to = !empty($_POST['email']) ? $_POST['email'] : false;
$subject = !empty($_POST['subject']) ? $_POST['subject'] : false;
$message = !empty($_POST['message']) ? $_POST['message'] : false;
$error = false;
$error_message = '';
if($_POST['trigger']) {
	echo "apple";
	if ( !$to ) {
		$error         = true;
		$error_message .= "<p>Email field can't empty</p>";
	}
	if ( !$subject ) {
		$error         = true;
		$error_message .= "<p>Subject field can't empty</p>";
	}
	if ( !$message ) {
		$error         = true;
		$error_message .= "<p>Message field can't empty</p>";
	}

	if(!$error){
		if(mail($to, $subject, $message)){
			echo " Sent";
		}else{
			echo "Not sent";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>
	<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="error-message"><?php
		if($error){
			echo "<div class='alert alert-danger'>".$error_message."</div>";
		}
		?></div>
	<form method="post" id="contact-form">
		<div class="form-group">
			<label>Mail To</label>
			<input type="text" name="email" id="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Subject</label>
			<input type="text" name="subject" id="subject" class="form-control">
		</div>
		<div class="form-group">
			<label>Message</label>
			<textarea class="form-control" name="message" id="message"></textarea>
		</div>
		<input type="submit" class="btn btn-primary" value="Send Mail">
		<input type="hidden" value="1" name="trigger">
	</form>
</div>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
