<?php

//Necesitasmos archivos de la base de datos
include_once "./../../controller/Controller.php";

$products->Nuevo_Producto($_GET['Nuevo_Producto']);

header('Location: ./../Crud.php?Ver_Todo=click');
?>