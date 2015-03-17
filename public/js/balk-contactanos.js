// Validacion De formulario = Contactanos

$(document).ready(function(){
	  $('#btn_enviar_datos').on('click',function(){

								var $nombre    = $('#nombre_completo').val();  // Nombre Completo
								var $ciudad    = $('#ciudad').val();           // Ciudad
								var $pais      = $('#pais').val();             // Pais
								var $empresa   = $('#empresa').val();          // Empresa
								var $actividad = $('#actividad-empresa').val();// Activida de La Empesa
								var $cargo     = $('#cargo').val();            // Cargo
								var $email     = $('#email').val();            // Email
								var $telefono  = $('#telefono').val();         // Telefono
								var $mensaje   = $('#mensaje').val();          // Mensaje

            if($nombre  == ''){
               $('#msj-validacion-nombre').fadeIn();
               $('#nombre_completo').focus();
               return false;
            }else{
               $('#msj-validacion-nombre').fadeOut();
            }

            if($ciudad  == ''){
               $('#msj-validacion-ciudad').fadeIn();
               $('#ciudad').focus();
               return false;
            }else{
               $('#msj-validacion-ciudad').fadeOut();
            }

            if($pais   == ''){
               $('#msj-validacion-pais').fadeIn();
               $('#pais').focus();
               return false;
            }else{
               $('#msj-validacion-pais').fadeOut();
            }

            if($empresa  == ''){
               $('#msj-validacion-empresa').fadeIn();
               $('#empresa').focus();
               return false;
            }else{
               $('#msj-validacion-empresa').fadeOut();
            }
            if($actividad  == ''){
               $('#msj-validacion-actividad').fadeIn();
               $('#actividad-empresa').focus();
               return false;
            }else{
               $('#msj-validacion-actividad').fadeOut();
            }

            if($cargo  == ''){
               $('#msj-validacion-cargo').fadeIn();
               $('#cargo').focus();
               return false;
            }else{
               $('#msj-validacion-cargo').fadeOut();
            }

            if($email  == ''){
               $('#msj-validacion-email').fadeIn();
               $('#email').focus();
               return false;
            }else{
               $('#msj-validacion-email').fadeOut();
            }

            if($telefono  == ''){
               $('#msj-validacion-telefono').fadeIn();
               $('#telefono').focus();
               return false;
            }else{
               $('#msj-validacion-telefono').fadeOut();
            }

            if($mensaje  == ''){
               $('#msj-validacion-mensaje').fadeIn();
               $('#mensaje').focus();
               return false;
            }else{
               $('#msj-validacion-mensaje').fadeOut();
            }

	  });
});

