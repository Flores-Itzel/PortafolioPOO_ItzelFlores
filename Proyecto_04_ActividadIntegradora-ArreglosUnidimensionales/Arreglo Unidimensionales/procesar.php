<?php

// Capturar datos enviados desde index.php
$productos = $_POST['producto'];
$precios = $_POST['precio'];

// Calcular resultados
$total = array_sum($precios);

$promedio = $total / count($precios);

$precioMax = max($precios);
$precioMin = min($precios);

// Buscar posiciones
$indiceMax = array_search($precioMax, $precios);
$indiceMin = array_search($precioMin, $precios);

// Obtener nombres
$productoCaro = $productos[$indiceMax];
$productoBarato = $productos[$indiceMin];

// Enviar datos a resultados.php
?>

<form id="datos" action="resultados.php" method="POST">

    <?php

    foreach($productos as $producto){
        echo "<input type='hidden' name='producto[]' value='$producto'>";
    }

    foreach($precios as $precio){
        echo "<input type='hidden' name='precio[]' value='$precio'>";
    }

    ?>

    <input type="hidden" name="total" value="<?php echo $total; ?>">
    <input type="hidden" name="promedio" value="<?php echo $promedio; ?>">
    <input type="hidden" name="productoCaro" value="<?php echo $productoCaro; ?>">
    <input type="hidden" name="precioMax" value="<?php echo $precioMax; ?>">
    <input type="hidden" name="productoBarato" value="<?php echo $productoBarato; ?>">
    <input type="hidden" name="precioMin" value="<?php echo $precioMin; ?>">

</form>

<script>
    document.getElementById("datos").submit();
</script>