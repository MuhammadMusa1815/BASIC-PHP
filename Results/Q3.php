<html><body><h2>3. Display results where Score is 33 or year is 2019.</h2></body></html>
<?php

include('config.php');
// Query-1
$result=mysqli_query($db,"select * from results where score=33 or year=2019 ");
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
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['score']; ?></td>
			<td><?php echo $row['year']; ?></td>
		</tr>
	</table>
	</body>
	</html>
	<?php
}
?>
