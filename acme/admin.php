<?php
require_once "inc/functions.php";
if(!is_user_logged_in()){
	redirect('login.php');
}
if(!is_user_admin()){
	redirect('user.php');
}

require_once "inc/header.php";
require_once "inc/menu.php";
require_once "inc/admin-content.php";


require_once "inc/footer.php";
