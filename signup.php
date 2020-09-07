<?php
session_start();
$db = mysqli_connect("localhost","root","","username");
if(isset($_POST['create']))
{
$email = $_POST['email'];
$psw = $_POST['psw'];
$rpsw= $_POST['rpsw'];

if($psw == $rpsw)
{
$sql = "INSERT INTO tutorial(email,psw,rpsw) VALUES('$email','$psw','$rpsw')";
mysqli_query($db,$sql);
$_SESSION['email'] = $username;
header("location:bhatia1.php");
}
else
{
	$message = "Password not matched.\\nTry again";
	echo "<script type ='text\javascript'alert('$message')>;</script>";
	}
	}
?>