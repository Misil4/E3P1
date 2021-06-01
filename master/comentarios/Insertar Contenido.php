<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
</head>

<body>

<?php
    require_once (__DIR__."/../controller/Controller.php");
    

    // Controlador de subida de imagen
    
    if($_FILES['imagen']['error'])
    {
        switch ($_FILES['imagen']['error'])
        {
            case 1: // Error exceso de tamaño de archivo en php.ini
                echo "El tamaño del archivo excede lo permitido por el servidor";
                break;
            case 2: // Errr tamaño archivo marcado desde formulario
                echo "El tamaño del archivo excede 2 MB";
                break;
            case 3: // Corrupción de archivo
                echo "El envío de archivo ha sido interrumpido";
                break;
            case 4: // No hay fichero
                echo "No se ha seleccionado ningún archivo";
                break;
        }
    
     } 
        else
        {
            echo "Entrada subida con exito <br/>";

            if((isset($_FILES['imagen'] ['name']) && ($_FILES ['imagen'] ['error'] == 0)))
            {
                $destinoRuta="./imagenes/"; 

                move_uploaded_file($_FILES['imagen'] ['tmp_name'], $destinoRuta . $_FILES['imagen'] ['name']);

                echo "El archivo " . $_FILES['imagen'] ['name'] . " Se ha copiado en el directorio de imagenes";
            }

            else 
            {
                echo "El archivo no se ha podido copiar al directorio de imagenes";
            }
        }
     

    $valoracion=$_POST['estrellas'];

    $fecha=date("Y-m-d H:i:s");

    $elcomentario=$_POST['comentario'];
    
    $nombre=$_POST['Usuario'];

    $laimagen=$_FILES['imagen'] ['name'];
        

    if(strlen($_POST['Usuario'])<1)
    {
        echo 'Tienes que iniciar sesión para agregar un comentario';
        echo '<script type="text/javascript">alert("Tienes que Iniciar Sesion para dejar un comentario");window.open("./../index.php","_self");</script>';
    }

        else
        {
            $iritziak->InsertarComentario($fecha,$elcomentario,$laimagen,$valoracion,$_POST['Usuario']);
            
            // Cerrar conexion

            echo "<br/> Se ha agregado la entrada con exito";
            echo '<script type="text/javascript">window.open("./../index.php","_self");</script>';   
        }
?>

</body>
</html>
