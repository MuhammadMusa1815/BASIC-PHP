<?php

include("config.php");

$result=mysqli_query($db,"select * from products");
echo "<table border='1'> ";
if (mysqli_num_rows($result)>0)
{
	while ($row=mysqli_fetch_assoc($result)) 
{
$field1=$row['product_id'];
$field2=$row['product_name'];
$field3=$row['category'];
$field4=$row['price'];
$field5=$row['seller_city'];
echo '
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