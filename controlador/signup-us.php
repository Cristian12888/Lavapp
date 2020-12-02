<?php
require '../modelo/user_model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $user_info=array('nombre'=>$_POST['nombre'],
                    'apellido'=>$_POST['apellido'],
                    'email'=>$_POST['email'],
                    'telefono'=>$_POST['telefono'],
                    'password'=>$_POST['password']);
}

if(isset($user_info))
{
  $ingreso=insert_user($user_info);
  if($ingreso==true)
  {
    header("location: ../index.php");
  }
}

require '../vista/signup-us.view.php';
?>