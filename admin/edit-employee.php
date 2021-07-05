<?php 
	require 'header.php';
	require 'side-bar.php';
	include('../crud/db.php');
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "select * from employee where empid=".$id;
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
		}else {
			$errorMsg = 'Could not Find Any Record';
		}
	}
	if(isset($_POST['esubmit'])){
		$ename = $_POST['ename'];
		$egender = $_POST['egender'];
		$ebday = $_POST['ebday'];
		$eaddress = $_POST['eaddress'];
		$eemail = $_POST['eemail'];
		$eusername = $_POST['eusername'];
		$epassword = $_POST['epassword'];
		if(!isset($errorMsg)){
			$sql = "update employee
			set name = '".$ename."',
			gender = '".$egender."',
			bday = '".$ebday."',
			address = '".$eaddress."',
			email = '".$eemail."',
			username = '".$eusername."',
			password = '".$epassword."'
			where empid=".$id;
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record updated successfully';
				header('Location: admin-employees.php?update=success');
				exit();
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
	}
 ?>

<main class="admin-addemp-container">
	<div class="admin-addemp">
		<h1>Edit Employee</h1>
		<form method="post" action="">
			<div class="addemp-inputs">
				<div class="addemp-inputs-container">
					<div class="addemp-input"><label>Name</label><input type="text" name="ename" value="<?php echo $row['name']; ?>"></div>
					<div class="addemp-input"><label>Gender</label><select name="egender" id="egender"><option selected="selected">Male</option><option>Female</option></select></div>
					<div class="addemp-input"><label>Birthday</label><input type="text" name="ebday" value="<?php echo $row['bday']; ?>"></div>
					<div class="addemp-input"><label>Address</label><input type="text" name="eaddress" value="<?php echo $row['address']; ?>"></div>
				</div>
				<div class="addemp-inputs-container">
					<div class="addemp-input"><label>Email</label><input type="email" name="eemail" value="<?php echo $row['email']; ?>"></div>
					<div class="addemp-input"><label>Username</label><input type="text" name="eusername" value="<?php echo $row['username']; ?>"></div>
					<div class="addemp-input"><label>Password</label><input type="password" name="epassword" value="<?php echo $row['password']; ?>"></div>
					<div class="addemp-input">
						<input class="submit-btn" type="submit" name="esubmit" value="Submit">
					</div>
				</div>
			</div>
		</form>	
	</div>
</main>
</body>
</html>