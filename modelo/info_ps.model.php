<?php

require '../db/Conexion.php';

function insert_info_ps(array $inps)
    {
        try {
            $db=conexion();
            if(!empty($inps['nombre']) && !empty($inps['telefono']) && !empty($inps['direccion']) && !empty($inps['horario']) && !empty($inps['precioserv']))
          {
          
              $SQL="INSERT INTO infolava (nombre,telefono,direccion,horario,precioserv) VALUES (:nombre, :telefono, :direccion,:horario, :precioserv)";
              $ps=$db->prepare($SQL);
              $ps->bindParam(':nombre', $inps['nombre']);
              $ps->bindParam(':telefono', $inps['telefono']);
              $ps->bindParam(':direccion', $inps['direccion']);
              $ps->bindParam(':horario', $inps['horario']);
              $ps->bindParam(':precioserv', $inps['precioserv']);
          
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