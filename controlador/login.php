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
if($login["tabla"]=="user")
{
  if($rs_login!=null)
  {
    $_SESSION["userid"]=$rs_login["email"];
    header("location: user_p.php");
  
  }
}
else
{
  if($rs_login!=null)
  {
    $_SESSION["userid"]=$rs_login["email"];
    header("location: ps_p.php");
  
  }
}

require "../vista/login.view.php";
?>
