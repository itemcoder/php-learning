<?php
$hostname = "localhost";
$username= "root";
$userPassword = "root";
$dbName = "todo";

$con = mysqli_connect($hostname, $username, $userPassword, $dbName);

if(!$con){
	echo " Error!! " . mysqli_connect_error();
	die();
}