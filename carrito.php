<?php
session_start();
include 'conexion.php';

$costoTotal = 0;

?>
 <?php
if (isset($_POST['btnAgregar'])) {
    $productoId = $_POST['carritoId'];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array(); 
    }

    $_SESSION['carrito'][] = $productoId;

header("Location: carrito");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="manifest" href="/hl/site.webmanifest">
    <title>Carrito HL</title>
</head>
<body class="bg-black">
    <?php
    include 'buscador-style.php';
    include 'header.php';
    echo'<div class="container mt-5 pt-5">';
      echo '<h1>Carrito de Compras</h1><hr style="color:#fff;">';
 // Verificar si la sesión 'carrito' existe y no está vacía
if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {

    foreach ($_SESSION['carrito'] as $productoId) {
        $sql = "SELECT * FROM productos WHERE id = $productoId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar los detalles de cada producto
            while ($row = $result->fetch_assoc()) {
                $nombre= $row['nombre'];
                echo '<div class="d-flex p-1 justify-content-around align-items-center flex-wrap">';
                echo '    <img class="producto-imagen " width="160px" src="' . $row['imagen_url'] . '" alt="' . $row['nombre'] . '">';
                echo '<h5>' . $row['nombre'] . '</h5>';
                $precioFormateado = number_format($row['precio'], 0, ',', '.');
                echo '<p>Gs. ' . $precioFormateado . '</p>';
                echo '<div class="d-flex"><a class="btn bg-primary me-1" href="descripcion_producto.php?id='.$productoId.'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
</svg></a>';
                 echo '<form action="carrito" method="POST">';
                echo '<input type="hidden" name="carritoId" value="'. $productoId .'">';
                echo '<button class="btn bg-success me-1" type="submit" value="Agregar al Carrito" name="btnAgregar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5z"/>
</svg></button>';
                echo '</form>';
                echo '<form action="eliminar-producto" method="post">';
                echo '<input type="hidden" name="producto_id" value="' . $productoId . '">';
                echo '<button class="btn bg-danger" type="submit" value=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-x-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M6.854 8.146a.5.5 0 1 0-.708.708L7.293 10l-1.147 1.146a.5.5 0 0 0 .708.708L8 10.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 10l1.147-1.146a.5.5 0 0 0-.708-.708L8 9.293z"/>
</svg> </button>';
                echo '</form></div>';
                echo '</div><hr style="color:#fff;">';
                 // Sumar el precio al costo total
                $costoTotal += $row['precio'];
            }
        } else {
            echo "<h5>No se encontró el producto con ID $productoId en la base de datos.</h5>";
        }
    }
    // Formatear el costo total en formato de moneda
    $costoTotalFormateado = number_format($costoTotal, 0, ',', '.');
    echo '<h3>Costo total: Gs. ' . $costoTotalFormateado . '</h3><hr style="color:#fff;"><div class="row m-2 justify-content-between">';
                echo ' <a style="background-color: #29A800;" class="btn col-md-3 " href="https://api.whatsapp.com/send?phone=595983047400&text=Buenas%20me%20interesa%20el%20siguiente%20producto:';
foreach ($_SESSION['carrito'] as $productoId) {
    $sql = "SELECT * FROM productos WHERE id = $productoId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nombre = $row['nombre'];
            echo '%0A - ' . $nombre; // %0A es un salto de línea en la URL
        }
    }
}

echo '%0A&productos='; // Agregar el final del enlace y el parámetro de productos

echo '"><i class="fa-brands fa-whatsapp"></i> Contactar al WhatsApp</a>';
              echo '<a style="background-color: blue;" href="https://m.me/258535860997437/?&text=Buenas%20me%20interesa%20el%20siguiente%20producto:';
foreach ($_SESSION['carrito'] as $productoId) {
    $sql = "SELECT * FROM productos WHERE id = $productoId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nombre = $row['nombre'];
            echo '%0A - ' . $nombre; // %0A es un salto de línea en la URL
        }
    }
}

echo '%0A&productos='; // Agregar el final del enlace y el parámetro de productos

echo '" class="btn col-md-3" target="_blank"><i class="fa-brands fa-facebook-messenger"></i> Contactar por Messenger</a><a class="btn col-md-2" href="index.php">Inicio</a><a class="btn col-md-2" href="tienda.php">Tienda</a></div>';
    $conn->close();
} else {
    echo "<h3>El carrito está vacío.</h3> ";
}
?>
    </div>
       <?php include 'formulario-de-contacto.php'; ?>
    <?php include 'footer.php'; ?>
<script src="https://kit.fontawesome.com/488435a96f.js" crossorigin="anonymous"></script>
<script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>