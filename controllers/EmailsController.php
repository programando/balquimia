<?php

  class EmailsController extends Controller
  {
  	  private $Email ;

      public function __construct()
      {
          parent::__construct();
          $this->Email    = $this->Load_External_Library('class.phpmailer');
          $this->Email    = new PHPMailer();

      }

      public function Index() { }



      /**
       *
       */
      public function Enviar_Correo_Contacto($Parametros = array()  )
      {
       extract($Parametros);

    /*
      $nombre          = General_Functions::Validar_Entrada('nombre','TEXT');
      $ciudad          = General_Functions::Validar_Entrada('ciudad','TEXT');
      $empresa         = General_Functions::Validar_Entrada('empresa','TEXT');
      $actividad       = General_Functions::Validar_Entrada('actividad','TEXT');
      $cargo           = General_Functions::Validar_Entrada('cargo','TEXT');
      $Email           = General_Functions::Validar_Entrada('email_amigo','TEXT');
      $Email_Ok        = General_Functions::Validar_Entrada('email_amigo','EMAIL');
      $telefono        = General_Functions::Validar_Entrada('telefono','TEXT');
      $mensaje         = General_Functions::Validar_Entrada('mensaje','TEXT');
      $linea           = General_Functions::Validar_Entrada('linea','TEXT');
      $tipo_mensaje    = General_Functions::Validar_Entrada('tipo_mensaje','TEXT');
      */

        $Texto_Correo     = str_replace(" #Pie_Pagina#"    , $Pie_Pagina  ,$Texto_Correo);

        $this->Configurar_Cuenta('Recomendación de ' .$Nombre_Quien_Envia );
        $this->Email->AddAddress($Email_Amigo );

        $this->Email->Body = $Texto_Correo;

        if ( $this->Email->Send())
        {
          $this->Email->clearAddresses();
          return "correoOK";
        }else
        {
         return "correo_No_OK";
        }

      }


      private function Configurar_Cuenta($asunto)
      {
      		/** ENERO 30 DE 2015
      		*		 ESTABLECE LA CONFIGURACIÓN PARA EL ENVÍO DE CORREOS ELECTRÓNICOS
      		*/
									$this->Email->IsSMTP();
                  //$this->Email->SMTPDebug = 2;
									$this->Email->SMTPAuth    = true;
									$this->Email->IsHTML      = true;              								// enable SMTP authentication
									$this->Email->ContentType = "text/html";
									$this->Email->CharSet     = "utf-8";
									$this->Email->SMTPSecure  = 'ssl';                            // sets the prefix to the servier
									$this->Email->Host        = 'smtp.gmail.com';      				 		// sets GMAIL as the SMTP server
									$this->Email->Port        = '465';                              // set the SMTP port
									$this->Email->Username    = CORREO_01;								// GMAIL username
									$this->Email->Password    = CORREO_01_PASS;            	 					// GMAIL password
									$this->Email->From        = '';
									$this->Email->FromName    = '';
									$this->Email->Subject     = $asunto;
									$this->Email->AltBody     = ""; //Text Body
									$this->Email->WordWrap    = 50; // set word wrap																// send as HTML
      }




    }
?>
