<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio 39</title>
</head>
<body>

<?php
   if (isset($_REQUEST['error'])) 
   {
      echo "Ingreso clave incorrecta <br> <br>";
   }
?>

<form action="t1p39_php.php" method="post">
   Ingrese la clave:
   <input type="text" name="direccion" size="30"><br>
   <input type="submit" value="Verificar">
</form>

</body>
</html>
