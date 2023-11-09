<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Data</title>
    <style>
        table,
        td,
        th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    $selection = $_POST["provincias"];
    if ($selection == "alcorcon") {
        $xml = file_get_contents("https://www.aemet.es/xml/municipios/localidad_28007.xml"); //ESto es un string cualquiera
    } else if ($selection == "mostoles") {
        $xml = file_get_contents("https://www.aemet.es/xml/municipios/localidad_28092.xml");
    } else if ($selection == "madrid") {
        $xml = file_get_contents("https://www.aemet.es/xml/municipios/localidad_28079.xml");
    }
    //echo "<br>XML:$xml";
    
    $xml = simplexml_load_string($xml); //Convierte a objeto xml
    if ($xml) {
        echo "<table>";
        echo "<tr><th>Día</th><th>Temperatura máxima (°C)</th><th>Temperatura mínima (°C)</th></tr>";
        foreach ($xml->prediccion->dia as $dia) {
            $fecha = $dia['fecha'];
            $temp = $dia->temperatura;
            $maxima = $temp->maxima;
            $minima = $temp->minima;
            echo "<tr>";
            echo "<td>$fecha</td>";
            echo "<td>$maxima °C</td>";
            echo "<td>$minima °C</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "El XML no se ha cargado correctamente";
    }
    ?>
</body>

</html>