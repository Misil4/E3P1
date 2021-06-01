<?php require_once "./PHP/Idioma.php"; if (is_null($_SESSION['Usuario'])) {
    echo '<script type="text/javascript">alert("Tienes que Iniciar Sesion para acceder a este menu");window.open("./../login","_self");</script>';}
    else if (is_null($_SESSION['Carrito'])) {
        echo '<script type="text/javascript">alert("Tienes que añadir al menos un producto para acceder a esta pagina");window.open("./../login","_self");</script>';
    }else?>

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
                        <a href="./shop"><?php echo $lang['Shop'] ?></a>
                        <span><?php echo $lang['Check-out'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top" action="post"
                class="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="place-order">
                            <h4><?php echo $lang['Your Order'] ?></h4>
                            <div class="order-total">
                                <ul class="order-table" style="margin-bottom: 25px;">
                                    <li><?php echo $lang['Productos'] ?> <span><?php echo $lang['total'] ?></span></li>
                                    <?php foreach ($_SESSION['Carrito'] as $Carrito=>$Item) { echo '
                                    <li class="fw-normal">'.$Item['izena'].' x '.$Item['kantitatea'].'
                                    <span>'.$Item['prezioa'].'€</span>
                                    </li>
                                    ';}?>
                                    <!--<li class="fw-normal"><?php echo $lang['Subtotal'] ?> <span>$12.00</span></li>-->
                                    <li class="total-price"><?php echo $lang['total'] ?>
                                        <span><?php echo number_format($total,2) ?>€</span>
                                    </li>
                                </ul>
                                <div class="payment-text"
                                    style="padding-top: -25px;padding-bottom: 25px; text-align: center;">
                                    <div class="pc-item">
                                        <h5><?php echo $lang['The payment will be made with PayPal'] ?></h5>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <!-- Todo lo de paypal -->
                                    <input type="hidden" name="cmd" value="_xclick">
                                    <input type="hidden" name="business" value="9Z3ZPHG9RENBL">
                                    <input type="hidden" name="lc" value="US">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="item_name" value="cart">
                                    <input type="hidden" name="amount" value=<?php echo $total ?>>
                                    <?php $i=1; foreach ($_SESSION['Carrito'] as $Carrito=>$Item) { echo '
                                        <input type="hidden" name="shipping_'.$i++.'" value='.$Item['prezioa'].'>';}?>
                                    <input type="hidden" name="currency_code" value="EUR">
                                    <input type="hidden" name="button_subtype" value="services">
                                    <input type="hidden" name="no_note" value="1">
                                    <input type="hidden" name="no_shipping" value="1">
                                    <input type="hidden" name="rm" value="1">
                                    <input type="hidden" name="return"
                                        value="https://2021e3p1talde1.aegcloud.pro/Satisfactory purchase">
                                    <input type="hidden" name="cancel_return"
                                        value="localhost:80/Satisfactory purchase">
                                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
                                    <input type="hidden" name="notify_url"
                                        value="https://2021e3p1talde1.aegcloud.pro/PHP/IPNPaypal">
                                    <input type="hidden" name="custom" value=<?php echo $_SESSION['lang']?>>
                                    <label
                                        for="Contratation"><?php echo "<a href='condiciones-generales-de-contratacion'>".$lang['Privacy Policy']."</a>" ?>
                                        *</label>
                                    <input type="checkbox" name="checkbox" id="checkbox" required>
                                    <input type="submit" name="submit" value="<?php echo $lang['Place Order'] ?>"
                                        alt="PayPal - The safer, easier way to pay online!"
                                        class="site-btn place-btn"></input>
                                    <?php $eskaerak->sartuEskaera("Pending", $_SESSION['Usuario']);  foreach ($_SESSION['Carrito'] as $Carrito=>$Item) {
$row =$products->GetProductCode($Item['izena']);
$array =$eskaerak->getEskaeraKodea();
$eskaera_produktuak->sartuProduktuEskaera($row['produktuKodea'],$Item['kantitatea'],$array['eskaeraKodea']);}?>
                                </div>
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