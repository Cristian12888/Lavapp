<?php
require '../modelo/user_ps.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $user_info=array('nit'=>$_POST['nit'],
                    'nombre'=>$_POST['nombre'],
                    'apellido'=>$_POST['apellido'],
                    'email'=>$_POST['email'],
                    'telefono'=>$_POST['telefono'],
                    'password'=>$_POST['password']);
}

if(isset($user_info))
{
  $ingreso=insert_user_ps($user_info);
  if($ingreso==true)
  {
    header("location: ../index.php");
  }
  else
  {
      
  }
}
require "../vista/signup-ps.view.php";

?>