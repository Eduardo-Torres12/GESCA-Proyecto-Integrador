<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro | GESCA</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

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

<section class="login-page">

    <div class="login-container">

        <div class="login-image">

            <img src="img/logo.jpeg" alt="GESCA">

        </div>

        <form id="registroForm" class="login-form">

            <h2>Crear Cuenta</h2>

            <p>
                Regístrate para acceder al Sistema Médico GESCA.
            </p>

            <div class="input-group">

                <i class="fa-solid fa-user"></i>

                <input
                    type="text"
                    id="nombreRegistro"
                    placeholder="Nombre completo"
                    required>

            </div>

            <div class="input-group">

                <i class="fa-solid fa-envelope"></i>

                <input
                    type="email"
                    id="correoRegistro"
                    placeholder="Correo electrónico"
                    required>

            </div>

            <div class="input-group">

                <i class="fa-solid fa-lock"></i>

                <input
                    type="password"
                    id="passwordRegistro"
                    placeholder="Contraseña"
                    required>

            </div>

            <button type="submit">
                Registrarse
            </button>

            <p class="register-text">

                ¿Ya tienes una cuenta?

                <a href="login.php">
                    Inicia sesión aquí
                </a>

            </p>

        </form>

    </div>

</section>

<footer class="footer">

    <div class="footer-container">

        <div class="footer-box">

            <h3>GESCA</h3>

            <p>
                Clínica especializada en la prevención, diagnóstico y tratamiento integral del cáncer, comprometida con la salud y el bienestar de nuestros pacientes.
            </p>

        </div>

        <div class="footer-box">

            <h3>Contacto</h3>

            <p>📧 gesca@gmail.com</p>

            <p>📞 +52 33 1234 5678</p>

            <p>📍 Guadalajara, Jalisco</p>

        </div>

        <div class="footer-box">

            <h3>Síguenos</h3>

            <div class="socials">

                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-x-twitter"></i>
                <i class="fa-brands fa-youtube"></i>

            </div>

        </div>

    </div>

</footer>

<script src="js/registro.js"></script>
<script src="js/app.js"></script>

</body>
</html>