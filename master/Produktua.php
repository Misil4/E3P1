<?php require_once "./PHP/Idioma.php"?>
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

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->

    <?php require './PHP/nav.php';?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div id="carouselExampleSlidesOnly" class="carousel" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo $_GET['ruta'] ?>" class="d-block w-50" alt="..." height="400px"
                                width="400px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="col">
                    <h3><?php echo $_GET['nombre'] ?></h3>
                </div>
                <div class="col">
                    <p><?php echo $_GET['precio'] ?>€</p>
                </div>
                <div class="col">
                    <p><?php echo $_GET['deskribapena'] ?></p>

                    <div class="col">

                        <?php
                        $row = $products->SelectStock($_GET['nombre']);
                        if ($row['stock']>1) {
                         $_SESSION['Carrito'][] = array("ruta"=>$_GET['ruta'],"izena"=>$_GET['nombre'],"prezioa"=>$_GET['precio'],"kantitatea"=>1);$cont=0;}else{echo '<script type="text/javascript">alert("No hay Stock de este producto, lo sentimos");window.open("productos","_self");</script>';}?>
                        <form action="./index" method="post" style="position:relative;top:2rem;">
                            <label for="Cantidad">Cantidad</label>
                            <input type="number" name="count" id="" required>
                            <input type="hidden" name="number" id="" value=<?php echo count($_SESSION['Carrito'])-1;?>>
                            <input type="submit" class="primary-btn" value="<?php echo $lang['Comprar'] ?>" style="float: right;"></input>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="container">
            <div class="row">
                <div class="col">
                    <img src="./img/imagenesSVG/A_PIEU/Apieu-Glycolic-Acid-Cream.svg" height="200px" width="200px">
                </div>
                <div class="col">
                    <img src="./img/imagenesSVG/A_PIEU/Apieu-Glycolic-Acid-Cream.svg" height="200px" width="200px">
                </div>
                <div class="col">
                    <img src="./img/imagenesSVG/A_PIEU/Apieu-Glycolic-Acid-Cream.svg" height="200px" width="200px">
                </div>
                <div class="col">
                    <img src="./img/imagenesSVG/A_PIEU/Apieu-Glycolic-Acid-Cream.svg" height="200px" width="200px">
                </div>
            </div>
        </div> -->

        <!-- Footer Section Begin -->
        <?php require_once './comentarios/formComentario.php';?>
        <?php require_once './PHP/Footer.php';?>

        <!-- Footer Section End -->


        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/jquery.dd.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
</body>

</html>