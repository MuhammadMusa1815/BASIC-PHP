<?php
include ('config.php');
$a= $_REQUEST['name'];

$sql=mysqli_query($db,"SELECT * from users where name LIKE '%$a%' ");
while ($row=mysqli_fetch_array($sql))
{
# code.....


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<tr>
		<td><?php echo  $row['id'] ?></td>
	</tr>
	<tr>
		<td><?php echo  $row['name'] ?></td>
	</tr>
	<tr>
		<td><?php echo  $row['score'] ?></td>
	</tr>
	<tr>
		<td><?php echo  $row['year'] ?></td>
	</tr>
</table>
</body>
</html>

<?php
}
?>