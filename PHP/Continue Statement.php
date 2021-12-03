<!DOCTYPE html>
<html>
<head><title>Continue Statement</title></head>
<body>
    <h1>Continue Statement</h1>
    <h4>Continue Statement skips the condition if it is true.</h4>
    <?php
    for ($x=0; $x<10; $x++)
    {
        if ($x==4)
        {
            continue;
        }
        echo "The number is: $x <br>";
    }
    ?>
    <p> As you can see when x==4 condition becomes true and skips printing of 4.</p>
    <p>Design Crowd online earning</p>
</body>
</html>