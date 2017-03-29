<?php

  class ProductosController extends Controller
  {
      public function __construct()
      {
          parent::__construct();
          $this->Productos = $this->Load_Model('Productos');
      }

    public function Index(){}


    public function buscar_producto()
    {/**  ABRIL 06 DE 2015
      *       INICIA LA PRESENTACION DE PRODUCTOS EN CADA UNA DE LAS CATEGORIAS. MUESTRA INICIALMENTE, LOS PRODUCTOS DE ALIMENTARIA
      */
        $idproducto                              = General_Functions::Validar_Entrada('idproducto','TEXT');
        $Producto = $this->Productos->Productos_x_Buscar_por_NomProducto($idproducto );
        $this->View->NombreProducto              = $Producto[0]['nomproducto'];
        $this->View->Descripcion_Producto        = $Producto[0]['descripcion'];
        $this->View->idproducto                  = $idproducto;
        $this->View->Inactivo                    = $Producto[0]['inactivo'];
        $this->View->Mostrar_Vista_Parcial('descripcion_producto');
      }


   /* public function linea_producto_vista()
    {/**  ABRIL 06 DE 2015
             INICIA LA PRESENTACION DE PRODUCTOS EN CADA UNA DE LAS CATEGORIAS. MUESTRA INICIALMENTE, LOS PRODUCTOS DE ALIMENTARIA

        $idcategoria                    = General_Functions::Validar_Entrada('idcategoria','NUM');
        $this->View->Categorias         = $this->Productos->Categorias_Consultar();
        $this->View->SubCategorias      = $this->Productos->SubCategorias_Consultar();
        $this->View->Texto_SubCategoria ='Todos los Productos';

        $this->View->SetCss(array('balk-linea_productos','balk_linea_porducto_vista','balk_estilos_generales'));
        $this->View->SetJs(array('balk_velocidad_slider','balk_lineas'));

        if ($idcategoria == null or empty($idcategoria ))
        {
          $idcategoria                 = 5;// Consultar productos de alimentaria, primera categoria.
          $this->View->Productos       = $this->Productos->Productos_x_Categoria($idcategoria);
          $this->View->Imagen_Cabecera = $idcategoria.'.png';
          $this->View->Mostrar_Vista('linea_porducto_vista');

        }else
        {
          $this->View->Productos       = $this->Productos->Productos_x_Categoria($idcategoria);
          $this->View->Imagen_Cabecera = $idcategoria.'.png';
          $this->View->Mostrar_Vista_Parcial('linea_porducto_vista_parcial');
        }
    }
*/


    public function productos_por_categoria($idcategoria)
    {/**  ABRIL 06 DE 2015
      *       INICIA LA PRESENTACION DE PRODUCTOS EN CADA UNA DE LAS CATEGORIAS. MUESTRA INICIALMENTE, LOS PRODUCTOS DE ALIMENTARIA
      */
        $this->View->Texto_SubCategoria ='Todos los Productos';
        $this->View->Categorias         = $this->Productos->Categorias_Consultar();
        $this->View->SubCategorias      = $this->Productos->SubCategorias_Consultar();
        $this->View->Productos          = $this->Productos->Productos_x_Categoria($idcategoria);
        $this->View->Imagen_Cabecera    = $idcategoria.'.png';

        $this->View->SetCss(array('balk-linea_productos','balk_linea_porducto_vista','balk_estilos_generales'));
        $this->View->SetJs(array('balk_velocidad_slider','balk_lineas'));
        $this->View->Mostrar_Vista('linea_porducto_vista');
    }


    public function productos_por_categoria_ajax()
    {/**  ABRIL 06 DE 2015
      *       INICIA LA PRESENTACION DE PRODUCTOS EN CADA UNA DE LAS CATEGORIAS. MUESTRA INICIALMENTE, LOS PRODUCTOS DE ALIMENTARIA
      */
        $idcategoria                    = General_Functions::Validar_Entrada('idcategoria','NUM');
        $this->View->Texto_SubCategoria ='Todos los Productos';
        $this->View->Categorias         = $this->Productos->Categorias_Consultar();
        $this->View->SubCategorias      = $this->Productos->SubCategorias_Consultar();
        $this->View->Productos          = $this->Productos->Productos_x_Categoria($idcategoria);
        $this->View->Imagen_Cabecera    = $idcategoria.'.png';

        $this->View->SetCss(array('balk-linea_productos','balk_linea_porducto_vista','balk_estilos_generales'));
        $this->View->SetJs(array('balk_velocidad_slider','balk_lineas'));
        $this->View->Mostrar_Vista_Parcial('linea_porducto_vista_parcial');
    }


    public function productos_subcategorias()
    {
      $idcategoria                    = General_Functions::Validar_Entrada('idcategoria','NUM');
      $idsubcategoria                 = General_Functions::Validar_Entrada('idsubcategoria','NUM');
      $nomsubcategoria                = General_Functions::Validar_Entrada('nomsubcategoria','TEXT');
      $this->View->Texto_SubCategoria = $nomsubcategoria ;
      $this->View->Imagen_Cabecera    = $idcategoria.'.png';
      $this->View->Productos          = $this->Productos->Productos_x_SubCategoria($idsubcategoria);
      $this->View->SetCss(array('balk-linea_productos','balk_linea_porducto_vista','balk_estilos_generales'));
      $this->View->SetJs(array('balk_velocidad_slider','balk_lineas'));

      $this->View->Mostrar_Vista_Parcial('linea_porducto_vista_parcial');
    }

    public function productos_para_hogar()
     {

       $this->View->SetCss(array('balk_productos_hogar','balk_estilos_generales'));
       $this->View->SetJs(array('balk_velocidad_slider'));
       $this->View->Mostrar_Vista('productos_hogar');
     }

    public function linea_de_productos()
     {

       $this->View->SetCss(array('balk-linea_productos','balk_estilos_generales'));
       $this->View->SetJs(array('balk_velocidad_slider'));
       $this->View->Mostrar_Vista('linea_productos');
     }


}

