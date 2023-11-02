<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid black;
        }

        td {
            border: 1px solid black;
        }

        th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <p>Cliente JSON en formato tabla</p>
    <p>Hecho por Luis Miguel Yglesias 2ºDAW</p>
    <table>
        <?php
        $datos = file_get_contents('http://192.168.4.205/verjson/verjson.php');
        $contactos = json_decode($datos, true);

        echo 
        "<tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Teléfono</th>
        </tr>";


        for ($i = 0; $i < count($contactos); $i++) {
            echo "<tr>";
            echo "<td>" . $contactos[$i]['Nombre'] . "</td>";
            echo "<td>" . $contactos[$i]['Apellido'] . "</td>";
            echo "<td>" . $contactos[$i]['Telf'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>