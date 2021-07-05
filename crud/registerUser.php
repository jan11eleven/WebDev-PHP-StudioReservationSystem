<?php 
	include ('db.php');

	$emptyField = "";

	$name = "";
	$email = "";
	$username = "";
	$password = "";


	if(isset($_POST['signup'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['uname'];
		$password = $_POST['pass'];


		if(empty($name) || empty($email) || empty($username) || empty($password)){
			$emptyField = '<span class="emptyField">Please complete the fields.</span>';
			header('Location: ../user/signup.php?error=emptyfield&name=' . $name . '&email=' . $email . '&uname=' . $username);
			exit();
		}

		else if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			header('Location: ../user/signup.php?error=invalidname&email=' . $email . '&uname=' . $username);
			exit();
		}

		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header('Location: ../user/signup.php?error=invalidemail&name=' . $name . '&uname=' . $username);
			exit();
		}

		else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
			header('Location: ../user/signup.php?error=invaliduname&name=' . $name . '&email=' . $email);
			exit();
		}

		else{
			$sql = "INSERT INTO users (name, email, username, password) VALUES('$name', '$email', '$username', '$password')";
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location: ../user/login.php?signup=success');
				
			}else{
				$errorMsg = 'Error '. mysqli_error($conn);
			}
		}
		

	}

	else if(isset($_POST['cancel'])){
		header('Location: ../user/index.php');
		exit();
	}
 ?>