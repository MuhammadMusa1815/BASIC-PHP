<?php

include("config.php");
$id=$_GET['id'];

$del=mysqli_query($db,"delete from students where id='$id'");
if ($del)
{
	
header("location:displayall.php");


}
else
{
echo "no record found";
}
?>