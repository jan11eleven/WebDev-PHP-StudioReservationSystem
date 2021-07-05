
<section class="side-bar-container">
	<div class="side-title">
		<div class="logo"><h1>Æ</h1></div><h2>staged</h2>
	</div>
		<?php 
		if(isset($_SESSION['adminlogin']) == 'logged in' || isset($_SESSION['emplogin']) == 'loggedin'){
			echo '
				<div class="empty-div">
			
				</div>

				<div class="side-nav-bar">
					<ul class="side-nav-links">
						<a href="admin-index.php"><li class="side-nav-link">Home</li></a>	
						<a href="admin-reservation.php"><li class="side-nav-link">Reservation</li></a>
						<a href="admin-user.php"><li class="side-nav-link">Users</li></a>
						<a href="admin-employees.php"><li class="side-nav-link">Employees</li></a>	
						<a href="add-employees.php"><li class="side-nav-link">Add Employees</li></a>		
					</ul>
				</div>

				<div class="side-buttons-bar">
					<div class="side-buttons">	
						<form action="../admin-crud/admin-logout.php" method="post">
							<a class="link-logout"><button class="side-logout-button">Logout</button></a>
							<div class="hover-round"></div>
						</form>
					</div>
					<div class="side-buttons">	
						<h1></h1>
						<h2></h2>
					</div>
				</div>';
		}
		else{
			echo '<div class="side-inputs">
					<form action="../admin-crud/admin-login.php" method="post">
						<div class="admin-login side-input-login">
							<h1> Admin Login</h1>';
							
								if(isset($_GET['error']) == 'emptyfields'){
					 				echo '<span class="errorField-login">Please complete all the fields!</span>';
					 			}
					 echo '			
						</div>

						<div class="admin-login side-input-text">
							<div><label for="aname">Username</label><input id="aname" type="text" name="aname"></div>
							<div><label for="apass">Password</label><input id="apass" type="Password" name="apass"></div>
						</div>

						<div class="admin-login side-input-buttons">
							<input id="asubmit" type="submit" name="alogin" value="Login">
						</div>
					</form>
						<!-- employee -->
					<form action="../admin-crud/emp-login.php" method="post">
						<div class="emp-login side-input-login">
							<h1> Employee Login</h1>
						</div>

						<div class="emp-login side-input-text">
							<div><label for="aname">Username</label><input id="aname" type="text" name="ename"></div>
							<div><label for="apass">Password</label><input id="apass" type="Password" name="epass"></div>
						</div>

						<div class="emp-login side-input-buttons">
							<input id="asubmit" type="submit" name="elogin" value="Login">
						</div>
					</form>
					<!--  -->
				</div>

				<div class="side-login">
					<div class="side-login-text"><h1>Login as:</h1></div>
					<div class="side-login-button">
						<button class="admin">Admin</button>
						<button class="employee">Employee</button>
						<div class="slide1"></div>
						<div class="slide2"></div>
					</div>
				</div>';
		}
		
		?>

		
</section>
<script type="text/javascript">
	const admin = document.querySelector('.admin');
	const emp = document.querySelector('.employee');

	const adminForm = document.querySelectorAll('.admin-login');
	const empForm = document.querySelectorAll('.emp-login');

	emp.addEventListener('click', () => {
		adminForm.forEach(admin => admin.classList.add('admin-login-trans-out'));
		setTimeout(() => {
			adminForm.forEach(admin => admin.classList.add('admin-login-off'));
			adminForm.forEach(admin => admin.classList.remove('admin-login-on'));
			adminForm.forEach(admin => admin.classList.remove('admin-login-trans-in'));
			empForm.forEach(emp => emp.classList.add('emp-login-on'));
			empForm.forEach(emp => emp.classList.remove('emp-login-off'));
			empForm.forEach(emp => emp.classList.remove('emp-login-trans-out'));
		}, 1000);
		
		setTimeout(() => {
			empForm.forEach(emp => emp.classList.add('emp-login-trans-in'));
			console.log(adminForm);
			console.log(empForm);
		}, 1500);

	});

	admin.addEventListener('click', () => {
		empForm.forEach(emp => emp.classList.add('emp-login-trans-out'));
		setTimeout(() => {
			empForm.forEach(emp => emp.classList.add('emp-login-off'));
			empForm.forEach(emp => emp.classList.remove('emp-login-on'));
			empForm.forEach(emp => emp.classList.remove('emp-login-trans-in'));
			adminForm.forEach(admin => admin.classList.add('admin-login-on'));
			adminForm.forEach(admin => admin.classList.remove('admin-login-off'));
			adminForm.forEach(admin => admin.classList.remove('admin-login-trans-out'));
		}, 1000);
		
		setTimeout(() => {
			adminForm.forEach(admin => admin.classList.add('admin-login-trans-in'));
			console.log(adminForm);
			console.log(empForm);
		}, 1500);

	});
</script>
<script type="text/javascript">
	//create object date
	window.setInterval(function(){
		let dateNow = new Date();
		//get date
		const h1 = document.querySelector('.side-buttons h1');
		let month = dateNow.getMonth();
		let date = dateNow.getDate();
		let year = dateNow.getFullYear();
		let day = dateNow.getDay();

		const monthText = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		const dayText = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

		
		h1.innerText = `${dayText[day]}: ${monthText[month]} ${date}, ${year}`;

		//get time
		const h2 = document.querySelector('.side-buttons h2');
		let hours = dateNow.getHours();
		let minutes = dateNow.getMinutes();
		let seconds = dateNow.getSeconds();
		let minutesText;

		if(minutes < 10){
			minutesText = `0${minutes}`;
		}
		else{
			minutesText = `${minutes}`;
		}

		h2.innerText = `${hours}:${minutesText}:${seconds}`
	}, 1000);
	
</script>
<script type="text/javascript">
		
</script>