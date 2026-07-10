const contactForm = document.getElementById('contactForm');

contactForm.addEventListener('submit', (e) => {

    e.preventDefault();

    const nombre = document.getElementById('nombre').value;
    const correo = document.getElementById('correo').value;
    const mensaje = document.getElementById('mensaje').value;

    if(nombre === '' || correo === '' || mensaje === ''){

        Swal.fire({
            title:'Error',
            text:'Completa todos los campos',
            icon:'error'
        });

        return;
    }

    Swal.fire({
        title:'Mensaje enviado',
        text:'Nos comunicaremos contigo pronto.',
        icon:'success'
    });

    contactForm.reset();

});