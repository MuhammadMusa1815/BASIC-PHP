<?php

include("config.php");
$id=$_GET['id'];

$del=mysqli_query($db,"delete from users where id='$id' ");
if ($del)
{
	header('location:displayall.php');
}
else
{
	echo "No record found";
}
?>