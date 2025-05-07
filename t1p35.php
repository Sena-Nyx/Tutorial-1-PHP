<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio 34</title>
</head>
<body>
   <?php
      if (isset($_COOKIE['noticia']))
         echo "La ultima noticia que viste fue " . $_COOKIE['noticia'] . "<br> <br>";
      else {
         echo "No has seleccionado una noticia todavia <br> <br>"; 
      }
   ?>

   <form action="t1p35_php.php" method="post">
      Que tipo de noticia desea ver hoy: <br> <br>
      <input type="radio" value="politica" name="noticia">Noticia Politica <br>
      <input type="radio" value="economica" name="noticia">Noticia Economica <br>
      <input type="radio" value="deportiva" name="noticia">Noticia deportiva <br> <br>
      <input type="submit" value="Ver">
   </form>

   <p>olvidar cookies: </p> 

   <form action="t1p35_php_2.php" method="post">
      <input type="radio" name="opcion" value="recordar">
      Recordar en esta computadora la ultima noticia vista
      <br>
      <input type="radio" name="opcion" value="norecordar">
      No recordar
      <br> <br>
      <input type="submit" value="confirmar">
   </form>
</body>
</html>