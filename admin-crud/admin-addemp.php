<?php 
	include ('../crud/db.php');

	$emptyField = "";

	$name = "";
	$gender = "";
	$bday = "";
	$address = "";
	$email = "";
	$username = "";
	$password = "";


	if(isset($_POST['esubmit'])){
		$name = $_POST['ename'];
		$gender = $_POST['egender'];
		$bday = $_POST['ebday'];
		$address = $_POST['eaddress'];
		$email = $_POST['eemail'];
		$username = $_POST['eusername'];
		$password = $_POST['epassword'];

		//unfinished codes below

		if(empty($name) || empty($gender) || empty($bday) || empty($address) || empty($email) || empty($username) || empty($password)){
			$emptyField = '<span class="emptyField">Please complete the fields.</span>';
			header('Location: ../admin/add-employees.php?error=emptyfield');
			exit();
		}

		else if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			header('Location: ../admin/add-employees.php?error=invalidname');
			exit();
		}

		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header('Location: ../admin/add-employees.php?error=invalidemail');
			exit();
		}

		else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
			header('Location: ../admin/add-employees.php?error=invaliduname');
			exit();
		}

		else{
			$sql = "INSERT INTO employee (name, gender, bday, address, email, username, password) VALUES('$name', '$gender', '$bday', '$address', '$email', '$username', '$password')";
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location: ../admin/admin-employees.php?signup=success');
			}else{
				$errorMsg = 'Error '. mysqli_error($conn);
			}
		}
		

	}
 ?>