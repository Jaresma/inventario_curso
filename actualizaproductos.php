





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
		$bolsasxcaja=$_POST['cantidadbolsasporcaja'];
		$gramosxbolsa=$_POST['cantidadgramosporbolsa'];
		$cantidad_max=$_POST['cantidad_max'];
		$cantidad_min=$_POST['cantidad_max'];
		$CATEGORIA_PRODUCTOS_idCATEGORIA_PRODUCTOS=$_POST['categoria'];
		
		
		
		




		$conexion=mysqli_connect('localhost','root','','inventario_curso');
		
		$sql = "UPDATE productos SET  name = '$nombre',
									descripcion ='$descripcion',
									precio_entrada='$precio_entrada',
									precio_salida = '$precio_salida',
									codigo_barras = '$codigo_barras',
									stock= '$stock',
									estado = '$estado',
									bolsasxcaja = '$bolsasxcaja',
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