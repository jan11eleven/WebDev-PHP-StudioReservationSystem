<?php 
	include ('../crud/registerUser.php');
	require 'header.php';
	require_once '../crud/registerUser.php';
?>
<main>
	<div class="signup-cont">
		<form action="../crud/registerUser.php" method="POST" >
			<div class="signup"  data-aos="fade-down">
				<div class="signup-title">
					<h1>STAGED</h1>
	 				<h2>Sign-up</h2>
	 				<?php 
	 					if(isset($_GET['error'])){

	 						if($_GET['error'] == 'emptyfield'){
	 							echo '<span class="errorField-signup">Please complete all the fields!</span>';
	 						}

	 						if($_GET['error'] == 'invalidname'){
	 							echo '<span class="errorField-signup">Invalid Name!</span>';
	 						}

	 						if($_GET['error'] == 'invalidemail'){
	 							echo '<span class="errorField-signup">Invalid Email!</span>';
	 						}

	 						if($_GET['error'] == 'invaliduname'){
	 							echo '<span class="errorField-signup">Invalid Username!</span>';
	 						}
	 						
	 					}
	 				?>
				</div>

					<div class="signup-text">
						<div class="text-input">
							<div><label for="name">Name </label><input id ="name" type="text" name="name" title="Please fill out this field" autocomplete="off"></div>
							<div><label>Username</label><input type="text" name="uname" title="Please fill out this field" autocomplete="off"></div>
						</div>

						<div class="text-input">
							<div><label>Email</label><input type="email" name="email" title="Please fill out this field" autocomplete="off"></div>
							<div><label>Password</label><input type="password" name="pass" title="Please fill out this field" autocomplete="off"></div>
						</div>
					</div>

					<div class="signup-button">
						<input class="signup-btn" type="submit" name="signup" value="Sign-up">
						<a href="index.php#home"><button class="cancel-btn" name="cancel">Cancel</button></a>
					</div>
				
			</div>
		</form>
	</div>
</main>
</body>
<script src="../dist/aos.js"></script>
<script type="text/javascript"> AOS.init({ 
duration: 1200, 
})</script>
</html>