<?php require "./PHP/Idioma.php"?>
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

    <!-- Header End -->
    <?php include './PHP/nav.php';?>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> <?php echo $lang['Inicio'] ?></a>
                        <span><?php echo $lang['Shop'] ?></span>
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
                                        <a href=""><img src="img/Imagenes de Marca/Missha.svg" alt="" width="360" height="218"></a>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name"></div>
                                        <div class="product-price">
                                            Cantidad de productos
                                            <p><strong>6</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <a href=""><img src="img/Imagenes de Marca/son-and-park-logo.svg" alt="" width="360" height="218"></a>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name"></div>
                                        <div class="product-price">
                                            Cantidad de productos
                                            <p><strong>6</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <a href=""><img src="img/Imagenes de Marca/COSRX.svg" alt="" width="360" height="218"></a>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name"></div>
                                        <div class="product-price">
                                            Cantidad de productos
                                            <p><strong>6</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <a href=""><img src="img/Imagenes de Marca/Banila_Pink.svg" alt="" width="360" height="218"></a>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name"></div>
                                        <div class="product-price">
                                            Cantidad de productos
                                            <p><strong>6</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <a href=""><img src="img/Imagenes de Marca/apieu.svg" alt="" width="360" height="218"></a>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name"></div>
                                        <div class="product-price">
                                            Cantidad de productos
                                            <p><strong>6</strong></p>
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