<?php
session_start();
require '../modelo/login_model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
 $login=array('tabla'=>'usuario',
              "email"=>$_POST["email"],
              'password'=>$_POST['password']
);

$rs_login= login($login);

if($rs_login!=null)
{
  $_SESSION["userid"]=$rs_login["email"];
  header("location: user_p.php");
 
}
else{
  $_SESSION["message"]= 'no se encontro el usuario';
}
}
require "../vista/login.view.php";
?>
