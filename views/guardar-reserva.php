<?php
session_start();

?>
<?php

  $nombre = $_POST["nombre"];
  $titulo = $_POST["titulo"];
  $documento = $_POST["documento"];
  $email = $_POST["email"];
  $alquiler = $_POST["alquiler"];
  $devolucion = $_POST["devolucion"];
  $direccion = $_POST["direccion"];
  $telefono = $_POST["telefono"];


      require_once ("../asset/Conexion.php");

$sql = "INSERT INTO `reservas` (`id`, `cliente`, `documento`, `Email`,`alquiler`,`devolucion`,`direccion`,`telefono`,`pelicula`) VALUES (NULL, '$nombre', '$documento', '$email','$alquiler','$devolucion','$direccion', '$telefono', '$titulo');";

if (mysqli_query($conn, $sql)) {
      echo "GUARDOOO";
      
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>