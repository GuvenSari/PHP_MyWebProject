<?php


require_once ('php/CreateDb.php');
	
	$dbname = "Productdb";
    $servername = "localhost";
    $username = "root";
    $password = "";
		
		
$con = mysqli_connect($servername, $username, $password);
mysqli_select_db($con, $dbname);

$username_1 = mysqli_real_escape_string($con,$_POST['username_1']);
$email_1 = mysqli_real_escape_string($con,$_POST['email_1']);
$password_1 = mysqli_real_escape_string($con,$_POST['password_1']);

$registerquery = "INSERT INTO users(username,email,password) VALUES ('$username_1','$email_1','$password_1')";

$register_result = mysqli_query($con,$registerquery) or die(mysqli_error($con));
$_SESSION['email_1'] = $email_1;

echo('<script> window.alert("User successfully registered") <script> ');
header("refresh:2; url=index.php");

 ?>
