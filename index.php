<!doctype html>	
<html>	
<head>	
    <title>Example Domain</title>	
    <meta charset="utf-8" />	
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />	
    <meta name="viewport" content="width=device-width, initial-scale=1" />	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>	
	<style>
    </style>    	
</head>	

<body>	
	<div class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<a href="" class="navbar-brand">My website</a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.php?id=info">Info</a>
						<li><a href="index.php?id=login">Login</a>
						<li><a href="index.php?id=register">Register</a>
					</ul>
				</div>
			</div>
	</div>
	
	
	
	<?php
	
	$id = $_GET['id'];
	switch($id) {
		default: include('info.php');
			break;
		case "login": include('login.php');
			break;
		case "register": include('register.php');
			break;
	}
?>
	

	
</body>	
</html>	
