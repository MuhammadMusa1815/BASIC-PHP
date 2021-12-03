<html><body><h3>Query to get the average salary and number of employees in the employees table grouping the designation</h3></body></html>
<?php

include('config.php');


$result=mysqli_query($db,"select first_name, last_name, salary, designation, avg(salary) as salary from countries group by designation");
while($row=mysqli_fetch_array($result))
{
?>
<html>
<head>
</head>
<body>
 <table border="1">


<tr>
 <td> <?php echo $row['first_name']; ?></td>
 <td> <?php echo $row['last_name']; ?></td>
  <td> <?php echo $row['designation']; ?></td>
  <td> <?php echo $row['salary']; ?></td>

 </tr>
</table>
</body>
</html>
<?php
}
?> 
