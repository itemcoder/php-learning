<?php
require_once "inc/functions.php";
if(!is_user_logged_in()){
	header("Location: login.php");
}
require_once "inc/header.php";
require_once "inc/menu.php";
require_once "inc/user-content.php";


require_once "inc/footer.php";
