<html><body><h3>Order by</h3></body></html>
<?php

include('config.php');
//Query-1

$result=mysqli_query($db,"select * from products order by seller_city DESC");
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
