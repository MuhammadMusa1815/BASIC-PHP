<html><body><h3>Drop database</h3></body></html>
<?php

include('config.php');
//Query-1

$result=mysqli_query($db,"DROP TABLE product");
if($result==TRUE)
{
   echo "Table has been deleted";
}