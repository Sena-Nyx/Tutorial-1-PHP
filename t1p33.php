<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 33</title>
</head>
<body>
  <form action="t1p33_php.php" method="post" enctype="multipart/form-data">
    <label>Seleecione el archivo: </label> <br>
    <input type="file" name="foto[]" multiple=""> <br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>