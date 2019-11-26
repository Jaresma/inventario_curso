<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$nombre=$_POST['nombre'];
	$descripcion=$_POST['apellido'];
	$precio_compra=$_POST['email'];
	$precio_venta=$_POST['telefono'];
	$codigo_barras=$_POST['codigo_barras'];
	$estado=$_POST['estado'];;
	$stock=$_POST['stock'];
	$bolsasxcaja=$_POST['bolsasxcaja'];
	$gramosxbolsa=$_POST['gramosxbolsa'];
	$cantidad_max=$_POST['cantidad_max'];
	$cantidad_min=$_POST['cantidad_min'];
	$categoria=$_POST['id_categoria'];


	$sql="INSERT into productos (name,descripcion,precio_entrada,precio_salida,codigo_barras,stock,estado,bolsasxcaja,
	gramosxbolsa,cantidad_max,cantidad_min,CATEGORIA_PRODUCTOS_idCATEGORIA_PRODUCTOS)
	values ('$nombre','$descripcion','$precio_compra','$precio_venta','$codigo_barras','$estado','$stock','$bolsasxcaja','$gramosxbolsa','$cantidad_max','$cantidad_min','$categoria')";
	echo $result=mysqli_query($conexion,$sql);
	echo "Error: " . $sql . "<br>" . mysqli_error($conexion);

	

 ?>