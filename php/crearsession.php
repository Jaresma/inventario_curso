<?php 
	session_start();

	$idproductos=$_POST['valor'];

	$_SESSION['consulta']=$idproductos;

	echo $idproductos;

 ?>