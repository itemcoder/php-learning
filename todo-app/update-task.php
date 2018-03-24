<?php
require_once "inc/functions.php";
if ( ! is_user_logged_in() ) {
	header( "Location: login.php" );
	die();
}

$task = ! empty( $_POST['task'] ) ? trim( $_POST['task'] ) : null;
$id   = ! empty( $_POST['id'] ) ? trim( $_POST['id'] ) : 0;
if ( ! $task && !$id) {
	header( "Location: edit-task.php?error=Enter your task And id" );
	die();
}
require_once "inc/db.php";
$user_id = get_current_user_id();
$result  = mysqli_query( $con, "UPDATE tasks SET task='$task' WHERE id=$id AND user_id = $user_id" );
if ( $result ) {
	header( "Location: task-list.php" );
	die();
} else {
	header( "Location: edit-task.php?id={$id}" );
	die();
}