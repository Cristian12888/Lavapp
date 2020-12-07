<?php
 require '../db/Conexion.php';
 
function insert_user_ps(array $user)
    {
        try {
            $db=conexion();
            if(!empty($user['nombre']) && !empty($user['apellido']) && !empty($user['email']) && !empty($user['telefono']) && !empty($user['password']))
          {
          
              $SQL="INSERT INTO usuario_ps (Nombre,Apellido,Correo,Nit,Telefono,Password) VALUES (:nombre, :apellido, :email,:nit,:telefono, :password)";
              $ps=$db->prepare($SQL);
              $ps->bindParam(':nombre', $user['nombre']);
              $ps->bindParam(':apellido', $user['apellido']);
              $ps->bindParam(':email', $user['email']);
              $ps->bindParam(':nit', $user['nit']);
              $ps->bindParam(':telefono', $user['telefono']);
              $ps->bindParam(':password',$user['password']);
          
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