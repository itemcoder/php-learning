<?php
require_once "inc/functions.php";
$view = "home";
$title = "Home title";
if(isset($_GET['page'])) {
	if ( $_GET['page'] == "details" ) {
		$view  = "details";
		$title = "This is detail page title";
	} elseif ( $_GET['page'] == "contact" ) {
		$view  = "contact";
		$title = "Contact with us";
	}
}


view($view, $title);
