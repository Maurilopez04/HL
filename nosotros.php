<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tienda.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<?php
include 'estilos.php';
?>
    <title>HL TUNING</title>
</head>
  <body class="text-center">
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
<div class="row m-1 mt-5">
    <div class="col-md-6">
        <img class="w-100" src="img/showcase.jpeg" alt="">
        <a class="btn btn-secondary w-100 mt-4" href="https://api.whatsapp.com/send?phone=595983047400">Contactanos</a>
    </div>
    <div class="col-md-6">
        <h1>Sobre Nosotros</h1>
        <p>HL Tuning es una empresa dedicada a la venta de accesorios y equipamientos para vehículos en San Lorenzo, Paraguay. Ofrecemos una amplia gama de productos para mejorar la apariencia y el rendimiento de su vehículo. Además, también brindamos servicios de lavado y tapicería para vehículos. Nuestro objetivo es proporcionar productos y servicios de alta calidad a precios razonables.
            <br>
            En HL Tuning, nos enorgullece ofrecer un servicio excepcional al cliente. Nuestro equipo está altamente capacitado y siempre está dispuesto a ayudar con cualquier pregunta o inquietud que pueda tener. Nos aseguramos de que nuestros clientes estén completamente satisfechos con nuestros productos y servicios.
            <br>
            Además, también ofrecemos envío a todo el país para que pueda disfrutar de nuestros productos y servicios sin importar dónde se encuentre. Si está buscando accesorios y equipamientos para vehículos de alta calidad en San Lorenzo, no busque más allá de HL Tuning
            </p>
    </div>
</div>
<div class="margin-7px">
    <div class="row">
      <iframe class="col-md-12" id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10198.1876815046!2d-57.51048356714671!3d-25.351071633921325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945dae7fc3a6f3f7%3A0x20ded255a85c524d!2sHL%20Tuning!5e0!3m2!1ses!2spy!4v1693794786388!5m2!1ses!2spy"
       width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>

    <footer id="footer">
        <div class="mx-2 mt-2">
          <div class="row">
            <div class="col-md-6">
        <div class="container-footer">
          <a href="academia.php" class="nav-link">
            <div class="btn-c-f">
              <p class="p-contact-footer"> Academia HL Tuning <span> </span> </p>
            </div>
          </a>
        </div>
            </div>
            <div class="col-md-6">
              <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="btn-c-f">
                  <p class="p-contact-footer">Contacta con un vendedor</p>
                </div>
              </a>
            </div>
          <div class="div-footer">
            <img class="header-img" src="img/logo.png" alt="LogoHL">
      
              <a href="https://api.whatsapp.com/send?phone=595983047400" class="nav-btn"><i class="fa-brands fa-whatsapp"></i> +595 983 047400</a>
              <a href="https://www.instagram.com/hltuningpy_/" class="nav-btn"><i class="fa-brands fa-instagram"></i> hltuningpy_</a>
              <a href="https://www.facebook.com/profile.php?id=100056706925841" class="nav-btn"><i class="fa-brands fa-square-facebook"></i> HL Tuning</a>
              <a href="https://www.tiktok.com/@hltuningpy" class="nav-btn"><i class="fa-brands fa-tiktok"></i> Hltuning_</a>
          </div>
        </div>
      </footer>
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