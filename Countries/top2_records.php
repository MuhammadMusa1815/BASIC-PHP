<html><body><h3>Query to select first 2 records from a table</h3></body></html>
<?php

include('config.php');
//Query-1

$result=mysqli_query($db,"select * from countries LIMIT 2");
while($row=mysqli_fetch_array($result))
{
?>
<html>
<head>
</head>
<body>
 <table border="1">


<tr>
 <td > <?php echo $row['employee_id']; ?></td>
 <td> <?php echo $row['first_name']; ?></td>
 <td> <?php echo $row['last_name']; ?></td>
  <td> <?php echo $row['salary']; ?></td>
  <td> <?php echo $row['designation']; ?></td>

 </tr>
</table>
</body>
</html>
<?php
}
?> 
