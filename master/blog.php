<?php require_once "./PHP/Idioma.php"?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

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
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> <?php echo $lang['Home']?></a>
                        <span><?php echo $lang['Blog']?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <!--<div class="search-form">
                            <h4>Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search . . .  ">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>-->
                        <!--<div class="blog-catagory">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Picnic</a></li>
                                <li><a href="#">Model</a></li>
                            </ul>
                        </div>-->
                        <div class="recent-post">
                            <h4><?php echo $lang['Recent post']?></h4>
                            <div class="recent-blog">
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="img/blog/esponjaKonjac.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6><?php echo $lang['MiniTitulo1']?></h6>
                                        <p><?php echo $lang['Accessories']?> <span>- May 19, 2021</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="img/blog/marcasCosmeticasCoreanas.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6><?php echo $lang['MiniTitulo2']?></h6>
                                        <p><?php echo $lang['Brands']?> <span>- May 19, 2021</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="img/blog/LoultimoenBelleza.gif" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6><?php echo $lang['Minititulo3']?></h6>
                                        <p><?php echo $lang['Masks']?> <span>- May 19, 2021</span></p>
                                    </div> 
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="img/blog/rodilloJade.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6><?php echo $lang['Minititulo4']?></h6>
                                        <p><?php echo $lang['Accessories']?><span>- May 19, 2021</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--<<div class="blog-tags">
                            <h4>Product Tags</h4>
                            <div class="tag-item">
                                <a href="#">Towel</a>
                                <a href="#">Shoes</a>
                                <a href="#">Coat</a>
                                <a href="#">Dresses</a>
                                <a href="#">Trousers</a>
                                <a href="#">Men's hats</a>
                                <a href="#">Backpack</a>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="img/blog/rodilloJade.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="./blog-details">
                                        <h4><?php echo $lang['Titulo4']?>
                                        </h4>
                                    </a>
                                    <p><?php echo $lang['Accessories']?><span>- May 19, 2021</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="img/blog/LoultimoenBelleza.gif" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="./blog-details">
                                        <h4><?php echo $lang['Titulo3']?></h4>
                                    </a>
                                    <p><?php echo $lang['Masks']?> <span>- May 19, 2021</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="img/blog/marcasCosmeticasCoreanas.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="./blog-details">
                                        <h4><?php echo $lang['Titulo2']?></h4>
                                    </a>
                                    <p><?php echo $lang['Brands']?> <span>- May 19, 2021</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="img/blog/esponjaKonjac.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="./blog-details">
                                        <h4><?php echo $lang['Titulo1']?></h4>
                                    </a>
                                    <p><?php echo $lang['Accessories']?><span>- May 19, 2021</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="loading-more">
                                <i class="icon_loading"></i>
                                <a href="#">
                                <?php echo $lang['See more']?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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