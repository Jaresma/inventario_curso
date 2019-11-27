

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla dinamica</title>
  
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

  <script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</head>
<body>

	<div class="container">
  

    <div id ="buscador"></div>
    
		<div id="tabla"></div>
	</div>

	<!-- modal nuevos registros -->

<div class="modal fade" id="modalnuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
		<!-- cuerpo del modal -->
    <!-- NOMBRE-->
    <form method="POST"  action="altaproducto.php" enctype="multipart/form-data" >
		<label for="nombre">Nombre:</label>
    <br/>
    <input type="text" name="nombre" id="nombre" maxlength="45" required class="form-control input-sm" >
    <br/><br/>
    <!-- IMAGEN -->
    <label for="imagen">Imagen producto:</label>
    <br/>
    <input type="file"  name="imagen"  required accept="image/png, .jpeg, .jpg, image/gif" >
    <br/><br/>
    <!--Descripcion-->
    <label for="descripcion">Descripcion:</label>
    <br/>
    <input type="text" name="descripcion" maxlength="100" required class="form-control input-sm">
    <br/><br/>
    <!--Precio de compra-->
    <label for="preciodecompra">Precio de compra:</label>
    <br/>
    <input type="text" name="preciodecompra" maxlength="45" required class="form-control input-sm">
    <br/><br/>
    <!--Precio de venta-->
    <label for="preciodeventa">Precio de venta:</label>
    <br/>
    <input type="text" name="preciodeventa" maxlength="45" required class="form-control input-sm">
    <br/><br/>
    <!--Codigo de barras-->
    <label for="codigodebarras">Codigo de barras:</label>
    <br/>
    <input type="text" name="codigodebarras" maxlength="15" required class="form-control input-sm">
    <br/><br/>
    <!--stock caja -->
    <label for="stockcaja">Stock Caja:</label>
    <br/>
    <input type="text" name="stockcaja" maxlength="45" required class="form-control input-sm">
    <br/><br/>
    <!-- Cantidad de bolsas por caja -->
    <label for="cantidadbolsasporcaja">Cantidad de bolsas por caja:</label>
    <br/>
    <input type="text" name="cantidadbolsasporcaja" maxlength="15" required class="form-control input-sm">
    <br/><br/>
    <!-- Cantidad de gramos por bolsa -->
    <label for="cantidadgramosporbolsa">Cantidad de gramos por bolsa:</label>
    <br/>
    <input type="text" name="cantidadgramosporbolsa" maxlength="15" required class="form-control input-sm">
    <br/><br>
    <!-- Categoria -->
    <label for="categoria">Categoria:</label>
        <br/>
        <select name="categoria" class="form-control input-sm">

            <option value = 1>categoria 1</option>
                
            <option value =2>categoria 2</option>
                
            <option value =3>categoria 3</option>

        </select>
		<br/><br/>
	<!-- Cantidad Maxima -->
	<label for="cantidad_max">Cantidad maxima en stock:</label>
    <br/>
    <input type="text" name="cantidad_max" maxlength="15" required class="form-control input-sm">
	<br/><br>
	<!-- Cantidad Minima -->
	<label for="cantidad_min">Cantidad minima en stock:</label>
    <br/>
    <input type="text" name="cantidad_min" maxlength="15" required class="form-control input-sm">
    <br/><br>
	  </div>
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="guardarnuevo">Agregar Producto</button>
      </div>
</form>
    </div>
  </div>
</div>
<!-- Modal para edicion de datos -->

