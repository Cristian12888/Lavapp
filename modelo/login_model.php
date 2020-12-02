<?php
require '../db/Conexion.php';

function login(array $login)
{
    $conn= conexion();

    if (!empty($login['email']) && !empty($login['password'])) 
    {
        $records = $conn->prepare('SELECT * FROM '.$login['tabla'].' WHERE email = :email and password = :password');
        $records->bindParam(':email', $login['email']);
        $records->bindParam(':password',$login['password']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
    
        return $results;
   
  }

}
?>