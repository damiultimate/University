<?php
session_start();
error_reporting(0);
$data=array();
$data2=array();
$servername = "localhost";
$username = "administrator";
$password = "administrator";
$dbname = "test";
// Create connection
$conn = new mysqli
($servername, $username,
$password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed:
" . $conn->connect_error);
}
// sql to create table




$sql = "SELECT id,registrationnumber,surname,email,regdetails,perdetails,resdetails,utmdetails,department FROM registration LIMIT 1000";
$result=$conn->query($sql);
$data3=array();

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$data[] = $row["registrationnumber"];
	$data2[] = $row["department"];
	$data3[] = $row["id"];
	
	
	
}

$conn->close();
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
			<a href="index.php" id="logo" title="HarrisonHighSchool">HarrisonHighSchool</a>
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
					echo '<li><a href="signup.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register</a></li>
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
	
	<div class="divider"></div>
	
	<div class="content">
		<div class="container">

			<div class="main-content">
				<h1>Upcoming events</h1>
				<section class="posts-con">
					<?php 
					$i=0;
					for($i=0;$i<count($data); $i++){
						
					echo '<article>
						
						<div class="info">
							<h3>'.$data[$i].' Just Applied</h3>
							<p class="info-line"><span class="time"></span><span class="place">Harrison University</span></p>
							<a href="details.php?value='.$data3[$i].'"><p>'.$data[$i].' just applied and chose '.$data2[$i].' as their department</p></a>
						</div>
					</article>';
					
					}
					$i++;
					?>
				</section>
			</div>
			
			<aside id="sidebar">
				<div class="widget clearfix calendar">
					<h2>Event calendar</h2>
					<div class="head">
						<a class="prev" href="#"></a>
						<a class="next" href="#"></a>
						<h4>Jan 2019</h4>
					</div>
					<div class="table">
						<table>
							<tr>
								<th class="col-1">Mon</th>
								<th class="col-2">Tue</th>
								<th class="col-3">Wed</th>
								<th class="col-4">Thu</th>
								<th class="col-5">Fri</th>
								<th class="col-6">Sat</th>
								<th class="col-7">Sun</th>
							</tr>
							<tr>
								<td class="col-1 disable"><div>31</div></td>
								<td class="col-2"><div>1</div></td>
								<td class="col-3"><div>2</div></td>
								<td class="col-4"><div>3</div></td>
								<td class="col-5 archival"><div>4</div></td>
								<td class="col-6"><div>5</div></td>
								<td class="col-7"><div>6</div></td>
							</tr>
							<tr>
								<td class="col-1"><div>7</div></td>
								<td class="col-2"><div>8</div></td>
								<td class="col-3 archival"><div>9</div></td>
								<td class="col-4"><div>10</div></td>
								<td class="col-5"><div>11</div></td>
								<td class="col-6"><div>12</div></td>
								<td class="col-7"><div>13</div></td>
							</tr>
							<tr>
								<td class="col-1"><div>14</div></td>
								<td class="col-2 upcoming"><div><div class="tooltip"><div class="holder">
									<h4>Omnis iste natus error sit voluptatem dolor</h4>
									<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique.</p>
								</div></div>15</div></td>
								<td class="col-3"><div>16</div></td>
								<td class="col-4 upcoming"><div><div class="tooltip"><div class="holder">
									<h4>Omnis iste natus error sit voluptatem dolor</h4>
									<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique.</p>
								</div></div>16</div></td>
								<td class="col-5"><div>18</div></td>
								<td class="col-6"><div>19</div></td>
								<td class="col-7"><div>20</div></td>
							</tr>
							<tr>
								<td class="col-1"><div>21</div></td>
								<td class="col-2"><div>22</div></td>
								<td class="col-3"><div>23</div></td>
								<td class="col-4"><div>24</div></td>
								<td class="col-5 upcoming"><div><div class="tooltip"><div class="holder">
									<h4>Omnis iste natus error sit voluptatem dolor</h4>
									<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique.</p>
								</div></div>25</div></td>
								<td class="col-6"><div>26</div></td>
								<td class="col-7"><div>27</div></td>
							</tr>
							<tr>
								<td class="col-1"><div>28</div></td>
								<td class="col-2 upcoming"><div><div class="tooltip"><div class="holder">
									<h4>Omnis iste natus error sit voluptatem dolor</h4>
									<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique.</p>
								</div></div>29</div></td>
								<td class="col-3"><div>30</div></td>
								<td class="col-4 disable"><div>1</div></td>
								<td class="col-5 disable"><div>2</div></td>
								<td class="col-6 disable"><div>3</div></td>
								<td class="col-7 disable"><div>4</div></td>
							</tr>
						</table>
					</div>
					<div class="note">
						<p class="upcoming-note">Upcoming event</p>
						<p class="archival-note">Archival event</p>
					</div>
				</div>
				
			</aside>
			<!-- / sidebar -->
	
		</div>
		<!-- / container -->
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
