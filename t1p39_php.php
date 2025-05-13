<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio 39</title>
</head>
<body>
   <?php
      if ($_REQUEST['direccion'] != "z80") 
      {
         header("Location: t1p39.php?error=1");
      } else {
         echo "Bienvenido!";
      }
   ?>
</body>
</html>