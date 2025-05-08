<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio 34</title>
</head>
<body>
   <?php
      if (isset($_SESSION['nombre']))
      {
         echo "Bienvenido! <br>" . $_SESSION['nombre'];
      }
      
      else {
         echo "No puede visitar esta pagina";
      }
   ?>
</body>
</html>