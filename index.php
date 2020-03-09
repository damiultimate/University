<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Harrison University</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<header id="header">
		<div class="container">
			<a href="index.html" id="logo" title="HarrisonHighSchool">HarrisonHighSchool</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="courses.php">Courses</a></li>
					<?php if(preg_match("/administrator/i",$_SESSION["username"])){
					echo '<li><a href="applications.php">Applications</a></li>';
					}
					?>
					<li><a href="events.php">Events</a></li>
 				</ul>
				<ul>
				<?php if(empty($_SESSION["username"])){
					echo '<li><a href="signup.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register</a></li>
					<li><a href="login.php">Login</a></li>';
				}else{
					
					echo '<li><a href="details.php">Clearance</a></li>
					<li><a href="logout.php">Logout</a></li>';
				} ?>
					<li><a href="#fancy" class="get-contact">Contact</a></li>
   				</ul>
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	<!-- / header -->
	
	<div class="slider">
		<ul class="bxslider">
			<li>
				<div class="container">
					<div class="info">
						<h2 style="font-weight:900;">We're the<br><span>Best University Of All Time</span></h2>
						<h2 style="font-weight:900;">Winning 28 Awards</h2>
					</div>
				</div>
				<!-- / content -->
			</li>
			<li>
				<div class="container">
					<div class="info">
						<h2 style="font-weight:900;">We're the<br><span>Best University Of All Time</span></h2>
						<h2 style="font-weight:900;">Winning 28 Awards</h2>
					</div>
				</div>
				<!-- / content -->
			</li>
			<li>
				<div class="container">
					<div class="info">
						<h2 style="font-weight:900;">We're the<br><span>Best University Of All Time</span></h2>
						<h2 style="font-weight:900;">Winning 28 Awards</h2>
					</div>
				</div>
				<!-- / content -->
			</li>
		</ul>
		<div class="bg-bottom"></div>
	</div>
	
	<section class="posts">
		<div class="container">
			<article>
				<div class="pic"><img width="121" src="images/2.png" alt=""></div>
				<div class="info">
					<h3>The best learning methods</h3>
					<p>We strive to make our curriculum as easy to understand as possible, we have good lecturers beautifully designed halls and lecture rooms for full comfort of a student while in a lecture. </p>
				</div>
			</article>
			<article>
				<div class="pic"><img width="121" src="images/3.png" alt=""></div>
				<div class="info">
					<h3>Awesome results of our students</h3>
					<p>We teach good reading habits and many more extra curricular courses for betterment of student's grades too... what more could a student wish for?</p>
				</div>
			</article>
		</div>
		<!-- / container -->
	</section>

	<section class="news">
		<div class="container">
			<h2>Latest news</h2>
			<article>
				
				<div class="info">
					<h4>Admission in progress </h4>
					<p class="date">19 JAN 2019, VICE CHANCELLOR</p>
					<p>The admission progress is now fastly in progress and we're admitting students into harrison university. Apply toay.</p>
					<a class="more" href="#"></a>
				</div>
			</article>
			<article>
				
				<div class="info">
					<h4>Admission Portal Opened</h4>
					<p class="date">11 JAN 2019, VICE CHANCELLOR</p>
					<p>The Admission portal have been opened for aspirants who will be willing to study at harrison university</p>
					<a class="more" href="#"></a>
				</div>
			</article>
			<div class="btn-holder" style="background: white none repeat scroll 0% 0%;
width: 10%;
margin-left: 42%;
padding-top: 20px;
text-align: center;
margin: auto;
padding: auto;
color: rgb(23, 65, 185);
border-radius: 5px;
font-weight: 500;"><a href="signup.php">Apply</a></div>
			</div>
		</div>
		<!-- / container -->
	</section>

	<section class="events">
		<div class="container">
			<h2>Upcoming events</h2>
			<article>
				<div class="current-date">
					<p>Jan</p>
					<p class="date">15</p>
				</div>
				<div class="info">
					<p>Convocation Ceremony</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<article>
				<div class="current-date">
					<p>Jan</p>
					<p class="date">17</p>
				</div>
				<div class="info">
					<p>Convocation Ceremony</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<article>
				<div class="current-date">
					<p>Jan</p>
					<p class="date">25</p>
				</div>
				<div class="info">
					<p>Matriculation Ceremony</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<article>
				<div class="current-date">
					<p>Jan</p>
					<p class="date">29</p>
				</div>
				<div class="info">
					<p>Matriculation Ceremony</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<div class="btn-holder">
				<a class="btn blue" href="#">See all upcoming events</a>
			</div>
		</div>
		<!-- / container -->
	</section>
	<div class="container">
		<a href="#fancy" class="info-request">
			<span class="holder">
				<span class="title">Request information</span>
				<span class="text">Do you have some questions? Fill the form and get an answer!</span>
			</span>
			<span class="arrow"></span>
		</a>
	</div>

	<footer id="footer">
		<div class="container">
			
		<p class="copy">Copyright 2019 Harrison University</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	<div id="fancy">
		<h2>Request information</h2>
		<form action="#">
			<div class="left">
				<fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
				<fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
				<fieldset class="subject"><select><option>Choose subject...</option><option>Choose subject...</option><option>Choose subject...</option></select></fieldset>
			</div>
			<div class="right">
				<fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" type="submit">Send request</button>
			</div>
		</form>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
