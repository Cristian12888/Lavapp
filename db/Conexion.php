<?php
class Conectar
{
    public static function conexion()
    {$server = 'localhost';
      $username = 'root';
      $password = '';
      $database = 'lavapp';
      
      try {
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
      } catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage());
      }       
    }
}



?>
