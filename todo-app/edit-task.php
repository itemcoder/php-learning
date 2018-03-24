<?php
require_once "inc/functions.php";
if(!is_user_logged_in()){
	header("Location: login.php");
	die();
}

$id = !empty($_GET['id']) ? (int)$_GET['id'] : 0;
if(!$id){
	header("Location: task-list.php?error=Id is not valid");
	die();
}
require_once "inc/db.php";
$user_id = get_current_user_id();
$result = mysqli_query($con, "SELECT task FROM tasks WHERE id=$id AND user_id = $user_id");
$task = null;
if($result->num_rows){
	$row = mysqli_fetch_assoc($result);
	$task = $row['task'];
}
require_once "header.php";
?>
	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
		<h1 class="display-4">Edit your task</h1>
		<p class="lead"></p>
	</div>

	<div class="container">
		<form method="post" action="update-task.php">
			<div class="form-group">
				<label for="task">Enter your task</label>
				<textarea class="form-control" name="task" id="task"><?php echo $task; ?></textarea>
			</div>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<button type="submit" class="btn btn-primary">Update task</button>
		</form>
	</div>

<?php
require_once "footer.php"; ?>