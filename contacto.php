<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        .map iframe {
            border: 0;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

<section class="contact-section">

    <h1>Contáctanos</h1>

    <form id="contactForm" class="contact-form">

        <input type="text" id="nombre" placeholder="Nombre">

        <input type="email" id="correo" placeholder="Correo">

        <textarea id="mensaje" placeholder="Mensaje"></textarea>

        <button type="submit">
            Enviar
        </button>

    </form>

    <div class="map">

        <iframe
            title="Mapa de ubicación"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.3838735468817!2d-103.71132408891701!3d19.265665681903204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84255b0079071fed%3A0xb796e3c2211098c5!2sGESCA%20Especialistas%20en%20c%C3%A1ncer%20de%20Colima!5e0!3m2!1ses-419!2smx!4v1779485556066!5m2!1ses-419!2smx"
            width="600"
            height="450"
            allowfullscreen>
        </iframe>

    </div>

</section>

<footer class="footer">

    <div class="footer-container">

        <div class="footer-box">

            <h3>MediCare</h3>

            <p>
                Sistema médico moderno y seguro.
            </p>

        </div>

        <div class="footer-box">

            <h3>Contacto</h3>

            <p>Gesca@gmail.com</p>

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

<script src="js/contacto.js"></script>

</body>
</html>