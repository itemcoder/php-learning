<?php
session_start();

function is_user_logged_in(){
	if(!empty($_SESSION['user_id'])){
		return true;
	}
	return false;
}

function get_current_user_id(){
	return isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
}

function is_admin(){
	if(!empty($_SESSION['type']) && $_SESSION['type'] == "admin"){
		return true;
	}
	return false;
}

function check_user_authentication($email, $password){
	require_once "db.php";
	$query = "SELECT id, type FROM users WHERE email= '$email' and password='$password'";
	$result = mysqli_query($con, $query);
	if($row = mysqli_fetch_assoc($result)){
		$_SESSION["user_id"] = $row['id'];
		if($row['type']){
			$_SESSION["type"] = "admin";
		}
		return true;
	}
	return false;
}