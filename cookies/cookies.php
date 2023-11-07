<?php
if (isset($_COOKIE['seleccion'])) {
    $seleccion = $_COOKIE['seleccion'];
} else {
    if (isset($_POST['eleccion'])) {
        $seleccion = $_POST['eleccion'];
        setcookie('seleccion', $seleccion, time() + 3600); 
    } else {
        echo '<form method="post">';
        echo '<label for="eleccion">Elija una categoría:</label>';
        echo '<select name="eleccion">';
        echo '<option value="camisetas">Camisetas</option>';
        echo '<option value="pantalones">Pantalones</option>';
        echo '</select>';
        echo '<input type="submit" value="Elegir">';
        echo '</form>';
        exit;
    }
}

if (($file = fopen('categorias.csv', 'r')) !== false) {
    echo '<h1>Productos de la categoría ' . $seleccion . '</h1>';
    echo '<ul>';
    while (($data = fgetcsv($file, 1000, ',')) !== false) {
        if ($data[0] === $seleccion) {
            echo '<li>Talla: ' . $data[1] . ', Color: ' . $data[2] . '</li>';
        }
    }
    echo '</ul>';
    fclose($file);
    //setcookie('seleccion', '', time() - 3600);
}
?>
