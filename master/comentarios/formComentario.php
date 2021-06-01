<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">

    <style type="text/css">
    </style>
</head>
<body>

      <?php
      require_once (__DIR__."/../controller/Controller.php");
      ?>
      
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-post">       
                            <div class="leave-comment">
                            <h4>¿Qué opinas de nuestro producto?</h4>
                              <form action="comentarios/Insertar Contenido.php" method="post" enctype="multipart/form-data" id="form" name="form" class="comment-form">
                                  <div class="row">
                                  <input  name="Usuario" type="hidden" value=<?php echo $_SESSION['Usuario']?>> 
                                      <div class="col-lg-12">
                                          <textarea name="comentario" placeholder="Comentario" required></textarea>
                                      
                                      <p class="clasificacion" >
                                    <input id="radio1" type="radio" name="estrellas" value="5">
                                    <label for="radio1">★</label>
                                    <input id="radio2" type="radio" name="estrellas" value="4">
                                    <label for="radio2">★</label>
                                    <input id="radio3" type="radio" name="estrellas" value="3">
                                    <label for="radio3">★</label>
                                    <input id="radio4" type="radio" name="estrellas" value="2">
                                    <label for="radio4">★</label>
                                    <input id="radio5" type="radio" name="estrellas" value="1" required>
                                    <label for="radio5">★</label>
                                  </p></div>
                                      <label for="formFileSm" class="form-label"></label>
                                      <input class="form-control form-control-sm" id="formFileSm" type="file" name="imagen" />
                                  </div>
                                  
                                  <button type="submit" name="btnEnviar" id="btnEnviar" value="Enviar" class="site-btn"><?php echo $lang['Enviar comentario'] ?></button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
                                  
            $row=$products->GetProductCode($_GET['nombre']);
            

                                   
            if($result =$iritziak->GetAllFromComentariosByProduct($row['produktuKodea']))
              { 
                while ($registro=mysqli_fetch_assoc($result))
              {   
                echo
                '    
                <div class="container">
                  <div class="row">
                    <div class="container p-3 my-3 border" >
                      <div class="blog-post">       
                        <div class="posted-by">
                          <div class="pb-text">
                            <h5 style="color:purple";>' .$registro['izena']. '</h5>';
                            echo 
                            '<span class="text-muted pull-right">
                                <small class="text-muted">' .$registro['eguna'] . '</small>
                             </span>';

                            for($i=0; $i<$registro['balorazioa']; $i++)
                            { 
                            echo "⭐";    
                            }                                  
                            echo '<p>' .$registro['komentarioa']. '</p>';

                            if($registro['irudia'] !="")
                            {
                            echo '<a class="lb_one" href=./comentarios/imagenes/' . $registro['irudia'] . ' target="_blank" >
                                    <img src=./comentarios/imagenes/' . $registro['irudia'] . ' width="25%" style="border-radius: 30%" /></a>'; 
                            }                   
                            echo '
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>';
              }}
            ?>

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