<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fun Time Casting | Siman</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8SZ8VK3QHT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-8SZ8VK3QHT');
    </script>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"> <img class="masthead-avatar" src="asset/image/logo.png" /></a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1 text-dark"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#inicio">Inicio</a></li>
                    <li class="nav-item mx-0 mx-lg-1 text-dark"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#instrucciones">Instrucciones</a></li>
                    <li class="nav-item mx-0 mx-lg-1 text-dark"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#formulario">Formulario</a></li>
                    <li class="nav-item mx-0 mx-lg-1 text-dark"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#galeria">Galeria</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header id="inicio" class="masthead fondo1 text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <div class="divider-custom divider-light">
                <img src="asset/image/foto-2.png" alt="">
            </div>
        </div>
    </header>
    <section class="page-section text-white mb-0" id="instrucciones">
        <div class="lista">
            <img src="asset/image/lista.png" alt="">
        </div>
    </section>
    <section class="page-section form-content">
        <div id="app">
            <form-component></form-component>
            <section class="page-section portfolio" id="galeria">
                <galeria-component></galeria-component>
            </section>
        </div>
    </section>
    <!-- Portfolio Modal 1-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


</body>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

</html>
