<?php
require_once("php/Database.php");
$base = new Database();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles/style.css">
  <script defer src="js/app.js"></script>
</head>

<body>
  <main>
    <a href="views/create.php">crear</a>
    <table>
      <thead>
        <tr>
          <th>modelo</th>
          <th>marca</th>
          <th>precio</th>
          <th>descripcion</th>
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $base->conectar();
        $tabla = $base->getAll("ordenadores");

        foreach ($tabla as $fila) {
          echo "<tr>";
          for ($i = 1; $i < 5; $i++) {
            echo "<td>$fila[$i]</td>";
          }
          echo "<td>" . "<div class=\"acciones\"><a href=\"views/edit.php?id=$fila[0]\">editar</a>" . "<a href=\"php/delete.php?id=$fila[0]\">elminar</a></div>" . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </main>
</body>

</html>