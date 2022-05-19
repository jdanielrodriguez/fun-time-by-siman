<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Baby Gallery</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog - v1.0.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->

<style>


    #header{
        color: white;
        background: #7fbac0;
    }

    #navbar{
        color: white;
    }

.scroll{
    height: 450px;
    overflow-x: hidden;
  overflow-y: auto;
  padding: 20px;
}

.video{

    width: 100%;

}

.colorButton{
    background: #3c4043;
    color: #f0ffff ;
    border:none;
    border-radius:10px;
}

.colorButton:hover {
    outline-color: #7fbac0;
    outline-style:solid;
    box-shadow: 0 0 0 4px  #7fbac0;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;

  padding: 50px 0;
}

.form-container {
  width: 100%;
  background: #fff;
  padding: 30px;
  max-width: 450px;
  border-radius: 10px;
  box-shadow: rgba(3, 3, 3, 0.1) 10px 0px 50px;
}

.form-container__details {
  margin-bottom: 40px;
  text-align: center;
}

.form-container__title {
  font-size: 38px;
  color: #555;
  margin-bottom: 7px;
}

.form-container__subtitle {
  font-size: 18px;
  color: #999;
}

.form__field {
  margin-bottom: 30px;
}

.form__label {
  margin-bottom: 10px;
  font-size: 15px;
  font-weight: 600;
  color: #777;
}

.form__input {
  width: 100%;
  padding: 25px 15px;
  border: 0;
  background: #f0f0f0;
  border-radius: 5px;
  font-size: 18px;
  color: #555;
  font-weight: 600;
}

.form__submit {
  background: #037ef3;
  color: #fff;
  font-weight: 600;
  width: 100%;
  border-radius: 5px;
  cursor: pointer;
  padding: 25px 15px;
  border: 0;
  transition: all 0.8s;
  font-size: 18px;
}

.form__submit:hover {
  background: #0271da;
}

.form-container__line-divider {
  background: #037ef3;
  width: 30px;
  height: 3px;
  border-radius: 50px;
  margin: 30px auto;
}

.form-container__links {
  display: flex;
  justify-content: space-between;
}

.form-container__link {
  font-size: 15px;
  font-weight: 600;
  color: #777;
}

@media (max-width: 600px) {
  .form-container {
    padding: 30px 25px;
    width: 90%;
  }
  .form__input,
  .form__submit {
    padding: 18px 15px;
  }
}


    </style>
</head>

<body>

  <!-- ======= Header ======= -->

  <div>

    <div>
        <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url('/') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Name </h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>



        </ul>
      </nav><!-- .navbar -->


      <div class="position-relative">
           <a href="{{url('/') }}" class='btn btn-outline-light' ><span class="bi-plus"></span>Galeria</a>
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">

            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>



    </div>

    <input type="checkbox" id="btn-modal">
    <div class="container-modal">
        <div class="content-modal">
            <h2>¡Bienvenido!</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, nostrum!</p>
            <div class="btn-cerrar">
                <label for="btn-modal">Cerrar</label>
            </div>
        </div>
        <label for="btn-modal" class="cerrar-modal"></label>
    </div>

  </header>
    </div>
 </div>

  <!-- End Header -->

  <main id="main">

    <div class="form-container">
        <div class="form-container__details">
          <div class="form-container__title">Registro</div>

        </div>
        <form class="form" action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="input-group mb-3">

              <span class="input-group-text" for="nombre" id="basic-addon1"><i class="bi bi-person"></i></span>
              <input type="text" class="form-control" id="nombre" placeholder="Nombre Encargado" aria-label="nombre" aria-describedby="nombre" request/>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon2"><i class="bi bi-file-person"></i></span>
              <input type="text" class="form-control" id="dpi" placeholder="DPI" aria-label="Dpi" aria-describedby="basic-addon2">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone"></i></span>
              <input type="text" class="form-control" id="telefono" placeholder="Teléfono" aria-label="telefono" aria-describedby="basic-addon3">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
              <input type="email" class="form-control" id="email" placeholder="correo electrónico" aria-label="email" aria-describedby="basic-addon1">
            </div>


            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-heart"></i></span>
              <input type="text" class="form-control" id="participante" placeholder="correo electrónico" >
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="bi bi-card-image"></i></span>
              <label class="input-group-text" for="image">Imagen</label>
              <input type="file" accept=".png, .jpg, .jpeg"   id="image"   class="form-control" >

              <div id="id_image"></div>
            </div>


            <div class="input-group mb-3">
              <span class="input-group-text" for="video" id="basic-addon1"><i class="bi bi-film"></i></span>
              <label class="input-group-text" for="video">Video</label>
              <input type="file" accept=".mp4" class="form-control" placeholder="Nombre Participante" id="video" aria-label="Participante" aria-describedby="basic-addon1">
            </div>

            <div class="d-grid gap-2">
                <button type="button" class="btn btn-success">Success</button>
            </div>

            </form>

      </div>







  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <script src="{{ asset('js/main.js') }}"></script>

  <script>










</script>

</body>

</html>
