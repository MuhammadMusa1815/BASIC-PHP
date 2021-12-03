<html><body><h3>2. Extract where seller city is not Lahore.</h3></body></html>
<?php

include('config.php');
$result=mysqli_query($db,"select * from products where not seller_city='lahore' ");
while($row=mysqli_fetch_array($result))
{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		
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
