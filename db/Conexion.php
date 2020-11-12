<?php
class Conectar
{

    public static function conexion()
    {

        try {
            $conexion = new PDO('mysql:host=localhost;dbname=lavapp', 'root', '');
        } catch (\PDOException $e) {
            //throw $th;
            echo "error: " . $e->getMessage();
        }
        return $conexion;
    }
}
