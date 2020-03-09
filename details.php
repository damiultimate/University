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

$matric = $_SESSION["username"];


$sql = "SELECT validated,course FROM registration WHERE UPPER(registrationnumber)=UPPER('$matric')";
$result=$conn->query($sql);
$validated=array();
$course=array();
$data3=array();

$data4 =array();
$data5 =array();
$data6 =array();
$data7 =array();
$data8 =array();
$data9 =array();
$message="";
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$validated = $row["validated"];
	$course = $row["course"];
	$data3[] = $row["id"];
	$data4[] = $row["surname"];
		$data5[] = $row["email"];
	$data6[] = $row["regdetails"];
		$data7[] = $row["perdetails"];
		$data8[] = $row["resdetails"];
			$data9[] = $row["utmdetails"];
}
$validated=intval($validated);
if($validated ==1){
	
	$message="You have successfully been offered provisional admission into your Harrison University to study <strong>$course</strong> for 4 years. Please proceed to your department and visit the HOD of the department of <strong>$course</strong> for guidelines on how to complete your registration";
	
}
if($validated ==2){
	$message="We're verry sorry but you're not eligible for admission as you didn't pass the minimum admission cut-off mark by general result collation.";
	
	
}
if($validated ==3){
	
	$message="We're verry sorry but you're not eligible for admission as we couldn't verify your submitted results. please go and rectify your result issues and try reapplying, thank you.";
	
	
}
if(empty($validated)){
	
	$message="We are yet to access your documents and complete your admission process. you'll get notified once we've come to a decision about your admission process, thank you for your understanding.";
	
}

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
					echo '<li><a href="signup.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register</a></li>
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
<style>

.handle>input[type=text],.handle>input[type=password],.handle>input[type=submit]{
	display:block;
	box-style: border-box;
border: 2.5px solid #008bc4;
width: 100%;
height: 15vh;
margin-top: 7vh;
font-size: 1.5vw;
border-radius: 4px;
padding-left: 2vw;
}
.handle>input[type=submit]{
color: white;
background: rgb(0, 139, 196) none repeat scroll 0% 0%;
font-size: 2.3vw;
}
.heavy{font-weight: 600;
font-size: 2vw;
padding-bottom:2vw;}
.small{font-size: 1.7vw;line-height: 2;}
</style>
			<div class="main-content">
			<?php if(!empty($_SESSION["username"])){echo '	<h2>Dear '.$_SESSION["username"].'</h2>
				
	<p style="font-size: 2vw;line-height: 2;">'.$message.'</p>';
				}
				?>
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
			<section>
				
			</section>
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
