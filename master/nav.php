<!DOCTYPE html>
<html lang="es">
<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$page = basename($_SERVER['PHP_SELF'], ".php");
require "./controller/Controller.php";

?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $lang['titulo'] ?></title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="ht-left" style="position:relative;left:30px;">
                        <a href="#"> <img src="img/imagenesSVG/logotipos/A_PIEU.svg" height="50px" width="50px"></a>
                        <a href="#"> <img src="img/imagenesSVG/logotipos/Banilaco.svg" height="55px" width="55px"></a>
                        <a href="#"> <img src="img/imagenesSVG/logotipos/COSRX-Brand-Logo.svg" height="50px"
                                width="50px"></a>
                        <a href="#"> <img src="img/imagenesSVG/logotipos/Missha.svg" height="50px" width="50px"></a>
                        <a href="#"> <img src="img/imagenesSVG/logotipos/sonpark.svg" height="50px" width="50px"></a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item"
                            href="#"><?php $erabiltzaileak->getdirections("aguirrezabala88@gmail.com")?></a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </div>
                <div class="ht-right">
                    <a href="./login.php" class="login-panel"><i
                            class="fa fa-user"></i><?php include "./PHP/Nombre_Inicio_Sesion.php"?></a>
                    <div class="lan-selector">
                        <a href="index.php?lang=es" style="margin-left: 10px;"> <?php echo $lang['es'] ?> </a> | <a
                            href="index.php?lang=en">
                            <?php echo $lang['en'] ?></a> | <a href="index.php?lang=eus" style="margin-right: 10px;">
                            <?php echo $lang['eus'] ?> </a>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="./index.php">
                            <img src="img/LogotipoKberri.svg" class="responsive"
                                style="padding:0px 20px 0px 20px;position:relative;bottom:30px;" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <div class="input-group">
                            <input type="text" placeholder=<?php echo $lang['categories_description'] ?>>
                            <button type="button"
                                style="width:70px;height:49px;margin-top: -1px;margin-right: -185px;"><i
                                    class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="float-left">
                    <ul class="nav-right">
                        <li class="cart-icon" style="float:right;">
                            <a href="#">
                                <i class="icon_bag_alt"></i>
                                <span>3</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="si-pic"><img src="img/select-product-1.jpg" alt=""></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.00 x 1</p>
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="si-pic"><img src="img/select-product-2.jpg" alt=""></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.00 x 1</p>
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span><?php echo $lang['total'] ?></span>
                                    <h5>$120.00</h5>
                                </div>
                                <div class="select-button">
                                    <a href="shopping-cart.php"
                                        class="primary-btn view-card"><?php echo $lang['cart_view'] ?></a>
                                    <a href="check-out.php"
                                        class="primary-btn checkout-btn"><?php echo $lang['Check_out'] ?></a>
                                </div>
                            </div>
                </div>
                </li>
                </ul>
                <div>
                    <div class="select-button" style="margin:0px 20px;">Chat
                        <a class="navbar-brand ml-auto" href="#"><i><img src="./img/whatsapp.svg" width="16px"
                                    height="16px"></i>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="nav-item" style="position:relative;bottom:60px;">
        <div class="container">
            <nav class="nav-menu mobile-menu">
                <ul>

                    <li class="<?php if ($page == "Marcas") {echo "botoia active";} else {echo "noactive";}?>">
                        <a href="./Marcas.php"><?php echo $lang['Productos'] ?></a>
                        <ul class="dropdown">
                            <li><a href="#"><?php echo $lang['Limpiadores'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Exfoliantes'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Tónicos'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Esencias'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Serums'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Mascarillas'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Parches'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Hidratantes ojos'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Crema Solar'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Mascarillas de noche y bb cream'] ?></a></li>
                        </ul>
                    </li>
                    <li class="<?php if ($page == "shop") {echo "botoia active";} else {echo "noactive";}?>">
                        <a href="./shop.php"><?php echo $lang['Skin Type'] ?></a>
                        <ul class="dropdown">
                            <li><a href="#"><?php echo $lang['Limpiadores'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Exfoliantes'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Tónicos'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Esencias'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Serums'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Mascarillas'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Parches'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Hidratantes ojos'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Crema Solar'] ?></a></li>
                            <li><a href="#"><?php echo $lang['Mascarillas de noche y bb cream'] ?></a></li>
                        </ul>
                    </li>
                    <li class="<?php if ($page == "Miembros") {echo "botoia active";} else {echo "noactive";}?>">
                        <a href="./Miembros.php"><?php echo $lang['Miembros'] ?></a>
                    </li>
                    <li class="<?php if ($page == "blog") {echo "botoia active";} else {echo "noactive";}?>">
                        <a href="./blog.php"><?php echo $lang['Blog'] ?></a>
                    </li>
                    <li class="<?php if ($page == "contact") {echo "botoia active";} else {echo "noactive";}?>">
                        <a href="./contact.php"><?php echo $lang['Contacto'] ?></a>
                    </li>
                    <li class="<?php if ($page == "faq") {echo "botoia active";} else {echo "noactive";}?>"><a
                            href="./faq.php"> Faq</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>