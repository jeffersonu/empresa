<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remodelaciones y acabados</title>

    <!--tipos de fuentes-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abel&family=EB+Garamond&family=Red+Hat+Display:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abel&family=EB+Garamond&family=Red+Hat+Display:wght@300&family=Rubik&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/39866f6cf0.js" crossorigin="anonymous"></script>

    <!--resetear estilos predeterminados del navegador-->

    <link rel="stylesheet" href="css/necolas.github.io_normalize.css_8.0.1_normalize.css">

    <!---mis estilos-->

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <!--seccion emcabezado-->

    <header class="encabezado" id="inicio">

        <div class="contenido-navegacion">
            <div class="logo">
                <h2>Remodelaciones <span> para su hogar</span></h2>
            </div>

            <nav class="navegacion ocultar">
                <a href="#inicio">Inicio</a>
                <a href="#nosotros">Nosotros</a>
                <a href="#servicios">Servicios</a>
                <a href="#contacto">Contacto</a>
            </nav>
            <div class="hamburguesa">
                <span></span><span></span><span></span>
            </div>
        </div>

        <div class="contenido-encabezado contenedor">
            <div class="texto-encabezado">
                <h1>Estamos para mejorar los espacios de tu hogar</h1>

            </div>

            <!--formulario contacto -->

            <form method="post" class="formulario-encabezado">
                <h2>Agenda una cita con nosotros</h2>

                <div class="input-encabezado">
                    <input type="text" name="name" placeholder="Nombre" required>
                </div>

                <div class="input-encabezado">
                    <input type="email" name="email" placeholder="Correo" required>
                </div>

                <div class="input-encabezado">
                    <input type="tel" name="phone" placeholder="Telefono" required>
                </div>

                <div class="boton-encabezado">
                    <input class="btn azul" type="submit" name="send" value="Enviar">
                </div>

            </form>

<?php
include("send.php");
?>

        </div>

    </header>

    <!--seccion ventajas-->

    <div class="ventajas">
        <div class="contenido-ventajas contenedor">
            <div class="ventaja">
                <i class="fa-solid fa-clock"></i>
                <h3>Damos prioridad a nuestros clientes</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, voluptates mollitia corrupti
                    provident
                    minus ut. Fugiat reprehenderit nam impedit aut rerum autem quo error dicta culpa minus.
                    Voluptatibus,
                    harum maxime.</p>
            </div>
            <div class="ventaja">
                <i class="fa-solid fa-house"></i>
                <h3>Diseños personalizados</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, voluptates mollitia corrupti
                    provident
                    minus ut. Fugiat reprehenderit nam impedit aut rerum autem quo error dicta culpa minus.
                    Voluptatibus,
                    harum maxime.</p>
            </div>
            <div class="ventaja">
                <i class="fa-solid fa-trowel-bricks"></i>
                <h3>Trabajos de calidad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, voluptates mollitia corrupti
                    provident
                    minus ut. Fugiat reprehenderit nam impedit aut rerum autem quo error dicta culpa minus.
                    Voluptatibus,
                    harum maxime.</p>
            </div>
        </div>

    </div>

    <!--seccion sobre nosotros-->

    <section class="nosotros contenedor" id="nosotros">
        <h2>Sobre nosotros</h2>
        <div class="contenido-nosotros">

            <div class="texto-nosotros">
                <h3>Hacemos hogares felices</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi magni quaerat dolorem minima?
                    Facilis, praesentium, reiciendis laudantium error fugiat minima rem, modi pariatur magni doloribus
                    eum porro aut nihil. Quos.
                </p>

                <a href="#" class="btn bordes">saber más...</a>
            </div>

        </div>
    </section>

    <!--seccion de servicios-->

    <section class="servicios contenedor" id="servicios">
        <h2>Servicios</h2>
        <div class="contenido-servicios">
            <div class="servicio">
                <i class="fa-solid fa-headphones"></i>
                <h3>Soporte</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus error sint, beatae adipisci,
                    rerum quae voluptates veritatis soluta autem vero earum. Et modi repellat corporis facere odio
                    expedita explicabo. Assumenda?</p>

            </div>

            <div class="servicio">
                <i class="fa-solid fa-paint-roller"></i>
                <h3>Pintura de apartamentos</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus error sint, beatae adipisci,
                    rerum quae voluptates veritatis soluta autem vero earum. Et modi repellat corporis facere odio
                    expedita explicabo. Assumenda?</p>

            </div>

            <div class="servicio">
                <i class="fa-solid fa-faucet-drip"></i>
                <h3>Plomeria</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus error sint, beatae adipisci,
                    rerum quae voluptates veritatis soluta autem vero earum. Et modi repellat corporis facere odio
                    expedita explicabo. Assumenda?</p>

            </div>

            <div class="servicio">
                <i class="fa-solid fa-plug"></i>
                <h3>Electricidad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus error sint, beatae adipisci,
                    rerum quae voluptates veritatis soluta autem vero earum. Et modi repellat corporis facere odio
                    expedita explicabo. Assumenda?</p>

            </div>

            <div class="servicio">
                <i class="fa-solid fa-people-roof"></i>
                <h3>Cielo raso</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus error sint, beatae adipisci,
                    rerum quae voluptates veritatis soluta autem vero earum. Et modi repellat corporis facere odio
                    expedita explicabo. Assumenda?</p>

            </div>

            <div class="servicio">
                <i class="fa-solid fa-house-chimney-window"></i>
                <h3>Remodelación en general</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus error sint, beatae adipisci,
                    rerum quae voluptates veritatis soluta autem vero earum. Et modi repellat corporis facere odio
                    expedita explicabo. Assumenda?</p>

            </div>

        </div>
    </section>

    <!---seccion de contacto-->

    <section class="contacto" id="contacto">
        <h2>Contactanos</h2>
        <div class="contenido-contacto">
            <div class="informacion-contacto">
                <h3>Informacion de contacto</h3>
                <p>jeffersonurbina20@gmail.com</p>
                <p>3192078407</p>
            </div>

<!--segundo formulario de contacto-->

            <form method="post" class="formulario-contacto">
                <div class="input-contacto">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="name" id="nombre" placeholder="Nombre" required>
                </div>

                <div class="input-contacto">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Correo" required>
                </div>

                <div class="input-contacto">
                    <label for="telefon">Telefono</label>
                    <input type="tel" name="phone" id="telefono" placeholder="Telefono" required>
                </div>

                <div class="input-contacto">
                    <label for="mensaje">Mensaje</label>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="input-contacto">
                    <input type="submit" name="send2" value="Enviar" class="btn azul">
                </div>
            </form>
            <?php
        include("send2.php");
        ?>
        </div>
        
    </section>

    <footer class="footer">
        <div class="logo">
            <h2>Remodelaciones <span> para su hogar</span></h2>
        </div>
        <p>Todos los derechos reservados <span class="fecha"></span> &copy; desarrollado por Jefferson Urbina</p>

    </footer>


    <script src="js/app.js"></script>

</body>

</html>