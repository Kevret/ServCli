<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '<script>
        alert("Se debe iniciar sesion para ingresar");
        window.location = "index.php"
        </script>';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importadora Movicel Conima - Tu Fuente Confiable de Componentes</title>

    <link rel="stylesheet" href="assets_P/css/style.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

</head>
<body>

    <!--Header - Menu-->

    <header>
        <div class="container__header">
            <div class="logo">
                <a href="#">
                    <img src="assets_P/images/Logo/logo-movicel.png" alt="">
                </a>
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#">Inicio</a></li>

                        <li><a href="#">Servicios</a></li>

                        <li><a href="#">Contactos</a></li>
                    </ul>
                </nav>

                <a href="#" class="btn__quote">Cotizar</a>

                <div class="socialMedia">
                    <a href="#">
                        <img src="assets_P/images/social media/facebook.png" alt="">
                    </a>

                    <a href="#">
                        <img src="assets_P/images/social media/youtube.png" alt="">
                    </a>
                    <a href="php/cerrar_sesion.php"> Iniciar Sesión </a>
                </div>
            </div>
        </div>
    </header>

    <main>

        <!--INICIO-->
        <!--Portada de inicio-->
        <div class="container__cover div__offset">
            <div class="cover">
                <section class="text__cover">
                    <h1>Calidad en cada componente</h1>
                    <p>La empresa Movicel Conima se dedica a la importación de productos tecnológicos referentes a celulares, reabastecen a locales que realizan el servicio técnico de reparación de celulares y a las tiendas que realizan la venta de estos productos a por mayor.</p>
                    <a href="#" class="btn__text-cover btn__text">Empezar</a>
                </section>
                <section class="image__cover">
                    <img src="assets_P/images/Cover/hero-img.png" alt="">
                </section>
            </div>
        </div>

        <!--Generador de confianza-->

        <div class="container__trust container__card-primary">
            <div class="trust card__primary">
                <div class="text__trust text__card-primary">
                    <p>IMPORTAMOS CALIDAD Y CONFIABILIDAD</p>
                    <h1>Desde pantallas hasta baterías y todo lo que necesitas para tu dispositivo</h1>
                </div>
                <div class="container__trust container__box-cardPrimary">
                    <div class="card__trust box__card-primary">
                        <img src="assets_P/images/Trust area/anchor.png" alt="">
                        <h2>Garantias y calidad de componentes</h2>
                        <p>Nos enorgullece ofrecer a nuestros clientes una total tranquilidad. Cada componente que importamos y distribuimos está sujeto a rigurosas inspecciones de calidad</p>
                    </div>
                    <div class="card__trust box__card-primary">
                        <img src="assets_P/images/Trust area/archive.png" alt="">
                        <h2>Productos y servicios</h2>
                        <p>Ofrecemos una amplia gama de productos y servicios diseñados para satisfacer todas tus necesidades relacionadas con la telefonía móvil.</p>
                    </div>
                    <div class="card__trust box__card-primary">
                        <img src="assets_P/images/Trust area/user.png" alt="">
                        <h2>Satisfacción del usuario garantizada</h2>
                        <p>La satisfacción del usuario es nuestra prioridad número uno. Estamos comprometidos a brindar a nuestros clientes una experiencia inigualable.</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Sobre nosotros - Nuestro equipo-->

        <div class="container__about div__offset">
            <div class="about">
                <div class="text__about">
                    <h1>¡No busques más! Nuestra promoción te trae ahorros inigualables en productos de alta calidad.</h1>
                    
                    <a href="#" class="btn__text-about btn__text">Saber Más</a>
                </div>
                
                <div class="image__about">
                    <img src="assets_P/images/About/about-1.png" alt="">
                    <video width="400" height="350" 
                    src="assets_P/videos/¿CÓMO HACER UNA PROMOCIÓN EXITOSA.mp4" controls  ></video>
                    
                </div>
            </div>
            
        </div>

        <!--SERVICIOS-->

        <div class="container__service container__card-primary div__offset">
            <div class="service card__primary">
                <div class="text__service text__card-primary">
                    <p>QUE HACEMOS</p>
                    <h1>El servicio que ofrecemos se divide en:</h1>
                </div>

                <div class="container__card-service container__box-cardPrimary">
                    <div class="card__service box__card-primary">
                        <img src="assets_P/images/Services/grid.png" alt="">
                        <h2>Adquisición y Importación</h2>
                        <p>◆ Selección de componentes de calidad.</p>
                        <p>◆ Negociación con proveedores en el extranjero.</p>
                        <p>◆ Gestión de aduanas y documentación de importación.</p>
                        <p>◆ Transporte y logística de envío.</p>
                        <a href="#">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="card__service box__card-primary">
                        <img src="assets_P/images/Services/cart.png" alt="">
                        <h2>Almacenamiento y Gestión de Inventario</h2>
                        <p>◆ Recepción, almacenamiento y organización de componentes.</p>
                        <p>◆ Control de inventario para garantizar disponibilidad de productos.</p>
                        <p>◆ Gestión de la cadena de suministro.</p>
                        <a href="#">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="card__service box__card-primary">
                        <img src="assets_P/images/Services/camera.png" alt="">
                        <h2>Distribución y Venta al por Mayor</h2>
                        <p>◆ Venta al por mayor de componentes a minoristas, talleres de reparación y empresas.</p>
                        <p>◆ Establecimiento de redes de distribución y acuerdos con minoristas.</p>
                        <p>◆ Atención al cliente y apoyo postventa.</p>
                        <a href="#">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="card__service box__card-primary">
                        <img src="assets_P/images/Services/headphone.png" alt="">
                        <h2>Venta al por Menor</h2>
                        <p>◆ Venta de componentes directamente a consumidores finales a través de tiendas minoristas en línea o físicas.</p>
                        <p>◆ Servicios de reparación y asesoramiento técnico.</p>
                        <p>◆ Promoción y marketing de productos al por menor.</p>
                        <a href="#">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="card__service box__card-primary">
                        <img src="assets_P/images/Services/location.png" alt="">
                        <h2>Soporte Técnico</h2>
                        <p>◆ Ofrecer servicios de asesoramiento técnico y soporte posventa a clientes.</p>
                        <p>◆ Ayuda en la selección de componentes adecuados.</p>
                        <p>◆ Resolución de problemas y consultas técnicas.</p>
                        <a href="#">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="card__service box__card-primary">
                        <img src="assets_P/images/Services/file.png" alt="">
                        <h2>Calidad y Control de Garantía</h2>
                        <p>◆ Inspección y control de calidad de los componentes importados.</p>
                        <p>◆ Gestión de garantías y devoluciones.</p>
                        <p>◆ Cumplimiento de estándares de calidad y seguridad.</p>
                        <a href="#">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>
    
</body>
</html>