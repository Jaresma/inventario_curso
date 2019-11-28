<?php

 require_once("class/config.php");

  if(isset($_SESSION["backend_id"])){

    if(isset($_POST["grabar"]) and $_POST["grabar"]=="si"){
       
       require_once("class/userModulo.php");

       $usuario=new Usuarios();

       $usuario->agregar_usuario();
       exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Almacen</title>
	<?php require_once("head.php");?>
</head>
<body>

	<div class="container-fluid">
		
		<?php require_once("menu_principal.php");?>

		<div class="container-fluid">
			
			<div class="row">
				<div class="col-sm-3">
					
					<?php require_once("menu_lateral.php");?>
				</div>

				<div class="col-sm-8">

					<div class="panel-usuario">
						
						</ol>
					</div>

				

					<div class="panel panel-default">
						 
						

						 <div class="panel-body">
						 	<?php require_once("almacen.php"); ?>
						</div><!--panel-body-->
					    
						 </div>
					</div>

					
				</div><!--col-sm-8-->
			</div><!--row-->
		</div><!--container-fluid-->
	</div>


	
</body>
</html>

<?php } else {

	header("Location:".Conectar::ruta()."index.php");
}?>