<?php

const POST = [
	'1' => [
		'title' => "HTML",
		'short' => "This is short html",
		'description' => "Aenean viverra rhoncus pede. Fusce egestas elit eget lorem."
	],
	'2' => [
		'title' => "CSS",
		'short' => "This is short CSS",
		'description' => "Aenean viverra rhoncus pede. Fusce egestas elit eget lorem."
	],
	'3' => [
		'title' => "PHP",
		'short' => "This is short PHP",
		'description' => "Aenean viverra rhoncus pede. Fusce egestas elit eget lorem."
	],
	'4' => [
		'title' => "Javascript",
		'short' => "This is short Javascript",
		'description' => "Aenean viverra rhoncus pede. Fusce egestas elit eget lorem."
	],
	'5' => [
		'title' => "NodeJs",
		'short' => "This is short Node Js",
		'description' => "Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Maecenas malesuada."
	],
];

function view($name, $title = null){
	$view_name = $name;
	include("views/master.views.php");

}

function redirect($name){
	header("Location: {$name}.php");
	die();
}

function get_page_id(){
	return (isset($_GET['id']) AND array_key_exists($_GET['id'], POST)) ? $_GET['id'] : 0;
}