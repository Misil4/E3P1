<?php

// Verificar que esta registrado como administrador
include "./Comprobar_Administrador.php";

if($_SESSION['Administrador'])
{
echo '
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./../../css/Crud.css">
</head>
<form class="form-signin" method="post" action="./Session_Tabla.php">
	<h2 class="form-signin-heading text-center">Acceder tabla</h2>
	<button class="btn btn-lg btn-primary btn-block" name="Base_de_datos" value="Clientes">Base de datos (Clientes)</button>
	<button class="btn btn-lg btn-primary btn-block" name="Base_de_datos" value="Productos">Base de datos (Productos)</button>
</form>
';
}

