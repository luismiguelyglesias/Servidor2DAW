<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
        }

        .autor{
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>JSON Paises</h1>
    <p class="autor">Hecho por Luis Miguel Yglesias 2ºDAW</p>
    <?php
    $data = file_get_contents("https://restcountries.com/v3.1/all");
    $paises = json_decode($data, true);
    
    foreach ($paises as $pais) {
        $nombre = $pais['name']['common'];
        $capital = $pais['capital'][0];
        $maps = $pais['maps']['googleMaps'];
        $bandera = $pais['flags']['png'];
    
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Capital: $capital</p>";
        echo "<p>Enlace a Google Maps: <a href='$maps'>Ver en Google Maps</a></p>";
        echo "<img src='$bandera' alt='Bandera'>";
    }
    
    ?>
</body>

</html>