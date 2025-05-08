<?php
   session_start();
   $_SESSION['email'] = $_REQUEST['campoemail'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio 34</title>
</head>
<body>
   <?php
      $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexion");

      $email = $_REQUEST['campoemail'];

      $registros = mysqli_query($conexion, "SELECT email, nombre FROM alumnos WHERE email = '$email'") or die ("Problemas en el select: " . mysqli_error($conexion));

      if ($sele = mysqli_fetch_array($registros))
      {
         $nombre = $_SESSION['nombre'] = $sele['nombre'];
         echo "El nombre fue rescatado correctamente <br>";
      }
      else {
         echo "El email no esta registrado <br>";
      }
   ?>
   <a href="t1p37_php_2.php">Ir a la tercer pagina</a>

</body>
</html>