<?php
require_once __DIR__ . "/../MODEL/Erabiltzaileak.php";
require_once __DIR__ . "/../MODEL/Products.php";
require_once __DIR__ . "/../MODEL/eskaerak.php";
require_once __DIR__ . "/../MODEL/IPN.php";
require_once __DIR__ . "/../MODEL/eskaera_produktuak.php";
require_once __DIR__ . "/../MODEL/comentarios.php";

//Creamos nuestros modelos
$erabiltzaileak = new Erabiltzaileak();
$products = new Products();
$eskaerak = new Eskaerak();
$Ipn = new Ipn();
$eskaera_produktuak = new Eskaera_Produktuak();
$iritziak = new Iritziak();
