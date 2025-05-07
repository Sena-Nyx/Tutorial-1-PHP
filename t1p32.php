<html>
  <head>
    <title>Ejercicio 32</title>
  </head>
  <body>

    <?php
    if (isset($_REQUEST['pos']))
      $inicio = $_REQUEST['pos'];
    else
      $inicio = 0;
    ?>

    <?php
      $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexion");

      $registros = mysqli_query($conexion, "SELECT codigo, nombrecurso
                                            FROM cursos
                                            LIMIT $inicio, 2") or die("Problemas en el select:" . mysqli_error($conexion));
      $impresos = 0;

      while ($sele = mysqli_fetch_array($registros)) 
      {
        $impresos++;
        echo "Codigo: " . $sele['codigo'] . "<br>";
        echo "Curso: " . $sele['nombrecurso'] . "<br>";
        echo "<hr>";
      }

      if ($inicio == 0)
        echo "anteriores ";
      else 
      {
        $anterior = $inicio - 2;
        echo "<a href=\"t1p32.php?pos=$anterior\">Anteriores </a>";
      }

      if ($impresos == 2) 
      {
        $proximo = $inicio + 2;
        echo "<a href=\"t1p32.php?pos=$proximo\">Siguientes</a>";
      } 
      else
        echo "siguientes ";

      mysqli_close($conexion);
    ?>
  </body>
</html>
