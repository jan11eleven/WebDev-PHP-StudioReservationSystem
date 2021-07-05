<?php 
	require 'header.php';
 ?>
<main>
	<div class="index-cover">
		<h1 data-aos="fade-up">Notes now, Codes later</h1>
		<h2 data-aos="fade-up">Reserve Now!</h2>
	</div>
	<div class="index-steps">
		<div class="step-item"  data-aos="fade-down">
			<img src="../imgs/step1.jpg" width="100%" height="80%">
			<p>Sign-up</p>
		</div>

		<div class="step-item" data-aos="fade-down">
			<img src="../imgs/step2.jpg" width="100%" height="80%">
			<p>Login</p>
		</div>

		<div class="step-item" data-aos="fade-down">
			<img src="../imgs/step3.jpg" width="100%" height="80%">
			<p>Reserve a date</p>
		</div>

		<div class="step-item" data-aos="fade-down">
			<img src="../imgs/step4.jpg" width="100%" height="80%">
			<p>Wait for schedule</p>
		</div>

		<div class="step-item" data-aos="fade-down">
			<img src="../imgs/step5.jpg" width="100%" height="80%">
			<p>Enjoy!</p>
		</div>
	</div>
	<div class="index-studio" id="reservation">
		<div class="studio"  data-aos="fade-right">
			<h1>Standard Studio</h1>
			<div class="img-container"><img class="studio-img" src="../imgs/studio1.jpg" width="100%" height="100%"></div>
			<ul class="studio-features">
				<li>1 Microphone</li>
				<li>1 Electric Guitar</li>
				<li>1 Bass Guitar</li>
				<li>1 Drum Set</li>
			</ul>
		</div>
		<div class="studio"  data-aos="fade-left">
			<h1>Premium Studio</h1>
			<div class="img-container"><img class="studio-img" src="../imgs/studio2.jpg" width="100%" height="100%"></div>
			<ul class="studio-features">
				<li>2 Microphone</li>
				<li>2 Electric Guitar</li>
				<li>1 Electric Guitar Effects</li>
				<li>1 Bass Guitar</li>
				<li>1 Drum Set</li>
			</ul>
		</div>
	</div>
	<form action="../crud/reserveDate.php" method="POST">

		<div class="index-reserve" data-aos="fade-down">
			<div class="reserve-inputs">
				<div class="reserve-input">
					<label>Studio Type:</label>
					<select name="studio-type" id="studio-type">
						<option selected="selected">Standard Studio</option>
						<option>Premium Studio</option>
					</select>
				</div>

				<div class="reserve-input">
					<label>Time:</label>
					<select name="studio-time" id="studio-time">
						<option selected="selected">12:00 PM</option>
						<option>1:00 PM</option>
						<option>2:00 PM</option>
						<option>3:00 PM</option>
						<option>4:00 PM</option>
						<option>5:00 PM</option>
						<option>6:00 PM</option>
					</select>
				</div>

				<div class="reserve-input">
					<label>Duration: </label>
					<select name="studio-duration" id="studio-duration">
						<option selected="selected">1 Hour</option>
						<option>2 Hours</option>
						<option>3 Hours</option>
						<option>4 Hours</option>
					</select>
				</div>

				<div class="reserve-input">
					<label>Date: </label>
					<input class="sched-date" type="text" id="datepicker" name="date" placeholder="Click here" required autocomplete="off">
				</div>
			</div>

			<div class="reserve-buttons">
				<div class="reserve-button">
					<input name="submit-date" class="btn-reserve" type="submit">
				</div>
			</div>
		</div>	
	</form>
	
	<div class="index-about" id="about">
		<div class="about">
			<h1>Service</h1>
			<ul>
				<li>Relaxing Studio</li>
				<li>Good sound quality</li>
				<li>Sound recording</li>
			</ul>
		</div>

		<div class="about">
			<h1>Goal</h1>
			<p>To provide the best service and experience for the people who aspire to be a musician.</p>
		</div>

		<div class="about">
			<h1>Contacts</h1>
			<ul>
				<li>Address: <br><span>#10 Greed Island St. Spiders York New City</span></li>
				<li>Contact No: <br><span>09123456789</span></li>
				<li>Look For: <br><span>Ging Freecs</span></li>
			</ul>
		</div>
	</div>

	<div class="index-contacts" id="contact">
		<div class="contact">
			<a href="https://www.facebook.com/janeleven.salvador?ref=bookmarks" target="_blank"><i title="Facebook" class="fab fa-facebook"></i></a>
			<a href="https://www.instagram.com/jan11eleven/" target="_blank"><i title="Instagram" class="fab fa-instagram"></i></a>
			<a href="https://twitter.com/JanEleven11" target="_blank"><i title="Twitter" class="fab fa-twitter-square"></i></a>
		</div>
	</div>

	<div class="index-credits">
		<div class="credit">
			<p>created by: <a href="#" title="me" >jan eleven salvador</a></p>
		</div>
	</div>
</main>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
<script src="../dist/aos.js"></script>
<script>$("#datepicker").datepicker();</script>
<script type="text/javascript"> AOS.init({ 
duration: 1200, 
})</script>
</html>