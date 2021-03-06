<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"> -->
  <link rel="icon" type="image/png" href="<?php echo RUTA; ?>/assets/img/icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Ubicacion | Conexión
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
          <li >
            <a href="./salonesAdmin.php">
              <i class="now-ui-icons design_app"></i>
              <p>Conexion Sedes</p>
            </a>
          </li>
          <li class="active ">
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
            <a class="navbar-brand" href="#pablo">Ubicaciones</a>
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
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
           <div class="col-md-12" style="position: fixed;">  <!--  esta es la posicion del mapa -->
            <div class="card ">
              <div class="card-header ">
                Google Maps
              </div>
              <div class="card-body ">
                <div id="" class=""></div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62019.68755336242!2d-89.22664726777337!3d13.70448657583977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f633768ab7089d3%3A0x43d19cf512090fa0!2sConexion%20Soyapango!5e0!3m2!1ses-419!2ssv!4v1574961524314!5m2!1ses-419!2ssv" width="930" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Timdd
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer> -->
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
  <!--  Notifications Plugin    -->
  <script src="<?php echo RUTA; ?>/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo RUTA; ?>/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initGoogleMaps();
    });
  </script>
</body>

</html>