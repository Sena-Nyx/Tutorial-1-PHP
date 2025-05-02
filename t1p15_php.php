<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 15</title>
</head>
<body>
  <?php
    $agregar = fopen("datos.txt", "a") or die ("Problemas con la creacion");

    fputs($agregar, $_REQUEST['nombre']);
    fputs($agregar, "\n");

    fputs($agregar, $_REQUEST['direccion']);
    
    fputs($agregar, "\n");

    if (isset($_REQUEST['jamon_y_queso'])) 
    {
      fputs($agregar, "Jamon y queso: " . $_REQUEST['cantidad_jyq'] . "\n");
    }

    if (isset($_REQUEST['napolitana'])) 
    {
      fputs($agregar, "Napolitana: " . $_REQUEST['cantidad_n'] . "\n");
    }
  
    if (isset($_REQUEST['muzzarella'])) 
    {
      fputs($agregar, "Muzzarella: " . $_REQUEST['cantidad_m'] . "\n");
    }

    fclose($agregar);

    echo "Los datos se cargaron correctamente";
  ?>

  <?php
    $agregar = fopen("datos.txt", "r") or die("No se pudo abrir el archivo");

    while (!feof($agregar)) {
      $linea = fgets($agregar);
      echo nl2br($linea);
    }

    fclose($agregar);
  ?>
</body>
</html>