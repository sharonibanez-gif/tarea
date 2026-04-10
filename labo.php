<?php
// 1. Definir datos 
$nombre = "tomas Jerry";
$edad = 16;
$notas = [85, 90, 78, 50];
$imagen = "descarga.jpg";

// 2. Verificar 
if (isset($nombre, $edad, $notas)) {

    // Función sin parámetros
    function mensajeBienvenida() {
        return "Datos del estudiante";
    }

    // Función con parámetros
    function calcularPromedio($notas) {
        return array_sum($notas) / count($notas);
    }

    // Procesar datos
    $nombreSeguro = htmlspecialchars($nombre);
    $imagenURL = urlencode($imagen);
    $promedio = calcularPromedio($notas);

    // Arreglo indexado
    $datos = [$nombreSeguro, $edad, $promedio];

    // Arreglo asociativo
    $estudiante = [
        "Nombre" => $nombreSeguro,
        "Edad" => $edad,
        "Promedio" => $promedio
    ];

    // Modificar arreglo con unset
    unset($datos[1]); // eliminar edad del arreglo indexado
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Estudiante</title>
    <link rel="stylesheet" href="labo.css">
</head>
<body>

<h1><?php echo mensajeBienvenida(); ?></h1>

<div class="contenedor">

    <img src="<?php echo $imagen; ?>" alt="Imagen estudiante">

    <h2>Datos </h2>
    <ul>
        <?php
        for ($i = 0; $i < count($datos); $i++) {
            if (isset($datos[$i])) {
                echo "<li>$datos[$i]</li>";
            }
        }
        ?>
    </ul>

    <h2>Datos </h2>
    <ul>
        <?php
        foreach ($estudiante as $clave => $valor) {
            echo "<li><strong>$clave:</strong> $valor</li>";
        }
        ?>
    </ul>

</div>

</body>
</html>