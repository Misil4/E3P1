<?php

function Comprobar_Dominio($Correo)
{
    if(preg_match('/(@gmail.com)/', $Correo) || preg_match('/(@hotmail.com)/', $Correo))
    {
        echo "<br>" . "Email Valido Gmail y Hotmail el correo es " . $Correo;
        return 1;
    }
    else
    {
        echo '<script type="text/javascript">alert("Correo Invalido usa hotmail o gmail");window.open("./../register.php","_self");</script>';
        return 0;
    }
}