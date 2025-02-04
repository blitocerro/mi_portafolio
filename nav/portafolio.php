<?php

require '../backphp/cargarProyectos.php';

$proyectos = obtenerProyectos($pdo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pablo Yarzon | Portafolio</title>
    <link rel="stylesheet" href="../css/portafolio.css">

    <!-- ICONOS -->
    <link rel="icon" href="../assets/img/logo.png" type="image/x-icon">

    <!-- https://boxicons.com/ -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- https://remixicon.com/ -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- FUENTES  -->
    <!-- https://fonts.google.com/ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Sixtyfour&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <!-- LOGO -->
        <a href="#" class="logo">PABLO YARZON</a>

        <!-- BOTON CLICKEABLE SIN JV -->
        <input type="checkbox" name="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon-action">
            <div class='bx bx-menu' id="menu-icon"></div>
        </label>


        <ul class="navlist">
            <li><a href="../index.html">Inicio</a></li>
            <li><a href="#">Sobre mi</a></li>
            <li><a href="">Portafolio</a></li>
            <li><a href="#contact-form">Contacto</a></li>
        </ul>

    </header>

    <section>
        <h2>Proyectos realizados</h2>
        <div class="proyectos-container">
            <?php mostrarProyectos($proyectos); ?>
        </div>
    </section>

    <footer>

        <div class="datos">
            <h3>Informacion de contacto</h3>
            <div class="dato">
                <i class='bx bx-map'></i>
                <a href="https://www.google.com/maps/place/Paraguay+990,+11100+Montevideo,+Departamento+de+Montevideo/@-34.9126401,-56.1921174,19z/data=!3m1!4b1!4m6!3m5!1s0x959f81ce30f99d45:0xac81c9d5474a61e1!8m2!3d-34.9126412!4d-56.1914737!16s%2Fg%2F11gdgxd65c?entry=ttu&g_ep=EgoyMDI1MDEwOC4wIKXMDSoASAFQAw%3D%3D"
                    target="_blank">
                    <p>Montevideo, Uruguay</p>
                </a>
            </div>
            <div class="dato">
                <i class='bx bx-phone-call'></i>
                <p>+598 91 400 872</p>
            </div>
            <div class="dato">
                <i class='bx bx-envelope'></i>
                <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=GTvVlcSHwrwzRwxwbmcWTBvPPXjxZvWssjGMrMCBwnmZDVJpHzcWNZcmxffbhqMKSTWBvPgsMVBSB"
                    target="_blank">
                    <p>pabloyarzon2004@gmail.com</p>
                </a>
            </div>
        </div>


        <form action="" method="post" id="contact-form" class="contact-form">
            <h3>¡Contáctame!</h3>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
            <input type="email" name="email" id="email" placeholder="Correo electrónico" required>
            <textarea name="mensaje" id="mensaje" placeholder="Mensaje" required></textarea>
            <button class="btn-form" id="enviar" type="submit" value="Mandar correo">Mandar correo</button>
            <p class="respuesta" id="respuesta"></p>
        </form>

    </footer>

    <script src="backphp/jquery-3.7.1.min.js"></script>

    <script src="backphp/validacion.js"></script>

</body>

</html>