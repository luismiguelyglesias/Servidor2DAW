<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Data</title>
    <style>
        table, td, th{
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    $selection = $_POST["provincias"];
    if ($selection == "alcorcon") {
        $xml = simplexml_load_file("alcorcon.xml") or die("Error: Cannot create object");
    } else if ($selection == "mostoles") {
        $xml = simplexml_load_file("mostoles.xml") or die("Error: Cannot create object");
    } else if ($selection == "madrid") {
        $xml = simplexml_load_file("madrid.xml") or die("Error: Cannot create object");
    }

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
