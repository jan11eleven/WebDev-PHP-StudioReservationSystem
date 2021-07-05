<?php 
	require 'header.php';
	require 'side-bar.php';
	include('../crud/db.php');
	require_once '../admin-crud/admin-addemp.php';
 ?>

<main class="admin-addemp-container">
	<div class="admin-addemp">
		<h1>Add Employee</h1>
		<form method="post" action="../admin-crud/admin-addemp.php">
			<div class="addemp-inputs">
				<div class="addemp-inputs-container">
					<div class="addemp-input"><label>Name</label><input type="text" name="ename"></div>
					<div class="addemp-input"><label>Gender</label><select name="egender" id="egender"><option selected="selected">Male</option><option>Female</option></select></div>
					<div class="addemp-input"><label>Birthday</label><input class="sched-date" type="text" id="datepicker" name="ebday" placeholder="Click here" required autocomplete="off"></div>

					<div class="addemp-input"><label>Address</label><input type="text" name="eaddress"></div>
				</div>
				<div class="addemp-inputs-container">
					<div class="addemp-input"><label>Email</label><input type="email" name="eemail"></div>
					<div class="addemp-input"><label>Username</label><input type="text" name="eusername"></div>
					<div class="addemp-input"><label>Password</label><input type="password" name="epassword"></div>
					<div class="addemp-input">
						<input class="submit-btn" type="submit" name="esubmit" value="Submit">
						<input class="reset-btn" type="reset" value="Reset">
					</div>
				</div>
			</div>
		</form>	
	</div>
</main>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
</body>

</html>