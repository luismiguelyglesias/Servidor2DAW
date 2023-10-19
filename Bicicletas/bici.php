<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
        }
        td{
            border: 1px solid black;
        }
        th{
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <?php
        $biciFile = fopen("AccidentesBicicletas_2023.csv", 'r');

        $header = fgets($biciFile);
        $line_head = explode(';', $header);
        $fecha_head = $line_head[1];
        $lesividad_head = $line_head[14];
        $tipo_vehiculo_head = $line_head[9];

        echo "
        <tr>
            <th>$fecha_head</th>
            <th>$lesividad_head</th>
            <th>$tipo_vehiculo_head</th>
        </tr>
        ";

        for ($contador = 0; $contador < 10; $contador++) {
            $linea = fgetcsv($biciFile, 0, ';');
            $fecha = $linea[1];
            $lesividad = $linea[14];
            $tipo_vehiculo_head = $linea[9];
            echo "
        <tr>
            <td>$fecha</td>
            <td>$lesividad</td>
            <td>$tipo_vehiculo_head</td>
        </tr>
    ";
        }
        fclose($biciFile);
        ?>
    </table>
</body>

</html>