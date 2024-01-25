<?php
session_start();
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "hltuning");

try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

} catch (mysqli_sql_exception $e) {
    header("Location: error.php");
    exit();
}

// Función para obtener el nombre del producto según el ID
function obtenerNombreProducto($productoId, $conn) {
    $sql = "SELECT nombre FROM productos WHERE id = " . $productoId;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['nombre'];
    } else {
        return "Producto Desconocido";
    }
}

if (isset($_POST['agregar_al_carrito'])) {
    $productoId = $_POST['agregar_al_carrito'];

    // Abrir la conexión antes de utilizar la función obtenerNombreProducto
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    $_SESSION['carrito'][] = obtenerNombreProducto($productoId, $conn);

    // Cerrar la conexión después de utilizarla
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
</head>
<body>

<h1>Carrito de Compras</h1>

<!-- Mostrar productos en el carrito -->
<div>
    <h2>Productos en el Carrito</h2>
    <?php
    if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $producto) {
            echo "<p>$producto</p>";
        }
    } else {
        echo "<p>El carrito está vacío.</p>";
    }
    ?>
</div>

</body>
</html>



