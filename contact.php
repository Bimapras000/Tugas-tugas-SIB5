<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link active" href="index.html">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="portofolio.php">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact</a>
				</li>
				<li class="nav-item dropdown ml-md-auto">
					 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Menu</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="index.html">Home</a> <a class="dropdown-item" href="portofolio.php">portofolio</a> <a class="dropdown-item" href="contact.php">Contact</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Let's Connect
				</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron1">
				<img alt="Bootstrap Image Preview" src="me1.jpg" class="rounded-circle" style="padding: 20px;"/>
				<?php
				$nama = "Bima Prasetiya";

				echo '<h2>' .$nama. '</h2>';
				?>
				
				<p>
					If you have a project idea in mind, please get in touch.<br>
					I will be happy to discuss ideas with you and how we can work together.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#"> Linkedin </a>
					<a class="btn btn-success btn-large" href="#"> WhatsApp </a>
					<a class="btn btn-info btn-large" href="#"> Telegram </a>
				</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>