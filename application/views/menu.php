<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mi Turno</title>

  <!-- Custom fonts for this template-->
  <link href="<?=base_url()?>assets_template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=base_url()?>assets_template/css/sb-admin-2.min.css" rel="stylesheet">

   <!-- Custom styles for this page -->
  <link href="<?=base_url()?>assets_template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php  $rol = $this->session->userdata('rol'); ?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-heartbeat"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TURNOS</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard x
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Obtener un turno</span></a>
      </li>
      -->

      <!-- Divider -->
      <hr class="sidebar-divider">

       <?php          
          if ($rol == 'ROLE_CLIENT_USER') {                                    
      ?>
      <div class="sidebar-heading">
        Turnos
      </div>

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGestionar" aria-expanded="true" aria-controls="collapseGestionar">
          <i class="fas fa-tasks"></i>
          <span>Gestionar</span>
        </a>
        <div id="collapseGestionar" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!--6 class="collapse-header">Custom Components:</h6-->
            <a class="collapse-item" href="<?=base_url()?>Welcome/obtener_turno">Obtener turno</a>
            <a class="collapse-item" href="<?=base_url()?>Welcome/ver_turnos">Ver turnos</a>
            <a class="collapse-item" href="cards.html">Cancelar turno</a>
          </div>
        </div>
      </li>
       

      <hr class="sidebar-divider">
      <?php          
          }           
      ?>


       <?php          
          if ($rol == 'ROLE_SYSTEM_ADMIN') {                                    
      ?>
      <div class="sidebar-heading">
        Clínica
      </div>

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdministrar" aria-expanded="true" aria-controls="collapseAdministrar">
          <i class="fas fa-tasks"></i>
          <span>Administrar</span>
        </a>
        <div id="collapseAdministrar" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!--6 class="collapse-header">Custom Components:</h6-->
            <a class="collapse-item" href="<?=base_url()?>Welcome/ver_turnos">Turnos</a>
            <a class="collapse-item" href="<?=base_url()?>Welcome/obtener_turno">Profesionales</a>
            <a class="collapse-item" href="<?=base_url()?>Welcome/ver_turnos">Especialidades</a>
            <a class="collapse-item" href="cards.html">Usuarios</a>
          </div>
        </div>
      </li>      
     
      <hr class="sidebar-divider">
      <?php          
          }           
      ?>

      <!-- Heading -->
      <div class="sidebar-heading">
        Opciones
      </div>

      <?php          
          if ($rol == 'ROLE_CLIENT_USER' | $rol == 'ROLE_SYSTEM_ADMIN') {                                    
      ?>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Welcome/cambiar_contrasenia">
          <i class="fas fa-lock"></i>
          <span>Cambiar contraseña</span></a>
      </li>
      <?php          
          }           
      ?>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Login/logout">
          <i class="fas fa-sign-out-alt"></i>
          <span>Salir</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
