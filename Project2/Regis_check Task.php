<?php

include("config.php");
$w=$_REQUEST['id'];
$x=$_REQUEST['country'];
$y=$_REQUEST['city'];
$z=$_REQUEST['rate'];

$sql="INSERT INTO employee (Employee_id,Country,City,Employment_Rate)
VALUES ('$w','$x','$y','$z')";

if ($db->query($sql)==TRUE)
{
	header("location:Employee Registration Task.php");
} 
?>