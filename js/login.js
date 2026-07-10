const formulario = document.getElementById("loginForm");

formulario.addEventListener("submit", function(e){

    e.preventDefault();

    const datos = new FormData();

    datos.append(
        "correo",
        document.getElementById("correo").value
    );

    datos.append(
        "password",
        document.getElementById("password").value
    );

    fetch("php/login.php",{

        method:"POST",

        body:datos

    })

    .then(res => res.text())

    .then(respuesta => {

        respuesta = respuesta.trim();

        if(respuesta === "ok"){

            Swal.fire({

                icon:"success",
                title:"Bienvenido",
                text:"Inicio de sesión correcto"

            }).then(()=>{

                window.location.href = "dashboard.php";

            });

        }

        else if(respuesta === "correo"){

            Swal.fire({

                icon:"error",
                title:"Correo no registrado"

            });

        }

        else if(respuesta === "password"){

            Swal.fire({

                icon:"error",
                title:"Contraseña incorrecta"

            });

        }

        else{

            console.log(respuesta);

            Swal.fire({

                icon:"error",
                title:"Error del servidor",
                text:respuesta

            });

        }

    })

    .catch(error => {

        console.error(error);

        Swal.fire({

            icon:"error",
            title:"No fue posible conectar con el servidor"

        });

    });

});