<?php
require_once "inc/functions.php";
if(!is_user_logged_in()){
	header("Location: login.php");
	die();
}

$task = !empty($_POST['task']) ? trim($_POST['task']) : null;
if(!$task){
	header("Location: add-task.php?error=Enter your task");
	die();
}
require_once "inc/db.php";
$user_id = get_current_user_id();
$query = "INSERT INTO tasks (task, status, user_id) VALUES ('$task', 0, $user_id)";
$result = mysqli_query($con, $query);
if($result){
	header("Location: task-list.php");
	die();
}else{
	header("Location: add-task.php?error=Insert Error!!");
	die();
}