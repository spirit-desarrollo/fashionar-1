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
    
<div class="header pb-6 d-flex align-items-center" style="min-height: 400px; background-image: url(assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hola Noe!</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <!--a href="#!" class="btn btn-neutral">Edit profile</a-->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="assets/img/theme/team-4.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                      <span class="heading">22</span>
                      <span class="description">Friends</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">Photos</span>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <span class="description">Comments</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                  Jessica Jones<span class="font-weight-light">, 27</span>
                </h5>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Bucharest, Romania
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Solution Manager
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>University of Computer Science
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <!--div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div-->
            <div class="card-body">
              <form class="needs-validation" novalidate="">
                <h6 class="heading-small text-muted mb-4">Perfil</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nombre</label>
                        <input type="text" id="input-username" class="form-control" placeholder="Nombre" value="lucky.jesse" required>
                                              <div class="valid-feedback">
                        Looks good!
                      </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-apellido">Apellido</label>
                        <input type="text" id="input-apellido" class="form-control" placeholder="Apellido" value="lucky.jesse">
                      </div>
                    </div>                                           
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email</label>
                        <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-apodo">Apodo (opcional)</label>
                        <input type="text" id="input-apodo" class="form-control" placeholder="Apodo" value="lucky.jesse">
                      </div>
                    </div>  
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Información personal</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Fecha de nacimiento</label>
                        <!--input id="input-fecha" class="form-control" placeholder="Home Address" value="03/08/1985" type="text"-->
                        <input class="form-control" type="date" value="2018-11-23" id="input-fecha">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">País de residencia</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Argentina</option>
                              <option>Brasil</option>
                              <option>Chile</option>
                              <option>Uruguay</option>
                            </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Provincia/ Región /estado</label>
                            <select class="form-control" id="provincia">
                              <option>Capital Federal</option>
                              <option>Buenos Aires</option>
                              <option>Chaco</option>
                              <option>Formosa</option>
                            </select>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Acerca de mí</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Ocupación/profesión</label>

                            <select class="form-control" id="ocupacion">
                              <option>Estudiante</option>
                              <option>Empleado</option>
                              <option>Profesional</option>
                            </select>
                      </div>
                    </div>  
                  </div>
                  <div class="row">                                                   
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Objetivo de imagen</label>
                         <select class="form-control" id="ocupacion">
                          <option>Potenciar mi imagen personal</option>
                          <option>Potenciar mi imagen profesional</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label">Prendas que me gustaría aprender a usar</label>
                               <select class="form-control" id="prendas">
                                <option>Pañuelos/pashminas</option>
                                <option>Monoprendas</option>
                              </select>
                        </div>
                    </div>
                  </div> 
                </div>
                <hr class="my-4" />
                <h6 class="heading-small text-muted mb-4">Novedades</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <div class="custom-control custom-control-alternative custom-checkbox">
                          <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                          <label class="custom-control-label" for="customCheckRegister">
                            <span class="text-muted">Suscríbete al newsletter</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="text-right">
                      <button type="submit" class="btn btn-primary mt-4" data-toggle="modal" data-target="#exampleModal">Guardar</button>
                    </div>
                </div>
            </div>
                     
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="py-5" id="footer-main">
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