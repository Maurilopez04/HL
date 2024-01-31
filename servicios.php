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
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="css/estilos.css">

    
    <title>HL TUNING</title>
    <?php include 'buscador-style.php';?>
</head>
  <body class="text-center bg-black m-auto">
<?php include 'header.php';?>
      <div class="p-4"></div>
    
    <form class="buscador pc-none mt-3" action="resultados.php" method="get">
<input class="Search p-2" type="text" name="busqueda" placeholder="Buscar producto o modelo" aria-label="Search" id="buscado">
<input type="hidden" id="search-type" value="all">
<button class="btn p-2 bg-white" style="color: black;" type="submit" name="enviar" value="Buscar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>    
</form>

<img src="img/polarizado-suntek.jpg" alt="" class="w-100 pc-none">
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
   
  
 <section class="mt-2 m-3">
<div class="row">

<?php
$sql = "SELECT * FROM servivios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $nombre = $row["nombre"];
        $imagen_url = $row["imagen_url"]; // Cambio a imagen_url
        $descripcion = $row["descripcion"];

        echo '<div class="col-lg-4 col-md-6 mb-6">';
        echo '<div class="card cardbg mt-3">';
        echo '  <img style="height:200px;" class="card-img-top w-100" src="' . $imagen_url . '" alt="' . $nombre . '">';
        echo '   <div class="card-body">';
        echo '     <h4 class="card-title c-white" style="color: #cecece;">' . $nombre . '</h4>';
        echo '<a type="button" class="btn btn-primary" href="https://api.whatsapp.com/send?phone=595983047400&text=Buenas%20me%20interesa%20el%20siguiente%20Servicio:%20'.$nombre.'">';
        echo 'Solicitar Servicio</a>';
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

<?php include 'formulario-de-contacto.php';?>

<?php include 'footer.php';?>
  
  
 

   <script src="https://kit.fontawesome.com/488435a96f.js" crossorigin="anonymous"></script>
  </body>
</html>