<div class="modal fade" id="modaledicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
    <!-- cuerpo del modal edicion -->
    <form method="POST"  action="actualizaproductos.php" enctype="multipart/form-data" >
		<input type="text"  hidden="" id="idproductos" name="idproductos" >
		<!-- NOMBRE-->
		<label for="nombre">Nombre:</label>
    <br/>
    <input type="text" id="nombreu" name="nombre" maxlength="45" required class="form-control input-sm" >
    <br/><br/>
    <!-- Estado -->
    <label for="estado">Estado:</label>
        <br/>
        <select id="estadou" name="estado" class="form-control input-sm">

            <option value = 1>Activo</option>
                
            <option value =0>Inactivo</option>

        </select>
		<br/><br/>
    <!--Descripcion-->
    <label for="descripcion">Descripcion:</label>
    <br/>
    <input type="text" id="descripcionu" name="descripcion" maxlength="100" required class="form-control input-sm">
    <br/><br/>
    <!--Precio de compra-->
    <label for="preciodecompra">Precio de compra:</label>
    <br/>
    <input type="text" id="preciodecomprau" name="preciodecompra" maxlength="45" required class="form-control input-sm">
    <br/><br/>
    <!--Precio de venta-->
    <label for="preciodeventa">Precio de venta:</label>
    <br/>
    <input type="text" id="preciodeventau" name="preciodeventa" maxlength="45" required class="form-control input-sm">
    <br/><br/>
    <!--Codigo de barras-->
    <label for="codigodebarras">Codigo de barras:</label>
    <br/>
    <input type="text" id="codigodebarrasu" name="codigodebarras" maxlength="15" required class="form-control input-sm">
    <br/><br/>
    <!--stock caja -->
    <label for="stockcaja">Stock Caja:</label>
    <br/>
    <input type="text" id="stockcajau" name="stockcaja" maxlength="45" required class="form-control input-sm">
    <br/><br/>
    <!-- Cantidad de bolsas por caja -->
    <label for="cantidadbolsasporcaja">Cantidad de bolsas por caja:</label>
    <br/>
    <input type="text" id="cantidadbolsasporcajau" name="cantidadbolsasporcaja" maxlength="15" required class="form-control input-sm">
    <br/><br/>
    <!-- Cantidad de gramos por bolsa -->
    <label for="cantidadgramosporbolsa">Cantidad de gramos por bolsa:</label>
    <br/>
    <input type="text" id="cantidadgramosporbolsau" name="cantidadgramosporbolsa" maxlength="15" required class="form-control input-sm">
    <br/><br>
    <!-- Categoria -->
    <label for="categoria">Categoria:</label>
        <br/>
        <select id="categoriau" name="categoria" required class="form-control input-sm">

            <option value = 1>categoria 1</option>
                
            <option value =2>categoria 2</option>
                
            <option value =3>categoria 3</option>

        </select>
		<br/><br/>
	<!-- Cantidad Maxima -->
	<label for="cantidad_max">Cantidad maxima en stock:</label>
    <br/>
    <input type="text" id="cantidad_maxu" name="cantidad_max" maxlength="15" required class="form-control input-sm">
	<br/><br>
	<!-- Cantidad Minima -->
	<label for="cantidad_min">Cantidad minima en stock:</label>
    <br/>
    <input type="text" id="cantidad_minu" name="cantidad_min" maxlength="15" required class="form-control input-sm">
    <br/><br>
	
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-warning" id="actualizardatos">Actualizar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- modal abrir bolsa -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="modalabrirbolsa" tabindex="-1" role="dialog" aria-labelledby="modalabrirbolsaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalabrirbolsaLabel">Abrir Bolsa:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
      	<!-- cuerpo del modal -->
    <!-- Nombre del producto-->
    <form method="POST"  action="abrirbolsa.php" enctype="multipart/form-data" >
		<label for="nombre_producto">Nombre:</label>
    <br/>
    <input type="text" name="nombre_producto" id="nombre_producto" maxlength="45" required class="form-control input-sm" >
    <br/><br/>
    <!-- cantidad de bolsas -->
    <label for="cantidaddebolsas">Cantidad de bolsas:</label>
    <br/>
    <input type="text"  name="cantidaddebolsas"  required  class="form-control input-sm">
    <br/><br/>
	  
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">No abrir bolsas</button>
        <button type="submit" class="btn btn-primary" id="abrirbolsa">Abrir bolsa</button>
      </div>
</form>
      
      
    </div>
  </div>
</div>
<!-- MODAL PARA MOSTRAR MAX Y MINIMOS -->
<<div class="modal fade" id="modalmaxmin" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3>Maximos y minimos</h3>
           </div>
        <div class="modal-bodymin ">
          <div class="container">
          

            <div class="col-sm-8">
            <h4>Existencias</h4>
            <p>Productos con existencia minima:</p>
            
            <?php
            require_once("checarstockexistenciamin.php");
            ?>
            <p>Productos que estan debajo del minimo:</p>
            
            <?php
            require_once("checarstockdebajodelmin.php");
            ?>
            

          </div>
       

          
         
         
        </div>         
       
       
           <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
           </div>
      
      </div>
   </div>


</body>
</html> 

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
    $('#modalmaxmin').modal('show');

	});
</script>

