<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/iCheck/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sweet-alert/css/sweetalert2.min.css">
  <script src="<?php echo base_url(); ?>assets/sweet-alert/js/sweetalert2.min.js"></script>

  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>assets/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url(); ?>assets/sweet-alert/js/sweetalert2.min.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/iCheck/icheck.min.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>

  <script src="<?php echo base_url(); ?>assets/input-mask/jquery.inputmask.js"></script>

  <script src="<?php echo base_url(); ?>assets/js/select2.full.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/bootstrap-notify-master/bootstrap-notify.min.js"></script>


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini wadah">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url() ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i><b>IT</b></i></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="<?php echo base_url() ?>/assets/img/utsg.png" width="80px"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo strtoupper($this->session->userdata('username')); ?></span></a>
<!--                   <a href="<?php echo base_url()?>profile/edit/<?php echo strEncrypt($this->session->userdata('id')); ?>" class="btn btn-default btn-flat">Profile</a>
 -->            
          </li>
          <li class="dropdown user user-menu">
                  <a href="<?php echo base_url()?>login/out" class="btn">Keluar</a>

          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url(); ?>dashboard">
            <i class="fa fa-dashboard"></i> Dashboard
          </a>
        </li>
        <?php $level = $this->session->userdata('level'); if ($level == 'admin') { ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o text-aqua"></i> Spesifikasi</a></li>
            <li><a href=""><i class="fa fa-circle-o text-aqua"></i> Model</a></li>
            <li><a href="<?php echo base_url(); ?>manufacturer"><i class="fa fa-circle-o text-aqua"></i> Manufacturer</a></li>
            <li><a href=""><i class="fa fa-circle-o text-aqua"></i> Unit</a></li>
            <li><a href=""><i class="fa fa-circle-o text-aqua"></i> Lokasi</a></li>
            <li><a href=""><i class="fa fa-circle-o text-aqua"></i> Sewa</a></li>
            <li><a href=""><i class="fa fa-circle-o text-aqua"></i> User</a></li>
          </ul>
        </li>
        <?php }?>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-check-square-o"></i>
            <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o text-aqua"></i> Spesifikasi</a></li>
            <li><a href=""><i class="fa fa-circle-o text-aqua"></i> Model</a></li>
            <li><a href=""><i class="fa fa-circle-o text-aqua"></i> Manufacturer</a></li>
            <li><a href=""><i class="fa fa-circle-o text-aqua"></i> Unit</a></li>
            <li><a href=""><i class="fa fa-circle-o text-aqua"></i> Lokasi</a></li>
            <li><a href=""><i class="fa fa-circle-o text-aqua"></i> Sewa</a></li>
            <li><a href=""><i class="fa fa-circle-o text-aqua"></i> User</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
      <?php echo $breadcumb ?>
      </ol>
      <h1>
        <?php echo $judul ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php $this->load->view($view); ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

</body>
</html>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>