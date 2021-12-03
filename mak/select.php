<?php
include('config.php');

$a=$_REQUEST['username'];
$b=$_REQUEST['password'];
$result=mysqli_query($db,"select * from user where username='$a' and password='$b' ");
$result=mysqli_fetch_array($result);
if($result==True)
{
    header("location:welcom.php");
}
else
{
    header("location:login.php");
}
//echo $result['username'] . "<br>";
//echo $result['password'];


?>