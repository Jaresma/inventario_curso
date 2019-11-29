
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facturacion</title>
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

					<div class="panel-cliente">
						<ol class="breadcrumb">
						  <li><a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Principal</a></li>
						  
						   
						</ol>
					</div>

				

					<div class="panel panel-default">
						 
						 <div class="panel-heading">
						 	<h3 class="panel-title"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Generador de facturas</h3>
						 </div>

						 <div class="panel-body">
						 	 <form action="" method="post" class="form-horizontal">
						
						   <div class="form-group">
							<label for="idventa" class="col-sm-2 control-label">ID Venta</label>
							<div class="col-sm-6">
								<input type="text" name="idventa" class="form-control" placeholder="Ingrese el id de la venta" required>
							</div>
						    </div>
						                           
							 <div class="form-group">
							<label for="rfc_cliente" class="col-sm-2 control-label">RFC</label><!-- cod cliente in db -->
							<div class="col-sm-6">
								<input type="text" name="rfc_cliente" class="form-control" placeholder="ingrese su RFC" required>
							</div>
							</div>

							

							
							

							<button type="submit"class="btn btn-primary col-sm-offset-2">Generar</button>
                          
                          </form>
						</div><!--panel-body-->
					    
						 </div>
					</div>

					
				</div><!--col-sm-8-->
			</div><!--row-->
		</div><!--container-fluid-->
	</div>


	
</body>
</html>
