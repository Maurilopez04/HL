<?php
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
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/488435a96f.js" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css">
    <title>HL TUNING</title>
    <?php include 'buscador-style.php';?>
</head>
  <body class="text-center bg-black m-auto">
    <nav class="navbar fixed-top p-3 pt-3 pb-3 header">
        <div class="container-fluid p-2">
          <a class="text-black link-secondary " href="index.php"><img width="180px" src="img/logo.png" alt="" srcset=""></a>
          <div class="centered-element cel-none">

          <form class="searchBox " action="resultados.php" method="get">
<input class="searchInput" type="text" name="busqueda" placeholder="Buscar producto, modelo, categoria" aria-label="Search" required>
<input type="hidden" id="search-type" value="all">
<button class="searchButton"type="submit" name="enviar" value="Buscar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg> </button>   
</form>


          </div>
                   <div>
          <button class="navbar-toggler navbar-dark border-radius-2" style="background: var(--gradient-2, linear-gradient(90deg, darkred 0%, red 100%));" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon white"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header bg-black">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><a href="https://hltuning.com"><img width=190px src="img/logo.png" alt="" srcset=""></a></h5>
              <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="background-color: #030303;">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

      <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   <i class="fa-solid fa-shop"></i> Tienda
                  </a><ul class="dropdown-menu bg-black">
                    <li><a class="nav-link text-white" href="tienda.php">Todas las categorias</a></li>
                    <li><a class="nav-link text-white" href="categoria.php?categoria=Faros,%20LED%20y%20Buscahuellas">Buscahuellas</a></li>
                    <li><a class="nav-link text-white" href="categoria.php?categoria=Alfombras">Alfombras</a></li>
                    <li><a class="nav-link text-white" href="categoria.php?categoria=Tiratrailer">TiraTrailer</a></li>
                    <li><a class="nav-link text-white" href="categoria.php?categoria=Valijas">Valijas</a></li>
                    </ul>
                      <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     <i class="fa-solid fa-location-dot"></i> Ubicacion
                  </a>
                  <ul class="dropdown-menu bg-black">
                    <li><a class="nav-link text-white" href="https://goo.gl/maps/Xtx2LfqqBQJtF2j16" target="_blank"><i class="fa-solid fa-map-pin"></i> Casa Central</a></li>
                    <li><a class="nav-link text-white" href="https://goo.gl/maps/Xtx2LfqqBQJtF2j16" target="_blank"><i class="fa-solid fa-map-pin"></i> Centro de Instalaciones</a></li>
                  </ul>
    <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   <i class="fa-solid fa-thumbs-up"></i> Redes Sociales
                  </a>
                  <ul class="dropdown-menu bg-black">
                    <li><a class="nav-link text-white" href="https://www.instagram.com/hltuningpy_/">Instagram</a></li>
                    <li><a class="nav-link text-white" href="https://www.facebook.com/profile.php?id=100056706925841">Facebook</a></li>
                    <li><a class="nav-link text-white" href="https://www.tiktok.com/@hltuningpy">TikTok</a></li>
                  </ul>
                </li>
                 <li><a href="services.php" class="nav-link text-white"><i class="fa-solid fa-car"></i> Servicios</a></li>
                   <li><a href="contacto.php" class="nav-link text-white"><i class="fa-solid fa-message"></i> Formulario de Contacto</a></li>
      <li>    </li>
               </ul>
            </div>
            <div class="navbar-fixed-bottom mb-0 text-white" style="background-color: #030303;">
            <form class="buscador pc-none mb-3" action="resultados.php" method="get">
<input class="Search p-2" type="text" name="busqueda" placeholder="Buscar producto o modelo" aria-label="Search" id="buscado">
<input type="hidden" id="search-type" value="all">
<button class="btn p-2 bg-white" style="color: black;" type="submit" name="enviar" value="Buscar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>    
</form> 
            <p class="cel-none"><i class="fa-solid fa-phone"></i> 0983047400</p>
            <p class=""><i class="fa-solid fa-envelope"></i> hltuning@hltuning.com</p>
            <a class="btn btn-success mb-2 mt-1 pc-none" href="tel:+595983047400"><i class="fa-solid fa-phone"></i> 0983047400</a>
            <a class="btn btn-success mb-2 mt-1" href="https://api.whatsapp.com/send?phone=595983047400"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
          </div>
          </div>
        </div>
      </nav>

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
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $nombre = $row["nombre"];
            $precio = $row["precio"];
            $imagen_url = $row["imagen_url"];
            $descripcion = $row["descripcion"];
            $categoria = $row["categoria"];
            $Instalacion = $row["Instalacion"];

            if ($precio < 700000) {
                echo '<div class="mt-1 col-sm-6 col-lg-3">';
                echo '<div class="producto-div card card-product p-2 h-100" data-id="' . $id . '">';
                echo '    <img class="producto-imagen " src="' . $imagen_url . '" alt="' . $nombre . '">';
                echo '    <div class="producto-text">';
                echo '        <h5 class="producto-descripcion">' . $nombre . '</h5>';
                echo '        <p class="producto-precio">Gs. ' . $precio . '</p>';
                echo '        <a class="btn btn-primary btn-sm" href="https://api.whatsapp.com/send?phone=595983047400&text=Buenas%20me%20interesa%20el%20siguiente%20Producto:%20' . $nombre . '">';
                echo '            Adquirir <i class="fab fa-whatsapp"></i>';
                echo '        </a>';
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
$sql = "SELECT * FROM servivios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $nombre = $row["nombre"];
        $imagen_url = $row["imagen_url"];
        $descripcion = $row["descripcion"];
        
        echo '<div class="col-lg-4 col-md-6 mb-6">';
        echo '<div class="card cardbg mt-3">';
        echo '  <img style="height:200px;" class="card-img-top w-100" src="' . $imagen_url . '" alt="' . $nombre . '">';
        echo '   <div class="card-body">';
        echo '     <h4 class="card-title c-white" style="color: #cecece;">' . $nombre . '</h4>';
        echo '<a type="button" class="btn btn-primary" href="https://api.whatsapp.com/send?phone=595983047400&text=Buenas%20me%20interesa%20el%20siguiente%20Servicio:%20'.$nombre.'">';
        echo '<i class="fa-brands fa-whatsapp"></i> Solicitar Servicio</a>';
        echo '    </div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No se encontraron productos.";
}

