const formulario = document.getElementById("registroForm");

formulario.addEventListener("submit", function(e){

    e.preventDefault();

    const datos = new FormData();

    datos.append("nombre",
        document.getElementById("nombreRegistro").value);

    datos.append("correo",
        document.getElementById("correoRegistro").value);

    datos.append("password",
        document.getElementById("passwordRegistro").value);

    fetch("php/registro.php",{
        method:"POST",
        body:datos
    })

    .then(res=>res.text())

    .then(respuesta=>{

        if(respuesta=="ok"){

            Swal.fire({
                icon:"success",
                title:"Registro exitoso"
            }).then(()=>{
                location.href="login.php";
            });

        }

        else if(respuesta=="existe"){

            Swal.fire({
                icon:"warning",
                title:"Ese correo ya está registrado"
            });

        }

        else{

            Swal.fire({
                icon:"error",
                title:"Ocurrió un error"
            });

        }

    });

});