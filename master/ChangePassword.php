<?php require_once "./PHP/Idioma.php";
require_once "./controller/Controller.php";
require "./PHP/Validacion/Contraseña_Valida.php";
if (!empty($_GET['code']) && isset($_GET['code'])) {
    $code = mysqli_real_escape_string($connection, $_GET['code']);
    $c=$erabiltzaileak->ActivationCodeExists($code);
    echo "hola".mysqli_num_rows($c);
    if (mysqli_num_rows($c)== 1) {
        ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $lang['titulo'] ?></title>

    <!-- Google Font -->
</head>

<body>
    <!-- Page Preloder -->

    <!-- Header Section Begin -->
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index"><i class="fa fa-home"></i><?php echo $lang['Inicio'] ?></a>
                        <span><?php echo $lang['login'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->

    <div class="register-login-section spad">
        <div class="container">
            <div id="Alert"></div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2><?php echo $lang['SetNewPassword'] ?></h2>
                        <form name="form" action="/PHP/NewPassword.php" method="post">
                            <div class="group-input">
                                <label for="pass"><?php echo $lang['Password'] ?> *</label>
                                <input type="text" name="pass" id="pass">
                            </div>
                            <div class="group-input">
                                <label for="con-pass"><?php echo $lang['Password Confirm'] ?> *</label>
                                <input type="text" name="con-pass" id="con-pass">
                            </div>
                            <input type="hidden" name="code" value=<?php echo $code?>>
                            <button type="submit" class="site-btn register-btn"><?php echo $lang['Register'] ?></button>
                        </form>
                        <div class="switch-login">
                            <a href="/register.php" class="or-login"><?php echo $lang['Or Create An Account'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->

    <!-- Js Plugins -->

</body>

</html>
<?php
    }
    else {
    echo "No existe un usuario con ese codigo";}
} else {
  echo '<script type="text/javascript">window.open("./../index.php","_self");</script>';}