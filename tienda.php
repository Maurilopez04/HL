<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "hltuning";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
 <?php
if (isset($_POST['btnAgregar'])) {
    $productoId = $_POST['carritoId'];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array(); 
    }

    $_SESSION['carrito'][] = $productoId;

header("Location: tienda.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="css/estilos.css">
    <title>HL TUNING</title>
    <?php include 'buscador-style.php';?>
</head>
  <body class="text-center bg-black m-auto">
 <?php include 'header.php'?>
      <div class="p-4 mt-2"></div>
    

<?php
$sql = "SELECT DISTINCT categoria FROM productos";
$categoria_result = $conn->query($sql);

if ($categoria_result->num_rows > 0) {
    while ($categoria_row = $categoria_result->fetch_assoc()) {
        $categoria = $categoria_row["categoria"];
        echo '<hr style="border-top:1px solid white;"><div class="d-flex justify-content-between m-3">';
        echo '<h2 class="text-start" id="' . $categoria . '">' . $categoria . '</h2>';
        echo '<a href="categoria.php?categoria=' . $categoria . '" class="link-primary">Ver Todo</a></div>'; // Muestra el título de la categoría
   echo' <div class="row m-2">';
        $sql = "SELECT * FROM productos WHERE categoria = '$categoria' LIMIT 4";
        $result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $nombre = $row["nombre"];
            $precio = $row['precio'];
            $imagen_url = $row["imagen_url"];
            $descripcion = $row["descripcion"];
            $categoria = $row["categoria"];
            $Instalacion = $row["Instalacion"];
$precioFormateado = number_format($row['precio'], 0, ',', '.');
           
                echo '<div class="mt-1 col-sm-6 col-lg-3">';
                echo '<div class="producto-div card card-product p-2 h-100" data-id="' . $id . '">';
                echo '    <img class="producto-imagen " src="' . $imagen_url . '" alt="' . $nombre . '">';
                echo '    <div class="producto-text">';
                echo '        <h5 class="producto-descripcion">' . $nombre . '</h5>';
                echo '        <p class="producto-precio">Gs. ' . $precioFormateado . '</p>';
                echo '<form action="tienda.php" method="POST">';
                echo '<input type="hidden" name="carritoId" value="'. $id .'">';
                echo '<button class="btn" type="submit" value="Agregar al Carrito" name="btnAgregar">Agregar al Carrito 
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
</svg>
</button>';
                echo '</form>';
                if ($Instalacion == 'Si') {
                    echo '  <p><span class="badge bg-success">Incluye Instalacion</span></p>';
                } else {
                    echo '  <p><span hidden class="badge bg-success">HL Tuning</span></p>';
                }
                echo '    </div>';
                echo '</div>';
                echo '</div>';
            
        }
    } else {
        echo "No se encontraron productos.";
    }
    echo '</div>';
    }
    
} else {
    echo "No se encontraron categorías de productos.";
}

$conn->close();
?>
  
  
<?php include 'footer.php';?>

<script src="https://kit.fontawesome.com/488435a96f.js" crossorigin="anonymous"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const productos = document.querySelectorAll('.producto-div');

    productos.forEach(function (producto) {
        producto.addEventListener('click', function (event) {
            // Verifica si el clic se realizó en el enlace <a>
            if (!event.target.closest('button')) {
                const productoId = producto.getAttribute('data-id');
                // Redirigir a la página de detalles del producto con el ID correspondiente
                window.location.href = 'descripcion_producto.php?id=' + productoId;
            }
        });
    });
});
</script> 
  </body>
</html>
