<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

if (isset($_POST['agregar_al_carrito'])) {
    $producto = array(
        'id' => $_POST['id'],
        'nombre' => $_POST['nombre'],
        'precio' => $_POST['precio'],
        'cantidad' => 1,
    );

    // Verificar si el producto ya está en el carrito
    $index = array_search($_POST['id'], array_column($_SESSION['carrito'], 'id'));

    if ($index !== false) {
        // Si el producto ya está en el carrito, aumentar la cantidad
        $_SESSION['carrito'][$index]['cantidad']++;
    } else {
        // Si el producto no está en el carrito, agregarlo
        $_SESSION['carrito'][] = $producto;
    }
}

// Redireccionar de nuevo a la página principal o de productos
header('Location: index.php'); // Cambia 'index.php' por la página que estás utilizando
exit();
?>
