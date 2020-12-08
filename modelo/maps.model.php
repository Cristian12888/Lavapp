<?php


  // Archivo de Conexión a la Base de Datos 
  include '../db/Conexion.php';
 $con= conexion();
  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  $result =$con->query("SELECT * FROM google_maps_php_mysql");
 
  // Creamos una tabla para listar los datos 
  echo "<div class='table-responsive'>";
 
  echo "<table class='table'>
          <thead>
            <tr>
              <th scope='col'>Nombre</th>
              <th scope='col'>Dirección</th>
              <th scope='col'>Latitud</th>
              <th scope='col'>Longitud</th>
              <th scope='col'>País</th>
            </tr>
            </thead>
            <tbody>";
 
 foreach($result as $row){
      echo "<tr>";
      echo "<td scope='col'>" . $row['nombre'] . "</td>";
      echo "<td scope='col'>" . preg_replace('/\\\\u([\da-fA-F]{4})/', '&#x\1;', $row['direccion']) . "</td>";
      echo "<td scope='col'>" . $row['lat'] . "</td>";
      echo "<td scope='col'>" . $row['lng'] . "</td>";
      echo "<td scope='col'>" . $row['pais'] . "</td>";
      echo "</tr>";
  }
  echo "</tbody></table>";
  echo "</div>";
 
  die(); 
  
?>