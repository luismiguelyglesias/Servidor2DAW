<?php
//Una aplicacion que al pedir una pagina php (verjson.php) devuelva un JSON con los contactos.
$file = fopen("agenda_json.csv", 'r');
$header = fgetcsv($file); //Extrae el csv y guarda la cabecera en una variable
$data = array(); //Crea un array vacio para despues usarlo como array asociativo combinando la cabecera con los valores (par:valor)
while (($row = fgetcsv($file))) {
    $data[] = array_combine($header, $row);
}
fclose($file);
//print_r($data);//Esto era para comprobar sobre la marcha como se habia guardado la informacion
$json = json_encode($data, JSON_PRETTY_PRINT); //Codifica el array asociativo en formato JSON
$output_file = 'data.json'; //Crea el archivo data.json
file_put_contents($output_file, $json); //Guarda el array codificado en el archivo data.json
header('Content-Type: application/json'); //Le dice al navegador que el contenido que se va a enviar esta en formato JSON 
echo $json; //Imprime por pantalla el contenido del csv, despues de haber sido pasado a array asociativo y despues de haber pasado a json

?>