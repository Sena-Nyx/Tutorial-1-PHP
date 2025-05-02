<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 10</title>
</head>
<body>
  <?php
    if ($_REQUEST['estudios'] == "no tiene estudios")
    {
      echo $_REQUEST['nombre'] . " sus estudios son " . $_REQUEST['estudios'];
    }

    elseif ($_REQUEST['estudios'] == "estudios primarios")
    {
      echo $_REQUEST['nombre'] . " sus estudios son " . $_REQUEST['estudios'];
    } 

    elseif ($_REQUEST['estudios'] == "estudios secundarios")
    {
      echo $_REQUEST['nombre'] . " sus estudios son " . $_REQUEST['estudios'];
    } 
  ?>
</body>
</html>