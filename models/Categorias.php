<?php
		class CategoriasModel extends Model
		{
				public $Cantidad_Registros;

				public function __construct()
				{
					parent::__construct();
				}

				public function Consultar()
				{
					$Categorias = $this->Db->Ejecutar_Sp("balquimia_categorias_listar_activas()");
					return 	$Categorias;
				}


  }
?>
