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
    <style>a{
    color: darkred;
    }
    hr{
    color: white;}</style>
</head>
  <body class="text-center bg-black m-1">
    <nav class="navbar fixed-top p-3 pt-3 pb-3 header">
        <div class="container-fluid p-2">
          <a class="text-black link-secondary " href="index.php"><img width="180px" src="img/logo.png" alt="" srcset=""></a>
          <div class="centered-element cel-none">
          <form class="buscador" action="resultados.php" method="get">
<input class="Search" type="text" name="busqueda" placeholder="Buscar producto, modelo, categoria" aria-label="Search" id="buscado" required>
<input type="hidden" id="search-type" value="all">
<button class="btn-search dark"type="submit" name="enviar" value="Buscar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg> </button>   
</form>
          </div>
                   <div>
          <button class="navbar-toggler bg-white border-radius-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
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
                    <li><a class="nav-link text-white" href="https://www.facebook.com/profile.php?id=100056706925841"><i class="fa-solid fa-map-pin"></i> Centro de Instalaciones</a></li>
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
<main class="container mt-4">
   
  

  <div class="row g-5">
    <div class="col-md-8">
        <img src="img/showcase.jpeg" class="w-100" alt="">
      <P class="pb-2 mb-4 mt-2  border-bottom">
      HL TUNING - General Caballero esq. Buenos Aires
      </P>

      <article class="blog-post text-start">
        <h2 class="blog-post-title" id="empressa">La Empresa</h2>
        <p>HL Tuning es una empresa fundada hace mas de 15 años, ubicada en San Lorenzo de Paraguay. Somos una empresa dedicada al equipamiento vehicular y la estetica automotriz
        </p>
        <p class="">En HL TUNING, nos enorgullece ser líderes en la industria automotriz, ofreciendo soluciones de sintonización de alta calidad y servicios especializados en Paraguay. Desde nuestros modestos inicios, hemos crecido hasta convertirnos en un referente confiable para entusiastas de automóviles que buscan mejorar el rendimiento y la estética de sus vehículos.</p>
        <hr>
        <h3 id="equipo">Equipo</h3>
        <p>Nuestro equipo está formado por apasionados expertos en sintonización automotriz, comprometidos con la excelencia y la satisfacción del cliente. Nos esforzamos por superar las expectativas, brindando productos y servicios de vanguardia que impulsan el rendimiento de los vehículos y reflejan la calidad artesanal que define a HL TUNING.</p>
        
        <p>En HL TUNING, creemos en la innovación continua y en la adaptación a las últimas tendencias del mercado. Colaboramos estrechamente con nuestros clientes para entender sus necesidades específicas y ofrecer soluciones personalizadas que realcen la experiencia de conducción. Estamos comprometidos con la integridad, la transparencia y la dedicación, valores que guían cada interacción con nuestros clientes.</p>
        
        <h3 id="vision">Vision</h3>
        
        <p>Nuestra visión es ser una Empresa competitiva con dimensión internacional que opera a través de equipos humanos de alto rendimiento, calidad y excelencia. Buscar la calidad como ejemplo cristiano en el mercado global, obteniendo resultados para crecimiento de la Empresa y sus componentes.</p>
<h3 id="mision">Mision</h3><p>
Nuestra misión es satisfacer las necesidades de nuestros clientes con productos de calidad, servicios de excelencia, y actitudes que honran a Dios, generando rentabilidad.</p>
       
      </article>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-black rounded">
        

        <div class="p-4">
          <h4 class="fst-italic">HL Tuning</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#empressa">La empresa</a></li>
            <li><a href="#equipo">Equipo</a></li>
            <li><a href="#vision">Vision</a></li>
            <li><a href="#mision">Mision</a></li>
            <li><a href="#map">Ubicacion</a></li>

          </ol>
        </div>

        
          <h4 class="fst-italic">Calificaciones</h4>
          <ol class="list-unstyled">
            <li><a href="https://www.google.com/search?kgmid=/g/11g6qldh5y&hl=es-PY&q=HL+Tuning&kgs=ed23677d45cefe71&shndl=17&source=sh/x/kp/osrp/m5/1#ip=1&lrd=0x945dae7fc3a6f3f7:0x20ded255a85c524d,1,,,,">Google</a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100056706925841&sk=reviews">Facebook</a></li>
          </ol>
          <h4 class="fst-italic">Redes Sociales</h4>
          <ol class="list-unstyled">
     <li><a  href="https://www.instagram.com/hltuningpy_/">Instagram</a></li>
       <li><a href="https://www.facebook.com/profile.php?id=100056706925841"> Facebook</a></li>
      <li><a href="https://www.tiktok.com/@hltuningpy">TikTok</a></li>
          </ol>
              <h4>Información Legal</h4>
                    <ol class="list-unstyled">
                        
                        <li><a href="#">Términos y Condiciones</a></li>
                        <li><a href="#">Políticas de Privacidad</a></li>
                        <li><a href="#">Políticas de Envío</a></li>
                        <li><a href="#">Cambios y Devoluciones</a></li>
                    </ol>
        </div>
      </div>
    </div>
  </div>

</main>
    <div class="m-3 mt-1">
    <div class="row">
      <iframe class="col-md-12" id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10198.1876815046!2d-57.51048356714671!3d-25.351071633921325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945dae7fc3a6f3f7%3A0x20ded255a85c524d!2sHL%20Tuning!5e0!3m2!1ses!2spy!4v1693794786388!5m2!1ses!2spy"
       width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>


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

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

</body>
</html>