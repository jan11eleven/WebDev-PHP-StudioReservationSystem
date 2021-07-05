<?php 
	require 'header.php'
?>
<main>
	<form action="../crud/accountLogin.php" method="POST">	 
	 	<div class="login-cont">
	 		<div class="login" data-aos="fade-up">

	 			<div class="login-texts">
	 				<h1>STAGED</h1>
	 				<h2>Login</h2>
		 			<?php 
		 				if(isset($_GET['error'])){
		 					if($_GET['error'] == 'emptyfields'){
		 						echo '<span class="errorField-login">Please complete all the fields!</span>';
		 					}

		 					if($_GET['error'] == 'notloggedin'){
		 						echo '<span class="errorField-login">Please login first.</span>';
		 					}
		 				}
		 				if(isset($_GET['signup']) == 'success'){
		 					echo '<span class="success-login">Register successful.<br>Please login your account.</span>';
		 				}

		 				if(isset($_GET['login']) == 'wrongpass'){
		 					echo '<span class="errorField-login">Wrong Credentials.</span>';
		 				}
		 			 ?>
	 			</div>

		 		<div class="login-inputs">
				
			 			<div><label>Username </label><input type="text" name="username" title="Please fill out this field" autocomplete="off"></div>
			 			<div><label>Password </label><input type="password" name="password" title="Please fill out this field" autocomplete="off"></div>
			 			<div class="login-sl">
			 				<input class="login-btn" type="submit" name="login" value="Login">
			 			</div>

		 		</div>
	 		</div>
	 	</div>
 	</form>
</main>
</body>
<script src="../dist/aos.js"></script>
<script type="text/javascript"> AOS.init({ 
duration: 1200, 
})</script>
</html>