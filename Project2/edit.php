<?php

include("config.php");
if(count($_POST)>0)
{
	mysqli_query($db,"update users set id='".$_POST['id']."', username='"
.$_POST['username']."',password='".$_POST['password']."'");
}
$result=mysqli_query($db,"select * from users where id='".$_GET['id']."'");
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<body>
	<a href="displayall.php">Users List</a>
	<form name="frm" method="post" action="">
		<input type="hidden" name="id" value="<?php echo $row['id'];?>">
		<input type="text" name="username" value="<?php echo $row['username'];?>">
		<input type="text" name="password" value="<?php echo $row['password'];?>">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>