<?php require_once "./PHP/Idioma.php"?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $lang['titulo'];?></title>

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
    <?php require_once './PHP/nav.php';?>
    <!-- Header End -->
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items">
                <div class=" container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h1><?php echo $lang['Rebajas'] ?></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="./productos" class="primary-btn"><?php echo $lang['Interes'] ?></a>
                        </div>
                        <img src="img/imagenesSVG/COSRX/Advanced_Snail_92_All_in_one_Cream(1).svg" width="120px"
                            style="position:relative;bottom:70px;" alt="">
                    </div>
                    <div class="off-card">
                        <h2 style="color:#000000;"><?php echo $lang['Oferta'] ?><span style="color:#000000">50%</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h1><?php echo $lang['Rebajas'] ?></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn"><?php echo $lang['Interes'] ?></a>
                        </div>
                        <img src="img/imagenesSVG/A_PIEU/Apieu-Glycolic-Acid-Cream.svg" width="120px"
                            style="position:relative;bottom:130px;" alt="">
                    </div>
                    <div class="off-card">
                        <h2 style="color:#000000"><?php echo $lang['Oferta'] ?><span style="color:#000000">50%</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-control">
                        <span>
                            <h3><?php echo $lang['Last']?></h3>
                        </span>
                    </div>
                    <div class="product-slider owl-carousel">
                        <?php $lenguaje = $products->languageChoose();
$result = $products->LastAddedProducts();
while ($row = $result->fetch_assoc()) {

    echo '<div class="product-item">';
    echo '<div class="pi-pic">';
    echo ' <img src="' . $row['ruta'] . '"  alt="" style="width: 500px; height: 500px;">';
    echo '<div class="sale pp-sale">'.$lang['New'].'</div>';
                    echo '<div class="icon">';
                        echo ' <i class="icon_heart_alt"></i>';
                        echo '</div>';
                    echo '
                </div>';
                echo '<div class="pi-text">';
                    echo '<div class="catagory-name">' . $row['izena'] . '</div>';
                    echo '<a href="#">';
                        echo '<h5>' . $row['izena' . $lenguaje] . '</h5>';
                        echo '</a>';
                    echo '<div class="product-price">';
                        echo $row['prezioa'] . '€';
                        echo '<form action="Produktua" method="get">';
                            echo '<input type="hidden" name="nombre" value="'.$row['izena' . $lenguaje].'"></input>';
                            echo '<input type="hidden" name="precio" value="'.$row['prezioa'].'"></input>';
                            echo '<input type="hidden" name="ruta" value="'.$row['ruta'].'"></input>';
                            echo '<input type="hidden" name="deskribapena"
                                value="'.$row['deskribapena' . $lenguaje].'"></input>';
                            echo '<button type="submit" class="site-btn register-btn">'.$lang["Add"].'</button>';
                            echo '</form>';
                        echo '</div>';
                    echo '</div>';
                echo '
            </div>';}?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="deal-of-week set-bg spad" data-setbg="img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2><?php echo $lang['Day sale']?></h2>
                    <?php $array =$products->selectRandom();?>
                    <p><?php echo $array['deskribapena'.$lenguaje]?> </p>
                    <div class="product-price">
                        <span> <?php echo $array['izena'.$lenguaje]?></span>
                        <br><?php echo $array['prezioa']?>€
                    </div>
                    <img src="<?php echo $array['ruta']?>" width="100px" heigth="100px"></img>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>20</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>32</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a class="site-btn"
                    href="<?php echo 'Produktua?nombre='.$array["izena".$lenguaje].'&precio='.$array["prezioa"].'&ruta='.$array["ruta"].'&deskribapena='.$array["deskribapena".$lenguaje]?>"><?php echo $lang['Add']?></a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->
    <section class="section services-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2><?php echo $lang['Why buy']?></h2>
                        <p><?php echo $lang['Why buy-text']?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-spray-can"></i>
                        </div>
                        <div class="feature-content">
                            <h5><?php echo $lang['Quality']?></h5><br>
                            <p><?php echo $lang['Quality-text']?></p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="feature-content">
                            <h5><?php echo $lang['Comunication']?></h5><br>
                            <p><?php echo $lang['Comunication-text']?></p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-comment"></i>
                        </div>
                        <div class="feature-content">
                            <h5><?php echo $lang['Atention']?></h5><br>
                            <p><?php echo $lang['Atention-text']?></p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
            </div>
            <!-- / -->
            <!-- feaure box -->
    </section>

    <!-- Women Banner Section End -->
    <!-- Instagram Section Begin(instagram feed) -->
    <div class="instagram-photo">
        <h2 class="text-center">INSTAGRAM FEED</h2>
        <div class="insta-item set-bg" data-setbg="img/belleza-coreana5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">K-berry</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/belleza-coreana.png">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">K-berri</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/belleza-coreana1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">K-Berri</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/belleza-coreana2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">K-Berri</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/belleza-coreana3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">K-Berri</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/belleza-coreana4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">K-Berri</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->

    <!-- Footer Section Begin -->
    <?php require_once './PHP/Footer.php';?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/countdown.js"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
</body>

</html>