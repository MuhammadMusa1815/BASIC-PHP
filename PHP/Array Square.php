<!DOCTYPE html>
<html>
<head><title>Task in Php</title></head>
<body>
    <h1>Square of Array</h1>
    <?php
    $col=array(1,2,3,4,5);
    $col2=array();
    $mak= count($col);
    for ($i=0 ; $i< $mak; $i++)
    {
       // echo $col[$i];
        $result = $col[$i]*$col[$i]  ."  ";
        echo "$result";
        
    }

    array_push($col2,$result);
        echo "$col2";

    ?>
</body>
</html>