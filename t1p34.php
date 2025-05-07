<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio 34</title>
</head>
<body>
   <?php
      if (isset($_COOKIE['nombre']))
         echo "Hola! " . $_COOKIE['nombre'] . "<br> <br>";
      else {
         echo "No has enviado tu nombre todavia <br> <br>"; 
      }
   ?>

   <form action="t1p34_php.php" method="post">
      <label>Escriba su nombre: </label> <br>
      <input type="text" name="nombre" required>
      <input type="submit" value="Enviar">
   </form>
</body>
</html>