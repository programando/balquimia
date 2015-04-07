<?php
		class ProductosModel extends Model
		{
				public $Cantidad_Registros;

				public function __construct()
				{
					parent::__construct();
				}

				public function Categorias_Consultar()
				{
					$Categorias = $this->Db->Ejecutar_Sp("balquimia_categorias_listar_activas()");
					return 	$Categorias;
				}

				public function SubCategorias_Consultar()
				{
					$SubCategorias = $this->Db->Ejecutar_Sp("balquimia_subcategorias_listado_general_activas()");
					return 	$SubCategorias;
				}

				public function Productos_x_Categoria($idcategoria)
				{
					$Productos = $this->Db->Ejecutar_Sp("balquimia_productos_x_categoria($idcategoria)");
					return 	$Productos;
				}


				public function Productos_x_SubCategoria($id_subcategoria)
				{
					$Productos = $this->Db->Ejecutar_Sp("balquimia_productos_x_id_subcategoria($id_subcategoria)");
					return 	$Productos;
				}





  }
?>
