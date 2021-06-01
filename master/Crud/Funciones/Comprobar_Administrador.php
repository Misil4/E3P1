<?php
session_start();

if($_SESSION['Administrador']){}
else{echo '<script>window.open("./index.php","_self");alert("No eres administrador");</script>';}
?>