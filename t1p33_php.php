<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 33</title>
</head>
<body>
  <?php
  foreach ($_FILES['foto'] ['tmp_name'] as $key => $tmp_name)
  {
    if ($_FILES['foto'] ['name'] [$key])
    {
      $archivofoto = $_FILES['foto'] ['name'] [$key];
      $fuente = $_FILES['foto'] ['tmp_name'] [$key];

      $carpeta = 'archivos';

      if (!file_exists($carpeta))
      {
        mkdir($carpeta, 0777) or die ("Hubo un problema al crear el direcctorio de almacenamiento");
      }

      $dir = opendir($carpeta);
      $target_path = $carpeta . '/' . $archivofoto;

      if (move_uploaded_file($fuente, $target_path))
      {
        echo "Los archivos $archivofoto se han cargado de forma correcta <br>";
      }

      else {
        echo "Se ha producido un error, por favor revise los archivos e intentelo de nuevo <br>";
      }

      closedir($dir);
    }
  }
  ?>
</body>
</html>