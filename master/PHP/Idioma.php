<?php

session_start();

if(!isset($_SESSION['Tiempo'])){$_SESSION['Tiempo'] = time();}
else if(time() - $_SESSION['Tiempo'] > 600)
{
    session_destroy();
    header("Location: ./index.php");
    die();
}

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "eus";
} else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "es") {
        $_SESSION['lang'] = "es";
    } else if ($_GET['lang'] == "en") {
        $_SESSION['lang'] = "en";
    } else if ($_GET['lang'] == "eus") {
        $_SESSION['lang'] = "eus";
    }

}

require_once __DIR__ . "/../lenguajes/" . $_SESSION['lang'] . ".php";