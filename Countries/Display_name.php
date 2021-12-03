<html><body><h3>Use of 'Display the names (first_name, last_name) using alias name “First Name", "Last Name"'</h3></body></html>
<?php

include('config.php');
$result=mysqli_query($db,"select * from countries");
while($row=mysqli_fetch_array($result))
{
   ?>
   <!DOCTYPE html>
   <html>
   <head>
      <title></title>
   </head>
   <body>
   <table border="1">
      <tr>
         <td><?php echo $row['first_name']; ?></td>
         <td><?php echo $row['last_name']; ?></td>
      </tr>
   </table>
   </body>
   </html>
   <?php
}
?>
