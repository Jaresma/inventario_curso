<?php
  
  require_once("class/config.php");

  if(isset($_SESSION["backend_id"])){

     require_once("class/configuracionModulo.php");

     $config=new Configuracion();

     $datos= $config->get_configuracion_por_id($_GET["id_configuracion"]);

    if(isset($_POST["grabar"]) and $_POST["grabar"]=="si"){ 

  
     $config->editar_configuracion();
     exit();

   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php require_once("head.php");?>
</head>
<body>

	<div class="container-fluid">
		
		<?php require_once("menu_principal.php"); ?>

		<div class="container-fluid">
			 <div class="row">
			 	
			 	<div class="col-sm-3">
			 		 
			 		 <?php require_once("menu_lateral.php");?>
			 	</div>

			 	<?php

                  if(isset($_GET["m"])){
                     
                   switch($_GET["m"]){
                      
                      case "1";
                      ?>
                      <h2>los campos estan vacios</h2>
                      <?php
                      break;

                      case "2";
                      ?>
                      <h2>se ha editado la configuración</h2>
                      <?php
                      break;
                   }
                  }
			 	?>

			 	<div class="col-sm-8">

			 		<div class="panel-configuracion">
			 			 <ol class="breadcrumb">
							  <li><a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Principal</a></li>
							  <li><a href="configuracion.php"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Configuración</a></li>
							  <li><a href="agregar_configuracion.php"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Agregar Configuración</a></li>
						</ol>
			 		</div>

			 		<div class="panel panel-default">
			 			
                        <div class="panel-heading">
                        	<h3 class="panel-title"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar Configuración</h3>
                        </div>

                        <div class="panel-body">
                        	
                        	<form class="form-horizontal" action="" method="post">
                        		
                               <div class="form-group">
                               	  
                               	  <label for="" class="col-sm-2 control-label">RFC de empresa</label>  <!-- rif in database  -->
                                  <div class="col-sm-6">
                                    <input type="text" name="rif_empresa" class="form-control" placeholder="RFC empresa" value="<?php echo $datos[0]["rif_empresa"];?>">
                                  </div>
                               </div>

                               <div class="form-group">
                               	  
                               	  <label for="" class="col-sm-2 control-label">nombre de empresa</label>
                                  <div class="col-sm-6">
                                    <input type="text" name="nom_empresa" class="form-control" placeholder="nombre de empresa" value="<?php echo $datos[0]["nom_empresa"];?>">
                                  </div>
                               </div>

                               <div class="form-group">
                               	  
                               	  <label for="" class="col-sm-2 control-label">dirección de empresa</label>
                                  <div class="col-sm-6">
                                    <input type="text" name="direc_empresa" class="form-control" placeholder="direccion de empresa" value="<?php echo $datos[0]["direc_empresa"];?>">
                                  </div>
                               </div>

                               <div class="form-group">
                               	  
                               	  <label for="" class="col-sm-2 control-label">teléfono de empresa</label>
                                  <div class="col-sm-6">
                                    <input type="text" name="tlf_empresa" class="form-control" placeholder="telefono de empresa" value="<?php echo $datos[0]["tlf_empresa"];?>">
                                  </div>
                               </div>

                               <div class="form-group">
                               	  
                               	  <label for="" class="col-sm-2 control-label">RFC de gerente</label> <!-- ced_gerente in database -->
                                  <div class="col-sm-6">
                                    <input type="text" name="ced_gerente" class="form-control" placeholder="RFC gerente" value="<?php echo $datos[0]["ced_gerente"];?>">
                                  </div>
                               </div>


                               <div class="form-group">
                               	  
                               	  <label for="" class="col-sm-2 control-label">nombre de gerente</label>
                                  <div class="col-sm-6">
                                    <input type="text" name="nom_gerente" class="form-control" placeholder="nombre de gerente" value="<?php echo $datos[0]["nom_gerente"];?>">
                                  </div>
                               </div>


                               <div class="form-group">
                               	  
                               	  <label for="" class="col-sm-2 control-label">apellido de gerente</label>
                                  <div class="col-sm-6">
                                    <input type="text" name="ape_gerente" class="form-control" placeholder="apellido de gerente" value="<?php echo $datos[0]["ape_gerente"];?>">
                                  </div>
                               </div>


                               <div class="form-group">
                               	  
                               	  <label for="" class="col-sm-2 control-label">correo de gerente</label>
                                  <div class="col-sm-6">
                                    <input type="text" name="correo_gerente" class="form-control" placeholder="correo de gerente" value="<?php echo $datos[0]["correo_gerente"];?>">
                                  </div>
                               </div>


                               <div class="form-group">
                               	  
                               	  <label for="" class="col-sm-2 control-label">teléfono de gerente</label>
                                  <div class="col-sm-6">
                                    <input type="text" name="tlf_gerente" class="form-control" placeholder="telefono de gerente" value="<?php echo $datos[0]["tlf_gerente"];?>">
                                  </div>
                               </div>


                               <div class="form-group">
                               	  
                               	  <label for="" class="col-sm-2 control-label">iva</label>
                                  <div class="col-sm-6">
                                    <input type="text" name="iva" class="form-control" placeholder="iva" value="<?php echo $datos[0]["iva"];?>">
                                  </div>
                               </div>

                               <input type="hidden" name="grabar" value="si">

                               <input type="hidden" name="id" value="<?php echo $_GET["id_configuracion"];?>">

                               <button type="submit" class="btn btn-default col-sm-offset-2">Enviar</button>

                        	</form>
                        </div>
			 		</div>
			 		
			 	</div>
			 </div><!--row-->
		</div><!--container fluid-->
	</div><!--container fluid-->
	
</body>
</html>

<?php } else {

	header("Location:index.php");
}?>