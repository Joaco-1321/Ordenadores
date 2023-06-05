<?php 
// $_GET['nombre'] --> recoge el valor de la variable 'nombre' de la URL
// Ejemplo: http://localhost/php/delete.php?id=2

// 1. Recoger el id de la url. 
// 1.1 Ver si existe y en tal caso recogerlo.
$id = $_GET['id'];

// 2. Importar la clase Database.php
require_once('../php/Database.php');

// 3. Invocar la funcion findById de la clase Database.php
$ordenador = Database::findById($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="../php/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $ordenador['id'] ?>">
        <input type="text" name="marca" value="<?php echo $ordenador['marca'] ?>" placeholder="Actualiza la marca">
        <input type="text" name="modelo" value="<?php echo $ordenador['modelo'] ?>" placeholder="Actualiza el modelo">
        <input type="text" name="precio" value="<?php echo $ordenador['precio'] ?>" placeholder="Actualiza el precio">
        <input type="text" name="descripcion" value="<?php echo $ordenador['descripcion'] ?>" placeholder="Actualiza el precio">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>