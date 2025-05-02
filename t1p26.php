<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 26</title>
</head>
<body>
  <form action="t1p26_php.php" method="post">
    Ingrese nombre:
    <input type="text" name="nombre"><br>
    Ingrese email:
    <input type="text" name="email"><br>
    Seleccione el curso:
    <select name="codigocurso">
    <?php
      $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexion");
      $registros = mysqli_query($conexion,"select codigo, nombrecurso from cursos") or die("Problemas en el select:".mysqli_error($conexion));

      while ($sele = mysqli_fetch_array($registros))
      {
      echo "<option value = \"$sele[codigo]\"> $sele[nombrecurso]</option>";
      }
    ?>
    </select>
    <br>
    <input type="submit" value="Registrar">
    <!-- INCOMPLETO -->
  </form>
</body>
</html>