<?php
/**
 * SEPT 10 DE 2014
 * ARCHIVO DE CONFIGURACION DEL APLICATIVO. SE CARGA DESDE EL INICIO
 * 200.116.68.68/cripack
 */

	//define('BASE_URL',               'http://http://entreamigosalcanzamos.com/tron/');



	define('BASE_URL',               'http://localhost/balquimia/');
	define('DEFAULT_CONTROLLER',     'index');
	define('DEFAULT_METHOD',         'index');
	define('DEFAULT_LAYOUT',         'default');

	define('BASE_CSS',         	  		  			 BASE_URL .'public/css/');
	define('BASE_JS',         	  			 		 	 BASE_URL .'public/js/');
	define('BASE_JQUERY_UI',         				 BASE_URL .'public/jqueryUI.1.11.2/');
	define('BASE_POLLYFILLS',         			 BASE_URL .'public/pollyfils/');

 define('BASE_APPLICATION_CODES',      BASE_URL .'application_codes/');								// Archivos que complementan ciertas partes de código

 define('BASE_IMG',         			 						      BASE_URL .'public/images/');
 define('BASE_IMG_SLIDER',         			      BASE_URL .'public/images/slider/');
	define('BASE_IMG_EMPRESA',        			      BASE_URL .'public/images/empresa/');
	define('BASE_IMG_SLIDER_NUESTRA_EMPRESA',  BASE_URL .'public/images/slider_nuestra_empresa/');
	define('BASE_IMG_DESARROLLO_PRODUCT',      BASE_URL .'public/images/slider_desarrollo_produc/');
 define('BASE_IMG_PRODUCTOS',               BASE_URL .'public/images/linea_prductos/');
 define('BASE_IMG_CONTROL_CALIDAD',         BASE_URL .'public/images/slider_control_calidad/');
 define('BASE_IMG_SERVICIOS',               BASE_URL .'public/images/nuestros_servicios/');
 define('BASE_IMG_CLIENTES',                BASE_URL .'public/images/nuestros_clientes/');
 define('BASE_IMG_CONTACTANOS',             BASE_URL .'public/images/contactanos/');



 define('TOKEN_PASSWORDS'		 		      , 					      '.;09\87nh52*/-!°#%FV&');

 define('BASE_EMAILS'               , 	BASE_URL.'templates/emails/');



 define('DEVELOPMENT_ENVIRONMENT', true);
	define('APP_NAME',               'Balquimia');
	define('APP_SLOGAN',             'Productos de Aseo Industrial');
	define('APP_COMPANY',            'http://www.balquimia.com');
	define('SESSION_TIME',            0); // Tiempo dado en minutos, CERO = SESIÓN INDEFI, value, case_insensitive






?>
