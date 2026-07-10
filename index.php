<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare System</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
</head>
<body>

<div class="loader-container" id="loader">
    <div class="loader"></div>
</div>

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

<section class="hero">

    <div class="overlay"></div>

    <div class="hero-content">

        <h2 data-aos="fade-up">
            Sistema Médico Inteligente
        </h2>

        <p data-aos="fade-up" data-aos-delay="200">
            Innovación, seguridad y atención médica moderna.
        </p>

        <div class="hero-buttons"
             data-aos="fade-up"
             data-aos-delay="400">

            <a href="tienda.php">
                <button>
                    Ver Tienda
                </button>
            </a>

            <a href="contacto.php">
                <button class="secondary-btn">
                    Contacto
                </button>
            </a>

        </div>

    </div>

</section>

<section class="services">

    <div class="section-title">

        <h2>Nuestros Servicios</h2>

        <p>
            Atención médica especializada para el cuidado y seguimiento
            integral de pacientes oncológicos.
        </p>

    </div>

    <div class="service-container">

        <div class="card" data-aos="fade-up">

            <div class="card-content">

                <i class="fa-solid fa-user-doctor"></i>

                <h3>Consultas Médicas</h3>

                <p>
                    Atención personalizada con especialistas en oncología
                    y seguimiento clínico profesional.
                </p>

            </div>

        </div>

        <div class="card" data-aos="fade-up" data-aos-delay="200">

            <div class="card-content">

                <i class="fa-solid fa-truck-medical"></i>

                <h3>Emergencias</h3>

                <p>
                    Atención inmediata y monitoreo médico para situaciones
                    prioritarias y de riesgo.
                </p>

            </div>

        </div>

        <div class="card" data-aos="fade-up" data-aos-delay="400">

            <div class="card-content">

                <i class="fa-solid fa-pills"></i>

                <h3>Farmacia</h3>

                <p>
                    Productos médicos certificados y artículos especializados
                    para el cuidado del paciente.
                </p>

            </div>

        </div>

    </div>

</section>

<section class="slider-section">

    <h2>Servicios Destacados</h2>

    <div class="swiper mySwiper">

        <div class="swiper-wrapper">

            <div class="swiper-slide">

    <img src="img/quimioterapia.jpeg" alt="Medical professionals in a calm cardiology setting focusing on chemotherapy care">

    <h3>Quimioterapia</h3>

</div>
            <div class="swiper-slide">

    <img src="img/seguimiento.jpeg" alt="Child receiving pediatric medical attention during a clinical follow up visit">

    <h3>Seguimiento clinico</h3>

</div>
            <div class="swiper-slide">

    <img src="img/emergencia.jpeg" alt="Healthcare team in a hospital environment providing fast assessment for early diagnosis">

    <h3>Diagnostico temprano</h3>

</div>
            <div class="swiper-slide">

    <img src="img/laboratorio.jpg" alt="Laboratory technician working with medical samples in a clinical lab setting">

    <h3>Laboratorio</h3>

</div>

        </div>

    </div>

</section>

<section class="ratings">

    <div class="section-title">

        <h2>Opiniones de Pacientes</h2>

        <p>
            Experiencias de pacientes atendidos en GESCA.
        </p>

    </div>

    <div class="reviews-container">

        <div class="review" data-aos="zoom-in">

            <h3>María González</h3>

            <div class="stars">
                ★★★★★
            </div>

            <p>
                Excelente atención médica y acompañamiento durante mi tratamiento.
            </p>

        </div>

        <div class="review" data-aos="zoom-in" data-aos-delay="200">

            <h3>Carlos Ramírez</h3>

            <div class="stars">
                ★★★★★
            </div>

            <p>
                El sistema es moderno y facilita mucho el seguimiento médico.
            </p>

        </div>

        <div class="review" data-aos="zoom-in" data-aos-delay="400">

            <h3>Ana Torres</h3>

            <div class="stars">
                ★★★★★
            </div>

            <p>
                Muy buena experiencia, personal amable y atención profesional.
            </p>

        </div>

    </div>

</section>

<div class="chat-btn" id="chatBtn">
    <i class="fa-solid fa-comment-medical"></i>
</div>

<div class="chat-box" id="chatBox">

    <div class="chat-header">
        MediCare Chat
    </div>

    <div class="chat-body" id="chatBody">

        <div class="message bot">
            Hola, ¿en qué puedo ayudarte?
        </div>

    </div>

    <div class="chat-input">

        <input type="text"
               id="userMessage"
               placeholder="Escribe un mensaje">

        <button id="sendMessage">
            Enviar
        </button>

    </div>

</div>

<button id="scrollTopBtn">
    ↑
</button>

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

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();

    const swiper = new Swiper(".mySwiper", {
        loop:true,
        autoplay:{
            delay:2500,
        }
    });
</script>

<script src="js/app.js"></script>
<script src="js/chat.js"></script>

</body>
</html>