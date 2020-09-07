<?php
$_POST["full_name"];
$_POST["number"];
$_POST["email"];
$_POST["sex"];
$_POST["age"];
$_POST["weight"];
?>
<div>
<?php 
if(isset($_POST['create']))
{
    $full_name =$_POST["full_name"];
    $number = $_POST["number"];
    $email    = $_POST["email"];
    $sex = $_POST["sex"];
	$age = $_POST["age"];
	$weight = $_POST["weight"];
	
    echo "<b>";
    echo "Registration Completed".'<br>';
    echo  'Name: '."$full_name ".'<br>';
    echo  'Email: '."$email".'<br>';   
    echo  'Gender: '."$sex";
	echo  'Age: '."$age";
	echo  'Weight: '."$weight";
}
?>
</div>
<div>
<input type=button onclick="location.href='bhatia1.html'" value='Continue'>

</div>