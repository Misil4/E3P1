<?php 
require "./Validacion/Contraseña_Valida.php";
require __DIR__ . "/../controller/Controller.php";
$Puntuación_Validación = $Puntuación_Validación + Contraseña_Valida($_POST['pass']);
 //Comprobar que las contraseñas son iguales
if ($Puntuación_Validación == 1) {
    if($_POST['pass'] != $_POST['con-pass']){echo '<script type="text/javascript">alert("Las contraseñas son diferentes");</script>'; }
    else{
        $pasahitza = password_hash($_POST['pass'],PASSWORD_BCRYPT);
        $erabiltzaileak->UpdatePassword($_POST['code'],$pasahitza);
    }
    //echo '<script type="text/javascript">window.open("./../index","_self");</script>';
}
else {
    echo "error".$_POST['pass'];
}