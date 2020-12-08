<?php
session_start();

if(isset($_SESSION["userid"]))
{
    header("location: ./vista/user.view.php");
}
else
{
    header("location: controlador/login.php");
}
?>