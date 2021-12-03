<?php

include('config.php');
session_start();
$result=mysqli_query($db,"select * from students");

while($row=mysqli_fetch_array($result))
{
?>
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    <style>

    table, td {
        border: 1px solid black;
        padding: 10px;
    }
    </style>
</head>
<body>

    
 <table class="table table-striped " >
 <tr>
<button class="btn btn-secondary"><a href="reg.php">Click to register</a></button>
 <td> <?php echo $row['id']; ?></td>
 <td> <?php echo $row['name']; ?></td>
 <td> <?php echo $row['f_name']; ?></td>
  <td> <?php echo $row['roll_no']; ?></td>
  <td> <?php echo $row['class']; ?></td>
 <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
 <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>


 </tr>
</table>
</body>
<?php
}
?>