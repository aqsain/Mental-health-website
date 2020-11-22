<?php
$con = mysqli_connect('localhost','root');
if($con){
	echo "connection sucessfull";
}
else{
	echo "no connection";
}

mysqli_select_db($con, 'registration');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = "insert into userinfo (user, email, mobile) values ('$user', '$email', '$mobile')";

mysqli_query($con, $query);

header('location:register1.php');
?>