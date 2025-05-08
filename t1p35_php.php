<?php
   if ($_REQUEST['noticia'] == "politica")
   {
      setcookie("noticia", "noticia sobre politica", time() + 60 * 60 * 24 * 365,"/");
   }
   

   elseif ($_REQUEST['noticia'] == "economia")
   {
      setcookie("noticia", "noticia sobre economia", time() + 60 * 60 * 24 * 365,"/");
   }
   

   elseif ($_REQUEST['noticia'] == "deportiva")
   {
      setcookie("noticia", "noticia deportiva", time() + 60 * 60 * 24 * 365,"/");
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
   <p>Cookie registrada correctamente</p>
   <br>
   <a href="t1p35.php">Volver al inicio</a>
</body>
</html>