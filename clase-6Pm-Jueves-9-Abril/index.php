<?php

include_once 'includes/compra.php';

$compra = new Compra();

$lista = $compra->getCompra();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
</head>
<body>
    <ul>
        <li>
            <a href="">Home</a>
        </li>
        <li>
            <a href="vistas/ingresar.php">Registrar</a>
        </li>
        <li>
            <a href="vistas/actualizar.php">Actualizar</a>
        </li>
        <li>
            <a href="vistas/eliminar.php">Eliminar</a>
        </li>
    </ul>
    <table border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($lista as $producto){
                    echo "<tr>";
                    echo "  <td>".$producto['id'] ."</td>";
                    echo "  <td>".$producto['producto'] ."</td>";
                    echo "  <td>".$producto['cantidad'] ."</td>";
                    echo "  <td>".$producto['valor'] ."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>