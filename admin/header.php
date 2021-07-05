<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../admin-css/admin-header.css">
	<link rel="stylesheet" type="text/css" href="../admin-css/side-bar.css">
	<link rel="stylesheet" type="text/css" href="../admin-css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="../admin-css/reservation.css">
	<link rel="stylesheet" type="text/css" href="../admin-css/add-emp.css">
	<link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.css">
	<link href="../js/jquery-ui.min.css" rel="stylesheet">
</head>
<body>
	<header class="header-container">
		<div class="header-logo">
			<h1>Dashboard</h1>
		</div>

		<div class="header-user">
			
			<?php 
				if(isset($_SESSION['adminlogin']) == 'loggedin'){
					echo '<h1>Welcome ' . $_SESSION['admin'] . '!</h1>';
				}
				else{
					echo '<h1>Welcome!</h1>';
				}
			 ?>
		</div>
	</header>