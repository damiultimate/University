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
$_POST["regdetails"]= implode("***",$_POST["regdetails"]);
$_POST["perdetails"]= implode("***",$_POST["perdetails"]);
$_POST["resdetails"]= implode("***",$_POST["resdetails"]);
$_POST["utmdetails"]= implode("***",$_POST["utmdetails"]);


$regdetails = mysqli_real_escape_string($conn,$_POST["regdetails"]);
$perdetails = mysqli_real_escape_string($conn,$_POST["perdetails"]);
$resdetails = mysqli_real_escape_string($conn,$_POST["resdetails"]);
$utmdetails = mysqli_real_escape_string($conn,$_POST["utmdetails"]);
$department = mysqli_real_escape_string($conn,$_POST["department"]);
$registrationnumber = explode("***",$utmdetails);
$registrationnumber =ucwords($registrationnumber[0]);
$surname = explode("***",$regdetails);
$surname =ucwords($surname[2]);
$email = explode("***",$regdetails);
$email =ucwords($email[3]);
$sql= "SELECT id FROM registration WHERE UPPER(registrationnumber)=UPPER('$registrationnumber')";
$result=$conn->query($sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$data = $row["id"];
	
	
}
if(!empty($data)){
	
	$_SESSION["error"]="UTME registration number already taken";$_SESSION["error"]="UTME registration number already taken";$_SESSION["error"]="UTME registration number already taken";
	
	header("Location:signup.php");
	exit();
}else{
$sql = "INSERT INTO registration(registrationnumber,surname,email,regdetails,perdetails,resdetails,utmdetails,department) VALUES ('$registrationnumber','$surname','$email','$regdetails','$perdetails','$resdetails','$utmdetails','$department')";


if ($conn->query($sql) === TRUE) {

$_SESSION["error"]="Your account have successfully been created";$_SESSION["error"]="Your account have successfully been created";$_SESSION["error"]="Your account have successfully been created";
	header("Location:Login.php");
	exit();
} else {
die();
}
}
$conn->close();
?>
