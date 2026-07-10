<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Médica</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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

<a href="carrito.php" class="cart-icon">

    <i class="fa-solid fa-cart-shopping"></i>

    <span id="contadorCarrito">0</span>

</a>
<section class="products">

    <h2>Tienda Médica</h2>

<input
type="text"
id="buscador"
placeholder="Buscar productos..."
class="search-input">

    <div id="productContainer" class="product-container"></div>

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

<script src="js/tienda.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>