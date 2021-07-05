<?php 
	if(isset($_POST['login'])){

		include ('db.php');

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			header('Location: ../user/login.php?error=emptyfields');
		}

		else{
			$sql = "SELECT * FROM users WHERE username ='" . $username . "' AND password ='" . $password . "'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['user'] = 'loggedin';
				header('Location: ../user/index.php?login=success');
				exit();
			} 
			else {
				header('Location: ../user/login.php?login=wrongpass');
				exit();
			}
		}
	}
	else {
		header('Location: ../user/login.php');
		exit();
	}

 ?>