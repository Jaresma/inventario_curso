


<?php
$nombre_producto=$_POST['nombre_producto'];
$bolsasabiertas=$_POST['cantidaddebolsas'];
$stocknuevo=0;
$gramosasumar=0;



$sql="SELECT stock,gramosxbolsa from productos where name='$nombre_producto'";
$conexion=mysqli_connect('localhost','root','','inventario_curso');
$resproductos = $conexion -> query($sql);
$recuperar= $resproductos -> fetch_array(MYSQLI_BOTH);
if($recuperar[0]>=$bolsasabiertas){
    if($recuperar[0]>0){
        /* se actualiza el stock del producto que abrimos bolsas */
        $stocknuevo=$recuperar[0]-$bolsasabiertas;
        $gramosasumar=$recuperar[1]*$bolsasabiertas;
        $sql="UPDATE productos SET stock ='$stocknuevo' where name='$nombre_producto'";
    
        if (mysqli_query($conexion, $sql)) {
            echo "Se desconto las bolsas del producto: ".$nombre_producto;
            echo "<br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
        
      /* actualizo stock del produto a granel  */
        $sql="SELECT stock from productos where name = 'granel'";
        
        $resproductos = $conexion -> query($sql);
        $recuperar= $resproductos -> fetch_array(MYSQLI_BOTH);
        
        $gramosasumar=$recuperar[0]+$gramosasumar;
      /*  */
    
        $sql="UPDATE productos SET stock ='$gramosasumar' where name='granel'";
        if (mysqli_query($conexion, $sql)) {
            echo "se sumo a granel :".$nombre_producto;
            echo "<br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
    
        
        
    
    
    }else{
        echo "El stock de ".$nombre_producto." esta agotado";
    }

}else{
    echo "El valor de las bolsas a abrir es mayor que el stock WARNING ????? REVISAR VENTAS O ACTUALIZAR PRODUCTOS";
}



?>