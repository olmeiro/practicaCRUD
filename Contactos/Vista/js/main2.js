$(document).ready(function(){
    $("#frmEditarContacto").submit(function(event){

        event.preventDefault();

        //Validación del nombre:

        let validado = 0;

        if( $("#Nombre").val().length == 0)
        {
            alert("deebe tner algun nombre");
            $("#valNombre").text("* Debe ingresar el nombre del contacto");
        }
        else
        {
            $("#valNombre").text("");
            validado++;
        }

        console.log("validado: " . validado);

        if(validado == 1)
        {
         
          alert("llego");
          document.frmEditarContacto.submit();
      
        }
        else{
            alert("falta llenar campos");
        }
    

    })
})