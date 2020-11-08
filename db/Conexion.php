<?php
class Conectar
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
}
