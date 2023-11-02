<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
        p{
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Fotos aleatorias de perros</h1>
    <p>Hecho por Luis Miguel Yglesias 2ºDAW</p>
    <?php
    $data = file_get_contents("https://dog.ceo/api/breeds/image/random");
    $foto_perro = json_decode($data, true);
    echo '<img src="' . $foto_perro["message"] . '">';
    ?>
</body>

</html>