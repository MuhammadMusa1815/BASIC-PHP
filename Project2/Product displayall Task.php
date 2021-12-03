<?php

include('config.php');
$result=mysqli_query($db,"select * from products");
while($row=mysqli_fetch_array($result))
{
	?>
	<table border="1">
		<tr>
			<td><?php echo $row['product_id']; ?></td>
			<td><?php echo $row['product_name']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $row['seller_city']; ?></td>
			<td><a href="Product delete Task.php?id= <?php echo $row['Product_id']; ?>">Delete</a></td>
			<td><a href="edit.php?id= <?php echo $row['Product_id']; ?>">Edit</a></td>
		</tr>
	</table>
	<?php
}
?>
