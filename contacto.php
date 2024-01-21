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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tienda.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/estilos.css">
    <title>HL TUNING</title>

</head>
<body class="text-center bg-black">
    <nav class="navbar fixed-top p-2 pt-3 pb-3 header">
        <div class="container-fluid">
          <a class="text-black link-secondary " href="index.php"><img width=150px src="img/logo.png" alt="" srcset=""></a>
          <div class="centered-element cel-none">
          <form class="buscador" action="resultados.php" method="get">
<input class="Search" type="text" name="busqueda" placeholder="Buscar producto, modelo, categoria" aria-label="Search" id="buscado">
<input type="hidden" id="search-type" value="all">
<button class="btn-search dark" type="submit" name="enviar" value="Buscar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg> Buscar</button>    
</form>

          </div>
          <div>
          <button class="navbar-toggler bg-white border-radius-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header bg-black">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img width=170px src="img/logo.png" alt="" srcset=""></h5>
              <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
      <li><a href="services.php" class="nav-link">Servicios</a></li>
      <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tienda
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="tienda.php">Todos los productos</a></li>
                    <li><a class="dropdown-item" href="tienda.php#Buscahuellas">Buscahuellas</a></li>
                    <li><a class="dropdown-item" href="tienda.php#Alfombras">Alfombras</a></li>
                    <li><a class="dropdown-item" href="tienda.php#Tiratrailer">TiraTrailer</a></li>
                    <li><a class="dropdown-item" href="tienda.php#Carpas">Carpas</a></li>
                    <li><a class="dropdown-item" href="tienda.php#Buflector">Buflector</a></li>
                  </ul>
                </li>
    <li><a href="https://goo.gl/maps/Xtx2LfqqBQJtF2j16" target="_blank" class="nav-link">Ubicacion</a></li>
    <li><a href="https://api.whatsapp.com/send?phone=595983047400" class="nav-link">Contacto</a></li>
    <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Redes Sociales
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="https://www.instagram.com/hltuningpy_/">Instagram</a></li>
                    <li><a class="dropdown-item" href="https://www.facebook.com/profile.php?id=100056706925841">Facebook</a></li>
                    <li><a class="dropdown-item" href="https://www.tiktok.com/@hltuningpy">TikTok</a></li>

                  </ul>
                </li>
               <li><a href="academia.php" class="nav-link">Academia</a></li>
      <li><hr></li>
      <li>              <form class="d-flex" action="resultados.php" method="get">
<input class="form-control me-2" type="text" name="busqueda" placeholder="Buscar producto" aria-label="Search">
<input type="hidden" id="search-type" value="all">
<button class="btn btn-outline-success" type="submit" name="enviar" value="Buscar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg> </button>    
</form></li>
               </ul>
            </div>
            <div class="navbar-fixed-bottom mb-0">
            <a class="btn btn-success mb-2 mt-1" href="https://api.whatsapp.com/send?phone=595983047400">Contactar al WhatsApp</a>
          </div>

          </div>
        </div>
  
      </nav>
      <div class="p-4"></div>


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
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Mensaje" required></textarea>
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
      <script src="https://kit.fontawesome.com/488435a96f.js" crossorigin="anonymous"></script>

</body>
</html>