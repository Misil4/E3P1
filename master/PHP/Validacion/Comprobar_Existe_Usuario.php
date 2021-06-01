<?php

function Comprobar_Existe_Usuario($Correos)
{
    if($Correos['DB'] == null)
    {
        echo "<br>" . "1.-Esta Registrado en la base de datos";
        return 1;
    }
    else
    {
        echo '<script type="text/javascript">alert("Ya estas registrado");window.open("../login.php","_self");</script>';
        return 0;
    }
}