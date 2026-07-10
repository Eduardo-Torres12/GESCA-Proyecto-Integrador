<?php

session_start();

if(!isset($_SESSION["id"])){

    header("Location: login.php");
    exit();

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard GESCA</title>
     <h3>

    <div class="user-panel">

    <h2>
        Bienvenido, <?php echo htmlspecialchars($_SESSION["nombre"]); ?>
    </h2>

    <a href="php/logout.php" class="btn-logout">
        <i class="fa-solid fa-right-from-bracket"></i>
        Cerrar sesión
    </a>

</div>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

<header class="header">

    <div class="logo">

        <img src="img/logo.jpeg" alt="GESCA Logo">

        <h1>GESCA</h1>

    </div>

    <nav class="navbar">

        <a href="index.php">Inicio</a>
        <a href="tienda.php">Tienda</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="faq.php">FAQ</a>
        <a href="contacto.php">Contacto</a>
        <a href="nosotros.php">Nosotros</a>
        <a href="carrito.php">Carrito</a>
        <a href="login.php">Login</a>
    </nav>

</header>

<section class="dashboard">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <h2>Panel Médico</h2>

        <ul>

            <li>
                <i class="fa-solid fa-hospital"></i>
                Servicios
            </li>

            <li>
                <i class="fa-solid fa-user-doctor"></i>
                Médicos
            </li>

            <li>
                <i class="fa-solid fa-user"></i>
                Pacientes
            </li>

            <li>
                <i class="fa-solid fa-gears"></i>
                Administración
            </li>

        </ul>

    </aside>

    <!-- CONTENIDO -->
    <main class="dashboard-content">

        <!-- ESTADÍSTICAS -->
        <section class="stats">

            <div class="stat-card">

                <i class="fa-solid fa-users"></i>

                <h3>245</h3>

                <p>Pacientes Registrados</p>

            </div>

            <div class="stat-card">

                <i class="fa-solid fa-calendar-check"></i>

                <h3>52</h3>

                <p>Citas del Día</p>

            </div>

            <div class="stat-card">

                <i class="fa-solid fa-user-doctor"></i>

                <h3>18</h3>

                <p>Médicos Activos</p>

            </div>

            <div class="stat-card">

                <i class="fa-solid fa-flask"></i>

                <h3>120</h3>

                <p>Tratamientos Activos</p>

            </div>

        </section>

        <!-- SERVICIOS -->
        <section class="dashboard-section">

            <h2>Servicios Médicos</h2>

            <div class="service-container">

                <div class="card">

                    <div class="card-content">

                        <i class="fa-solid fa-droplet"></i>

                        <h3>Hematología</h3>

                        <p>
                            Estudios y tratamientos especializados
                            relacionados con enfermedades de la sangre.
                        </p>

                    </div>

                </div>

                <div class="card">

                    <div class="card-content">

                        <i class="fa-solid fa-ribbon"></i>

                        <h3>Oncología</h3>

                        <p>
                            Atención integral para pacientes con
                            diagnóstico de cáncer.
                        </p>

                    </div>

                </div>

                <div class="card">

                    <div class="card-content">

                        <i class="fa-solid fa-vial"></i>

                        <h3>Banco de Sangre</h3>

                        <p>
                            Gestión y almacenamiento de componentes
                            sanguíneos para tratamientos médicos.
                        </p>

                    </div>

                </div>

                <div class="card">

                    <div class="card-content">

                        <i class="fa-solid fa-microscope"></i>

                        <h3>Laboratorio Clínico</h3>

                        <p>
                            Análisis clínicos y resultados
                            especializados para pacientes.
                        </p>

                    </div>

                </div>

                <div class="card">

                    <div class="card-content">

                        <i class="fa-solid fa-syringe"></i>

                        <h3>Quimioterapia</h3>

                        <p>
                            Tratamientos oncológicos personalizados
                            y monitoreo clínico constante.
                        </p>

                    </div>

                </div>

                <div class="card">

                    <div class="card-content">

                        <i class="fa-solid fa-notes-medical"></i>

                        <h3>Estudios Especializados</h3>

                        <p>
                            Estudios avanzados para diagnóstico
                            y seguimiento médico.
                        </p>

                    </div>

                </div>

            </div>

        </section>

        <!-- GRÁFICAS -->
        <section class="charts">

            <div class="chart-card">

                <h3>Pacientes por Mes</h3>

                <canvas id="pacientesChart"></canvas>

            </div>

            <div class="chart-card">

                <h3>Tratamientos Activos</h3>

                <canvas id="tratamientosChart"></canvas>

            </div>

        </section>

        <!-- TABLA MÉDICOS -->
        <section class="dashboard-section">

            <h2>Directorio Médico</h2>

            <table class="dashboard-table">

                <tr>
                    <th>Médico</th>
                    <th>Especialidad</th>
                    <th>Horario</th>
                </tr>

                <tr>
                    <td>Dr. Alejando Barocio</td>
                    <td>Oncología</td>
                    <td>08:00 - 14:00</td>
                </tr>

                <tr>
                    <td>Dr. Gabriela Pérez</td>
                    <td>Hematología</td>
                    <td>10:00 - 18:00</td>
                </tr>

                <tr>
                    <td>Dr. Eduardo Cipres</td>
                    <td>Quimioterapia</td>
                    <td>09:00 - 15:00</td>
                </tr>

                <tr>
                    <td>Dra. Cristina López</td>
                    <td>Anestesiología</td>
                    <td>09:00 - 15:00</td>
                </tr>

                <tr>
                    <td>Dr. Jorge Osornio</td>
                    <td>Cirujano Oncólogo</td>
                    <td>09:00 - 15:00</td>
                </tr>
                
            </table>

        </section>

        <!-- PACIENTES -->
        <section class="dashboard-section">

            <h2>Pacientes</h2>

            <div class="service-container">

                <div class="card">

                    <div class="card-content">

                        <i class="fa-solid fa-file-medical"></i>

                        <h3>Historial Clínico</h3>

                        <p>
                            Registro completo del historial médico
                            y tratamientos de pacientes.
                        </p>

                    </div>

                </div>

                <div class="card">

                    <div class="card-content">

                        <i class="fa-solid fa-calendar-days"></i>

                        <h3>Agenda de Citas</h3>

                        <p>
                            Gestión de citas médicas y seguimiento
                            de consultas programadas.
                        </p>

                    </div>

                </div>

                <div class="card">

                    <div class="card-content">

                        <i class="fa-solid fa-file-waveform"></i>

                        <h3>Resultados</h3>

                        <p>
                            Visualización y descarga de resultados
                            clínicos y análisis médicos.
                        </p>

                    </div>

                </div>

                <div class="card">

                    <div class="card-content">

                        <i class="fa-solid fa-prescription"></i>

                        <h3>Recetas Médicas</h3>

                        <p>
                            Administración de recetas digitales
                            y medicamentos prescritos.
                        </p>

                    </div>

                </div>

            </div>

        </section>

        <!-- ADMINISTRACIÓN -->
        <section class="dashboard-section">

            <h2>Administración</h2>

            <div class="service-container">

                <div class="card">

                    <div class="card-content">

                        <i class="fa-solid fa-users-gear"></i>

                        <h3>Usuarios</h3>

                        <p>
                            Gestión de usuarios, accesos
                            y credenciales del sistema.
                        </p>

                    </div>

                </div>

                <div class="card">

                    <div class="card-content">

                        <i class="fa-solid fa-lock"></i>

                        <h3>Roles y Permisos</h3>

                        <p>
                            Configuración de permisos
                            y niveles de acceso.
                        </p>

                    </div>

                </div>

                <div class="card">

                    <div class="card-content">

                        <i class="fa-solid fa-boxes-stacked"></i>

                        <h3>Inventario</h3>

                        <p>
                            Control y monitoreo de medicamentos
                            y equipo médico.
                        </p>

                    </div>

                </div>

                <div class="card">

                    <div class="card-content">

                        <i class="fa-solid fa-chart-line"></i>

                        <h3>Reportes</h3>

                        <p>
                            Estadísticas y análisis administrativos
                            del sistema médico.
                        </p>

                    </div>

                </div>

            </div>

        </section>

    </main>

</section>

<footer class="footer">

    <div class="footer-container">

        <div class="footer-box">

            <h3>MediCare</h3>

            <p>
                Sistema médico especializado en atención oncológica.
            </p>

        </div>

        <div class="footer-box">

            <h3>Contacto</h3>

            <p>gesca@gmail.com</p>

            <p>+52 33 1234 5678</p>

        </div>

        <div class="footer-box">

            <h3>Redes Sociales</h3>

            <div class="socials">

                <i class="fa-brands fa-facebook"></i>

                <i class="fa-brands fa-instagram"></i>

                <i class="fa-brands fa-x-twitter"></i>

            </div>

        </div>

    </div>

</footer>

<script>

const pacientesChart =
document.getElementById('pacientesChart');

new Chart(pacientesChart, {

    type:'bar',

    data:{
        labels:[
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo'
        ],

        datasets:[{
            label:'Pacientes',

            data:[45,60,75,50,90],

            borderWidth:1
        }]
    }

});

const tratamientosChart =
document.getElementById('tratamientosChart');

new Chart(tratamientosChart, {

    type:'pie',

    data:{
        labels:[
            'Quimioterapia',
            'Radioterapia',
            'Consultas',
            'Estudios'
        ],

        datasets:[{

            data:[40,25,20,15]

        }]
    }

});

</script>

</body>
</html>