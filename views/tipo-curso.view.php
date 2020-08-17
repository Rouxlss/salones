<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo RUTA; ?>/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Tipo de Cursos | Conexión
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo RUTA; ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo RUTA; ?>/assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo RUTA; ?>/assets/demo/demo.css" rel="stylesheet" />
  <link href="<?php echo RUTA; ?>/assets/css/cursost.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">  
      <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
      <!-- aqui esta la funcion de colores -->
      <div class="logo df">
        <a href="http://www.conexion.sv/" class="simple-text logo-normal">
         <img src="<?php echo RUTA; ?>/assets/img/conex.png" width="220" height="60"/>
        </a>
        <a href="" class="simple-text logo-normal">
        Reservacion de Salones
        </a>
      </div>
          <!-- interccion -->
      <div class="sidebar-wrapper dd" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./salonesAdmin.php">
              <i class="now-ui-icons design_app"></i>
              <p>Conexion Sedes</p>
            </a>
          </li>
          <li>
            <a href="./map.php">
              <i class="now-ui-icons location_world"></i>
              <p>Ubicaciones</p>
            </a>
          </li>
          <li>
            <a href="./cursosConfig.php">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Cursos</p>
            </a>
          </li>
          <li>
            <a href="./salones.php">
              <i class="now-ui-icons design-2_ruler-pencil"></i>
              <p>Salones </p>
            </a>
          </li>
          <li class="active ">
            <a href="./tipo-cruso.php">
              <i class="now-ui-icons education_paper"></i>  <!--education_glasses -->
              <p>Tipo de Cursos</p>
            </a>
          </li>
          <!-- <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li> -->
          <li>
            <a href="./reservaciones.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Reservacion</p>
            </a>
          </li>
          <li>
            <a href="./instructores.php">
              <i class="now-ui-icons business_badge"></i>
              <p>Instructores 
                </p>
            </a>
          </li>
          <!-- <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablos">Tipo de Cursos</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- Agrgar tipo de curso -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row lle">
          <div class="col-md-12">
            <div class="card borde">
              <div class="card-header">
                <h4 class="card-title"> Tipo de Cursos</h4>
              </div>
              <div class="card-body" >
                <div class="table-responsive" >
                      <div class="col-md-12 ">
                      <center>
                        <!-- modal -->
                          <button style="display: inline-block;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" title="Agregar curso">
                              <i class="now-ui-icons education_paper"></i>
                            </button>
                            <!-- activos -->
                            <button style="display: inline-block;" type="button" class="btn btn-primary nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" title="Cursos Activos">
                                <i class="now-ui-icons files_paper"></i>
                              </button>
                              <!-- inactivos -->
                              <button style="display: inline-block;" type="button" class="btn btn-primary" id="os-tab" data-toggle="tab" href="#os" role="tab" aria-controls="profile"title="Cursos inactivos">
                                  <i class="now-ui-icons ui-1_simple-remove"></i>
                                </button>

                                
                                </center>
                                  </div> 
                     
                      

                            <!-- modal para agregar tipo de cursos-->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content bodycon">
                                <div class="modal-header headcolor">
                                  <h5 class="modal-title gg" id="exampleModalLongTitle">Agregar tipo de curso</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="gg">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <input class="form-control" type="text" placeholder="Ingresa el tipo de curso">
                                   <br>
                                   <div class="pose">
                                   <select class="form-control pso">
                                      <option>Estado del curso</option>
                                    </select>
                                    <img src="<?php echo RUTA; ?>/assets/img/conexico.png" class="espacio">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                  <button type="button" class="btn btn-primary">Guardar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                            <!-- modal para agregar tipo de cursos-->    

                        <!-- INACTIVOS  -->
                        <div class="container register">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs nav-justified li" id="myTab" role="tablist">
                                        
                                        <li class="nav-item active">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#" role="tab" aria-controls="profile" aria-selected="true">Activos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="os-tab" data-toggle="tab" href="#os" role="tab" aria-controls="profile" aria-selected="false">inactivos</a>
                                        </li>
                                    </ul>
                                
                                         <!-- aqui esta el agregar curso  2-->
                                  
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <h3 class="register-heading"></h3>
                                            <div class="row register-form">
                                                <div class="col-md-12 date">
                                                    <form method="post">
                                                        
                                                </div>
                                            </div>
                                          </div>
                                        <!-- aqui esta el activo data table 3 -->
                                        <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <h3  class="register-heading"></h3>
                                            <div class="row register-form">
                                                <div class="col-md-12">
                                                    <form method="post">
                                                       
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                       <!-- Aqui esta los cursos inactivos  -->
                                        <div class="tab-pane fade show text-align form-new" id="os" role="tabpanel" aria-labelledby="os-tab">
                                            <h3  class="register-heading"></h3>
                                            <div class="row register-form">
                                                <div class="col-md-12">
                                                    <form method="post">
                                                       

                                                       </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                </div>
              </div>
            </div>
          </div>
    </center>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
   <!-- Agrgar tipo de curso -->
  <!--   Core JS Files   -->
  <script src="<?php echo RUTA; ?>/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo RUTA; ?>/assets/js/core/popper.min.js"></script>
  <script src="<?php echo RUTA; ?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo RUTA; ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo RUTA; ?>/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo RUTA; ?>/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>