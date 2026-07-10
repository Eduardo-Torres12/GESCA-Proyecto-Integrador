<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Carrito</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <header class="header">

    <div class="logo">
        <i class="fa-solid fa-heart-pulse"></i>
        <h1>MediCare</h1>
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

<section class="cart-section">

    <h1>Carrito de Compras</h1>

    <div id="cartContainer"></div>

    <div class="cart-total">

        <h2 id="totalCompra">
            Total: $0
        </h2>

        <button id="finalizarCompra">
            Finalizar Compra
        </button>

    </div>

</section>

<script src="js/carrito.js"></script>

</body>
</html>