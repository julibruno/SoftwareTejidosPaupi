

//ejecutaAlertaOK();

 // Tomar el evento
 document.addEventListener("DOMContentLoaded", function(event) { 
    document.getElementById('Form_Create_UnidMedida').addEventListener('submit',
  Validacion_Create)
  });
  
//Funcion que obtiene el parametro de la URL-- Para mostrar el OK
function obtenerValorParametro(sParametroNombre) {
    var sPaginaURL = window.location.search.substring(1);
     var sURLVariables = sPaginaURL.split('&');
      for (var i = 0; i < sURLVariables.length; i++) {
        var sParametro = sURLVariables[i].split('=');
        if (sParametro[0] == sParametroNombre) {
          //return sParametro[1];
          return true;
        }
      }
     return null;
    }

//Funcion que para ejecutar la alertar del OK 
function ejecutaAlertaOK() {   

    var valor= obtenerValorParametro("OK");
    var valorEdit= obtenerValorParametro("OKEdit");

    if (valor){
        $('#alerta').fadeIn();     
        setTimeout(function() {
            $("#alerta").fadeOut();           
        },2000);
        
      }

      if (valorEdit){
        $('#alertaEdit').fadeIn();     
        setTimeout(function() {
            $("#alertaEdit").fadeOut();           
        },2000);
        
      }

}


//Escribir mensaje de escritura 
function escribir(variableError){
   var mensaje=  "Error! El campo "+ variableError + " se encuentra vacío. Completelo.";
    document.getElementById('alertaError').innerHTML= mensaje;
    }


function ejecutaAlertaError(variableError) {   
    escribir(variableError);

    $('#alertaError').fadeIn();     
    setTimeout(function() {
        $("#alertaError").fadeOut();           
    },20000);
}


//***Validacion de Formulario INSUMOS CREATE***


  // Validacion Fomrulario
  function Validacion_Create(e){
      //Esta linea detiene el envio al POST para validarlo
    e.preventDefault();
    try{
    console.log('Validando formulario Insumos!');
    if(this.querySelector('[name=Descripcion]').value == '') { 
        console.log('La Descripcion esta vacía');
        ejecutaAlertaError("Descripcion");
       // alert("Error! La Descripcion esta vacía, por favor complete el campo")
        return;
      }
      if(this.querySelector('[name=DescripcionAbre]').value == '') { 
        console.log('La DescripcionAbre esta vacía');
        ejecutaAlertaError("Descripcion Abreviada");
        return;
      }

      this.submit();

    }
    catch{
        ejecutaAlertaError();
    }

       
  };

  
//Esto permite el evento del modal para Eliminar
  $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
