<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 25</title>
</head>
<body>
  <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die ("Problemas con la conexion");

    $registros = mysqli_query($conexion, "select * from cursos where codigo = '$_REQUEST[codigo]'") or die ("Problemas en el select: ".mysqli_error($conexion));
    
    if ($sele = mysqli_fetch_array($registros))
      {
  ?>

  <form action="t1p25_php2.php" method="post">
  Ingrese nuevo nombre del curso:
  <input type="text" name="nomcurnuevo" value="<?php echo $sele['nombrecurso'] ?>">
  <br>
  <input type="hidden" name="nomcurviejo" value="<?php echo $sele['nombrecurso'] ?>">
  <input type="submit" value="Modificar">
  </form>

  <?php
      }
    else
    {
      echo "No existe un curso con ese codigo";
    }

  ?>
</body>
</html>