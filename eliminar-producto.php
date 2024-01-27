<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['producto_id'])) {
    $productoId = $_POST['producto_id'];

    // Buscar el índice del producto en el array 'carrito'
    $indice = array_search($productoId, $_SESSION['carrito']);

    if ($indice !== false) {
        // Eliminar el producto del array 'carrito' y ajustar los índices
        unset($_SESSION['carrito'][$indice]);

        // Opcional: Puedes reiniciar los índices del array
        $_SESSION['carrito'] = array_values($_SESSION['carrito']);

        echo "Producto con ID $productoId eliminado del carrito.";
        header('location:carrito.php');
    } else {
        echo "El producto con ID $productoId no se encontró en el carrito.";
    }
} else {
    echo "Acceso no permitido.";
}
?>
