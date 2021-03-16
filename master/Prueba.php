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


<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    xabiergoenaga@ikasle.aeg.eus
                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i>
                    +34 688456729
                </div>
            </div>
            <div class="ht-right">
                <a href="#" class="login-panel"><i class="fa fa-user"></i><?php echo $lang['login'] ?></a>
                <div class="lan-selector">
                    <a href="index.php?lang=es"> <?php echo $lang['es'] ?> </a> | <a href="index.php?lang=en">
                        <?php echo $lang['en'] ?></a> | <a href="index.php?lang=eus"> <?php echo $lang['eus'] ?> </a>
                </div>
                <div class="top-social">
                    <a href="#"><i><img src="./img/whatsapp.svg" width="16px" height="16px"></i></a>
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
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn"><?php echo $lang['categories'] ?></button>
                        <div class="input-group">
                            <input type="text" placeholder=<?php echo $lang['categories_description'] ?>>
                            <button type="button"
                                style="width:70px;height:49px;margin-top: -1px;margin-right: -100px;"><i
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
                                    <a href="#" class="primary-btn view-card"><?php echo $lang['cart_view'] ?></a>
                                    <a href="check-out.php"
                                        class="primary-btn checkout-btn"><?php echo $lang['check_out'] ?></a>
                                </div>
                            </div>
                </div>
                </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="active"><a href="./index.php">Home</a></li>
                    <li><a href="./shop.php">Shop</a></li>
                    <li><a href="#">Collection</a>
                        <ul class="dropdown">
                            <li><a href="#">Men's</a></li>
                            <li><a href="#">Women's</a></li>
                            <li><a href="#">Kid's</a></li>
                        </ul>
                    </li>
                    <li><a href="./blog.php">Blog</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="dropdown">
                            <li><a href="./blog-details.php">Blog Details</a></li>
                            <li><a href="./shopping-cart.php">Shopping Cart</a></li>
                            <li><a href="./check-out-php">Checkout</a></li>
                            <li><a href="./faq.php">Faq</a></li>
                            <li><a href="./register.php">Register</a></li>
                            <li><a href="./login.php">Login</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>

</html>