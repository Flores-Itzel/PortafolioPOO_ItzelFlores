<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario de Productos</title>
</head>
<body>

    <h2>Registro de Productos</h2>

    <form action="procesar.php" method="POST">

        <?php
        for($i = 1; $i <= 5; $i++) {
        ?>

            <h3>Producto <?php echo $i; ?></h3>

            <label>Nombre:</label>
            <input type="text" name="producto[]" required>

            <br><br>

            <label>Precio:</label>
            <input type="number" name="precio[]" step="0.01" min="1" required>

            <br><br>

        <?php
        }
        ?>

        <input type="submit" value="Procesar">

    </form>

</body>
</html>