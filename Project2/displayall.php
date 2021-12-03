<?php

include('config.php');
$result=mysqli_query($db,"select * from users");
while($row=mysqli_fetch_array($result))
{
	?>
	<table border="1">
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['password']; ?></td>
			<td><a href="delete.php?id= <?php echo $row['id']; ?>">Delete</a></td>
			<td><a href="edit.php?id= <?php echo $row['id']; ?>">Edit</a></td>
		</tr>
	</table>
	<?php
}
?>
