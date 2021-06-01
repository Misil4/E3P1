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

<div class="bg-white">
  <div class="container">
    <div class="row h-100 align-items-center">
      <div class="col-lg-6">
        <h1 class="display-4" style="color:#f48fa8"><?php echo $lang['Who we are']?></h1>

      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/illus_kftyh4.png" alt="" class="img-fluid"></div>
    </div>
  </div>
</div>
<div class="bg-white py-1">
  <div class="container py-1">
    <div class="row align-items-center mb-1">
      <div class="col-lg-6 order-2 order-lg-1">
      <h2 class="font-weight-light" style="color:#f48fa8"><?php echo $lang['Why did we create our website?']?></h2>
        <p class="font-italic text-muted mb-4"><?php echo $lang['We love Korean cosmetics. Seeing that more and more people demanded these products was the reason why we created our website.']?></p>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="./img/belleza-coreana.png"></div>
      <div class="col-lg-6"></i>
        <h2 class="font-weight-light" style="color:#f48fa8"><?php echo $lang['Who created it?']?></h2>
        <p class="font-italic text-muted mb-4"><?php echo $lang['We are two friends who are willing to help our clients with our knowledge.']?></p>
      </div>
    </div>
  </div>
</div>
<div class="bg-white py-1">
  <div class="container py-1">
    <div class="row mb-4">
      <div class="col-lg-5">
        <h2 class="display-4 font-weight-light" style="color:#f48fa8"><?php echo $lang['Our work team']?></h2>
        <p class="font-italic text-muted"><?php echo $lang['Presentation']?></p>
      </div>
    </div>

    </div>
  </div>
</div>

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