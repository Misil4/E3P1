<?php

//Datos de conexión con la base de datos
$cfg['tipo_bd'] = 'mysql';
$cfg['nombre_bd'] = 'dba6dk6irzzpgx';
$cfg['servidor'] = 'c47244.sgvps.net';
$cfg['port'] = '80';
$cfg['usuario'] = 'utbhjeiikxibr';
$cfg['password'] = 'newepsilon1';
define('NUM_ITEMS_BY_PAGE', 6);
$connection = @mysqli_connect($cfg['servidor'], $cfg['usuario'], $cfg['password'], $cfg['nombre_bd']);