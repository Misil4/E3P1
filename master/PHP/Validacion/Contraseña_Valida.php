<?php

function Contraseña_Valida($Contraseña)
{
    if(preg_match('/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{5,16}$/', $Contraseña) == 1)
    {
        echo "<br>" . "La contraseña es valida " . $Contraseña;
        return 1;
    }
    else
    {
        echo '<script type="text/javascript">alert("La contraseña no es valida"'. $Contraseña . "fasdfas" . ');window.open("./../register.php","_self");</script>';
        return 0;
    }
}