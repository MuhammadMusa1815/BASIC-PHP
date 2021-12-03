<!DOCTYPE html>
<html>
<head><title>Continue & Break Statement Task</title></head>
<body>
    <h1>Continue and Break Statement Task</h1>
    <?php
    for ($x=0; $x<100; $x++)
    {
        if ($x==50)
        {
            continue;
        }
        if ($x==80)
        {
            break;
        }
        echo "The number is: $x <br>";
    }
    ?>
    <pre> As you can see when x==50 condition becomes true and skips printing of 50.
    As you can see when x==80 reaches loop ends
    </pre>
    <p>Design Crowd online earning</p>
</body>
</html>