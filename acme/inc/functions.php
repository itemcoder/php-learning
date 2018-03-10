<?php
session_start();
const DATA = array(
	'admin' => array(
		'email' => 'admin@gmail.com',
		'password' => 'admin'
	),
	'user' => array(
		'email' => 'user@gmail.com',
		'password' => 'user'
	)
);


function check_user_authentication($email, $password){
	foreach (DATA as $user){
		if($user['email'] === $email && $user['password'] === $password){
			$_SESSION['email'] = $email;
			return true;
			break;
		}
	}
	return false;
}

function is_user_logged_in(){
	if(!empty($_SESSION['email'])){
		return true;
	}
	return false;
}

function is_user_admin(){
	if(isset($_SESSION['email']) && $_SESSION['email'] === "admin@gmail.com"){
		return true;
	}

	return false;
}

function redirect($url){
	header('Location: '.$url);
	die();
}

function get_user_email(){
	return isset($_SESSION['email']) ? $_SESSION['email'] : '';
}