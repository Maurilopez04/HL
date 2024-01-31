<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="css/estilos.css">
    <?php include 'buscador-style.php';?>
        <style>
        .container > p, .container > h6{
         text-align: justify;
        }
    </style>
    <title>Politicas de Privacidad</title>
</head>
<body class="bg-black pt-5">
    <?php include 'header.php'?>
<div class="container mt-5">
    <h1>Videos de Servicios</h1>
    <div class="row">
        <?php
        // Resultados por página
        $resPorPagina = 5;
        // Llave obtenida de youtube api
        $key = "AIzaSyDvsIfQ6vvHyhYKpO071SiiwdqhV2UcNZo";
        $idCanal = "UCtpCW1Foqmu-OFZBvUJBFJQ";

        $json_url = 'https://www.googleapis.com/youtube/v3/search?key=' . $key . '&channelId=' . $idCanal . '&part=snippet,id&order=date&maxResults=' . $resPorPagina;
        $ch = curl_init($json_url);

        $options = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'Content-type: application/json')
        );

        curl_setopt_array($ch, $options);

        $result = curl_exec($ch);
        $json_output = json_decode($result, true);

        foreach ($json_output["items"] as $contador => $elemento) {
            if ($elemento["id"]["kind"] == "youtube#video") {
                $videoId = $elemento["id"]["videoId"];
                ?>
                <div class="col-md-3">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/<?php echo $videoId; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <?php
            }
        }

        curl_close($ch);
        ?>
    </div>
</div>
<?php include 'footer.php'?>
<script src="https://kit.fontawesome.com/488435a96f.js" crossorigin="anonymous"></script>

</body>
</html>