<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>insert alumnos</title>
</head>
<body>
  <h1>Alta de Alumnos</h1>
  <form action="inserteje.php" method="post">

    Ingrese nombre:
    <input type="text" name="nombre"><br>
    Ingrese mail:
    <input type="text" name="email"><br>

    Seleccione el curso:
    <select name="codigocurso">
    <option value="1">PHP</option>
    <option value="2">ASP</option>
    <option value="3">JSP</option>
    </select>
    <br>
    <input type="submit" value="Registrar">
  </form>
</body>
</html>