<?php

  class EmpresaController extends Controller
  {
      public function __construct()
      {
          parent::__construct();
          $this->Productos = $this->Load_Model('Productos');
          $this->Email     = $this->Load_Controller('Emails');
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

    public function enviar_correo() {

      $Texto_Respuesta ='';
      $nombre          = General_Functions::Validar_Entrada('nombre','TEXT');
      $ciudad          = General_Functions::Validar_Entrada('ciudad','TEXT');
      $empresa         = General_Functions::Validar_Entrada('empresa','TEXT');
      $cargo           = General_Functions::Validar_Entrada('cargo','TEXT');
      $Email           = General_Functions::Validar_Entrada('email','TEXT');
      $Email_Ok        = General_Functions::Validar_Entrada('email','EMAIL');
      $telefono        = General_Functions::Validar_Entrada('telefono','TEXT');
      $mensaje         = General_Functions::Validar_Entrada('mensaje','TEXT');
      $linea           = General_Functions::Validar_Entrada('linea','TEXT');
      $tipo_mensaje    = General_Functions::Validar_Entrada('tipo_mensaje','TEXT');



      if ( strlen($nombre) == 0){
        $Texto_Respuesta ='Debe registrar el nombre de la persona que envía el correo.';
      }

      if ( $Email_Ok == false){
        $Texto_Respuesta =$Texto_Respuesta .'Dirección de correo no tiene un formato válido.';
      }
      if ( strlen($telefono) == 0 ) {
        $Texto_Respuesta =$Texto_Respuesta .'Número de teléfono no válido.';
      }
      if ( strlen($linea) == 0 || $linea == 'Seleccione...') {
        $Texto_Respuesta =$Texto_Respuesta .'Indíquenos cuál es su línea de interés.';
      }

      if ( strlen($tipo_mensaje) == 0 || $tipo_mensaje == 'Seleccione...') {
        $Texto_Respuesta =$Texto_Respuesta .'Indíquenos cuál es el tipo de mensaje.';
      }

      if ( strlen($mensaje) == 0 || $mensaje == 'Seleccione...') {
        $Texto_Respuesta =$Texto_Respuesta .'Indíquenos cuál es el mensaje que desea enviar.';
      }

      if ( strlen($Texto_Respuesta) > 0 ) {
        echo $Texto_Respuesta;
      }else{
        echo "enviando";
        $Parametros = compact('nombre','ciudad','empresa','cargo','Email','telefono','mensaje','linea','tipo_mensaje');
        $this->Email->Enviar_Correo_Contacto($Parametros);
      }

    }

  }
?>
