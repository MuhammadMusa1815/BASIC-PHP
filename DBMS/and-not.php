<html><body><h3>Use of 'AND-NOT'</h3></body></html>
<?php

include('config.php');
// Query-1
$result=mysqli_query($db,"select * from products where not product_name='books' and not product_name='pen' ");
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
?>
