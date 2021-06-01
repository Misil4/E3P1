<!DOCTYPE html>
<html lang="">
<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$page = basename($_SERVER['PHP_SELF'], "");
require "./controller/Controller.php";
error_reporting(0);

    if (isset($_POST['count'])) {
        $row =$products->SelectStock($_SESSION['Carrito'][$_POST['number']]['izena']);
        if ($row['stock']>$_POST['count']) {
        $_SESSION['Carrito'][$_POST['number']]['kantitatea'] = $_POST['count'];
        $products->UpdateStock($_SESSION['Carrito'][$_POST['number']]['izena'],$_POST['count']);}else{echo '<script type="text/javascript">alert("No hay stock suficiente, lo sentimos");</script>';}
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content=" unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title><?php echo $lang['titulo'] ?></title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
    }
    </style>
    <link rel=" shortcut icon" href="img/favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <!-- Si no funciona decomentar la linea -->
    <!--<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
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
                <div class="ht-right">
                    <a href="./login" class="login-panel"><i
                            class="fa fa-user"></i><?php include "./PHP/Nombre_Inicio_Sesion.php"?></a>
                    <div class="lan-selector">
                        <a href="index?lang=es" style="margin-left: 10px;"> <?php echo $lang['es'] ?> </a> | <a
                            href="index?lang=en">
                            <?php echo $lang['en'] ?></a> | <a href="index?lang=eus" style="margin-right: 10px;">
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
                        <a href="./index">
                            <img src="/img/Captura.PNG" width="50%" class="responsive" style="position:absolute; bottom:15px; left: 50%; right: 50%" ;>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <form action="index?q=<?php echo $_POST['query']?>">
                        <div class="input-group mb-3">
                            <input name="query" type="text" class="form-control" style="padding-top: 1.5em; padding-bottom: 1.5em;">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" id="barra_navagacion_boton" type="submit"><i
                                        id="Boton_Buscar"><img src="./img/search.png"
                                            style="width:2em;max-width: 100%;"></i></button>
                            </div>
                    </form>
















                    <!--<div class="advanced-search">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="input-group">
                                    <div class="col-sm-8">
                                        <form action="index?q=<?php echo $_POST['query']?>">
                                        <input type="text" name="query" style="position:relative;" placeholder=<?php echo $lang['categories_description'] ?>>
                                    </div>
                                    <div class="col-sm-4">
                                            <button type="submit" style="position:absolute;left: 100%;"><i class="ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div></div>-->


























                </div>
            </div>
            <div class="float-left">
                <ul class="nav-right">
                    <li class="cart-icon" style="float:right;">
                        <a href="#">
                            <i class="icon_bag_alt"></i>
                            <span><?php if (isset($_SESSION['Carrito'])){echo count($_SESSION['Carrito']);}else{echo 0;} ?></span>
                        </a>
                        <div class="cart-hover">
                            <div class="select-items">
                                <table>
                                    <tbody>
                                        <?php if (isset($_SESSION['Carrito'])){ foreach ($_SESSION['Carrito'] as $Carrito=>$Elemento) {
                                               echo ' <tr id="cart">
                                               <td class="si-pic"><img src="'.$Elemento['ruta'].'" alt=""></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>'.$Elemento['izena'].' x'.$Elemento['kantitatea'].'</p>
                                                        <h6>'.$Elemento['prezioa'].'€</h6>
                                                    </div>
                                                </td>
                                                </tr>
                                                  ';}}else{ echo '<script>document.getElementById("cart").style.display = "none"</script';}?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="select-total">
                                <span><?php echo $lang['total'] ?></span>
                                <h5>

                                    <?php if (isset($_SESSION['Carrito'])) { $totales = array();$i=0;
                                        foreach ($_SESSION['Carrito'] as $Carrito=>$Item) {$i++;
                                        $totales[$i] =$Item['prezioa']*$Item['kantitatea'];}
                                        $total = array_sum($totales);echo number_format($total,2)."€";}?>
                                </h5>
                            </div>
                            <div class="select-button">
                                <a href="shopping-cart"
                                    class="primary-btn view-card"><?php echo $lang['cart_view'] ?></button></a>
                                <a href="check-out"
                                    class="primary-btn checkout-btn"><?php echo $lang['Check_out'] ?></a>
                                <form method="post">
                                    <input type="hidden" name="UNSET">
                                    <button type="submit" class="primary-btn"><?php echo $lang['Reset']?></button>
                                </form>
                                <?php if (isset($_POST['UNSET'])) {
                                         unset($_SESSION['Carrito']);
                                         $_POST['UNSET'] = NULL;
                                    }?>
                            </div>
                        </div>
            </div>
            </li>
            </ul>
            <div>
                <div class="select-button" style="margin:0px 20px;">Chat
                    <a class="navbar-brand ml-auto"
                        href="https://api.whatsapp.com/send?phone=34123456789&text=hola,%20qué%20tal?"><i><img
                                src="./img/whatsapp.svg" width="16px" height="16px"></i>
                </div>
                </a>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="<?php if ($page == "Marcas") {echo "botoia active";} else {echo "noactive";}?>">
                        <a href="./Marcas"><?php echo $lang['Marcas'] ?></a>
                    </li>
                    <li class="<?php if ($page == "productos") {echo "botoia active";} else {echo "noactive";}?>">
                        <a href="./productos"><?php echo $lang['Productos'] ?></a>
                    </li>
                    <li class="<?php if ($page == "Miembros") {echo "botoia active";} else {echo "noactive";}?>">
                        <a href="./Miembros"><?php echo $lang['Miembros'] ?></a>
                    </li>
                    <li class="<?php if ($page == "blog") {echo "botoia active";} else {echo "noactive";}?>">
                        <a href="./blog"><?php echo $lang['Blog'] ?></a>
                    </li>
                    <li class="<?php if ($page == "contact") {echo "botoia active";} else {echo "noactive";}?>">
                        <a href="./contact"><?php echo $lang['Contacto'] ?></a>
                    </li>
                    <li class="<?php if ($page == "faq") {echo "botoia active";} else {echo "noactive";}?>">
                        <a href="./faq"> Faq</a>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
    <form action="Produktua" method="POST">
        <table class="Search">
            <thead>
                <tr>
                    <?php
$lenguaje=$products->languageChoose();if (isset($_GET['query'])){$row = $products->search($_GET['query']);if (mysqli_num_rows($row)>1){
    $lenguaje = $products->languageChoose();
    echo '<div class="product-list">';
    echo "<h2>Coincidencias encontradas ".count(mysqli_fetch_assoc($row))."</h2><br>";
    echo '  <div class="row">';
       foreach ($row as $array ) {
            echo '<div class="col-lg-4 col-sm-6">';
            echo '<div class="product-item">';
            echo '<div class="pi-pic">';
            echo '<img src="' . $array['ruta'] . '" style="width:50%;height:50%;position:relative;left:25%;rigth:25%" alt="">';
            echo '<div class="icon">';
            echo '<i class="icon_heart_alt"></i>';
            echo '</div>';
            echo '<ul>';
            echo '<li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>';
            echo '<li class="quick-view"><a href="#">+ Quick View</a></li>';
            echo '<li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>';
            echo '</ul>';
            echo '</div>';
            echo '<div class="pi-text">';
            echo '<div class="catagory-name">' . $array['izena'] . '</div>';
            echo '<div class="product-price">';
            echo '<h5>' . $array['izena' . $lenguaje] . '<h5>';
            echo '<br>';
            echo '<h5>' . $array['prezioa'] . '€<h5>';
             echo '<form action="Produktua" method="get">';
            echo '<input type="hidden" name="nombre" value="'.$array['izena' . $lenguaje].'"></input>';
            echo '<input type="hidden" name="precio" value="'.$array['prezioa'].'"></input>';
            echo '<input type="hidden" name="precio" value="'.$array['produktuKodea'].'"></input>';
            echo '<input type="hidden" name="ruta" value="'.$array['ruta'].'"></input>';
            echo '<input type="hidden" name="deskribapena" value="'.$array['deskribapena' . $lenguaje].'"></input>';
            echo '<button type="submit" class="site-btn register-btn">'.$lang["Add"].'</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';}
        echo '</ul>';
}else{echo '<p class="text-center">No results';}};
?>
        </table>
    </form>
</header>