<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 14</title>
</head>
<body>
  <?php
    $d_semana = array("lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo");
    echo "Primer Dia: " . $d_semana[0] . "<br>";
    echo "Ultimo Dia: " . $d_semana[count($d_semana)-1] . "<br>";
  ?>
</body>
</html>