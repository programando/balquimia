<?php

  class EmpresaController extends Controller
  {
      public function __construct()
      {
          parent::__construct();
          $this->Productos = $this->Load_Model('Productos');
      }
    public function Index()
    {
    }

     public function nuestra_empresa()
     {
       $this->View->SetCss(array('balk-nuestra_empresa','balk_estilos_generales'));
       $this->View->SetJs(array('balk_velocidad_slider'));
       $this->View->Mostrar_Vista('nuestra_empresa');
     }

     public function desarrollo_de_productos()
     {
       $this->View->SetCss(array('balk_desarrollo_productos','balk_estilos_generales'));
       $this->View->SetJs(array('balk_velocidad_slider'));
       $this->View->Mostrar_Vista('desarrollo_productos');
     }





    public function contro_de_calidad()
    {
        $this->View->SetCss(array('balk-control_calidad','balk_estilos_generales'));
        $this->View->SetJs(array('balk_velocidad_slider'));
        $this->View->Mostrar_Vista('control_calidad');
    }

    public function nuestros_servicios()
    {
        $this->View->SetCss(array('balk-nuestro_servicios','balk_estilos_generales'));
        $this->View->Mostrar_Vista('nuestro_servicios');
    }

    public function nuestros_clientes()
    {
        $this->View->SetCss(array('balk-nuestros_clientes','balk_estilos_generales'));
        $this->View->Mostrar_Vista('nuestros_clientes');
    }

    public function contactanos()
    {
        $this->View->Categorias = $this->Productos->Categorias_Consultar();
        $this->View->SetCss(array('balk-contactenos','balk_estilos_generales'));
        $this->View->SetJs(array('balk-contactanos'));
        $this->View->Mostrar_Vista('contactenos');
    }

  }
?>
