<?php
 require '../db/Conexion.php';

 

 function insert_user(array $user)
    {
        try {
            $db=conexion();
            if(!empty($user[0]) && !empty($user[1]) && !empty($user[2]) && !empty($user[3]) && !empty($user[4]))
          {
          
              $SQL="INSERT INTO usuario (nombre,apellido,email,telefono,password) VALUES (:nombre, :apellido, :email, :telefono, :password)";
              $ps=$db->prepare($SQL);
              $ps->bindParam(':nombre', $user[0]);
              $ps->bindParam(':apellido', $user[1]);
              $ps->bindParam(':email', $user[2]);
              $ps->bindParam(':telefono', $user[3]);
              $password = password_hash($user[4], PASSWORD_BCRYPT);
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