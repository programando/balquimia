// Validacion De formulario = Contactanos

var $nombre       = $('#nombre_completo');  // Nombre Completo
var $ciudad       = $('#ciudad');           // Ciudad
var $pais         = $('#pais');             // Pais
var $empresa      = $('#empresa');          // Empresa
var $actividad    = $('#actividad-empresa');// Activida de La Empesa
var $cargo        = $('#cargo');            // Cargo
var $email        = $('#email');            // Email
var $telefono     = $('#telefono');         // Telefono
var $mensaje      = $('#mensaje');          // Mensaje
var $linea        = $('#linea');
var $tipo_mensaje = $('#tipo_mensaje');
var $mensaje      = $('#mensaje');



$nombre.on('focus',function(){
  if ( $nombre.val() == 'Registre el nombre') {
     $nombre.css('background','white') ;
     $nombre.css('color','black') ;
     $nombre.val('');
  }
});


$email.on('focus',function(){
   if ( $email.val() == 'Registre el email')
   {
     $email.css('background','white') ;
     $email.css('color','black') ;
     $email.val('');
   }
});

$telefono.on('focus',function(){
   if ( $telefono.val() == 'Registre número telefónico' ) {
     $telefono.css('background','white') ;
     $telefono.css('color','black') ;
     $telefono.val('');
   }
});

$linea.on('focus',function(){
     $linea.css('background','white') ;
     $linea.css('color','black') ;
     $linea.val('');
});

$tipo_mensaje.on('focus',function(){
     $tipo_mensaje.css('background','white') ;
     $tipo_mensaje.css('color','black') ;
     $tipo_mensaje.val('');
});

$mensaje.on('focus',function(){
   if ( $mensaje.val() == 'Registre el mensaje que desea enviar' ) {
     $mensaje.css('background','white') ;
     $mensaje.css('color','black') ;
     $mensaje.val('');
   }
});





$('#btn_enviar_datos').on('click',function()
{
   if ( $nombre.val()=='' ) {
        $nombre.css('background','#FF3333') ;
        $nombre.css('color','white') ;
        $nombre.val('Registre el nombre');
   }
   if ( $email.val()=='' ) {
        $email.css('background','#FF3333') ;
        $email.css('color','white') ;
        $email.val('Registre el email');
   }

   if ( $telefono .val() == '') {
        $telefono.css('background','#FF3333') ;
        $telefono.css('color','white') ;
        $telefono.val('Registre número telefónico');
   }
    if ( $linea.val() == "Seleccione..." ){
         $linea.css('background','#FF3333') ;
         $linea.css('color','white') ;
    }

    if ( $tipo_mensaje.val() == "Seleccione..." ){
         $tipo_mensaje.css('background','#FF3333') ;
         $tipo_mensaje.css('color','white') ;
   }

    if ( $mensaje.val() == '' ){
         $mensaje.css('background','#FF3333') ;
         $mensaje.css('color','white') ;
         $mensaje.val('Registre el mensaje que desea enviar');
   }





});


