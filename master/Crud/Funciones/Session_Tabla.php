<?php
session_start();

if ($_POST['Base_de_datos'] == 'Clientes')
{
    $_SESSION['Ventana_Crud'] = 'Clientes';
}
else
{
    $_SESSION['Ventana_Crud'] = 'Productos';
}
header("Location: ./../Crud.php?Ver_Todo=click");

?>