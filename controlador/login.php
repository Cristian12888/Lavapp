<?php
session_start();

require '../modelo/user_model.php';

require "../vista/login.view.php";

require '../db/Conexion.php';


if(isset($_SESSION['user_id']))
{
    header ('Location /lavapp');
}

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM usuario WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /lavapp");
    } else {
      $message = 'Usuario o contraseña incorrecta';
    }
  }


?>
