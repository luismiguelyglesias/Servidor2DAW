<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //Además, multiplicaciones, divisiones, y que guarde los valores al retroceder
    $randnum1 = rand(1, 100);
    $randnum2 = rand(1, 100);
    $operador = rand(0, 3);
    switch ($operador) {
        case 0:
            $operador = '+';
            break;
        case 1:
            $operador = '-';
            break;
        case 2:
            $operador = '/';
            break;
        case 3:
            $operador = '*';
            break;
    }
    echo "
    <form action='resolucion.php' method='post'>
        <input type='text' name='randnum1' value='$randnum1' readonly>
        <input type='text' name='operador' value='$operador' readonly>
        <input type='text' name='randnum2' value='$randnum2' readonly>
        =
        <input type='number' name='userinput'>
        <input type='submit' value='Comprobar'>
    </form>
";

    ?>
</body>

</html>