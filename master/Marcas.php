<?php require_once "./PHP/Idioma.php";require_once "./controller/Controller.php";?>
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

    <!-- Header End -->
    <?php include './PHP/nav.php';?>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> <?php echo $lang['Inicio'] ?></a>
                        <span><?php echo $lang['Marcas'] ?></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="product-list">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <a href="MISSHA.php"><img src="img/imagenesSVG/logotipos/Missha.svg" alt=""
                                            width="360" height="218"></a>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"></div>
                                    <div class="product-price">
                                        <?php echo $lang['Product Quantity'] ?>
                                        <p><strong><?php echo $products->brand("MISSHA"); ?></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <a href="SON&PARK.php"><img src="img/imagenesSVG/logotipos/sonpark.svg" alt=""
                                            width="360" height="218"></a>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"></div>
                                    <div class="product-price">
                                        <?php echo $lang['Product Quantity'] ?>
                                        <p><strong><?php echo $products->brand("SON&PARK"); ?></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <a href="COSRX.php"><img src="img/imagenesSVG/logotipos/COSRX-Brand-Logo.svg" alt=""
                                            width="360" height="218"></a>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"></div>
                                    <div class="product-price">
                                        <?php echo $lang['Product Quantity'] ?>
                                        <p><strong><?php echo $products->brand("COSRX"); ?></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <a href="BANILLAPO.php"><img src="img/imagenesSVG/logotipos/Banilaco.svg" alt=""
                                            width="360" height="218"></a>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"></div>
                                    <div class="product-price">
                                        <?php echo $lang['Product Quantity'] ?>
                                        <p><strong><?php echo $products->brand("BANILA CO"); ?></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <a href="APIEU.php"><img src="img/imagenesSVG/logotipos/A_PIEU.svg" alt=""
                                            width="360" height="218"></a>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"></div>
                                    <div class="product-price">
                                        <?php echo $lang['Product Quantity'] ?>
                                        <p><strong><?php echo $products->brand("APIEU"); ?></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Partner Logo Section Begin -->
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