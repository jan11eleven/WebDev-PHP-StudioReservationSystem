<?php 
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>STAGED</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/inputs.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/signup.css">
	<link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../dist/aos.css">
	<link href="../js/jquery-ui.min.css" rel="stylesheet">
</head>
<body>
	<header id="home">
		<div class="header-logo-cont">
			<div class="logo"><h1>Æ</h1></div>
			<h2>STAGED</h2>
		</div>>
		<nav class="header-nav-cont">
			<ul class="nav-links">
				<li><a  class="nav-link" href="index.php#home">Home</a></li>
				<li><a  class="nav-link" href="index.php#reservation">Reservation</a></li>
				<li><a  class="nav-link" href="index.php#about">About</a></li>
			</ul>
		</nav>
		<div class="header-login-cont">
			<?php 
				if(isset($_SESSION['user']) == 'loggedin'){
					echo '<div class="user-cont"><i class="fal fa-user"></i><h1 class="username">' . $_SESSION['username'] . '</h1></div>';
					echo '<form action="../crud/logout.php" method="post"><a href="index.php"><button class="header-btn-logout">Logout</button></a></form>';
				}
				else{
					echo '<a href="login.php"><button class="header-btn-login">Login<div class="slide"><h1>Login</h1></div></button></a>';
					echo '<a href="signup.php"><button class="header-btn-signup">Sign-up</button></a>';
				}
			 ?>
		</div>
	</header>

