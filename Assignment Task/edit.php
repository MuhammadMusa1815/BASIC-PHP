<?php
include('config.php');
if(count($_POST)>0)
{
echo $a=$_POST['id'];
mysqli_query($db,"UPDATE students SET id='" . $_POST['id'] . "',name='" . $_POST['name'] . "', f_name='" . $_POST['f_name'] . "', roll_no='" . $_POST['roll_no'] . "', class='" . $_POST['class'] . "'");
}
$result=mysqli_query($db, "SELECT *FROM students WHERE id='". $_GET['id'] ."'");
$row=mysqli_fetch_array($result);
?>
<html>
<body>
<a href="displayall.php">Users List</a>
<form name="frm" method="post" action="">
<input type="text" name="id" value="<?php echo $row['id'];?>"> 
<input type="text" name="name" value="<?php echo $row['name'];?>"> 
<input type="text" name="f_name" value="<?php echo $row['f_name'];?>"> 
<input type="text" name="roll_no" value="<?php echo $row['roll_no'];?>"> 
<input type="text" name="class" value="<?php echo $row['class'];?>"> 

<input type="submit" name="submit" value="submit"> 
</form>
</body>
</html>