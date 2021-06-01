<?php 
//Necesitasmos archivos de la base de datos
include_once "./../controller/Controller.php";

// Datos necesarios

if($_SESSION['Ventana_Crud'] == 'Clientes')
{
    $Indice = 
    array(
        'Campo_1' => 'ID_Clientes',
        'Campo_2' => 'Email',
        'Campo_3' => 'Desativado',
        'Campo_4' => 'Rol',
        'Campo_5' => 'Acción'
    );

    $Campos =
    array(
        'Dato_1' => 'erabiltzaileKodea',
        'Dato_2' => 'emaila',
        'Dato_3' => 'desaktibatua',
        'Dato_4' => 'rol'
    );
}
else
{
    $Indice = 
    array(
        'Campo_1' => 'Productos',
        'Campo_2' => 'Buscar Productos',
        'Campo_3' => 'Nombre (Euskera)',
        'Campo_4' => 'Nombre (Español)',
        'Campo_5' => 'Nombre (Inglés)',
        'Campo_6' => 'Descripción (Euskera)',
        'Campo_7' => 'Descripción (Español)',
        'Campo_8' => 'Descripción (Inglés)',
        'Campo_9' => 'Materiales (Euskera)',
        'Campo_10' => 'Materiales (Español)',
        'Campo_11' => 'Materiales (Inglés)',
        'Campo_12' => 'Stock',
        'Campo_13' => 'Tamaño',
        'Campo_14' => 'Precio',
        'Campo_15' => 'Fecha de publicación',
        'Campo_16' => 'Borrado',
        'Campo_17' => 'Acción'
    );
    $Campos =
    array(
        'Dato_1'  => 'produktuKodea',
        'Dato_2'  => 'izenaEus',
        'Dato_3'  => 'izenaEs',
        'Dato_4'  => 'izenaEn',
        'Dato_5'  => 'izenaEn',
        'Dato_6'  => 'deskribapenaEus',
        'Dato_7'  => 'deskribapenaEs',
        'Dato_8'  => 'deskribapenaEn',
        'Dato_9'  => 'osagaiakEus',
        'Dato_10' => 'osagaiakEs',
        'Dato_11' => 'osagaiakEn',
        'Dato_12' => 'stock',
        'Dato_13' => 'tamaina',
        'Dato_14' => 'beherapena',
        'Dato_15' => 'prezioa',
        'Dato_16' => 'publikazioData',
    );
}

function Crear_Tabla($Indice, $Campos, $Datos_DB)
{
    echo 
    '
    <table class="table table-striped table-bordered">
        <thead>
            <tr class="bg-primary text-white">';
                foreach($Indice as $Campo)
                {
                echo '<th>' . $Campo . '</th>';
                }
    echo   '</tr>
        </thead>
    <tbody>';
    foreach($Datos_DB as $Nombre_Asociado)
    {
        echo '<tr>';
        foreach($Campos as $Dato_en_Tabla)
        {
            echo '<td align="center">' . $Nombre_Asociado[$Dato_en_Tabla] . '</td>';
        }
        if(isset($Datos_DB[0]['ruta']))
        {

        }
        else
        {
            echo   '<td align="center">
                    <form action="./Funciones/Acciones base de datos.php" method="POST">
                        <button type="submit" name="Desactivar" value="' . $Nombre_Asociado[$Campos['Dato_1']] . '" class="btn btn-danger">Desactivar</button>
                        <button type="submit" name="Crear_administrador" value="' . $Nombre_Asociado[$Campos['Dato_1']] . '" class="btn btn-secondary"'; if($_SESSION['Ventana_Crud']=='Productos'){echo 'disabled';} echo '>Crear administrador</button>
                    </form>
                </td>';
        echo '</tr>';
        }
    }    
}

?>