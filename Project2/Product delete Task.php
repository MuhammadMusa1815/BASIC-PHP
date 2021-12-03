<?php

include("config.php");
$mak=$_GET['id'];

$del=mysqli_query($db,"delete from products where product_id='$mak' ");
if ($del)
{
	header('location:Product displayall Task.php');
}
else
{
	echo "No record found";
}
?>