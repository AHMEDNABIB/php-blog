<?php
require 'config/database.php';
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Blog Website</title>
		<link rel="stylesheet" href="../css/style.css" />
		<link
			rel="stylesheet"
			href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
		/>
	</head>
	<body>
		<nav>
			<div class="container nav__container">
				<a href="<?php echo ROOT_URL?>" class="nav__logo">Blog</a>
				<ul class="nav__items">
					<li><a href=" <?php echo ROOT_URL?>blog.php">Blog</a></li>
					<li><a href=" <?php echo ROOT_URL?>about.php">About</a></li>
					<li><a href=" <?php echo ROOT_URL?>services.php">Services</a></li>
					<li><a href=" <?php echo ROOT_URL?>contact.php">Contact</a></li>
					<li><a href=" <?php echo ROOT_URL?>signin.php">Signin</a></li>

					<li class="nav__profile">
						<div class="avatar">
							<img src="./images/avatar1.jpg" alt="" srcset="" />
						</div>
						<ul>
							<li><a href=" <?php echo ROOT_URL?>admin/index.php">Dashboard</a></li>
							<li><a href=" <?php echo ROOT_URL?>logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
				<button class="open__nav-btn">
					<i class="uil uil-bars"></i>
				</button>
				<button class="close__nav-btn">
					<i class="uil uil-multiply"></i>
				</button>
			</div>
		</nav>