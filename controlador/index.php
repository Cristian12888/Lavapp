<?php
session_start();

if(isset($_SESSION["userid"]))
{
    header("location: ../vista/dashboard.php");
}
else
{
    header("location: controlador/login.php");
}
?>