<!DOCTYPE html>
<html>
<head><title>For Each Loop Task</title></head>
<body>
    <h1>Foeeach loop Task</h1>
    <h4>Foreach loop only used in case of arrays</h4>
    <?php
    $col=array(1, 2, 3, 4, 5); //declare and initialize an array
    $mak=2;
    foreach ($col as $var)
    {
         $result=$var + $mak;
         echo "<br>";
         echo "$result";

    }
    ?>
    </body>
    </html>
