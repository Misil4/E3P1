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

    <!-- Header Section Begin -->

    <!-- Header End -->
    <?php include './PHP/nav.php';?>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.php"><i class="fa fa-home"></i> <?php echo $lang['Inicio'] ?></a>
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
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <form
                        action="./BANILLAPO.php                                                                                                                                                                    "
                        method="GET">
                        <div class="filter-widget">
                            <h4 class="fw-title"><?php echo $lang['Categories'] ?></h4>
                            <ul class="filter-catagories">
                                <div class="fw-brand-check">
                                <div class="bc-item">
                                        <label for="bc-Anti wrinkle">
                                            <?php echo $lang['Anti wrinkle'] ?>
                                            <input type="checkbox" id="Anti wrinkle" value="ANTA"
                                                name="Filtro[Categoria_2]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="bc-item">
                                        <label for="bc-Hydration">
                                            <?php echo $lang['Hydration'] ?>
                                            <input type="checkbox" id="bc-Hydration" value="HIDR" name="Filtro[Categoria_3]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="bc-item">
                                        <label for="bc-AntiSpot">
                                            <?php echo $lang['AntiSpot'] ?>
                                            <input type="checkbox" id="bc-AntiSpot" value="ANTM"
                                                name="Filtro[Categoria_4]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="bc-item">
                                        <label for="bc-Serums">
                                            <?php echo $lang['Serums'] ?>
                                            <input type="checkbox" id="bc-Serums" value="SERU"
                                                name="Filtro[Categoria_5]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="bc-item">
                                        <label for="bc-Essences">
                                            <?php echo $lang['Essences'] ?>
                                            <input type="checkbox" id="bc-Essences" value="ESEN"
                                                name="Filtro[Categoria_6]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="bc-item">
                                        <label for="bc-Face mask">
                                            <?php echo $lang['Face mask'] ?>
                                            <input type="checkbox" id="bc-Face mask" value="AUMR"
                                                name="Filtro[Categoria_7]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="bc-item">
                                        <label for="bc-Tonic">
                                            <?php echo $lang['Tonic'] ?>
                                            <input type="checkbox" id="bc-Tonic" value="TONIC"
                                                name="Filtro[Categoria_8]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="bc-item">
                                        <label for="bc-Tonic">
                                            <?php echo $lang['Tonic'] ?>
                                            <input type="checkbox" id="bc-Tonic" value="PORO"
                                                name="Filtro[Categoria_9]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="bc-item">
                                        <label for="bc-Blackheads">
                                            <?php echo $lang['Blackheads'] ?>
                                            <input type="checkbox" id="bc-Blackheads" value="PUNT"
                                                name="Filtro[Categoria_10]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="bc-item">
                                        <label for="bc-Cleaner">
                                            <?php echo $lang['Cleaner'] ?>
                                            <input type="checkbox" id="Cleaner" value="LIMP"
                                                name="Filtro[Categoria_11]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="bc-item">
                                        <label for="bc-Exfoliating">
                                            <?php echo $lang['Exfoliating'] ?>
                                            <input type="checkbox" id="bc-Exfoliating" value="EXFO"
                                                name="Filtro[Categoria_12]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="bc-item">
                                        <label for="bc-Acne">
                                            <?php echo $lang['Acne'] ?>
                                            <input type="checkbox" id="bc-Acne" value="ACN"
                                                name="Filtro[Categoria_12]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                            </ul>
                        </div>
                        <div class="filter-widget">
                            <h4 class="fw-title"><?php echo $lang['Prices'] ?></h4>
                            <div class="filter-range-wrap">
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount" name="Filtro[Min_Precio]">
                                        <input type="text" id="maxamount" name="Filtro[Max_Precio]">
                                    </div>
                                </div>
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="1" data-max="100">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                            </div>
                        </div>
                        <div class="filter-widget">
                            <h4 class="fw-title"><?php echo $lang['Skin Type'] ?></h4>
                            <div class="fw-brand-check">
                                <div class="bc-item">
                                    <label for="bc-Oily skin">
                                        <?php echo $lang['Oily skin'] ?>
                                        <input type="checkbox" id="bc-Oily skin" value="PGRA"
                                            name="Filtro[Categoria_13]">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="bc-item">
                                    <label for="bc-Mixed skin">
                                        <?php echo $lang['Mixed skin'] ?>
                                        <input type="checkbox" id="bc-Mixed skin" value="PMIX"
                                            name="Filtro[Categoria_14]">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="bc-item">
                                    <label for="bc-Normal skin">
                                        <?php echo $lang['Normal skin'] ?>
                                        <input type="checkbox" id="bc-Normal skin" value="PNOR"
                                            name="Filtro[Categoria_15]">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="bc-item">
                                    <label for="bc-Sensitive skin">
                                        <?php echo $lang['Sensitive skin'] ?>
                                        <input type="checkbox" id="bc-Sensitive skin" value="PSEN"
                                            name="Filtro[Categoria_16]">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="bc-item">
                                    <label for="bc-Dry skin">
                                        <?php echo $lang['Dry skin'] ?>
                                        <input type="checkbox" id="bc-Dry skin" value="PSEC"
                                            name="Filtro[Categoria_17]">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <input type="hidden" name="Filtro[Activo]" value="ok"></imput>
                            </div>
                        </div>
                        <button class="site-btn" type="submit"><?php echo $lang['Search'] ?></button>
                    </form>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <?php
