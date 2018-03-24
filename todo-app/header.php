<?php
	require_once "inc/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Todo App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
	<h5 class="my-0 mr-md-auto font-weight-normal">Acme</h5>
	<nav class="my-2 my-md-0 mr-md-3">
		<?php
			if(is_user_logged_in()){
			    if(is_admin()){
			        echo "<a class=\"p-2 text-dark\" href=\"user-list.php\">User</a>";
                }
		?>
		<a class="p-2 text-dark" href="task-list.php">My task List</a>
		<a class="p-2 text-dark" href="add-task.php">Add New Task</a>
		<?php } ?>
	</nav>
	<?php if(is_user_logged_in()){ ?>
	<a class="btn btn-outline-primary" href="logout.php">Logout</a>
	<?php }else{ ?>
		<a class="btn btn-outline-primary" href="login.php">Login</a>
		<a class="btn btn-outline-primary" href="registration.php">Sign up</a>
	<?php } ?>
</div>
