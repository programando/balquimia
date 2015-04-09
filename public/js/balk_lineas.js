
$('.contenido_interno').on('click','.producto',function(){
		$idproducto = $(this).attr('id');
		Parametros = {'idproducto':$idproducto };
		Buscar_Informacion_Producto(Parametros);
})

$('.titulos_panel').on('click',function(){
		$idcategoria = $(this).attr('idcategoria');
		Parametros   = {'idcategoria':$idcategoria};
		Mostrar_Productos_x_Categoria(Parametros );

});

$('.list-productos').on('click',function(){
			$idsubcategoria  =  $(this).attr('idsubcategoria');
			$idcategoria     =  $(this).attr('idcategoria');
			$nomsubcategoria =  $(this).attr('nomsubcategoria');
			Parametros       = {'idcategoria':$idcategoria, 'idsubcategoria':$idsubcategoria, 'nomsubcategoria':$nomsubcategoria};
		 Mostrar_Productos_x_Sub_Categoria(Parametros);
});

function Buscar_Informacion_Producto (Parametros)
{
			$.ajax({
					data:  Parametros,
					dataType: 'html',
					url:      '/balquimia/productos/buscar_producto/',
					type:     'post',
     success:  function (resultado)
    	 {
    	 		$('.contenido-descripcion').html('');
    	 		$('.contenido-descripcion').html(resultado);
    	 }
					});
}

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

