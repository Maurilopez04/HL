<?php
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
                echo ' <a style="background-color: #29A800;" class="btn w-100" href="https://api.whatsapp.com/send?phone=595983047400&text=Buenas%20me%20interesa%20el%20siguiente%20producto:%20'.$nombre.'"><i class="fa-brands fa-whatsapp"></i> Solicitar en WhatsApp</a>';
                echo ' <a style="background-color: #800080;" class="btn w-100 mt-2" href="https://api.whatsapp.com/send?phone=595983047400&text=Buenas%20me%20interesa%20el%20siguiente%20producto:%20'.$nombre.'"><i class="fa-brands fa-facebook-messenger"></i> Solicitar en Messenger</a>';
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

       <div class="container mt-5 mb-5"> <hr style="color:white;">
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
                        <h2>HL Tuning</h2>
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


      <script src="https://kit.fontawesome.com/488435a96f.js" crossorigin="anonymous"></script>

</body>
</html>
