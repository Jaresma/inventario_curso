<?php

   require_once("class/config.php");

   if(isset($_SESSION["backend_id"])){
   
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php require_once("head.php");?>

</head>
<body>
     
     <div class="container-fluid">
     	
     	<?php require_once("menu_principal.php");?>

     	<div class="container-fluid">
     		<div class="row">
     			  <div class="col-sm-3">
     				
     				<?php require_once("menu_lateral.php");?>
     			  </div>

     			<div class="col-sm-8">
     				
     				<h2>Sistema Integral Susi</h2>
     				<p class="justify">
						 Bienvenido dulceria susi le desea buen dia 
						 Nota:Cualquier inconveniente contactar al administrador
					 </p>
     			</div>
     		</div><!--row-->
     	</div><!--container-->

     </div><!--container-fluid-->
    
</body>
</html>

<?php
  } else {

  	 header("Location:index.php");
  }
?>