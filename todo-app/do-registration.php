<?php
require_once "inc/functions.php";
require_once "inc/db.php";

if(!empty($_POST['name']) && $_POST['email'] && $_POST['password']){
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	$query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
	$result = mysqli_query($con, $query);
	if($user_id = mysqli_insert_id($con)){
		$_SESSION['user_id'] = $user_id;
		header("Location: task-list.php");
		die();
	}

}else{
	header("Location: registration.php");
	die();
}