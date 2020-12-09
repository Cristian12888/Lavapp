<?php
require '../modelo/info_ps.model.php';

session_start();

$nit=$_SESSION["nit"];
$usid=$_SESSION["userid"];
$nom=$_SESSION["nombre"];
$apell=$_SESSION["apellido"];



if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $ps_info=array('nombre'=>$_POST['nomb'],
                    'telefono'=>$_POST['telefono'],
                    'direccion'=>$_POST['direccion'],
                    'horario'=>$_POST['horario'],
                    'precioserv'=>$_POST['precioserv']);
}

if(isset($ps_info))
{
  $ingreso=insert_info_ps($ps_info);
  if($ingreso==true)
  {   
    header("location: ps_con.php");
  }

}
require "../vista/ps.view.php";

?>