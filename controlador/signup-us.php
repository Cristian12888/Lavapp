<?php
require '../db/Conexion.php';

$con= conexion();

$message='';

$conn=Conexion();

try {

  if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['password']))
{

    $SQL="INSERT INTO usuario (nombre,apellido,email,telefono,password) VALUES (:nombre, :apellido, :email, :telefono, :password)";
    $ps=$conn->prepare($SQL);
    $ps->bindParam(':nombre', $_POST['nombre']);
    $ps->bindParam(':apellido', $_POST['apellido']);
    $ps->bindParam(':email', $_POST['email']);
    $ps->bindParam(':telefono', $_POST['telefono']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $ps->bindParam(':password',$password);

    if ($ps->execute()) {
      header("location: ../vista/login.php");
    } else 
    {
        $message = 'Esta cuenta esta creada';
    }
}
} catch (\Throwable $e) {
}
require '../vista/signup-us.view.php';
?>