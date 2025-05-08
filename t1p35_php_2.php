<?php
if ($_REQUEST['opcion'] == "recordar") 
   {
      if (isset($_COOKIE['noticia'])) 
      {
         setcookie("noticia", $_COOKIE['noticia'], time() + (60 * 60 * 24 * 365), "/");
      } 
   
   else 
   {
      echo "No hay ninguna noticia que recordar.<br>";
   }
}
elseif ($_REQUEST['opcion'] == "norecordar") {
   setcookie("noticia", "", time() - 1000, "/");
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio 35</title>
</head>
<body>
   <?php
   if ($_REQUEST['opcion'] == "recordar")
   echo "cookie creada";
   elseif ($_REQUEST['opcion'] == "norecordar")
   echo "cookie eliminada";
   ?>
   <br>
   <a href="t1p35.php">Volver al inicio</a>
</body>
</html>