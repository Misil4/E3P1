<?php require_once "./PHP/Idioma.php"?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
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
                        <a href="./index.php"><i class="fa fa-home"></i> <?php echo $lang['Inicio'] ?></a>
                        <a href="./shop.php"><?php echo $lang['Shop'] ?></a>
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
                        <div class="checkout-content">
                            <a href="login.php" class="content-btn"><?php echo $lang['Click Here To Login'] ?></a>
                        </div>
                        <h4><?php echo $lang['Billing Details'] ?></h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir"><?php echo $lang['First Name'] ?><span>*</span></label>
                                <input type="text" id="fir">
                            </div>
                            <div class="col-lg-6">
                                <label for="last"><?php echo $lang['Last Name'] ?><span>*</span></label>
                                <input type="text" id="last">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun-name"><?php echo $lang['Company Name'] ?></label>
                                <input type="text" id="cun-name">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun"><?php echo $lang['Country'] ?><span>*</span></label>
                                <input type="text" id="cun">
                            </div>
                            <div class="col-lg-12">
                                <label for="street"><?php echo $lang['Street Address'] ?><span>*</span></label>
                                <input type="text" id="street" class="street-first">
                                <input type="text">
                            </div>
                            <div class="col-lg-12">
                                <label for="zip"><?php echo $lang['Postcode / ZIP'] ?></label>
                                <input type="text" id="zip">
                            </div>
                            <div class="col-lg-12">
                                <label for="town"><?php echo $lang['City'] ?><span>*</span></label>
                                <input type="text" id="town">
                            </div>
                            <div class="col-lg-6">
                                <label for="email"><?php echo $lang['Email'] ?><span>*</span></label>
                                <input type="text" id="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone"><?php echo $lang['Phone'] ?><span>*</span></label>
                                <input type="text" id="phone">
                            </div>
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        <?php echo $lang['Create an account?'] ?>
                                        <input type="checkbox" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input type="text" placeholder="<?php echo $lang['Enter Your Coupon Code'] ?>">
                        </div>
                        <div class="place-order">
                            <h4><?php echo $lang['Your Order'] ?></h4>
                            <div class="order-total">
                                <ul class="order-table" style="margin-bottom: 25px;">
                                    <li><?php echo $lang['Productos'] ?> <span><?php echo $lang['total'] ?></span></li>
                                    <li class="fw-normal">Combination x 1 <span>$60.00</span></li>
                                    <li class="fw-normal">Combination x 1 <span>$60.00</span></li>
                                    <li class="fw-normal">Combination x 1 <span>$120.00</span></li>
                                    <li class="fw-normal"><?php echo $lang['Subtotal'] ?> <span>$240.00</span></li>
                                    <li class="total-price"><?php echo $lang['total'] ?> <span>$240.00</span></li>
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
                                    <input type="hidden" name="item_name" value="Prueba">
                                    <input type="hidden" name="item_number" value="Prueba">
                                    <input type="hidden" name="amount" value="12.00">
                                    <input type="hidden" name="currency_code" value="EUR">
                                    <input type="hidden" name="button_subtype" value="services">
                                    <input type="hidden" name="no_note" value="1">
                                    <input type="hidden" name="no_shipping" value="1">
                                    <input type="hidden" name="rm" value="1">
                                    <input type="hidden" name="return" value="https://dddddddd.com">
                                    <input type="hidden" name="cancel_return" value="https://dddddddd.com">
                                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
                                    <input type="hidden" name="notify_url" value="https://dddddddd.com">
                                    <button type="image"
                                        src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0"
                                        name="submit" alt="PayPal - The safer, easier way to pay online!"
                                        class="site-btn place-btn"><?php echo $lang['Place Order'] ?></button>
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