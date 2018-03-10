<?php
require_once "inc/functions.php";
$email = trim($_POST['email']);
$password = trim($_POST['password']);
if($email && $password){
	if(check_user_authentication($email, $password)){
		if(is_user_admin()){
			redirect('admin.php');
		}else{
			redirect('user.php');
		}
	}else{
		redirect('login.php?error=Email or password error!!');
	}
}else{
	redirect('login.php?error=Please enter all variable');
}

