<?php

$host = "db";
$username = "root";
$password = "tu_contrasena_segura";
$database = "app_database";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  echo "Error al conectar a la base de datos: " . mysqli_connect_error();
} else {
  echo "Conexión a la base de datos exitosa.";
  mysqli_close($conn);
}

?>