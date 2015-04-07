
$('.titulos_panel').on('click',function(){
		$idcategoria = $(this).attr('idcategoria');
		Parametros   = {'idcategoria':$idcategoria};
		Mostrar_Productos_x_Categoria(Parametros );

});

$('.list-productos').on('click',function(){
			$idsubcategoria = $(this).attr('idsubcategoria');
			$idcategoria    = $(this).attr('idcategoria');
			Parametros      = {'idcategoria':$idcategoria, 'idsubcategoria':$idsubcategoria};
		 Mostrar_Productos_x_Sub_Categoria(Parametros);
});

function Mostrar_Productos_x_Categoria(Parametros)
{
		$.ajax({
					data:  Parametros,
					dataType: 'html',
					url:      '/balquimia/productos/linea_producto_vista/',
					type:     'post',
     success:  function (resultado)
    	 {
    	 		$('.contenido_interno').html('');
    	 		$('.contenido_interno').html(resultado);
    	 }
					});
	}

	function Mostrar_Productos_x_Sub_Categoria(Parametros)
{
		$.ajax({
					data:  Parametros,
					dataType: 'html',
					url:      '/balquimia/productos/productos_subcategorias/',
					type:     'post',
     success:  function (resultado)
    	 {
    	 		$('.contenido_interno').html('');
    	 		$('.contenido_interno').html(resultado);
    	 }
					});
	}

