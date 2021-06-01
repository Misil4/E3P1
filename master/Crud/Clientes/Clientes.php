<?php
require __DIR__ . "./../../controller/Controller.php";
require __DIR__ . "./Crear_Tablas.php";
//print_r(get_defined_vars());

if($_GET['Ver_Todo'] == 'click'){Crear_Tabla($erabiltzaileak->Todos_Datos());}
elseif($_GET['Buscar'] == 'click'){Crear_Tabla($erabiltzaileak->Todos_Datos_Filtro(array('erabiltzaileKodea' => $_GET['Usuario_Codigo'],'emaila' => $_GET['Usuario_Email'],'rol' => $_GET['Usuario_Rol'])));}
elseif(isset($_GET['Codigo_de_Usuario'])){$erabiltzaileak->Actualizar('desaktibatua = 0', 'erabiltzaileKodea', $_GET['Codigo_de_Usuario']);}
else{$erabiltzaileak->Actualizar('rol = 1', 'erabiltzaileKodea', $_GET['Crear_administrador']);}
?>