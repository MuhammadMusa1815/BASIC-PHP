<!DOCTYPE html>
<html>
<head><title>Break Statement</title></head>
<body>
    <h1>Break Statement</h1>
    <h4>Break statement jumps out of the loop if condition is true</h4>
    <?php
    for ($x=0; $x<10; $x++)
    {
        if ($x==4)
        {
            break;
        }
        echo "The number is: $x <br>";
    }
    ?>
    <p> As you can see when x==4 reaches loop ends</p>
</body>
</html>