
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
          <li>
            <a href="./map.php">
              <i class="now-ui-icons location_world"></i>
              <p>Ubicaciones</p>
            </a>
          </li>
          <li>
            <a href="./cursos.php">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Cursos</p>
            </a>
          </li>
          <li class="active ">
            <a href="./salones.php">
              <i class="now-ui-icons design-2_ruler-pencil"></i>
              <p>Salones </p>
            </a>
          </li>
          <li>
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
            <a class="navbar-brand" href="#pablo"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
             
            </form>
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
      <div class="panel-header panel-header-sm" style="height: 0 !important;">
      </div>
      <div class="content" style="margin-top: -60px  !important;">
        <div class="row" style="display: grid !important;">
          <div class="col-md-12" style="display: grid !important;">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Conexion Soyapango</h5>
              </div>
               <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                          <div class="container">
                            <div class="blog-slider" style="max-width:680px;" >
                              <div class="blog-slider__wrp swiper-wrapper">
                                <div class="blog-slider__item swiper-slide">
                                  <div class="blog-slider__img">
                                    <img src="<?php echo RUTA; ?>/assets/img/cds1.PNG" alt="">
                                  </div>
                                  <!-- salon 1  -->
                                  <div class="blog-slider__content">
                                    <span class="blog-slider__code">CDS 1</span>
                                    <div class="blog-slider__title">Sal&oacute;n Jean</div>
                                    <div class="blog-slider__text"></div>
                                    <!-- <a href="" class="blog-slider__button" data-toggle="modal" data-target="#cds1" style="text-decoration: none;">Reservar</a> -->
                                    <button type="button" class="btn btn-primary but"data-toggle="modal" data-target="#cds1" >Reservar</button>
                                  </div>
                                </div>
                                <!-- modal -->
                                <!-- modal -->

                                <!-- salon 2 -->
                                <div class="blog-slider__item swiper-slide">
                                  <div class="blog-slider__img">
                                    <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759871/jason-leung-798979-unsplash.jpg" alt="">
                                  </div>
                                  <div class="blog-slider__content">
                                    <span class="blog-slider__code">Area administrtiva</span>
                                    <div class="blog-slider__title">Sal&oacute;n Joan</div>
                                    <div class="blog-slider__text"></div>
                                    <!-- <a href="#" class="blog-slider__button" style="text-decoration: none;">Reservar</a> -->
                                    <button type="button" class="btn btn-primary but" data-toggle="modal" data-target="#cds2" >Reservar</button>
                                  </div>
                                </div>
                               
                              <!-- salon 3  -->
                                <div class="blog-slider__item swiper-slide">
                                  <div class="blog-slider__img">
                                    <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759871/alessandro-capuzzi-799180-unsplash.jpg" alt="">
                                  </div>
                                  <div class="blog-slider__content">
                                    <span class="blog-slider__code">Aula taller</span>
                                    <div class="blog-slider__title">Sal&oacute;n Grace 1</div>
                                    <div class="blog-slider__text"></div>
                                    <!-- <a href="#" class="blog-slider__button" style="text-decoration: none;">Reservar </a> -->
                                    <button type="button" class="btn btn-primary but" data-toggle="modal" data-target="#cds3" >Reservar</button>
                                  </div>
                                </div> 
                                <!-- modal -->
                                <!-- modal -->

                               <!-- salon 4  -->
                                <div class="blog-slider__item swiper-slide">
                                  <div class="blog-slider__img">
                                    <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759871/jason-leung-798979-unsplash.jpg" alt="">
                                  </div>
                                  <div class="blog-slider__content">
                                    <span class="blog-slider__code">Sala de Reuniones</span>
                                    <div class="blog-slider__title">Sal&oacute;n Ada</div>
                                    <!-- <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div> -->
                                    <!-- <a href="#" class="blog-slider__button" style="text-decoration: none;" >Reservar</a> -->
                                    <button type="button" class="btn btn-primary but" data-toggle="modal" data-target="#cds4">Reservar</button>
                                  </div>
                                </div>
                              </div>
                              <div class="blog-slider__pagination"></div>
                            </div>
                          </div>
                          <!-- modal -->
                                <!-- modal -->

                                
                        <!-- <label>Addrlllss</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"> -->
                      </div>
                    </div>
                  </div>
                 
                </form>
              </div>
            </div>
          </div>
        
    </div>
  </div>

  <!-- Modalsss -->
<div class="modal fade" id="cds1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content f">
      <div class="modal-header hh">
        <!-- <img src="../assets/img/ici.png" width="10%" height="10%"> -->
        <h5 class="modal-title" id="exampleModalLongTitle">Salon jean </h5>
        <button type="button" class="close c" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="co">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div id="datepicker">
                    <div class="col-md-12">
                        <input class=" range" placeholder="Fecha inicio" type="text">
                    </div>
                    <div class="col-auto">
                        <input class=" range" placeholder="Fecha fin" type="text">
                    </div>
                </div>
              </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ss">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- modal 2 -->
<div class="modal fade" id="cds2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content f">
      <div class="modal-header hh">
        <h5 class="modal-title" id="exampleModalLongTitle">Salón Joan</h5>
        <button type="button" class="close c" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ss">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- modal 3 -->
<div class="modal fade" id="cds3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content f">
      <div class="modal-header hh">
        <h5 class="modal-title" id="exampleModalLongTitle">Salón Grace</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="co" >&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ss">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- modal 4 -->
<div class="modal fade" id="cds4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content f">
      <div class="modal-header hh">
        <h5 class="modal-title" id="exampleModalLongTitle">Salón Ada</h5>
        <button type="button" class="close c" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="co">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ss">Guardar</button>
      </div>
    </div>
  </div>
</div>