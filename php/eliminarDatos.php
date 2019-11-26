
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from productos where idproductos = '$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>