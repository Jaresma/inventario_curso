<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Verificacion alta producto</title>
        <!-- <meta HTTP-EQUIV="refresh" content="1; URL=veralmacen.php"> -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
     
	  <h1>Verificacion actualizacion de producto</h1>
	  <?php 


	if(isset($_POST['nombre'] )and $_POST['nombre']!=""){
		$id=$_POST['idproductos'];
		$nombre=$_POST['nombre'];
		$descripcion=$_POST['descripcion'];
		$precio_entrada=$_POST['preciodecompra'];
		$precio_salida=$_POST['preciodeventa'];
		$codigo_barras=$_POST['codigodebarras'];
		$stock=$_POST['stockcaja'];
		$estado=$_POST['estado'];
		$stock_piso=$_POST['cantidadbolsasporcaja'];
		$gramosxbolsa=$_POST['cantidadgramosporbolsa'];
		$cantidad_max=$_POST['cantidad_max'];
		$cantidad_min=$_POST['cantidad_min'];
		$CATEGORIA_PRODUCTOS_idCATEGORIA_PRODUCTOS=$_POST['categoria'];
		
		
		
		




		$conexion=mysqli_connect('localhost','root','','inventario_curso');
		
		$sql = "UPDATE productos SET  name = '$nombre',
									descripcion ='$descripcion',
									precio_entrada='$precio_entrada',
									precio_salida = '$precio_salida',
									codigo_barras = '$codigo_barras',
									stock= '$stock',
									estado = '$estado',
									stock_piso = '$stock_piso',
									gramosxbolsa = '$gramosxbolsa',
									cantidad_max = '$cantidad_max',
									cantidad_min = '$cantidad_min',
									CATEGORIA_PRODUCTOS_idCATEGORIA_PRODUCTOS='$CATEGORIA_PRODUCTOS_idCATEGORIA_PRODUCTOS' 
									where idproductos ='$id'"; 
		if (mysqli_query($conexion, $sql)) {
			echo "Producto Actualizado";
		} else {
			echo "datos no validos";
			echo "Error: " . $sql . "<br>" . mysqli_error($conexion);

		}
		
		mysqli_close($conexion);

		
	
	   
	}


 ?>
    

      
    
</body>
</html>