$row = $products->total_products_by_brand("BANILA CO");
$num_total_rows = $row['total_products'];
if ($num_total_rows > 0) {
    $page = false;

    //examino la pagina a mostrar y el inicio del registro a mostrar
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    }

    if (!$page) {
        $start = 0;
        $page = 1;
    } else {
        $start = ($page - 1) * NUM_ITEMS_BY_PAGE;
    }
    //calculo el total de paginas
    $total_pages = ceil($num_total_rows / NUM_ITEMS_BY_PAGE);

    //pongo el numero de registros total, el tamano de pagina y la pagina que se muestra
    echo '<p> ' . $lang['Showing'] . " " . $page . '-' . $total_pages . " " . $num_total_rows . " " . $lang['Productos'] . '</p>';
    echo '</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="product-list">';
    echo '  <div class="row">';
    $Marca = "BANILA CO";
    include_once "./PHP/Filtro_Productos.php";
    $lenguaje = $products->languageChoose();
    if (mysqli_num_rows($result) > 0) {
        echo '<ul class="row items">';
        $i = -1;
        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-lg-4 col-sm-6">';
            echo '<div class="product-item">';
            echo '<div class="pi-pic">';
            echo '<img src="' . $row['ruta'] . '" width=200px heigth=200px alt="">';
          
            echo '<div class="icon">';
            echo '<i class="icon_heart_alt"></i>';
            echo '</div>';
            echo '</div>';
            echo '<div class="pi-text">';
            echo '<div class="catagory-name">' . $row['izena'] . '</div>';
            echo '<div class="product-price">';
            echo '<h5>' . $row['izena' . $lenguaje] . '<h5>';
            echo '<br>';
            echo '<h5>' . $row['prezioa'] . '€<h5>';
             echo '<form action="Produktua" method="get">';
            echo '<input type="hidden" name="nombre" value="'.$row['izena' . $lenguaje].'"></input>';
            echo '<input type="hidden" name="precio" value="'.$row['prezioa'].'"></input>';
            echo '<input type="hidden" name="ruta" value="'.$row['ruta'].'"></input>';
            echo '<input type="hidden" name="deskribapena" value="'.$row['deskribapena' . $lenguaje].'"></input>';
            echo '<button type="submit" class="site-btn register-btn">'.$lang["Add"].'</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';}
        echo '</ul>';}
    echo '<nav>';
    echo '<ul class="pagination">';
    if ($total_pages > 1) {
        if ($page != 1) {
            echo '<li class="page-item"><a class="page-link"
                                            href="BANILA CO?page=' . ($page - 1) . '"><span
                                                aria-hidden="true">&laquo;</span></a></li>';
        }

        for ($i = 1; $i <= $total_pages; $i++) {if ($page == $i) {
            echo '<li class="page-item active"><a class="page-link" href="BANILA CO">' . $page
                . '</a></li>';} else {
            echo '<li class="page-item"><a class="page-link" href="BANILA CO?page=' . $i
                . '">' . $i . '</a></li>';}}if ($page != $total_pages) {
            echo '<li class="page-item"><a class="page-link" href="BANILA CO?page=' . ($page
                 + 1) . '"><span aria-hidden="true">&raquo;</span></a></li>';}}
    echo '</ul>';
    echo '</nav>';}?>
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