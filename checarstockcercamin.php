
<?php
 $conexion=mysqli_connect('localhost','root','','inventario_curso');

$sql="SELECT stock,cantidad_min,name,cantidad_max FROM productos";
$resproductos = $conexion -> query($sql);
while($ver= $resproductos -> fetch_array(MYSQLI_BOTH)){
$stock=$ver[0];
$cantidad_min=$ver[1];
$nombre_producto=$ver[2];
$cantidad_max=$ver[3];



	





if($stock>$cantidad_min+2 and $stock<($cantidad_max/2)){
	
    echo $nombre_producto;
    echo "<br>";
	
}
}
?>