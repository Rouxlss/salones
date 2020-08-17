<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo RUTA; ?>/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo RUTA; ?>/assets/img/icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Cursos | Conexión
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
  <link href="<?php echo RUTA; ?>/assets/css/" rel="stylesheet" />
  <link href="<?php echo RUTA; ?>/assets/css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="<?php echo RUTA; ?>/assets/css/cursost.css" rel="stylesheet" />
 
</head>


<!-- cerrar cuenta modal -->
<div class="modal fade" id="exampleModalCenterr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Seguro que quieres cerrar sesión </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


<!-- cerrar cuenta -->

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
          <li  class="active ">
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
            <a class="navbar-brand" href="#pabloA">Notifications</a>
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
            </form> esto es la busqueda idea!!! -->
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
                <a class="nav-link" href="#pabloSS" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenterr">
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
      <div class="panel-header" style="height: 242px !important;">
        <div class="header text-center">
          <h2 class="title">Cursos </h2>
          <p class="category">
            <a target="_blank" style="text-decoration: none;">Selecciona el curso y completa los siguientes campos.</a>
          </p>
        </div>
      </div>
      <div class="container" style="padding: 0px 30px 7px !important; min-height: 0 !important; margin-top: -115px !important;">
        <div class="row">
          <div class="col-md-12">
            <center>
                <div class="card margen-pequeño">
                    <div class="card-body"  >
                      <div class="places-buttons">
                        <div class="row"> 
                        </div>
                                <div class="container register">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="padding-left: 0 !important; padding-right: 0 !important;">
                                                <li class="nav-item">
                                                    <a class="nav-link active ffr" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Agregar curso</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Activos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="os-tab" data-toggle="tab" href="#os" role="tab" aria-controls="profile" aria-selected="false">inactivos</a>
                                                </li>
                                            </ul>
                                        
                                                 <!-- aqui esta el agregar curso  2-->
                                          
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <h3 class="register-heading">Tipo de curso</h3>
                                                    <div class="row register-form">
                                                        <div class="col-md-12 date">
                                                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                                                <div class="form-group">
                                                                  <div class="unocel">
                                                                  <select class='form-control dt-tb' name='tipoCurso' required>
                                                              
                                                                            <option value='AT. Área Técnica'>AT. Área Técnica</option>
                                                                            <option value='CC. Cursos Cerrados'>CC. Cursos Cerrados</option>
                                                                            <option value='CE. Cursos Especializados'>CE. Cursos Especializados</option>
                                                                    </select>  
                                                                   
                                                                    <br>
                                                                    
                                                                   
                                                                    <select class='form-control dt-tb' name='centroFormacion' required>
                                                                          
                                                                            <option value='San Benito'>San Benito</option>
                                                                            <option value='Soyapango'>Soyapango</option>
                                                                    </select>                                                                                                                                         </div>

                                                                        <br>
                                                                    <input type="text" name="nombreCurso" class="form-control" placeholder="Nombre del curso" value="" required=""/>
                                                                
                                                                <br>
                                                                <div class="p">
                                                                    
                                                                    </div>
                                                                    <br>
                                                                  <div class="container">
                                                                    <div class="row">
                                                                      <div class="col">
                                                                        <input type="date" name="fechaInicio" placeholder="Inicio del curso" class="range form-control">
                                                                      </div>
                                                                      <div class="col">
                                                                          <input type="date" name="fechaFin" placeholder="Fin del curso" class="range form-control">
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                  <br>
                                                                  <select class='form-control' name='estado' required>
                                                                            <option value='1'>Activo</option>
                                                                            <option value='0'>Inactivo</option>
                                                                    </select>     
                                                        
                                                                <div class="form-group">  
                                                                    <input type="submit" class="btn btn-primary" value="Agregar curso">
                                                                </div>
                                                              </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
      
      
      
                                                <!-- aqui esta el activo data table 3 -->
                                                <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                    <h3  class="register-heading">Cursos activos</h3>
                                                    <div class="row register-form">
                                                        <div class="col-md-12">
                                                            <form method="post">
                                                            <table class="table">



  <thead>
    <tr>
      <th scope="col">Curso</th>
      <th scope="col">Tipo de curso</th>
      <th scope="col">Centro de formación</th>
      <th scope="col">Fecha de inicio</th>
      <th scope="col">Fecha de finalización</th>
    </tr>
  </thead>
  <tbody>
        
    <?php foreach($data as $row): ?>
    
    <tr>
    <td><?php echo $row['nombreCurso'];?></td>
    <td><?php echo $row['tipoCurso'];?></td>
    <td><?php echo $row['centroFormacion'];?></td>
    <td><?php echo $row['fechaInicio'];?></td>
    <td><?php echo $row['fechaFin'];?></td>
  </tr>
  

      <?php endforeach ?>
  </tbody>
</table>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                               <!-- Aqui esta los cursos inactivos  -->
                                                <div class="tab-pane fade show text-align form-new" id="os" role="tabpanel" aria-labelledby="os-tab">
                                                    <h3  class="register-heading">Cursos inactivos</h3>
                                                    <div class="row register-form">
                                                        <div class="col-md-12">
                                                            <form method="post">
                                                            <table class="table">



<thead>
  <tr>
    <th scope="col">Curso</th>
    <th scope="col">Tipo de curso</th>
    <th scope="col">Centro de formación</th>
    <th scope="col">Fecha de inicio</th>
    <th scope="col">Fecha de finalización</th>
  </tr>
</thead>
<tbody>
      
  <?php foreach($datas as $row): ?>
  
  <tr>
  <td><?php echo $row['nombreCurso'];?></td>
  <td><?php echo $row['tipoCurso'];?></td>
  <td><?php echo $row['centroFormacion'];?></td>
  <td><?php echo $row['fechaInicio'];?></td>
  <td><?php echo $row['fechaFin'];?></td>
</tr>


    <?php endforeach ?>
</tbody>
</table>

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
         
        <!-- <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
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
  