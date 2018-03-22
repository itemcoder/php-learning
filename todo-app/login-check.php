<?php
require_once "inc/functions.php";
$email = trim($_POST['email']);
$password = trim($_POST['password']);
if($email && $password){
	if(check_user_authentication($email, $password)){
		header("Location: task-list.php");
	}else{
		redirect('login.php?error=Email or password error!!');
	}
}else{
	redirect('login.php?error=Please enter all variable');
}

