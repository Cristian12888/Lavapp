<?php
require '../modelo/user_model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $user_info=array($_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['telefono'],$_POST['password']);
}

if(isset($user_info))
{
  $ingreso=insert_user($user_info);
  if($ingreso==true)
  {
    header("location: ../controlador/index.php");
  }
}

require '../vista/signup-us.view.php';
?>