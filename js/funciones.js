

function agregaform(datos){

	d=datos.split('||');

	$('#idproductos').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#descripcionu').val(d[2]);
	$('#preciodecomprau').val(d[3]);
	$('#preciodeventau').val(d[4]);
	$('#codigodebarrasu').val(d[5]);
	$('#stockcajau').val(d[6]);
	$('#estadou').val(d[7])
	$('#cantidadbolsasporcajau').val(d[8]);
	$('#cantidadgramosporbolsau').val(d[9]);
	$('#cantidad_maxu').val(d[10]);
	$('#cantidad_minu').val(d[11]);
	$('#categoriau').val(12);
	
}

 
function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
} 