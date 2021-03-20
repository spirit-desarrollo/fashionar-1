<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard

* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="fashionar">
  <meta name="author" content="Fashionar">
  <title>Fashionar</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css" type="text/css">
</head>

<body >
  <!-- Navbar -->
<?php include("section/sidenav.php"); ?>
  <!-- Main content -->
  <div class="main-content"  id="panel">

  <?php include("section/menu-dashboard.php"); ?>
    
<div class="header pb-7 d-flex align-items-center" style="min-height: 350px;background-image: url(assets/img/theme/rectangulo.jpg);background-size: cover;background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
<div class="row">
          <div class="col-lg-12 col-md-12 ">
            <h1 class="display-2 text-white">Ocación de uso</h1>
            <p class="text-white mt-0 mb-5">¿Para qué ocación buscas tu asesoramiento?</p>
            <!--a href="#!" class="btn btn-neutral">Edit profile</a-->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--8">
  <div class="row mb-10">
    <div class="card-group">
      <div class="card">
        <img class="card-img-top" src="assets/img/theme/ocacion.uso.jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title"><input type="radio" aria-label="Radio button for following text input" value="1">  Oficina / Entrevista laboral </h4>
          
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="assets/img/theme/ocacion.uso.jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title"><input type="radio" aria-label="Radio button for following text input" value="2"> Todo el día</h4>
          
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="assets/img/theme/ocacion.uso.jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title"><input type="radio" aria-label="Radio button for following text input" value="3"> Fiestas día / noche</h4>
          
        </div>
      </div>

      <div class="card">
        <img class="card-img-top" src="assets/img/theme/ocacion.uso.jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title"><input type="radio" aria-label="Radio button for following text input" value="4"> 
Salida día / noche</h4>
          
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="assets/img/theme/ocacion.uso.jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title"><input type="radio" aria-label="Radio button for following text input" value="5"> Romántico</h4>
          
        </div>
      </div>
    </div>

  </div>
  <div class="row mb-10" style="margin-top:20px; margin-bottom:60px;float:right">
    <button type="button" class="btn btn-primary">Buscar</button>
  </div>
      <!-- Footer -->
      <footer class="py-7" id="footer-main" style="margin-top:60px;">
        <div class="container">
          <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
              <div class="copyright text-center text-xl-left text-muted">
                &copy; 2020 <a href="#" class="font-weight-bold ml-1" target="_blank">FashionAR</a>
              </div>
            </div>
            <div class="col-xl-6">
              <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                <li class="nav-item">
                  <a href="#" class="nav-link" target="_blank">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" target="_blank">Blog</a>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos Personales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Su información fue guardada con éxito!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
<style>
  #reloj:hover, #img:active, #img:focus {
        background-color: #97d2f4;
  }
  #trianguloInvertido:hover, #img:active, #img:focus {
        background-color: #fadb98;
  }
  #triangulo:hover, #img:active, #img:focus {
        background-color: #c3dfa5;
  }
  #ovalo:hover, #img:active, #img:focus {
        background-color: #f9c6d7;
  }
  #rectangulo:hover, #img:active, #img:focus {
        background-color: #c8bed9;
  }

</style>