$conn->close();
?></div>
</section>

<div class="container mt-5 mb-4 m-auto"> 
    <div class="row justify-content-between align-items-center p-2">
        <div class="col-md-6 ">
            <h2 class="mb-4 text-white bg-img-tr2">¡Contacto!</h2>
            <form action="https://formsubmit.co/hltuning.equipamientos@gmail.com" method="POST">
                <div class="form-group m-3">
                    <input type="text" class="form-control" id="nombre" name="name" placeholder="Nombre" required>
                </div>
                <div class="form-group m-3">
                    <input type="email" class="form-control" id="correo" name="email" placeholder="Correo Electrónico" required>
                </div>
                <div class="form-group m-3">
                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Número de Teléfono">
                </div>
                <div class="form-group m-3">
                    <textarea class="form-control" id="mensaje" placeholder="Hola me interesa..." name="mensaje" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-dark border btn-block mb-1">Enviar Mensaje</button>
            </form>
        </div>
    
        <div class="col-md-6 text-center bg-img-tr text-white pt-4 pb-4">
            <h4 class="mb-3">Información de Contacto</h4>
            <ul class="list-unstyled">
                <li><strong>Correo Electrónico:</strong></li>
                <li>hltuning@hltuning.com</li>
                <li><strong>Teléfono:</strong></li>
                <li>+595 983 047 400</li>
            </ul>
            <h4 class="mb-3 d-block">Contacto por redes</h4>
            <div class="row">
              <a href="https://www.instagram.com/hltuningpy_/" class="nav-btn"><i class="fa-brands fa-instagram"></i> hltuningpy_</a>
              <a href="https://www.facebook.com/profile.php?id=100056706925841" class="nav-btn"><i class="fa-brands fa-square-facebook"></i> HL Tuning</a>
              <a href="https://api.whatsapp.com/send?phone=595983047400" class="nav-btn"><i class="fa-brands fa-whatsapp"></i> 0983047400</a>
    </div>
</div></div></div>
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


  <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        
                        <h3><i class="fa-solid fa-location-dot"></i> Casa Central:</h3>
                    <p> General Caballero esq. Buenos Aires</p>
                       <h3><i class="fa-solid fa-location-dot"></i> Centro de Instalaciones:</h3>
                    <p> General Caballero esq. Buenos Aires</p>
                   
                    <h3><i class="fa-regular fa-clock"></i> Horario de atencion</h3>
                    <p>Lunes a Sabados 7:00 a 18:00</p>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                <h1 style="font-size: 20px; font-weight: 700; text-decoration: double; color: rgb(255, 255, 255);
                text-shadow: 1px 1px 2px rgb(255, 255, 255); text-align: center;">HL Tuning</h1>
                    <ul>
                        <li><a href="#">La empresa</a></li>
                        <li><a href="#">Formulario de Contacto</a></li>
                        <li><a href="#">Capacitate con nosotros</a></li>
                        <li><a href="#">Trabaja con nosotros</a></li>
                    </ul>
                    </div>                    
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <h2>Información Legal</h2>
                    <ul>
                        
                        <li><a href="#">Términos y Condiciones</a></li>
                        <li><a href="#">Políticas de Privacidad</a></li>
                        <li><a href="#">Políticas de Envío</a></li>
                        <li><a href="#">Cambios y Devoluciones</a></li>
                    </ul>
                    </div>                    
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <h2>Suscríbete y recibí nuestras ofertas por correo</h2>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Ingresa tu Email" aria-label="Enter your Email ..." aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-long-arrow-right"></i></span>
                        </div>
                        <h2>Redes Sociales</h2>
                        <p class="socials">
                            <i class="fa fa-facebook"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-tiktok"></i>
                            <i class="fa fa-youtube"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>          
      <div class="bg-black"><img width="150px" src="img/logo.png" alt="" srcset="" class="mb-3 mt-3"></div>   
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
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>

  $(document).ready(function(){
  $('.marcas-img').slick({
  infinite: true,
  arrows: false,
  centerMode: true,
  touchMove: false,
  focusOnSelect:false,
  pauseOnFocus:false,
  pauseOnTouch:false,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 1800,
  slidesToShow: 6,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 720,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]

});
 });
</script>
</body>
</html>