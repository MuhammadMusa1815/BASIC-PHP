<?php

include('config.php');
// Query-1
echo "<h1>Display products sold in peshawar only.</h1><br>";
$result=mysqli_query($db,"select * from products where seller_city='peshawar' ");
while($row=mysqli_fetch_array($result))
{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<!--<h1>Display Products sold in Peshawar Only.</h1>-->
	<table border="1">
		<tr>
			<td><?php echo $row['product_id']; ?></td>
			<td><?php echo $row['product_name']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $row['seller_city']; ?></td>
		</tr>
	</table>
	</body>
	</html>
	<?php
}
//Query-2
echo "<h1>Display products based on karachi only.</h1><br>";
$result=mysqli_query($db,"select * from products where seller_city='karachi' ");
while($row=mysqli_fetch_array($result))
{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<!--<h1>Display Products based on karachi Only.</h1>-->
	<table border="1">
		<tr>
			<td><?php echo $row['product_id']; ?></td>
			<td><?php echo $row['product_name']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $row['seller_city']; ?></td>
		</tr>
	</table>
	</body>
	</html>
	<?php
}
//Query-3
echo "<h1>Display products which were pen.</h1><br>";
$result=mysqli_query($db,"select * from products where product_name='pen' ");
while($row=mysqli_fetch_array($result))
{
	?>
	<!DOCTYPE html>

	<html>
	<head>
		<title></title>
	</head>
	<body>
		<!--<h1>Display Products which were pen.</h1>-->
	<table border="1">
		<tr>
			<td><?php echo $row['product_id']; ?></td>
			<td><?php echo $row['product_name']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $row['seller_city']; ?></td>
		</tr>
	</table>
	</body>
	</html>
	<?php
}
//Query-4
echo "<h1>Display how much books sold out</h1><br>";
$result=mysqli_query($db,"select * from products where product_name='books' ");
while($row=mysqli_fetch_array($result))
{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<!--<h1>Display how much books sold out.</h1>-->
	<table border="1">
		<tr>
			<td><?php echo $row['product_id']; ?></td>
			<td><?php echo $row['product_name']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $row['seller_city']; ?></td>
		</tr>
	</table>
	</body>
	</html>
	<?php
}
?>
