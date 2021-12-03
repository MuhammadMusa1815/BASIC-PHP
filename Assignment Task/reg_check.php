<?php

include('config.php');

$b=$_REQUEST['name'];
$c=$_REQUEST['f_name'];
$d=$_REQUEST['roll_no'];
$e=$_REQUEST['class'];


$sql="INSERT INTO students ( name,f_name,roll_no,class)
VALUES('$b', '$c', '$d', '$e')";

if($db->query($sql) ==TRUE)
{
	header('location:displayall.php');
}
?>
