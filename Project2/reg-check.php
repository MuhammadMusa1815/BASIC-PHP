<?php

include("config.php");
$a=$_REQUEST['name'];
$b=$_REQUEST['email'];
$c=$_REQUEST['password'];

$sql="INSERT INTO registration (name,email,password)
VALUES('$a', '$b', '$c')";

if($db->query($sql)==TRUE)
{
    header("location:login.php");
}
?>