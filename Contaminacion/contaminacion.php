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
$estaciones = array(
    "28079001" => "Pº. Recoletos Baja",
    "28079002" => "Glta. de Carlos V Baja",
    "28079003" => "Pza. del Carmen",
    "28079004" => "Pza. de España",
    "28079005" => "Barrio del Pilar",
    "28079006" => "Pza. Dr. Marañón Baja",
    "28079007" => "Pza. M. de Salamanca Baja",
    "28079008" => "Escuelas Aguirre",
    "28079009" => "Pza. Luca de Tena Baja",
    "28079010" => "Cuatro Caminos",
    "28079011" => "Av. Ramón y Cajal",
    "28079012" => "Pza. Manuel Becerra Baja",
    "28079013" => "Vallecas",
    "28079014" => "Pza. Fdez. Ladreda Baja",
    "28079015" => "Pza. Castilla Baja",
    "28079016" => "Arturo Soria",
    "28079017" => "Villaverde Alto",
    "28079018" => "C/ Farolillo",
    "28079019" => "Huerta Castañeda Baja",
    "28079020" => "Moratalaz",
    "28079021" => "Pza. Cristo Rey Baja",
    "28079022" => "Pº. Pontones Baja",
    "28079023" => "Final C/ Alcalá Baja",
    "28079024" => "Casa de Campo",
    "28079025" => "Santa Eugenia Baja",
    "28079026" => "Urb. Embajada (Barajas) Baja",
    "28079027" => "Barajas",
    "28079047" => "Méndez Álvaro Alta",
    "28079048" => "Pº. Castellana Alta",
    "28079049" => "Retiro Alta",
    "28079050" => "Pza. Castilla Alta",
    "28079054" => "Ensanche Vallecas Alta",
    "28079055" => "Urb. Embajada (Barajas) Alta",
    "28079056" => "Plaza Elíptica Alta",
    "28079057" => "Sanchinarro Alta",
    "28079058" => "El Pardo Alta",
    "28079059" => "Parque Juan Carlos I Alta",
    "28079060" => "Tres Olivos Alta"
  );
  $magnitudes = array(
    "1" => "Dióxido de Azufre SO2",
    "6" => "Monóxido de Carbono CO",
    "7" => "Monóxido de Nitrógeno NO",
    "8" => "Dióxido de Nitrógeno NO2",
    "9" => "Partículas < 2.5 µm PM2.5",
    "10" => "Partículas < 10 µm PM10",
    "12" => "Óxidos de Nitrógeno NOx",
    "14" => "Ozono O3",
    "20" => "Tolueno TOL",
    "30" => "Benceno BEN",
    "35" => "Etilbenceno EBE",
    "37" => "Metaxileno MXY",
    "38" => "Paraxileno PXY",
    "39" => "Ortoxileno OXY",
    "43" => "Metano CH4"
);

$file = fopen('horario.csv', 'r');
$encabezados = fgets($file);
$line = explode(';', $encabezados);
echo"
    <tr>
    <th>$line[2]</th>
    <th>$line[3]</th>
";
for($h = 8; $h < count($line); $h = $h + 2){
    echo"<td>$line[$h]</td>";
}
echo "</tr>";

for($contador = 0; $contador < 10; $contador++){
    $encabezados = fgets($file);
    $line = explode(";", $encabezados);
    $val_muestreo = $line[4];
    $punto_muestreo = explode("_", $val_muestreo);
    $cod_estacion = $punto_muestreo[0];
    $cod_magnitud = $line[3];

    echo "
        <tr>
            <td>$estaciones[$cod_estacion]</td>
            <td>$magnitudes[$cod_magnitud]</td>
        
    ";
    for($h = 8; $h < count($line); $h = $h + 2){
        echo"<td>$line[$h]</td>";
    }
    echo "</tr>";

}
?>
</table> 
</body>
</html>