
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo RUTA; ?>/assets/img/apple-icon.png">
   <link rel="icon" type="image/png" href="<?php echo RUTA; ?>/assets/img/icon.png">
   <link rel="icon" type="image/png" href="<?php echo RUTA; ?>/assets/img/icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Practicantes | Conexión
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
  <link href="<?php echo RUTA; ?>/assets/css/style.css" rel="stylesheet" />
  <link href="<?php echo RUTA; ?>/assets/css/style.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          <img src="<?php echo RUTA; ?>/assets/img/conex.png" width="220" height="60"/>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          INSTRUCTORES
        </a>
      </div>
          <!-- interccion -->
      <div class="sidebar-wrapper dd" id="sidebar-wrapper">
        <ul class="nav">
          <li >
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
          <li>
            <a href="./tipo-curso.php">
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
          <li class="active ">
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
            <a class="navbar-brand" href="#pablo">INSTRUCTORES</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form> -->
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
      <!-- End Navbar -->
      
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content posr">
        <div class="row"></div>
          <div class="ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header text-center">
                
              </div>
              <!-- <div class="card-body">
                <div class="table-responsive table-upgrade">
                  <table class="table">
                    
                    <tbody>
                      <tr>
                        <td>Components</td>
                        <td class="text-center">16</td>
                        <td class="text-center">160</td>
                      </tr>
                      <tr>
                        <td>Plugins</td>
                        <td class="text-center">4</td>
                        <td class="text-center">13</td>
                      </tr>
                      <tr>
                        <td>Example Pages</td>
                        <td class="text-center">7</td>
                        <td class="text-center">27</td>
                      </tr>
                      <tr>
                        <td>Login, Register, Pricing, Lock Pages</td>
                        <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>DataTables, VectorMap, SweetAlert, Wizard, jQueryValidation, FullCalendar etc...</td>
                        <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>Mini Sidebar</td>
                        <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>Premium Support</td>
                        <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="text-center">Free</td>
                        <td class="text-center">Just $49</td>
                      </tr>
                      <tr>
                        <td class="text-center"></td>
                        <td class="text-center">
                          <a href="#" class="btn btn-round btn-default disabled">Current Version</a>
                        </td>
                        <td class="text-center">
                          <a target="_blank" href="https://www.creative-tim.com/product/now-ui-dashboard-pro?ref=nud-free-upgrade-live" class="btn btn-round btn-primary">Upgrade to PRO</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div> -->
           
             
              <main>
                  <!-- <div class="container"> -->
                  <!--card with shadow-->
                    <article class="card shadow">
                        <div class="row">
                          <div class="col-md-4">
                              <div>
                                <img src="https://images.unsplash.com/photo-1540317700647-ec69694d70d0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="image">
                              </div>
                          </div>
                          <div class="col-md-8">
                              <div>
                                  <p><strong>Carlos hernadez</strong></p>
                                  <span>
                                    <i class="fab fa-instagram"></i>
                                     Instagram - <time>10 min ago</time>
                                   </span>
                                </div>
                          </div>
                        </div>
                    </article>
                    
                     
                  <!--card with border-->
                  <article class="card shadow">
                      <div class="row">
                        <div class="col-md-4">
                            <div>
                              <img src="https://images.unsplash.com/photo-1540317700647-ec69694d70d0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="image">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div>
                                <p><strong>Victor Morales de leon</strong></p>
                                <span>
                                  <i class="fab fa-instagram"></i>
                                   Instagram - <time>10 min ago</time>
                                 </span>
                              </div>
                        </div>
                      </div>
                  </article>
                  <!--card with shadow curve-->
                    <!-- <article class="card shadow curve">
                      <div>
                        <img src="https://images.unsplash.com/photo-1506202687253-52e1b29d3527?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="image">
                      </div>
                
                      <div>
                        <p><strong>Lorem ipsum dolor sit dolor sit amet, conse ctetur adipis icing elit...</strong></p>
                        <span>
                          <i class="fab fa-twitter"></i>
                            Twitter - <time>28 min ago</time>
                         </span>
                      </div>
                    </article> -->
                    <article class="card shadow">
                        <div class="row">
                          <div class="col-md-4">
                              <div>
                                <img src="https://images.unsplash.com/photo-1540317700647-ec69694d70d0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="image">
                              </div>
                          </div>
                          <div class="col-md-8">
                              <div>
                                  <p><strong>Genaro Martinez</strong></p>
                                  <span>
                                    <i class="fab fa-instagram"></i>
                                     Instagram - <time>10 min ago</time>
                                   </span>
                                </div>
                          </div>
                        </div>
                    </article>
                  <!--card with curve and border-->
                  <article class="card shadow">
                      <div class="row">
                        <div class="col-md-4">
                            <div>
                              <img src="https://images.unsplash.com/photo-1540317700647-ec69694d70d0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="image">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div>
                                <p><strong>Paola vanessa</strong></p>
                                <span>
                                  <i class="fab fa-instagram"></i>
                                   Instagram - <time>10 min ago</time>
                                 </span>
                              </div>
                        </div>
                      </div>
                  </article>
                    
                  <!-- </div> -->
                </main>
                
                
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo RUTA; ?>/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo RUTA; ?>/assets/js/core/popper.min.js"></script>
  <script src="<?php echo RUTA; ?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo RUTA; ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo RUTA; ?>/assets/js/plugins/chartjs.min.js"></script>
  <script src="<?php echo RUTA; ?>/assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo RUTA; ?>/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo RUTA; ?>/assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo RUTA; ?>/assets/demo/demo.js"></script>
</body>

</html>