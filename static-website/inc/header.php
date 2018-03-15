<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Our New static site</title>
	<link href="./../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css?v=6" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="header">
		<a href="index.php">Home</a> | <a href="?page=contact">Contact us</a>
		<p><?php echo $title; ?></p>
	</div>
