<?php

include("config.php");

$result=mysqli_query($db,"select * from users");
echo "<table border='1'> ";
if (mysqli_num_rows($result)>0)
{
	while ($row=mysqli_fetch_assoc($result)) 
{
$field1=$row['id'];
$field2=$row['username'];
$field3=$row['password'];

echo '
<tr>
<td>'.$field1.'</td>
<td>'.$field2.'</td>
<td>'.$field3.'</td>

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