<?php
require_once __DIR__ . "/../../Crud/Funciones/Crear_Tablas.php";
require_once __DIR__ . "/../../controller/Controller.php";
$Indice = 
array(
    'Campo_1' => $lang["Codigo de producto"],
    'Campo_2' => $lang["Nombre de producto"],
    'Campo_3' => $lang["Imagen de producto"],
    'Campo_4' => $lang["Fecha de compra de producto"],
);

$Campos =
array(
    'Dato_1' => 'produktuKodea',
    'Dato_2' => 'izena' . $products->languageChoose(),
    'Dato_3' => 'ruta',
    'Dato_4' => 'erosketaData'
);

$BD = $erabiltzaileak->Ver_Pedidos_Cliente($_SESSION['Usuario']);
$kont = 0;
foreach($BD as $Datos)
{
    $BD[$kont]['ruta'] = "<img src=" . $Datos['ruta'] ." style= width:" . '45%' ."; height:". '45%' .">";
    $kont++;
}
Crear_Tabla($Indice, $Campos, $BD);

?>