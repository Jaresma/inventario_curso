<?php

require_once("class/config.php");

require_once("class/userModulo.php");

$usuario= new Usuarios();

 if(isset($_POST["grabar"]) and $_POST["grabar"]=="si"){

    $usuario->login();
    exit();
 }

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>SIS</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
	<h1 class="titulo-ventana col-10 f-candy-shop" style="margin-top: 10px; color: black;">Sistema Integral Dulceria Susi</h1>
	<center>
  <div class="wrap">
		<div class="avatar">
      <img src="img/susi-girl.png">
		</div>
		<form action="" method="POST">
		<input type="text" name="usuario" class="form-control" placeholder="usuario">
		<div class="bar">
			<i></i>
		</div>
		<input type="password" name="password" class="form-control" placeholder="password">
		<input type="hidden" name="grabar" value="si">
        <button type="submit" class="btn btn-default">ENVIAR</button>
		</form>
		
	</div>
    </center>
	<div style = "font-size:16px; color:#cc0000;"></div>
  <script src="js/index.js"></script>

</body>

</html>