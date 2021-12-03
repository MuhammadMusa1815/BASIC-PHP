<?php 

include("config.php");

$result=mysqli_query($db, "select * from students");

echo "<table border='1'>";

if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
$field1=$row['id'];
$field2=$row['name'];
$field3=$row['f_name'];
$field4=$row['roll_no'];
$field5=$row['class'];

echo'
<tr>
<td>'.$field1.'</td>
<td>'.$field2.'</td>
<td>'.$field3.'</td>
<td>'.$field4.'</td>
<td>'.$field5.'</td>

</tr>
';
}
echo '</table>';
}
else
{
echo "No result found";
}
?>