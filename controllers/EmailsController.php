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

        $Texto_Correo     =  "NOMBRE : " . $nombre .'<br>';
        $Texto_Correo     = $Texto_Correo . "CIUDAD : " . $ciudad .'<br>';
        $Texto_Correo     = $Texto_Correo . "EMPRESA : ". $empresa .'<br>';
        $Texto_Correo     = $Texto_Correo . "CARGO : ". $cargo .'<br>';
        $Texto_Correo     = $Texto_Correo . "TELÉFONO : " .  $telefono .'<br>';
        $Texto_Correo     = $Texto_Correo . "LÍNEA DE INTERÉS : " . $linea  .'<br>';
        $Texto_Correo     = $Texto_Correo . "TIPO DE MENSAJE : " . $tipo_mensaje .'<br>';
        $Texto_Correo     = $Texto_Correo . "MENSAJE : " .'<br>'.$mensaje .'<br>';


        $this->Configurar_Cuenta("Contacto Usuario Página Bqlquimia");
        $this->Email->AddAddress($Email );

        $this->Email->Body = $Texto_Correo;

        if ( $this->Email->Send())
        {
          $this->Email->clearAddresses();
          echo "correoOK";
        }else
        {
         echo "correo_No_OK";
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
									$this->Email->Username    = CORREO;								// GMAIL username
									$this->Email->Password    = CORREO_PASS;            	 					// GMAIL password
									$this->Email->From        = '';
									$this->Email->FromName    = '';
									$this->Email->Subject     = $asunto;
									$this->Email->AltBody     = ""; //Text Body
									$this->Email->WordWrap    = 50; // set word wrap																// send as HTML
      }




    }
?>
