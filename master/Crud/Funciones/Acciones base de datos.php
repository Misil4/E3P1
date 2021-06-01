<?php

session_start();

require_once "./../../controller/Controller.php";

if ($_SESSION['Ventana_Crud'] == 'Clientes')
{
    if(isset($_POST['Desactivar']))
    {
        $erabiltzaileak->Actualizar('desaktibatua = 0', 'erabiltzaileKodea', $_POST['Desactivar']);
        echo "<script type='text/javascript'>window.open('./../Crud.php?Ver_Todo=click','_self');</script>";
    }
    elseif(isset($_POST['Crear_administrador']))
    {
        $erabiltzaileak->Actualizar('rol = 1', 'erabiltzaileKodea', $_POST['Crear_administrador']);
        echo "<script type='text/javascript'>window.open('./../Crud.php?Ver_Todo=click','_self');</script>";
    }
}
else
{
    if(isset($_POST['Desactivar']))
    {
        $Desactivar = "'" . $_POST['Desactivar'] ."'";
        $products->Actualizar('ezabatua = 1', 'produktuKodea', $Desactivar);
        echo "<script type='text/javascript'>window.open('./../Crud.php?Ver_Todo=click','_self');</script>";
    }
    elseif(isset($_POST['Crear_administrador']))
    {
        $Crear_administrador = "'" . $_POST['Crear_administrador'] ."'";
        $products->Actualizar('rol = 1', 'produktuKodea', $Crear_administrador);
        echo "<script type='text/javascript'>window.open('./../Crud.php?Ver_Todo=click','_self');</script>";
    }
}

?>