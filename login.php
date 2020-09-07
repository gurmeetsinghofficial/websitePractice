<?php 

$_POST["username"];
$_POST["password"];
?>
<?php
if(isset($_POST['go']))
{

    $name = $_POST["username"];
    $pass = $_POST["password"];
    if( ($name =="abhiraj" &&  $pass =="abhiraj")||($name =="sahil" &&  $pass =="sahil")||($name =="gurmeet" &&  $pass =="gurmeet") )
    {
       
           header("Location:bhatia1.html");
       
    }
    else
    {
        echo "Invalid Password, please Sign Up";
    }

}
?>
<div>
<input type=button onclick="location.href='loginweb.html'" value='Click to go back'>

</div>