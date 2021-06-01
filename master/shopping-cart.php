<?php require_once "./PHP/Idioma.php";  if (is_null($_SESSION['Usuario'])) {
    echo '<script type="text/javascript">alert("Tienes que Iniciar Sesion para acceder a este menu");window.open("./../login","_self");</script>';}
    else if (is_null($_SESSION['Carrito'])) {
        echo '<script type="text/javascript">alert("Tienes que añadir al menos un producto para acceder a esta pagina");window.open("./../login","_self");</script>';
    }?>
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
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html"><?php echo $lang['Shop'] ?></a>
                        <span><?php echo $lang['Shopping Cart'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th><?php echo $lang['Image'] ?></th>
                                    <th class="p-name"><?php echo $lang['Product Name'] ?></th>
                                    <th><?php echo $lang['Price'] ?></th>
                                    <th><?php echo $lang['Product Quantity'] ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($_SESSION['Carrito'] as $Carrito=>$Item) {
                                    echo '
                                <tr>
                                    <td class="cart-pic first-row"><img src="'.$Item['ruta'].'" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>'.$Item['izena'].'</h5>
                                    </td>
                                    <td class="p-price first-row">'.$Item['prezioa'].'€</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            '.$Item['kantitatea'].'
                                        </div>
                                    </td>
                                    ';}?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <!--<a href="productos.php"
                                    class="primary-btn continue-shop"><?php echo $lang['Continue shopping'] ?></a>
                                <a href="#" class="primary-btn up-cart"><?php echo $lang['Update cart'] ?></a>-->
                                <a href="productos.php" class="primary-btn up-cart"><?php echo $lang['Continue shopping'] ?></a>
                            </div>
                            <!-- <div class="discount-coupon"> -->
                            <!-- <h6><?php echo $lang['Discount Codes'] ?></h6> -->
                            <!-- <form action="#" class="coupon-form"> -->
                            <!-- <input type="text" placeholder="<?php echo $lang['Enter your codes'] ?>"> -->
                            <!-- <button type="submit" -->
                            <!-- class="site-btn coupon-btn"><?php echo $lang['Apply'] ?></button> -->
                            <!-- </form> -->
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal"><?php echo $lang['Subtotal'] ?>
                                        <span><?php echo number_format($total,2)?>€</span>
                                    </li>
                                    <li class="cart-total"><?php echo $lang['total'] ?>
                                        <span><?php echo number_format($total,2)?>€</span>
                                    </li>
                                </ul>
                                <a href="check-out" class="proceed-btn"><?php echo $lang['Check-out'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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