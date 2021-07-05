<?php 
	if(isset($_POST['alogin'])){

		include ('../crud/db.php');

		$aname = $_POST['aname'];
		$apass = $_POST['apass'];

		if(empty($aname) || empty($apass)){
			header('Location: ../admin/index.php?error=emptyfields');
		}

		else{
			$sql = "SELECT * FROM admin WHERE username ='" . $aname . "' AND password ='" . $apass . "'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				session_start();
				$_SESSION['admin'] = $aname;
				$_SESSION['adminlogin'] = 'loggedin';
				header('Location: ../admin/admin-index.php?adminlogin=success');
				exit();
			} 
			else {
				header('Location: ../admin/index.php?adminlogin=failed');
			}
		}
	}
	else {
		header('Location: ../admin/index.php');
	}

 ?>