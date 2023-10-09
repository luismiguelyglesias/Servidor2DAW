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
    $randnum1 = $_POST["randnum1"];
    $randnum2 = $_POST["randnum2"];
    $input = $_POST["userinput"];
    $operador = $_POST["operador"];
    $result = 0;
    switch ($operador) {
        case '+':
            $result = $randnum1 + $randnum2;
            break;
        case '-':
            $result = $randnum1 - $randnum2;
            break;
        case '/':
            $result = $randnum1 / $randnum2;
            break;
        case '*':
            $result = $randnum1 * $randnum2;
            break;
    }

    if ($result == $input) {     
        echo "El resultado es correcto";
        echo "<a href='envio.php'><input type='button' value='Volver'></input></a>";   
    } else {
        echo "El resultado es incorrecto";
        echo "<a href='javascript:history.back()''><input type='button' value='Volver'></input></a>";
    }

    ?>

</body>

</html>