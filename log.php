<?php
session_start();
error_reporting(0);
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



$matric = mysqli_real_escape_string($conn,$_POST["matric"]);
$pass = mysqli_real_escape_string($conn,$_POST["pass"]);
$matric =ucwords($matric);
$pass = ucwords($pass);
$sql = "SELECT id FROM registration WHERE UPPER(registrationnumber)=UPPER('$matric') AND UPPER(surname)=UPPER('$pass')";
$result=$conn->query($sql);
$data;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$data = $row["id"];
	
	
}
if(!empty($data)){
	
	$_SESSION["error"]="";
	$_SESSION["username"]=$matric;
	header("Location:index.php");
	exit();
}else{
$_SESSION["error"]="Invalid username or password";	

	header("Location:login.php");
	exit();
}
$conn->close();
?>
