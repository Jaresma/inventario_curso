

<?php
 $conexion=mysqli_connect('localhost','root','','inventario_curso');

$sql="SELECT stock,cantidad_min,name FROM productos";
$resproductos = $conexion -> query($sql);
while($ver= $resproductos -> fetch_array(MYSQLI_BOTH)){
$stock=$ver[0];
$cantidad_min=$ver[1];
$nombre_producto=$ver[2];



if($stock==$cantidad_min){
	echo $nombre_producto;
	echo "<br>";
	


}
}
?>