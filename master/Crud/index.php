<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./../css/Crud.css">
</head>
<body>

<div class="wrapper">

	<form class="form-signin" method="post" action="./../PHP/Login_Crud.php">
    <h2 class="form-signin-heading text-center">Login</h2>
    <input type="text" class="form-control" name="Usuario" placeholder="Usuario" required/>
    <input type="password" class="form-control" name="Contraseña" placeholder="Contraseña" required />
    <button class="btn btn-lg btn-primary btn-block" name="Base_de_datos" value="Clientes">Iniciar Sesion</button>
	</form>

  </div>

</body>
</html>











