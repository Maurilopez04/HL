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

header("Location: descripcion_producto.php?id=".$productoId."");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        body{
            min-height: 100%;
            background-color: black;
        }
        .img-prod{
          width: 70%;
        }
        @media (max-width: 991px) { 
          .img-prod{
          width: 100%;
        }
            }

    </style>
    <title>HL TUNING</title>
    <?php include 'buscador-style.php';?>
</head>
  <body class="text-center bg-black m-auto">
   <?php include 'header.php';?>
            <div class="p-5"></div>
    <div class="container mt-5">
        <?php
        // Verificar si se ha proporcionado un ID de producto válido en la URL
        if (isset($_GET['id'])) {
            $producto_id = $_GET['id'];
            
            // Consulta SQL para obtener los detalles del producto por ID
            $sql = "SELECT * FROM productos WHERE id = " . $producto_id;
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $nombre = $row["nombre"];
                $precio = $row["precio"];
                $imagen_url = $row["imagen_url"];
                $descripcion = $row["descripcion"];
                $Instalacion = $row["Instalacion"];
                // Generar el HTML para mostrar los detalles del producto
                echo '<div class="card mb-3 bg-black text-white" style="width:100%; text-align:justify;"><div class="row g-0"><div class="col-md-6">';
                echo ' <img class="img-prod img-fluid rounded-start" src="' . $imagen_url . '" alt="' . $nombre . '"></div>';
                echo '<div class="col-md-6"><div class="card-body">';
                echo '<h1>' . $nombre . '</h1>';
                echo '<p><b>Precio:</b> Gs. ' . $precio . '</p>';
                echo '<p><b>Descripción:</b> ' . $descripcion . '</p>';
                 if($Instalacion=='Si'){
                    echo '  <p><span class="badge bg-success">Incluye Instalacion</span></p>';
                 }else if($Instalacion=='No'){
                 echo '  <p><span class="badge bg-danger">No Incluye Instalacion</span></p>';
                 }
                 else {
                    echo '<p><b>Aviso: </b>Muchos de los precios no incluyen instalacion y/o envio</p>';}
                 echo '<p><b>Instalaciones: </b>Solo se realizan en el local y pueden tener un costo extra si requiere de accesorios extra</p>';
                 echo '<p><b>Proceso: </b>Se debe contactar con un vendedor (mediante WhatsApp, messenger o el Formulario de contacto) para acordar los costos, la disponibilidad, la instalacion, envio, etc.</p>';
                echo '<form action="descripcion_producto.php" method="POST">';
                echo '<input type="hidden" name="carritoId" value="'. $producto_id .'">';
                echo '<button class="btn w-100" type="submit" value="Agregar al Carrito" name="btnAgregar">Agregar al Carrito 
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
</svg>
</button>';
                echo '</form>';
                echo ' <a style="background-color: #29A800;" class="btn w-100 mt-1" href="https://api.whatsapp.com/send?phone=595983047400&text=Buenas%20me%20interesa%20el%20siguiente%20producto:%20'.$nombre.'"><i class="fa-brands fa-whatsapp"></i> Solicitar en WhatsApp</a>';
                echo ' <a style="background-color: blue;" class="btn w-100 mt-2" href="https://m.me/258535860997437/?&text=Buenas%20me%20interesa%20el%20siguiente%20producto:%20'.$nombre.'"><i class="fa-brands fa-facebook-messenger"></i> Solicitar en Messenger</a>';
                echo '</div></div></div></div>';

            } else {
                echo "<h1>Producto no encontrado.</h1>";
                
            }
        } else {
            echo "ID de producto no proporcionado.";
        }

        $conn->close();
        ?>
    </div>

      <?php include 'formulario-de-contacto.php';?>
<?php include 'footer.php';?>
      <script src="https://kit.fontawesome.com/488435a96f.js" crossorigin="anonymous"></script>

</body>
</html>
