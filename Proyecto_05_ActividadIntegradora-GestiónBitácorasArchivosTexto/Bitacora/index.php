<?php
$archivo = "bitacora.txt";
$mensaje = "";

// 2. Procesamiento del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $actividad = trim($_POST['actividad'] ?? '');
    $responsable = trim($_POST['responsable'] ?? '');
    $fecha = $_POST['fecha'] ?? '';

    // 4. Validar campos vacíos
    if (!empty($actividad) && !empty($responsable) && !empty($fecha)) {
        $contenido = "Fecha: $fecha\nActividad: $actividad\nResponsable: $responsable\n" . str_repeat("-", 20) . "\n";
        
        // 2. Guardar en modo append
        if (file_put_contents($archivo, $contenido, FILE_APPEND)) {
            $mensaje = "<p style='color: green;'>¡Actividad registrada con éxito!</p>";
        } else {
            $mensaje = "<p style='color: red;'>Error al guardar el archivo.</p>";
        }
    } else {
        $mensaje = "<p style='color: red;'>Por favor, complete todos los campos.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Bitácora</title></head>
<body>
    <h1>Registro de Bitácora</h1>
    <?php echo $mensaje; ?>
    
    <form method="POST">
        <label>Actividad:</label><br>
        <input type="text" name="actividad"><br>
        <label>Responsable:</label><br>
        <input type="text" name="responsable"><br>
        <label>Fecha:</label><br>
        <input type="date" name="fecha"><br><br>
        <button type="submit">Guardar Actividad</button>
    </form>

    <hr>
    <h2>Bitácora Actual</h2>
    <ol>
        <?php 
        // 3. Lectura y despliegue del archivo
        if (file_exists($archivo)) {
            $lineas = file($archivo, FILE_IGNORE_NEW_LINES);
            foreach ($lineas as $linea) {
                echo "<li>" . htmlspecialchars($linea) . "</li>";
            }
        } else {
            echo "<li>No hay actividades registradas.</li>";
        }
        ?>
    </ol>
</body>
</html>