<?php require_once "./PHP/Idioma.php";
require_once "./controller/Controller.php";?>
<!DOCTYPE html>
<html lang="es">
<?php
$row =$eskaerak->getEskaeraKodea($_GET['payer_email']);
$eskaerak->UpdateState($row['eskaeraKodea']);?>


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
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php include './PHP/nav.php';?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./index"><i class="fa fa-home"></i> <?php echo $lang['Inicio'] ?></a>
                        <a href="./productos"><?php echo $lang['Shop'] ?></a>
                        <span><?php echo $lang['Check-out'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->

    <!-- Satisfactory Purchase -->
    <div class="container">
        <div class="alert alert-info" role="alert">
            La compra se ha realizado de forma sadisfactoria Nombre_del_cliente<br>
            ID:<br>
            Fecha: <?php echo $_GET['payment_date']?><br>
            Direccion: <br>
            Total: <?php echo $_GET['amt']?>
        </div>
    </div>

    <div class="container">
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top" action="post"
            class="checkout-form">
            <div class="row">
                <div class="col-lg-12">
                    <div class="place-order">
                        <h4></h4>
                        <div class="order-total">
                            <ul class="order-table" style="margin-bottom: 25px;">
                                <li><?php echo $lang['Productos'] ?> <span><?php echo $lang['total'] ?></span></li>
                                <?php foreach ($_SESSION['Carrito'] as $Carrito=>$Item) { echo '
                                <li class="fw-normal">'.$Item['izena'].' x '.$Item['kantitatea'].' <span>'.$Item['prezioa'].'€</span></li>';}?>
                                <li class="fw-normal"><?php echo $lang['Subtotal'] ?> <span><?php echo $total?>€</span>
                                </li>
                                <li class="total-price"><?php echo $lang['total'] ?> <span><?php echo $total?>€</span>
                                </li>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Footer Section Begin -->
    <?php include './PHP/Footer.php';?>
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