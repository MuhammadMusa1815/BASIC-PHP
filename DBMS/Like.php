<html><body><h3>use of Like with % before</h3></body></html>
<?php

include('config.php');
//Query-1

$result=mysqli_query($db,"select * from products where seller_city LIKE '%i'");

while($row=mysqli_fetch_array($result))
{
?>
<html>
<head>
<style>
 th,td {
    border: 1px solid black;
    padding: 20px;
}
</style>
</head>
<body>
 <table style="color:brown; border:1px dotted black">


<tr>
 <td > <?php echo $row['product_id']; ?></td>
 <td> <?php echo $row['product_name']; ?></td>
 <td> <?php echo $row['category']; ?></td>
  <td> <?php echo $row['seller_city']; ?></td>
  <td> <?php echo $row['price']; ?></td>

 </tr>
</table>
</body>
</html>
<?php
}
?> 

<html><body><h3>use of Like with % after</h3></body></html>
<?php


//Query-2

$result=mysqli_query($db,"select * from products where seller_city LIKE 'p%'");
while($row=mysqli_fetch_array($result))
{
?>
<html>
<head>
<style>
 th,td {
    border: 1px solid black;
    padding: 20px;
}
</style>
</head>
<body>
 <table style="color:brown; border:1px dotted black">


<tr>
 <td > <?php echo $row['product_id']; ?></td>
 <td> <?php echo $row['product_name']; ?></td>
 <td> <?php echo $row['category']; ?></td>
  <td> <?php echo $row['seller_city']; ?></td>
  <td> <?php echo $row['price']; ?></td>

 </tr>
</table>
</body>
</html>
<?php
}
?> 



<html><body><h3>use of Like with % before and after</h3></body></html>
<?php


//Query-2

$result=mysqli_query($db,"select * from products where seller_city LIKE '%a%'");
while($row=mysqli_fetch_array($result))
{
?>
<html>
<head>
<style>
 th,td {
    border: 1px solid black;
    padding: 20px;
}
</style>
</head>
<body>
 <table style="color:brown; border:1px dotted black">


<tr>
 <td > <?php echo $row['product_id']; ?></td>
 <td> <?php echo $row['product_name']; ?></td>
 <td> <?php echo $row['category']; ?></td>
  <td> <?php echo $row['seller_city']; ?></td>
  <td> <?php echo $row['price']; ?></td>

 </tr>
</table>
</body>
</html>
<?php
}
?> 
