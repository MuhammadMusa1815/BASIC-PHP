<?php

$m=5;
$s=3;
$res=1;
    for($i=1; $i<=$m; $i++ )
                 {
                     $res= $res*$i;
                   
                 } 
                 echo"Factorial of m ","$res<br>"; 
 
                 $n=$m-$s;
                 $res1=1;
        for($i=1; $i<=$n; $i++ )
            {

                 $res1= $res1*$i;                   
            } 
            echo "Factorial of m-s ","$res1<br>";

            $result= $res/$res1;
            echo"Permutaion is ","$result";
?>
                