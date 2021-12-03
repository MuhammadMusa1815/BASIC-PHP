<?php
include ('config.php');
$a= $_REQUEST['username'];

$sql=mysqli_query($db,"SELECT * from users where username LIKE '%$a%' ");
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
		<td><?php echo  $row['username'] ?></td>
	</tr>
	<tr>
		<td><?php echo  $row['password'] ?></td>
	</tr>
</table>
</body>
</html>

<?php
}
?>