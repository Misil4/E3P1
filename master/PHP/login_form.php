<?php
require __DIR__ . "/../controller/Controller.php";

session_start();

// Datos Necesarios
// htmlspecialchars(), Se usa para evitar inyeccion de codigo JS
$Usuario = htmlspecialchars($_POST['username']);
$Contraseña = htmlspecialchars($_POST['pass']);

//Obtener los usuarios de ya existen en la base de datos y encontrar si existen
$array = $erabiltzaileak->Login($Usuario);

// Comprueba que el array que nos devuelve la base de datos no esta vacia
if(isset($array))
{
    // En la primera condiccion comprueba que el email que da la base de datos se igual al que nos ofrece la base de datos (No tiene mucho sentido hay que mirarlo por la base de datos ya nos hace esa condicion)
    // En la segunda condiccion comprueba que la contraseña de la base de datos y la que da el usuario sea igual
    // Verifica que el correo funciona bien
    if ($Usuario == $array[0]['emaila'] && password_verify($Contraseña, $array[0]['pasahitza']) && $erabiltzaileak->GetEgoera($Usuario)[0]['desaktibatua'] == 1)
    {
        
        // Almacena en la variable de session el nombre del usuario para que sea accesible desde cualquier punto del proyecto
        $_SESSION['Usuario'] = $Usuario;
        echo "login ok";

        // Nos lleva a la pagina principal
        echo '<script type="text/javascript"> window.open("../index","_self");</script>';
    } 
    else
    {
        // Nos lleva a la pagina de login y nos añade una alerta de que alguno de los campos esta mal
        echo '<script>window.open("../login","_self");alert("Introducce un usuario y contraseña validos o valida la cuenta");</script>';
    }
}
else
{
    echo '<script>window.open("../login","_self");alert("Introducce un usuario y contraseña validos");</script>';
}