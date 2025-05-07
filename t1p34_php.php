<?php
   if (isset($_REQUEST['nombre']))
   {
      $nombre = $_REQUEST['nombre'];
   }
   setcookie("nombre", "$nombre", time() + 60 * 60 * 24 * 365, "/");
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio 34</title>
</head>
<body>
   <p>Se creo la cookie</p>
   <br>

   <a href="t1p34.php">Ir a la otra pagina</a>
</body>
</html>