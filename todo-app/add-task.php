<?php
require_once "inc/functions.php";
if(!is_user_logged_in()){
	header("Location: login.php");
	die();
}

require_once "header.php";
?>
	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
		<h1 class="display-4">Add your task</h1>
		<p class="lead"></p>
	</div>

	<div class="container">
		<form method="post" action="process-task.php">
			<div class="form-group">
				<label for="task">Enter your task</label>
				<textarea class="form-control" name="task" id="task"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Add new task</button>
		</form>
	</div>

<?php
require_once "footer.php"; ?>