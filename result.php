<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <title>Total</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Preparamos un array con los precios de los productos que iteraremos luego
    $precios = [
        'burger' => 6.95,
        'pasta' => 8.50,
        'pizza' => 7.90,
        'quinoa' => 9.20,
        'water' => 1.20,
        'beer' => 1.80,
        'orange' => 1.80,
    ];

    // Inicializamos una variable con valor cero para el total
    $total_pedido = 0;

    // Imprimimos en pantalla el cabecero de la tabla del resultado 
    echo "<h3>Resumen del Pedido:</h3>";
    echo "<table border='1'>";
    echo "<tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Subtotal</th>
        </tr>";

        // Iteramos sobre los productos del array 
    foreach ($precios as $producto => $precio_unitario) { //Es un array de clave valor y utilizaremos el valor (precio producto)
        $cantidad = isset($_POST[$producto]) ? intval($_POST[$producto]) : 0; //Comprobamos con isset que existe un valor enviado por POST y si ese valor existe nos aseguramos de que sea numérico con intval
        $subtotal = $precio_unitario * $cantidad; // Multipliamos el valor por la cantidad

        // Imprimimos los valores en nuestra tabla de resultado
        echo "<tr>";
        echo "<td>{$producto}</td>";
        echo "<td>{$cantidad}</td>";
        echo "<td>{$precio_unitario}</td>";
        echo "<td>{$subtotal}</td>";
        echo "</tr>";

        $total_pedido += $subtotal;
    }

    echo "<tr><td colspan='3'><strong>Total</strong></td><td><strong>{$total_pedido} €</strong></td></tr>";
    echo "</table>";
}
?>
    <a href="index.php"><button>VOLVER</button></a>
</body>
</html>