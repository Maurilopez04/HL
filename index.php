<?php
session_start();
include 'conexion.php';
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
$sqll = "SELECT * FROM servivios";
$resulttt = $conn->query($sqll);
$conn->close();

 ?>
 <?php
if (isset($_POST['btnAgregar'])) {
    $productoId = $_POST['carritoId'];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array(); 

    }

    $_SESSION['carrito'][] = $productoId;

header("Location: /HL/");
}
if ($_SERVER['REQUEST_URI'] == '/HL/index.php' or $_SERVER['REQUEST_URI'] == '/HL/index') {
    header('Location: /HL/', true, 301);
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css">
<link rel="apple-touch-icon" sizes="180x180" href="/hl/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/hl/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/hl/favicon-16x16.png">
<link rel="manifest" href="/hl/site.webmanifest">
    <title>HL TUNING</title>
    <?php include 'buscador-style.php';?>
</head>
  <body class="text-center bg-black m-auto">
    <?php include 'header.php';?>
      <div class="p-4"></div>
    
      <div class="m-2 mt-5 pc-none">
        <div class="row">
          <div class="col-md-3 pc-none not-mobile">
            <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="img/1.png" class="d-block w-100" alt="Imagen 1">
                  </div>
               <div class="carousel-item">
                    <img src="img/polarizado-suntek.jpg" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                  <img src="img/rigida2.jpg" class="d-block w-100" alt="Imagen 3">
              </div>
              </div>
              <a class="carousel-control-prev" href="#carousel2" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carousel2" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Siguiente</span>
              </a>
            </div>
        </div>
</div></div>
<main class="cel-none">
  <div id="myCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/Slider inicio/TALLER AUTORIZADO Y CERTIFICADO/TALLER AUTORIZADO Y CERTIFICADO (1).png" class="d-block w-100" alt="First slide">
         <div class=" container"> 
          <div class="carousel-caption text-start">

            <p><a class="btn btn-lg btn-primary" href="#" style="margin-bottom: 1%;">Solicitar Servicio</a></p>
          </div>
        </div>
    </div>
      <div class="carousel-item">
        <img src="img/Slider inicio/automotive-film-viewer.jpg" class="d-block w-100" alt="Second slide">
        <div class="container">
          <div class="carousel-caption ">
      <div class="text-container" style="background:rgba(0, 0, 0, 0.5);">
        <h2>PPF SUNTEK</h2>
        <p>Resguarda contra la mayoría de los peligros de la carretera con los que usted se encuentra<br> para ayudar a mantener el acabado original de su auto de manera uniforme.</p>
      <p><a class="btn btn-lg btn-primary mb-2 p-2" href="#">Solicitar Servicio</a></p>
      </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<h2 class="mt-4" style="font-size:35px; color:white;">Productos Destacados</h2>
<div class="row m-2">
    <?php
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
            if ($precio < 700000 ) {
                echo '<div class="mt-1 col-sm-6 col-lg-3">';
                echo '<div class="producto-div card card-product p-2 h-100" data-id="' . $id . '">';
                echo '    <img class="producto-imagen " src="' . $imagen_url . '" alt="' . $nombre . '">';
                echo '    <div class="producto-text">';
                echo '        <h5 class="producto-descripcion">' . $nombre . '</h5>';
                echo '        <p class="producto-precio">Gs. ' . $precioFormateado . '</p>';
                echo '<form action="/HL/" method="POST">';
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
        }
    } else {
        echo "No se encontraron productos.";
    }
    ?>
</div>
    <section class="mt-4 m-3">
      <h3>Servicios</h3>
  <div class="row">
<?php
if ($resulttt->num_rows > 0) {
    while ($row = $resulttt->fetch_assoc()) {
        $id = $row["id"];
        $nombre = $row["nombre"];
        $imagen_url = $row["imagen_url"];
        $descripcion = $row["descripcion"];
        
        echo '<div class="col-lg-4 col-md-6 mb-6">';
        echo '<div class="card cardbg mt-3">';
        echo '  <img style="height:200px;" class="card-img-top w-100" src="' . $imagen_url . '" alt="' . $nombre . '">';
        echo '   <div class="card-body">';
        echo '     <h4 class="card-title c-white" style="color: #cecece;">' . $nombre . '</h4>';
        echo '<a type="button" class="btn" href="https://api.whatsapp.com/send?phone=595983047400&text=Buenas%20me%20interesa%20el%20siguiente%20Servicio:%20'.$nombre.'">';
        echo '<i class="fa-brands fa-whatsapp"></i> Solicitar Servicio</a>';
        echo '    </div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No se encontraron productos.";
}
?></div>
</section>

<?php include 'formulario-de-contacto.php' ?>

    <div class="m-3 mt-1">
    <div class="row">
      <iframe class="col-md-12" id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10198.1876815046!2d-57.51048356714671!3d-25.351071633921325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945dae7fc3a6f3f7%3A0x20ded255a85c524d!2sHL%20Tuning!5e0!3m2!1ses!2spy!4v1693794786388!5m2!1ses!2spy"
       width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>

<div class="me-3 ms-3 bg-white p-1">
<h3 class="m-3 text-dark fw-bold">Nuestras Marcas</h3>
<div class="row marcas-img p-2 m-2 align-items-center">
<article class="col-md-3 col me-1"><img src="img/marcas/1.png" width="150px"  alt=""></article>
<article class="col-md-3 me-1 "><img src="img/marcas/2.png" width="150px" alt=""></article>
<article class="col-md-3 me-1 "><img src="img/marcas/3.png" width="150px" alt=""></article>
<article class="col-md-3 me-1"><img src="img/marcas/4.png" width="150px" alt=""></article>
<article class="col-md-3 me-1"><img src="img/marcas/5.png" width="150px" alt=""></article>
<article class="col-md-3 me-1"><img src="img/marcas/6.png" width="150px" alt=""></article>
<article class="col-md-3 me-1"><img src="img/marcas/7.png" width="150px" alt=""></article>
<article class="col-md-3 me-1"><img src="img/marcas/8.png" width="150px" alt=""></article>
<article class="col-md-3 me-1"><img src="img/marcas/9.png" width="150px" alt=""></article>
<article class="col-md-3 me-1"><img src="img/marcas/10.png" width="150px" alt=""></article>
</div></div>

<?php
include 'footer.php';
?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const productos = document.querySelectorAll('.producto-div');

    productos.forEach(function (producto) {
        producto.addEventListener('click', function (event) {
            if (!event.target.closest('button')) {
                const productoId = producto.getAttribute('data-id');
                window.location.href = 'descripcion_producto.php?id=' + productoId;
            }
        });
    });
});

</script>

<script src="https://kit.fontawesome.com/488435a96f.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="slick-config.js"></script>

</body>
</html>