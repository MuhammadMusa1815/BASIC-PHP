<html><body><h3>Query to get the employee ID, names (first_name, last_name), salary in ascending order of salary</h3></body></html>
<?php

include('config.php');


$result=mysqli_query($db,"select * from countries order by salary ASC");
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


 </tr>
</table>
</body>
</html>
<?php
}
?> 
