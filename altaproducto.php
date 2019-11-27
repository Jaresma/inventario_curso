<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Verificacion alta producto</title>
        <!-- <meta HTTP-EQUIV="refresh" content="5; URL=index.php"> -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
     
      <h1>Verificacion alta de producto</h1>
    <?php
        if(isset($_POST['nombre'] )and $_POST['nombre']!=""){
            $nombre=$_POST['nombre'];
            $img=base64_encode(file_get_contents($_FILES['imagen']['tmp_name']));
            $descripcion=$_POST['descripcion'];
            $precio_entrada=$_POST['preciodecompra'];
            $precio_salida=$_POST['preciodeventa'];
            $codigo_barras=$_POST['codigodebarras'];
            $stock=$_POST['stockcaja'];
            $estado=1;
            $bolsasxcaja=$_POST['cantidadbolsasporcaja'];
            $gramosxbolsa=$_POST['cantidadgramosporbolsa'];
			$cantidad_max=$_POST['cantidad_max'];
			$cantidad_min=$_POST['cantidad_max'];
            $CATEGORIA_PRODUCTOS_idCATEGORIA_PRODUCTOS=$_POST['categoria'];
			
			
            
            




            $conexion=mysqli_connect('localhost','root','','inventario_curso');
            
            $sql = "INSERT INTO productos (name,img,descripcion,precio_entrada,precio_salida,codigo_barras,stock,estado,bolsasxcaja,gramosxbolsa,cantidad_max,cantidad_min,CATEGORIA_PRODUCTOS_idCATEGORIA_PRODUCTOS) 
            VALUES ('$nombre','$img','$descripcion','$precio_entrada','$precio_salida','$codigo_barras','$stock','$estado','$bolsasxcaja','$gramosxbolsa','$cantidad_max','$cantidad_min','$CATEGORIA_PRODUCTOS_idCATEGORIA_PRODUCTOS')";
            if (mysqli_query($conexion, $sql)) {
                echo "Nuevo Producto Registrado";
            } else {
                echo "datos no validos";
                echo "Error: " . $sql . "<br>" . mysqli_error($conexion);

            }
            if($img==""){
                echo "<br> no se agrego imagen";
            }
            mysqli_close($conexion);

            
        
           
        }

        ?>

      
    
</body>
</html>