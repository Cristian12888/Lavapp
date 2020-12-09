<?php
session_start();
require '../modelo/login_model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
 $login=array('tabla'=>$_POST["s_user"],
              "email"=>$_POST["email"],
              'password'=>$_POST['password']
);

$rs_login= login($login);
if($login["tabla"]=="usuario")
{
  if($rs_login!=null)
  {
    $_SESSION["userid"]=$rs_login["email"];
    header("location: user_p.php");
  
  }
}
if($login["tabla"]=="usuario_ps")
{
  if($rs_login!=null)
  {
    $_SESSION["userid"]=$rs_login["email"];
    $_SESSION["nit"]=$rs_login["nit"];
    $_SESSION["nombre"]=$rs_login["nombre"];
    $_SESSION["apellido"]=$rs_login["apellido"];
    header("location: ps_con.php");
  }
}
}
require "../vista/login.view.php";


?>
