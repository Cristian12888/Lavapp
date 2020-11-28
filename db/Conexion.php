<?php
/*class Conectar
{
    public static function conexion()
    {
        try {
            $conexion = new mysqli("localhost", "root", "", "lavapp");
            $conexion->query("SET NAMES 'utf8'");    
        } catch (\Throwable $th) {
            throw $th;
        }

        return $conexion;        
    }
}*/

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'lavapp';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
