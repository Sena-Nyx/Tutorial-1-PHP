<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio 38</title>
</head>
<body>
   <?php
      require_once("t1p38_php.php");
      
      // Obtener la conexión
      $conexion = retornarConexion();
      
      $registro = mysqli_query($conexion, "SELECT * FROM alumnos");
      
      if (mysqli_num_rows($registro) > 0) {
         while ($alumno = mysqli_fetch_array($registro)) {
            echo $alumno['nombre'] . " - " . $alumno['email'] . "<br>";
         }
      } else {
         echo "No hay alumnos registrados.";
      }
      mysqli_close($conexion);

   ?>
</body>
</html>