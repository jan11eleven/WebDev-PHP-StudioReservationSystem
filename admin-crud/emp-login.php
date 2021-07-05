<?php 
	if(isset($_POST['elogin'])){

		include ('../crud/db.php');

		$ename = $_POST['ename'];
		$epass = $_POST['epass'];

		if(empty($ename) || empty($epass)){
			header('Location: ../admin/index.php?error=emptyfields');
		}

		else{
			$sql = "SELECT * FROM employee WHERE username ='" . $ename . "' AND password ='" . $epass . "'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				session_start();
				$_SESSION['emp'] = $ename;
				$_SESSION['emplogin'] = 'loggedin';
				header('Location: ../admin/index.php?emplogin=success');
				exit();
			} 
			else {
				header('Location: ../admin/index.php?emplogin=failed');
			}
		}
	}
	else {
		header('Location: ../admin/index.php');
	}

 ?>