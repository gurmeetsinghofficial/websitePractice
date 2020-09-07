<html>
<head><title>
form
</title>
<style>
.bn{
border-radius:50px;
border-style:inset;
border-color:red;
height:30px;
}
.bn input[type="text"],.vc input[type="number"]{
transition:0.25s;
}
.bninput[type="text"]:focus,.bn input[type="number"]:focus{
	width:280px;
	border-color:#2ecc71;
}
.lk{
border-radius:50px;
border-style:inset;
border-color:red;
height:30px;
}
.xc{
border-radius:50px;
border-style:inset;
border-color:red;
height:30px;

}
.jk{
border-radius:50px;
border-style:inset;
border-color:red;
height:30px;
}
.we{
border-radius:50px;
border-style:inset;
border-color:red;
height:30px;


}
.rt{
border-radius:50px;
border-style:inset;
border-color:red;
height:30px;
}
.gh:hover
{
background-color:lightgreen;
border:3px dashed red;
}
.yu:hover
{
background-color:lightgreen;
border:3px dashed red;

}
</style>


<link href = "form.css" rel="stylesheet" type="text/css"> </head>
<body >
<div class="form">
<fieldset width="80%" align="right">
<legend>
<h2 align="center"> ENQUIRY FORM</h2>
</legend>
<form width="80%" align="right">
<table align="center" cellpadding="10">
<?php
$fullname = $mobileno = $gender = $email = $sex = $age = $weight = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = test_input($_POST["fullname"]);
  $mobileno. = test_input($_POST["mobileno"]);
  $email = test_input($_POST["email"]);
  $sex = test_input($_POST["sex"]);
  $age = test_input($_POST["age"]);
  $weight = test_input($_POST["weight"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<tr><td>fullname: </td>
<td><input type="name" name="full_name" maxlength="30"  placeholder="Name" class="bn"></input></td></tr>
<tr>
<td>mobileno.:</td>
<td><input type="number" name="number" maxlength="15" placeholder="number" class="lk"></input>
</td></tr>
<tr>
<td>email:</td>
<td><input type="email" name="email" maxlength="40" placeholder="Email" class="xc"></input>
</td></tr><tr><td>Enter Your Query</td>
<td>
<textarea class="we" rows="4" cols="30"></textarea></td></tr>
<tr><td> sex:</td><td align="left"><input type="radio" name="sex" value="Male"></input>Male<br>
<input type="radio" name="sex" value="Female"></input>Female
</td></tr>
<tr><td>age:</td><td><input type="number" name="age" placeholder="Age"  maxlength="2" class="jk"></input></td></tr>
<tr><td>weight:</td><td><input type="number" name="weight" placeholder="weight"  maxlength="2" class="rt"></input></td><td><small>(in Kg)</small></td></tr>



<tr><td colspan="2" align="center">
<input type="submit" value="Submit" class="gh"></input>
<input  type="reset" value="Reset" class="yu"></input>
</td></tr>
</table></form>
</fieldset></div>
<div class="feedback"></div>
<hr width="80%" height="5px" color="black" align="center">
<?php
echo "<h2>Your Input:</h2>";
echo $fullname;
echo "<br>";
echo $moblieno.;
echo "<br>";
echo $gender;
echo "<br>";
echo $email;
echo "<br>";
echo $sex;
echo "<br>";
echo $age;
echo "<br>";
echo $weight;
?>


</body>
<br>
<footer align="center">&copy All Rights Reserved | 2019-2022</footer>
</html>