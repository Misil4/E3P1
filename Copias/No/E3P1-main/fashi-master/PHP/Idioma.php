<?php

session_start();
echo "hola";
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
echo "fin";
require_once './lenguajes/en.php';/*$_SESSION['lang']*/