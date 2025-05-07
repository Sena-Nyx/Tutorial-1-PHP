<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 29</title>
</head>
<body>
  <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexion");

    $registros = mysqli_query($conexion, "SELECT * FROM alumnos WHERE codigo = $_REQUEST[codigo]") or die ("Problemas con el select" .mysqli_error($conexion));

    if ($codalu = mysqli_fetch_array($registros))
    {
  ?>

  <form action="t1p29_php_2.php" method="post">
    <input type="hidden" name="codigo" value="<?php echo $codalu['codigo'] ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $codalu['nombre'] ?>"><br>

    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $codalu['email'] ?>"><br>

    <label>Curso:</label>
    <select name="codigocurso">

    <?php 
      $registros = mysqli_query($conexion, "SELECT * FROM cursos") or die ("Problemas con el select" .mysqli_error($conexion));

      while ($sele = mysqli_fetch_array($registros))
        {
          $selected = ($codalu['codigocurso'] == $sele['codigo']) ? 'selected' : '';
          echo "<option value='{$sele['codigo']}' $selected>{$sele['nombrecurso']}</option>";
        }
    ?>
    </select>

    <br>
    <input type="submit" value="Modificar">
  </form>
  <?php
    }
    else
      echo "No existe un alumno con ese codigo";
  ?>
</body>
</html>