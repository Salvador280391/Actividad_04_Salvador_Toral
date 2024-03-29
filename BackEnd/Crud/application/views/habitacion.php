

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?=$titulo;?></title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?=base_url()?>assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=base_url()?>assets/demo/demo.css" rel="stylesheet" />
  <?php
    foreach($css_files as $file):
    ?>
    <link rel="stylesheet" href="<?=$file;?>">
    <?php
     endforeach;
    ?>
</head>
<body class="" data-image="<?=base_url()?>img/fondo.jpg">
  <div class="wrapper ">
    <div class="sidebar" data-background-color="white" data-image="<?=base_url()?>assets/img/sidebar-3.jpg">
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>index.php/Admin">
              <i class="material-icons">home</i>
              <p>INCIO</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=base_url()?>index.php/Reservacion">
              <i class="material-icons">dashboard</i>
              <p>RESERVACIONES</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=base_url()?>index.php/Habitacion">
              <i class="material-icons">dashboard</i>
              <p>HABITACIONES</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=base_url()?>index.php/Usuario">
              <i class="material-icons">group</i>
              <p>USUARIOS</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=base_url()?>index.php/Cliente">
              <i class="material-icons">group</i>
              <p>CLIENTES</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=base_url()?>index.php/Noticia">
              <i class="material-icons">library_books</i>
              <p>NOTICIAS</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=base_url()?>index.php/Comentario">
              <i class="material-icons">library_books</i>
              <p>COMENTARIOS</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=base_url()?>index.php/Mensaje">
              <i class="material-icons">library_books</i>
              <p>MENSAJES</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>

          
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="<?=base_url();?>index.php/Login/exit">Cerrar Sesión</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?=base_url();?>index.php/Login">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        
        </div>
      </nav>
<div class="content">
  <div>
        <?=$output;?>
    <?php foreach($js_files as $files): 
    ?>
    <script src="<?=$files;?>">
    </script>
    <?php endforeach; 
    ?>   
    </div>         
</div>

<footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a target="_blank">Creative Tim</a> EliteTeam
          </div>
        </div>
      </footer>

  <!--   Core JS Files   -->
  <script src="<?=base_url()?>assets/js/core/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/js/core/popper.min.js"></script>
  <script src="<?=base_url()?>assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="<?=base_url()?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="<?=base_url()?>assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="<?=base_url()?>assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="<?=base_url()?>assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="<?=base_url()?>assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?=base_url()?>assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?=base_url()?>assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="<?=base_url()?>assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?=base_url()?>assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="<?=base_url()?>assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="<?=base_url()?>assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="<?=base_url()?>assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?=base_url()?>assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="<?=base_url()?>assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="<?=base_url()?>assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?=base_url()?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url()?>assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?=base_url()?>assets/demo/demo.js"></script>

</body>

</html>
