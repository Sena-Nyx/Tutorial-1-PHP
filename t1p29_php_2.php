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

    mysqli_query($conexion, "UPDATE alumnos 
                            SET nombre = '$_REQUEST[nombre]', 
                                email = '$_REQUEST[email]', 
                                codigocurso = $_REQUEST[codigocurso]

                            WHERE codigo = $_REQUEST[codigo]") or die("Problemas en el update: " .mysqli_error($conexion));

    echo "Datos modificados con exito";
  ?>
</body>
</html>