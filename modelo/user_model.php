<?php

 require '../db/Conexion.php';

 
function findUser()
{

    if (isset($_SESSION['user_id'])) {
        $records = $conn->prepare('SELECT id, email, password FROM usuario WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
    
        $user = null;
    
        if (count($results) > 0) {
          $user = $results;
        }
      }


}
 function insert_user(array $user)
    {
        try {
            $db=conexion();
            if(!empty($user['nombre']) && !empty($user['apellido']) && !empty($user['email']) && !empty($user['telefono']) && !empty($user['password']))
          {
          
              $SQL="INSERT INTO usuario (nombre,apellido,email,telefono,password) VALUES (:nombre, :apellido, :email, :telefono, :password)";
              $ps=$db->prepare($SQL);
              $ps->bindParam(':nombre', $user['nombre']);
              $ps->bindParam(':apellido', $user['apellido']);
              $ps->bindParam(':email', $user['email']);
              $ps->bindParam(':telefono', $user['telefono']);
              $password = password_hash($user['password'], PASSWORD_BCRYPT);
              $ps->bindParam(':password',$password);
          


              if ($ps->execute()) 
              {
                  return true;
              } else 
              {
                  return false;
              }
          }
          } catch (\Throwable $e) 
          {
              throw $e;
          }
    }




?>