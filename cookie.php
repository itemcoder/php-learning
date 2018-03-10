<?php
setcookie('php', 'name', time() + 60);
if(!empty($_COOKIE['php'])) {

	session_start();
	session_unset();
	session_destroy();
}