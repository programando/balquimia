<?php

  class ProductosController extends Controller
  {
      public function __construct()
      {
          parent::__construct();
          $this->Productos = $this->Load_Model('Productos');
      }

    public function Index(){}


    public function linea_producto_vista()
    {/**  ABRIL 06 DE 2015
      *       INICIA LA PRESENTACION DE PRODUCTOS EN CADA UNA DE LAS CATEGORIAS. MUESTRA INICIALMENTE, LOS PRODUCTOS DE ALIMENTARIA
      */
        $this->View->Categorias    = $this->Productos->Categorias_Consultar();
        $this->View->SubCategorias = $this->Productos->SubCategorias_Consultar();
        $this->View->Productos     = $this->Productos->Productos_x_SubCategoria(3);  // Consultar productos de alimentaria, primera categoria.
        $this->View->SetCss(array('balk-linea_productos','balk_linea_porducto_vista','balk_estilos_generales'));
        $this->View->SetJs(array('balk_velocidad_slider'));
        $this->View->Mostrar_Vista('linea_porducto_vista');
    }


    public function linea_de_productos()
     {
       $this->View->SetCss(array('balk-linea_productos','balk_estilos_generales'));
       $this->View->SetJs(array('balk_velocidad_slider'));
       $this->View->Mostrar_Vista('linea_productos');
     }


}

