<?php 
	require 'header.php';
	require 'side-bar.php';
	include('../crud/db.php');
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "select * from users where userID=". $id;
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
		}else {
			$errorMsg = 'Could not Find Any Record';
		}
	}
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(!isset($errorMsg)){
			$sql = "update users
			set name = '".$name."',
			email = '".$email."',
			username = '".$username."',
			password = '".$password."'
			where userID=". $id;
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record updated successfully';
				header('Location: admin-user.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
	}
 ?>

<main class="admin-addemp-container">
	<div class="admin-addemp">
		<h1>Edit User</h1>
		<form method="post" action="">
			<div class="addemp-inputs">
				<div class="addemp-inputs-container">
					<div class="addemp-input"><label>Name</label><input type="text" name="name" value="<?php echo $row['name']; ?>"></div>
					<div class="addemp-input"><label>Email</label><input type="email" name="email" value="<?php echo $row['email']; ?>"></div>
					<div class="addemp-input">
						<input class="submit-btn" type="submit" name="submit" value="Submit">
					</div>
				</div>
				<div class="addemp-inputs-container">
					<div class="addemp-input"><label>Username</label><input type="text" name="username" value="<?php echo $row['username']; ?>"></div>
					<div class="addemp-input"><label>Password</label><input type="password" name="password" value="<?php echo $row['password']; ?>"></div>
					<div class="addemp-input">
						<input class="cancel-btn" type="button" value="Cancel" onclick="location.href='admin-user.php';">
					</div>
				</div>
			</div>
		</form>	
	</div>
</main>
</body>
</html>