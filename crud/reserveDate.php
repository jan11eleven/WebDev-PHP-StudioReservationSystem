<?php 
	session_start();
	if(isset($_SESSION['user']) == 'loggedin'){
		include 'db.php';
		$studio = $_POST['studio-type'];
		$time = $_POST['studio-time'];
		$duration = $_POST['studio-duration'];
		$date = $_POST['date'];
		if(isset($_POST['submit-date'])){
			$sql = "INSERT INTO schedules (studio_type, time, duration, date) VALUES('$studio', '$time', '$duration', '$date')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: ../user/index.php?schedule=success');
			}else{
				$errorMsg = 'Error '. mysqli_error($conn);
			}
		}
	}

	else{
		header('Location: ../user/login.php?error=notloggedin');
	}

 ?>