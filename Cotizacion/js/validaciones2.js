$(document).ready(function(){

     $(".solo_numeros").on("keyup",function(){
          this.value = this.value.replace(/[^0-9]/g,'');
     });


});

function valor_Total()
{
     var cantidad = document.getElementById('Metros_Cubicos').value;
     var valor = document.getElementById('Valor_Metro').value;

     
     document.getElementById('Iva').value=(cantidad*valor)*(0.19);
     document.getElementById('Valor_Total').value=(cantidad*valor)*(1.19);
     

}


$(document).ready(function() {
     $("#FrmEditarCotizacion").submit(function(event){
          event.preventDefault();

          let validado=0;

          if ($("#IdEmpresa").val() == 0) {

               $("#validacion_empresa").text("*");
               $("#validacion_empresa2").text("Debe Seleccionar una Empresa");
          }else{

               $("#validacion_empresa").text("");
               $("#validacion_empresa2").text("");
               validado++;
          }
          if ($("#Estado").val().length == 0) {

               $("#validacion_Estado").text("*");
               $("#validacion_Estado2").text("Debe Seleccionar un Estado");
          }else{
               $("#validacion_Estado").text("");
               $("#validacion_Estado2").text("");
               validado++;
          }

          if ($("#Metros_Cubicos").val() == 0) {

               $("#validacion_MetrosCubicos").text("*");
               $("#validacion_MetrosCubicos2").text("Debe Digitar la cantidad de Metros Cubicos");
          }else{
               $("#validacion_MetrosCubicos").text("");
               $("#validacion_MetrosCubicos2").text("");
               validado++;
          }

          if ($("#Valor_Metro").val() == 0) {
               $("#validacion_ValorMetro").text("*");
               $("#validacion_ValorMetro2").text("Debe Digitar el valor del MetrosCubico");
          }else{
               $("#validacion_ValorMetro").text("");
               $("#validacion_ValorMetro2").text("");
               validado++;
          }

          if ($("#Iva").val() == 0) {
               $("#validacion_Iva").text("*");
               $("#validacion_Iva2").text("El IVA debe tener un valor");
          }else{
               $("#validacion_Iva").text("");
               $("#validacion_Iva2").text("");
               validado++;
          }

          if ($("#Valor_Total").val() == 0) {
               $("#validacion_ValorTotal").text("*");
               $("#validacion_ValorTotal2").text("El Valor Total debe tener un valor");
          }else{
               $("#validacion_ValorTotal").text("");
               $("#validacion_ValorTotal2").text("");
               validado++;
          }

          if ($("#Observaciones").val().length == 0) {
               $("#validacion_Observa").text("*");
               $("#validacion_Observa2").text("Ingresa una oObservacion");
          }else{
               $("#validacion_Observa").text("");
               $("#validacion_Observa2").text("");
               validado++;
          }


          if (validado==7)
          {
               document.FrmEditarCotizacion.submit();
          }
          else{
               alert("Campos pendientes por validar");
               validado = 0;
          }

     });
});

