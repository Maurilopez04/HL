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
    <?php include 'buscador-style.php';?>
</head>
  <body class="text-center bg-black m-auto">
<?php include 'header.php';?>
      <div class="p-4"></div>


<?php include 'formulario-de-contacto.php';?>

  <?php include 'footer.php'?>
      <script src="https://kit.fontawesome.com/488435a96f.js" crossorigin="anonymous"></script>

</body>
</html>