<?php
require_once "inc/functions.php";
if(is_user_logged_in()){
	session_unset();
	session_destroy();
	header('Location: login.php');
	die();
}else{
	header('Location: index.php');
	die();
}