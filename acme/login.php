<?php
require_once "inc/functions.php";
if(is_user_logged_in()){
	header('Location: index.php');
}
require_once "inc/header.php";
require_once "inc/menu.php";
require_once "inc/login-form.php";

require_once "inc/footer.php";
