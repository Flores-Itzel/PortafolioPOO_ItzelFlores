<?php

$productos = $_POST['producto'];
$precios = $_POST['precio'];

$total = $_POST['total'];
$promedio = $_POST['promedio'];

$productoCaro = $_POST['productoCaro'];
$precioMax = $_POST['precioMax'];

$productoBarato = $_POST['productoBarato'];
$precioMin = $_POST['precioMin'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>

    <style>
        table{
            border-collapse: collapse;
            width: 60%;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: #dddddd;
        }
    </style>

</head>
<body>

    <h2>Resultados del Inventario</h2>

    <table>

        <tr>
            <th>Producto</th>
            <th>Precio</th>
        </tr>

        <?php
        for($i = 0; $i < count($productos); $i++) {
        ?>

        <tr>
            <td><?php echo $productos[$i]; ?></td>
            <td>$<?php echo number_format($precios[$i], 2); ?></td>
        </tr>

        <?php
        }
        ?>

    </table>

    <br>

    <h3>Total de precios:
        $<?php echo number_format($total, 2); ?>
    </h3>

    <h3>Promedio de precios:
        $<?php echo number_format($promedio, 2); ?>
    </h3>

    <h3>Producto más caro:
        <?php echo $productoCaro; ?>
        ($<?php echo number_format($precioMax, 2); ?>)
    </h3>

    <h3>Producto más barato:
        <?php echo $productoBarato; ?>
        ($<?php echo number_format($precioMin, 2); ?>)
    </h3>

</body>
</html>