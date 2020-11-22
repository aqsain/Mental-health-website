<?php
$con = mysqli_connect('localhost','root');
if($con){
	echo "connection sucessfull";
}
else{
	echo "no connection";
}

mysqli_select_db($con, 'registration');

$name = $_POST['name'];
$specilization = $_POST['specilization'];
$link = $_POST['link'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

$query = "insert into doctorinfo (name, specilization, link, email, mobile, address) values ('$name', '$specilization', '$link', '$email', '$mobile', '$address')";

mysqli_query($con, $query);

header('location:register1.php');
?>