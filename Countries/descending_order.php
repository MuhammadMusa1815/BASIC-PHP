<html><body><h3> Query to get all employee details from the employee table order by first name, descending</h3></body></html>
<?php

include('config.php');


$result=mysqli_query($db,"select * from countries order by first_name DESC");
while($row=mysqli_fetch_array($result))
{
?>
<html>
<head>
</style>
</head>
<body>
 <table border=1>


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
