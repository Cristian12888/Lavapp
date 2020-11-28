<?php

if(isset($_SESSION))
{
    header("location: User_p.php");
}
else
{
    header("location: ../vista/login.php");
}
?>