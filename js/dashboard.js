const ctx1 = document.getElementById('patientsChart');

new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May'],
        datasets: [{
            label: 'Pacientes',
            data: [30, 45, 60, 40, 80],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true
    }
});

const ctx2 = document.getElementById('appointmentsChart');

new Chart(ctx2, {
    type: 'line',
    data: {
        labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie'],
        datasets: [{
            label: 'Citas',
            data: [12, 19, 8, 15, 22],
            borderWidth: 2
        }]
    },
    options: {
        responsive: true
    }
});

const tablaUsuarios = document.getElementById('tablaUsuarios');

let usuarios = [
    {
        nombre:'Juan Pérez',
        especialidad:'Cardiología',
        estado:'Activo'
    },
    {
        nombre:'María López',
        especialidad:'Pediatría',
        estado:'Pendiente'
    }
];

function renderUsuarios(){

    tablaUsuarios.innerHTML = '';

    usuarios.forEach((usuario, index) => {

        tablaUsuarios.innerHTML += `
            <tr>
                <td>${usuario.nombre}</td>
                <td>${usuario.especialidad}</td>
                <td>${usuario.estado}</td>

                <td>
                    <button onclick="eliminarUsuario(${index})">
                        Eliminar
                    </button>
                </td>
            </tr>
        `;
    });
}

function agregarUsuario(){

    const nombre = document.getElementById('nombreUsuario').value;

    const especialidad = document.getElementById('especialidadUsuario').value;

    if(nombre === '' || especialidad === ''){
        return;
    }

    usuarios.push({
        nombre,
        especialidad,
        estado:'Activo'
    });

    renderUsuarios();
}

function eliminarUsuario(index){

    usuarios.splice(index, 1);

    renderUsuarios();
}

renderUsuarios();