<?php
session_start();
include 'conexion.php';
// Inicializar la variable para el costo total
$costoTotal = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Carrito HL</title>
</head>
<body class="bg-black">
    <?php
    include 'buscador-style.php';
    include 'header.php';
    echo'<div class="container mt-5 pt-5">';
      echo '<h1>Carrito de Compras</h1>';
 // Verificar si la sesión 'carrito' existe y no está vacía
if ($_SESSION['carrito'] && count($_SESSION['carrito']) > 0) {
    
    // Mostrar los detalles de cada producto en el carrito
    foreach ($_SESSION['carrito'] as $productoId) {
        // Consulta SQL para obtener los detalles de cada producto por su ID
        $sql = "SELECT * FROM productos WHERE id = $productoId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar los detalles de cada producto
            while ($row = $result->fetch_assoc()) {
                echo '<div class="d-flex p-1 justify-content-around align-items-center">';
                echo '    <img class="producto-imagen " width="15%" src="' . $row['imagen_url'] . '" alt="' . $row['nombre'] . '">';
                echo '<h5>' . $row['nombre'] . '</h5>';
                $precioFormateado = number_format($row['precio'], 0, ',', '.');
                echo '<p>Gs. ' . $precioFormateado . '</p>';
                echo '<div class="d-flex">';
                 echo '<form action="index.php" method="POST">';
                echo '<input type="hidden" name="carritoId" value="'. $productoId .'">';
                echo '<button class="btn bg-success me-1" type="submit" value="Agregar al Carrito" name="btnAgregar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5z"/>
</svg></button>';
                echo '</form>';
                echo '<form action="eliminar-producto.php" method="post">';
                echo '<input type="hidden" name="producto_id" value="' . $productoId . '">';
                echo '<button class="btn bg-danger" type="submit" value=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-x-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M6.854 8.146a.5.5 0 1 0-.708.708L7.293 10l-1.147 1.146a.5.5 0 0 0 .708.708L8 10.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 10l1.147-1.146a.5.5 0 0 0-.708-.708L8 9.293z"/>
</svg> </button>';
                echo '</form></div>';
                echo '</div><hr>';
                 // Sumar el precio al costo total
                $costoTotal += $row['precio'];
            }
        } else {
            echo "<h5>No se encontró el producto con ID $productoId en la base de datos.</h5>";
        }
    }
    // Formatear el costo total en formato de moneda
    $costoTotalFormateado = number_format($costoTotal, 0, ',', '.');
    echo '<h3>Costo total: Gs. ' . $costoTotalFormateado . '</h3>';

    // Cierra la conexión después de utilizarla dentro del bucle
    $conn->close();
} else {
    echo "<h1>El carrito está vacío.</h1> ";
}
?>
    </div>
</body>
</html>