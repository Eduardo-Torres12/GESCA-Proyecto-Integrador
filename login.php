<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | GESCA</title>

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


        <form id="loginForm" class="login-form">


            <h2>Iniciar Sesión</h2>


            <p>
                Bienvenido al Sistema Médico GESCA
            </p>


            <div class="input-group">

                <i class="fa-solid fa-envelope"></i>

                <input 
                type="email"
                id="correo"
                name="correo"
                placeholder="Correo electrónico"
                required>

            </div>



            <div class="input-group">

                <i class="fa-solid fa-lock"></i>

                <input
                type="password"
                id="password"
                name="password"
                placeholder="Contraseña"
                required>

            </div>



            <button type="submit">
                Entrar
            </button>


            <a href="#">
                ¿Olvidaste tu contraseña?
            </a>


            <p class="register-text">

                ¿No tienes cuenta?

                <a href="registro.php">
                    Regístrate
                </a>

            </p>


        </form>


    </div>

</section>


<script src="js/login.js"></script>
<script src="js/app.js"></script>


</body>
</html>