<?php
require_once "inc/functions.php";
if ( ! is_user_logged_in() ) {
	header( "Location: login.php" );
	die();
}

$id = !empty($_GET['id']) ? (int)$_GET['id'] : 0;
if(!$id){
	header("Location: task-list.php?error=Id not found");
	die();
}

require_once "inc/db.php";
$user_id = get_current_user_id();

$result = mysqli_query($con, "DELETE FROM tasks WHERE id=$id AND user_id=$user_id");
header("Location: task-list.php?message=Task is deleted");
die();
