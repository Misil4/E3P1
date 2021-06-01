<?php

//Necesitamos saber si el usuario es administrador
include_once "./Funciones/Comprobar_Administrador.php";

//Archivo necesario para poder crear la tabla incluye una funcion para crear tablas
include_once "./Funciones/Crear_Tablas.php";

//Necesitasmos archivos de la base de datos
include_once "./../controller/Controller.php";

// Codigo HEAD
//Obligar a recargar pagina
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado

echo 
'
<!doctype html>
<html lang="">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
';

//Codigo Body

// Textos para poder generar las pagina de manera dinamica
if($_SESSION['Ventana_Crud'] == 'Clientes')
{
    $Texto = 
    array(
        'Titulo'   => 'Clientes',
        'Buscar'   => 'Buscar Clientes',
        'Filtro_1' => 'ID Usuario',
        'Filtro_2' => 'Email',
		'Filtro_3' => 'Rol',
		'Filtro_4' => 'Añadir Usuario'
    );
}
else
{
    $Texto = 
    array(
        'Titulo'   => 'Productos',
        'Buscar'   => 'Buscar Productos',
		'Filtro_1' => 'ID Producto',
        'Filtro_2' => 'Codigo Marca',
		'Filtro_3' => 'Borrado',
		'Filtro_4' => 'Añadir producto'
    );
}

echo 
'
<div class="fluid-container">
<div class="card">
    <div class="card-header"><i class="fa fa-fw fa-globe"></i><strong>' . $Texto['Titulo'] .'</strong> <a type="button" value="" style="float: right;" href="./Funciones/Menu_Selecionar_tablas.php">Seleccionar otra tabla</a></div>
    <div class="card-body">
        <div class="col-sm-12">

            <h5 class="card-title"><i class="fa fa-fw fa-search"></i>' . $Texto['Buscar'] .'</h5>
            
            <form action="./Crud.php" method="get">

				<div class="row">

					<div class="col-sm-2">

						<div class="form-group">

							<label>' . $Texto['Filtro_1'] . '</label>

							<input type="text" name="Buscar_1" class="form-control" value="" placeholder="' . $Texto['Filtro_1'] . '">

						</div>

							</div>

					<div class="col-sm-2">

						<div class="form-group">

							<label>' . $Texto['Filtro_2'] . '</label>

								<input type="text" name="Buscar_2" class="form-control" value="" placeholder="' . $Texto['Filtro_2'] . '">

						</div>

					</div>

					<div class="col-sm-2">

						<div class="form-group">

							<label>' . $Texto['Filtro_3'] . '</label>

								<input type="number" class="tel form-control" pattern=".{14,14}" name="Buscar_3" x-autocompletetype="tel" value="" placeholder="' . $Texto['Filtro_3'] . '">

						</div>

					</div>

							<div class="col-sm-6">

								<div class="form-group">

									<label>&nbsp;</label>

									<div>

										<button type="submit" name="Buscar" value = "click" class="btn btn-primary"><i class="fa fa-fw fa-search"></i> Buscar</button>
                                        <button type="submit" name="Ver Todo" value = "click" class="btn btn-primary"><i class="fa fa-fw fa-search"></i> Ver Todo</button>
										</form>
										

										';include_once "./Funciones/Añadir_Usuario_o_Producto.php";echo'


									</div>

								</div>

							</div>
						
						</div>

					</div>

                </div>

            </div>
        
        </div>
        
        <hr>';

		//Determinar que tabla necesita el usuario
		if($_SESSION['Ventana_Crud'] == "Clientes"){$Tabla = $erabiltzaileak;}
		else{$Tabla = $products;}

		if($_GET['Ver_Todo'] == 'click'){Crear_Tabla($Indice, $Campos, $Tabla->Todos_Datos());}
		else
		{
			if($_SESSION['Ventana_Crud'] == 'Clientes'){
			$Filtro = array(
				'Filtro_1' => 'erabiltzaileKodea',
				'Filtro_2' => 'emaila',
				'Filtro_3' => 'rol'
			);
			}
			else
			{
				$Filtro = array(
					'Filtro_1' => 'produktuKodea',
					'Filtro_2' => 'markaKodea',
					'Filtro_3' => 'stock'
				);
			}
			print_r($Filtro);
			$Condición = array();

			if($_GET['Buscar_1'] != ''){$Condición[$Filtro['Filtro_1']] = $_GET['Buscar_1'];}
			if($_GET['Buscar_2'] != ''){$Condición[$Filtro['Filtro_2']] = $_GET['Buscar_2'];}
			if($_GET['Buscar_3'] != ''){$Condición[$Filtro['Filtro_3']] = $_GET['Buscar_3'];}

			Crear_Tabla($Indice, $Campos, $Tabla->Todos_Datos_Filtro($Condición));
		}

?>