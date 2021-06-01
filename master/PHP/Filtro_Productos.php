<?php

$_GET['Filtro']['Min_Precio'] = trim($_GET['Filtro']['Min_Precio'], '$');
$_GET['Filtro']['Max_Precio'] = trim($_GET['Filtro']['Max_Precio'], '$');

if ($_GET['Filtro']['Productos'] == 'ok' && $_GET['Filtro']['Activo'] == 'ok'){$result = $products->list_pages_filter_Productos($start, $_GET['Filtro']);}
else if($_GET['Filtro']['Productos'] == 'ok'){$result = $products->list_all($start);}
else if($_GET['Filtro']['Activo'] == 'ok'){$result = $products->list_pages_filter($Marca, $start, $_GET['Filtro']);} //Datos de los productos
else{$result = $products->list_pages($Marca, $start);}



?>