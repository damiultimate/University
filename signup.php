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
					echo '<li><a href="signup.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register</a></li>
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
	<style>
form{
	float:left;\width:50%;
}
.sidebar{
	float:left;
	width:48%;
}
.handle>section>input[type=text],.handle>section>input[type=file],.handle>section>input[type=password],.handle>section>input[type=submit]{
	display:block;
	box-style: border-box;
border: 2.5px solid #008bc4;
width: 100%;

height: 10vh;
margin-top: 7vh;
font-size: 1.2vw;
border-radius: 4px;
padding-left: 2vw;
}
.handle>section>input[type=submit]{
color: white;
background: rgb(0, 139, 196) none repeat scroll 0% 0%;
font-size: 1.6vw;
}
.half{width:50%;float:left;}
.seect,.dree{width:48%; float:left;box-style: border-box;
border: 2.5px solid #008bc4;border-radius: 4px;height: 10vh;margin-top: 7vh;font-size: 1.2vw;margin-left:2%;}
.dree{width:96%;}
</style>
	<div class="divider"></div>
	
	<div class="content">
		<div class="container">
			<h1 class="single">Registration Into Harrison University</h1>

			<form method="post" class="handle" action="handle.php">
			<section style="display:none;">
			<h1 class="single"><?php echo $_SESSION["error"]; ?></h1>
			<h1 class="single">Registration Details</h1>
				<input placeholder="First Name" type="text" name="regdetails[]">
				<input placeholder="Middle Name" type="text" name="regdetails[]">
				<input placeholder="Surname" type="text" name="regdetails[]">
				<input placeholder="E-mail Address" type="text" name="regdetails[]">
				<input type="submit" class="next" placeholder="Next>>" value="Next >>">
				</section>
				<section style="display:none;">
				<h1 class="single">Personal Details</h1>
				<input placeholder="Father's Name" type="text" name="perdetails[]">
				<input placeholder="Mother's Name" type="text" name="perdetails[]">
				<input placeholder="State Of Origin" type="text" name="perdetails[]">
				<input placeholder="LGA" type="text" name="perdetails[]">
				<input placeholder="Nationality" type="text" name="perdetails[]">
				<input placeholder="Home Address" type="text" name="perdetails[]">
				<input placeholder="Phone Number" type="text" name="perdetails[]">
				<input placeholder="Marital Status" type="text" name="perdetails[]">
			<input placeholder="Next of kin" type="text" name="perdetails[]">
			<input placeholder="Next of kin's Phone Number" type="text" name="perdetails[]">
			<input placeholder="Next of kin's House Address" type="text" name="perdetails[]">
			
				<input class="next" type="submit" placeholder="Next>>" value="Next >>">
					</section>
					<section style="display:none;">
					<h1 class="single">O Level Results</h1>
				<input  placeholder="Subject" type="text" name="resdetails[]" class="half" style="width:50%;">
				<select class="seect" name="resdetails[]">
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
				<input  placeholder="Subject" type="text" name="resdetails[]" class="half" style="width:50%;">
					<select class="seect" name="resdetails[]">
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
				<input  placeholder="Subject" type="text" name="resdetails[]" class="half" style="width:50%;">
				<select class="seect" name="resdetails[]">
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
				<input  placeholder="Subject" type="text" name="resdetails[]" class="half" style="width:50%;">
				<select class="seect" name="resdetails[]">
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
				<input  placeholder="Subject" type="text" name="resdetails[]" class="half" style="width:50%;">
				<select class="seect" name="resdetails[]">
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
				<input  placeholder="Subject" type="text" name="resdetails[]" class="half" style="width:50%;">
				<select class="seect"name="resdetails[]">
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
				<input  placeholder="Subject" type="text" name="resdetails[]" class="half" style="width:50%;">
				<select class="seect" name="resdetails[]">
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
				<input  placeholder="Subject" type="text" name="resdetails[]" class="half" style="width:50%;">
				<select class="seect" name="resdetails[]">
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
				<input  placeholder="Subject" type="text" name="resdetails[]" class="half" style="width:50%;">
				<select class="seect" name="resdetails[]">
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
				<input  placeholder="Subject" type="text" name="resdetails[]" class="half" style="width:50%;">
				<select class="seect" name="resdetails[]">
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
				<input  placeholder="Subject" type="text" name="resdetails[]" class="half" style="width:50%;">
				<select class="seect" name="resdetails[]">
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
				</select>
				
				<input placeholder="O Level Scratch Card Pin" type="text" name="resdetails[]">
				
				<input type="submit" class="next" placeholder="Next>>" value="Next >>">
				</section>
				
				<section style="display:none;">
				<h1 class="single">UTME Results </h1>
				<input placeholder="UTME Registration Number/Code" type="text" name="utmdetails[]">
				<input placeholder="UTME Result Value" type="text" name="utmdetails[]">
				
				<input type="submit" class="next" placeholder="Next>>" value="Next >>">
				</section>
				
					<section style="display:none;">
					<h1 class="single">File Submissions </h1>
				<input placeholder="Link to State of Origin (Scanned Copy)" type="text" name="perdetails[]"><label>State of Origin (Scanned Copy)</label>
			
				<input placeholder="Link to O Level Result (Scanned Copy)" type="text" name="perdetails[]">	<label>O Level Result (Scanned Copy)</label>
			
				<input placeholder="Link to UTME Result (Scanned Copy)" type="text" name="perdetails[]">	<label>UTME Result (Scanned Copy)</label>
				<input type="submit" class="next" placeholder="Next>>" value="Next >>">
				</section>
				<section style="display:none;">
				<h1 class="single">Admission into ?  </h1>
				<select onfocus='this.size=10;' onblur='this.size=1;' onchange='this.size=1; this.blur();' class="seect dree" style="width:200%;"  name="department">
				<option value="" selected>Department Of Choice</option>
				<?php
								
				$courses=array("Accounting",
"Adult Education",
"Agricultural And Biosystems Engineering",
"Agricultural Science and Education",
"Agriculture",
"Anatomy",
"Arabic Studies",
"Architecture",
"Biochemistry",
"Biology",
"Biomedical Engineering",
"Botany",
"Business Administration",
"Business Education",
"Chemical Engineering",
"Chemistry",
"Christian Studies",
"Civil Engineering",
"Common and Islamic Law",
"Common Law",
"Comparative Religious Studies",
"Computer Engineering",
"Computer Science",
"Counsellor Education",
"Economics",
"Education and Arabic",
"Education and Biology",
"Education and Chemistry",
"Education and Christian Religious Studies",
"Education and Computer Science",
"Education and Economics",
"Education and English Language",
"Education and French",
"Education and Geography",
"Education and History",
"Education and Islamic Studies",
"Education and Mathematics",
"Education and Physics",
"Education and Social Studies",
"Education and Yoruba",
"Educational Management",
"Educational Technology / Introductory Technology",
"Electrical / Electronic Engineering",
"English Language",
"Estate Management",
"Finance",
"Food Engineering",
"Food Science",
"Forestry And Wildlife Management",
"French",
"Geology",
"Hausa",
"Health Education",
"History and International Studies",
"Home Economics",
"Human Kinetics",
"Igbo",
"Industrial Chemistry",
"Industrial Relations and Personnel Management",
"Information And Communication Science",
"Islamic Studies",
"Library and Information Science",
"Linguistics",
"Marketing",
"Mass Communication",
"Mathematics",
"Mechanical Engineering",
"Medicine and Surgery",
"Metallurgical and Material Engineering",
"Microbiology",
"Nursing / Nursing Science",
"Optometry",
"Performing Arts",
"Pharmacy",
"Physics",
"Physiology",
"Plant Biology",
"Political Science",
"Primary Education Studies",
"Psychology",
"Public Administration",
"Quantity Surveying",
"Social Works",
"Sociology",
"Statistics",
"Surveying and Geo-Informatics",
"Technology Education",
"Telecommunication Science",
"Urban and Regional Planning",
"Veterinary Medicine",
"Water Resources and Environmental Engr.",
"Yoruba",
"Zoology",
);
foreach ($courses as $course){
	
	echo'<option value="'.$course.'">'.$course.'</option>';
	
}
		$_SESSION["error"]="";		
				?>
				
				</select>

				
				<input type="submit" class="next2" placeholder="Next>>" value="Submit >>">
				</section>

					</form>
			
			
			<aside id="sidebar">
				<div class="widget sidemenu">
					<ul>
						<li class="current"><a href="javascript:void0">Registration Details </a></li>
						<li><a href="javascript:void0">Personal Details </a></li>
						
						<li ><a href="javascript:void0">O Level Results</a></li>
						<li><a href="javascript:void0">UTME Results </a></li>
						<li><a href="javascript:void0">File Submissions </a></li>
						<li><a href="javascript:void0">Admission into ? </a></li>
						
						<ul><li><a href="#fancy" class="get-contact">Contact University </a></li></ul>
					</ul>
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
	<script>
	$(document).ready(function(){
   $("section:nth-of-type(1)").fadeIn();
   var y=0;var x=0;var e=0;
   for(x=1; x<=6; x++){
	   var o = $(".sidemenu>ul>li:nth-of-type("+x+")").text();
	   $("section:nth-of-type("+x+")").find("input:nth-of-type(1)").append('<h1 class="single">'+o+'</h1>');
	   
	   
   }
   $(".sidemenu>ul>li").click(function(){
	   y= $(this).index()+1;
	   var w = $(this);
	   $("section:nth-of-type("+y+")").fadeIn();
	   $(".current").removeClass("current");
	$(this).addClass("current");
	
	   for(e=1; e<=7; e++){
if(e==y){
	continue;
}else{
	 $("section:nth-of-type("+e+")").fadeOut();
	
}
	   }
	   
   });
   
   $("input[type=submit]").click(function(e){
	   e.preventDefault();
	   
   });
   $(".next").click(function(){
	   y=$(this).parent().index()+2;
	    var w = $(this);
	   $("section:nth-of-type("+y+")").fadeIn();
	   $(".current").removeClass("current");
	$(".sidemenu>ul>li:nth-of-type("+y+")").addClass("current");
	
	   for(e=1; e<=7; e++){
if(e==y){
	continue;
}else{
	 $("section:nth-of-type("+e+")").fadeOut();
	
}
	   }
	   
   });
   $(".next2").click(function(){
	  if(confirm("Are you sure you have filled in all required details and want to submit?")){


$("form").submit();
	  }else{

	  }		  
	   
   });
});
	
	</script>
</body>
</html>
