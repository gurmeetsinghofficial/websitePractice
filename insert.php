<?

$con = mysqli_connect('localhost','root','');
if(!$con)
{
echo 'not connected to server';
}
if(!mysqli_select_db($con,'company'))
{
echo 'database not selected';
}
$name = $_POST('username');
$password = $_POST('password');
$sql = "INSERT INTO tutorial(name,password) VALUES ('$name','$password')";
if(!mysqli_query($con,$sql))
{
echo 'not inserted';
}
else
{
echo 'inserted';
}
header("refresh:2; url=index.html?signup=success");
?>