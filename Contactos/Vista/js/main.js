function limpiar(){
    alert("hola mundo");
}

$(document).ready(function(){
    $("#frmInsertarContacto").submit(function(event){

        event.preventDefault();

        //Validación del nombre:

        let validado = 0;

        if( $("#Nombre").val().length == 0 || $("#Nombre").val().length > 30)
        {
            $("#valNombre").text("* Debe ingresar el nombre del contacto");
        }
        else
        {
            $("#valNombre").text("");
            validado++;
        }

        if($("#Apellido_1").val().length == 0 || $("#Apellido_1").val().length > 30)
        {
            $("#valApellido1").text("* Ingresar primer apellido del contacto");
        }
        else
        {
            $("#valApellido1").text("");
            validado++;
        }

        if($("#Apellido_2").val().length == 0 || $("#Apellido_2").val().length > 30)
        {
            $("#valApellido2").text("* Debe ingresar el segundo apellido del contacto.")
        }
        else{
            $("#valApellido2").text("");
            validado++;
        }

        var tipodocumento = document.getElementById("Documento");
        if(tipodocumento.value == "" || tipodocumento.value == null)
        {
            $("#valDocumento").text("* Debe ingresar el número de documento del contacto.");
        }
        else
        {
            $("#valDocumento").text("");
            validado++;
        }

        const emailRegex = new RegExp(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i);

        if($("#Correo").val().length == 0 || !emailRegex.test($("#Correo").val()))
        {
            $("#valCorreo").text("* Ingrese un correo valido.");
        }
        else
        {
            $("#valCorreo").text("");
            validado++;
        }

        if($("#Telefono").val().length == 0 || isNaN($("#Telefono").val()))
        {
            $("#valTelefono").text("* Ingrese un número de telefono valido");
        }
        else{
            $("#valTelefono").text("");
            validado++;
        }

        if($("#Cargo").val().length == 0 || $("#Cargo").val().length > 20)
        {
            $("#valCargo").text("* Ingrese un cargo para el contacto.");
        }
        else{
            $("#valCargo").text("");
            validado++;
        }

        if($("#Estado").val().length == 0 )
        {
            $("#valEstado").text("* Seleccione un estado para el cliente.");
        }
        else
        {
            $("#valEstado").text("");
            validado++;
        }

        console.log("validado: " + validado);

        if(validado == 8)
        {
            Swal.fire({
                title: 'Está seguro de enviar los datos?',
                text: "Asegurese de diligenciar bien los campos!",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, enviar datos!'
              }).then((result) => {
                if (result.value) {
                  Swal.fire(
                    'Datos enviados!',
                    'Sus datos han sido enviados correctamente.',
                    'success'
                  )
                }
            });
            document.frmInsertarContacto.submit();
        }
        else
        {
            Swal.fire('Faltan campos por diligenciar.');
            validado = 0;
        }
    

    })
})





