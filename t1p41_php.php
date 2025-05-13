<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio 41</title>
</head>
<body>
   <?php
      echo "La dirección: $_REQUEST[direccion] tiene";
   ?>

   <br><br>
   <img src="t1p41_php_2.php?puntos=<?php echo $_REQUEST['puntos']; ?>">
</body>
</html>