<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio 38</title>
</head>
<body>
   <?php
   function retornarConexion()
   {
      $conexion = mysqli_connect('localhost', 'root', '', 'base1');
      
      if (!$conexion) {
         die("Problemas con la conexión: " . mysqli_connect_error());
      }

      return $conexion;
   }
   ?>
</body>
</html>