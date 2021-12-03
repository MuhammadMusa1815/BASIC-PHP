<?php

session_start();
include("config.php");

if (isset ($_REQUEST['submit']))
{
    $a=$_REQUEST['name'];
    $b=$_REQUEST['password'];

    $res=mysqli_query ($db, "select * from registration where name='$a'  and  password='$b' ");
    $res=mysqli_fetch_array($res);
    if($res)
    {
        $_SESSION['login']="1";
        header("location:index.php");
    }


}
?>