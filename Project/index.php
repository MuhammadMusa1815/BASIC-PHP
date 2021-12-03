<?php
session_start();
if (!isset($_SESSION['login']))
{
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
    <body>
        <h1>Welcome to the main page</h1>
</body>
</html>