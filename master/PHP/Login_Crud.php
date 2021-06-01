<?php 
require __DIR__ . "/../controller/Controller.php";

session_start();

// Datos Necesarios
// htmlspecialchars(), Se usa para evitar inyeccion de codigo JS
$Usuario = htmlspecialchars($_POST['Usuario']);
$Contraseña = htmlspecialchars($_POST['Contraseña']);

//Obtener los usuarios de ya existen en la base de datos y encontrar si existen
$array = $erabiltzaileak->Login_Crud($Usuario);

if($array[0]['emaila'] == $_POST['Usuario'] && password_verify($_POST['Contraseña'],$array[0]['pasahitza']) && $array[0]['rol'] == 1)
{
    $_SESSION['Administrador'] = true;
    
    header("Location: ./../Crud/Funciones/Menu_Selecionar_tablas");
}
else{echo "<script type='text/javascript'>window.open('./../Crud/index','_self');alert('Usuario y contraseña incorrecta');</script>";}


?>