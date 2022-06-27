<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rental Kamera </title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{asset('assets/plugins2/fontawesome-free/css/all.min.css')}}">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Tempusdominus Bootstrap 4 -->
   <link rel="stylesheet" href="{{asset('assets/plugins2/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
   <!-- iCheck -->
   <link rel="stylesheet" href="{{asset('assets/plugins2/icheck-bootstrap/icheck-bootstrap.min.css')}}">
   <!-- JQVMap -->
   <link rel="stylesheet" href="{{asset('assets/plugins2/jqvmap/jqvmap.min.css')}}">
   <!-- Theme style -->
   <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
   <!-- overlayScrollbars -->
   <link rel="stylesheet" href="{{asset('assets/plugins2/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="{{asset('assets/plugins2/daterangepicker/daterangepicker.css')}}">
   <!-- summernote -->
   <link rel="stylesheet" href="{{asset('assets/plugins2/summernote/summernote-bs4.min.css')}}">
   <!-- fullCalendar -->
   <link rel="stylesheet" href="{{asset('assets/plugins2/fullcalendar/main.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/plugins2/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins2/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins2/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
 {{--  --}}
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


</head>
<body class="dark-mode hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="90" width="90">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
<!-- left Navbar -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
  </li>
 
<div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <li class="active"style="padding-left:20px; margin-top:10px">
            <a href="{{route('home')}}"><span class="glyphicon glyphicon-home" style="color:aliceblue">Home</span></a>
        </li>
        <li style="padding-left:20px; margin-top:10px">
            <a href="{{route('about')}} " style="color:aliceblue">About</a>
        </li>
        <li style="padding-left:20px; margin-top:10px">
            <a href="{{route('contact')}}" style="color:aliceblue">Contact</a>
        </li>
        <li class="dropdown"style="padding-left:20px; margin-top:10px">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:aliceblue">Category <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{route('categoryDLSR')}}" style="color:aliceblue">DSLR</a>
                </li>
                <li>
                    <a href="{{route('categoryMirrorless')}}" style="color:aliceblue">Mirrorless</a>
                </li>
                <li>
                    <a href="{{route('categoryActionCamera')}}" style="color:aliceblue">Action Camera</a>
                </li>
                <li>
                    <a href="{{route('categoryVideoSupport')}}" style="color:aliceblue">Video Support</a>
                </li>
            
            </ul>
        </li>
            <li class="dropdown" style="padding-left: 800px">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fas fa-user" style="width:10px; height: 10px;"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header">Profile</span>
                  <div class="dropdown-divider"></div>
                  <a href="{{Route('profile')}}" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> Profile
                  </a>
                
                  <div class="dropdown-divider"></div>
                  <a href="{{Route('login')}}" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> logout
                   
                  </a>
                 
              </li>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li>
            <span class="glyphicon glyphicon-user"></span>
        </li>
    </ul>
</div>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">Juragan Kamera</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
               
                <div class="card mb-3" style="max-width: 250px;">
                    <div class="row no-gutters">
                      <div class="col-md-3">
                        <img src="{{asset('images/1.png')}}" alt="..." style="width:80px; height:120px; opacity: 0.8;">
                      </div>
                      <div class="col-md-5" style="margin-left:10px">
                        <div class="card-body">
                          <h5 class="card-title">Luthfi Handika </h5>
                          <p class="card-text">Customer</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
               </li>
          <li class="nav-item menu-open">
            <a href="{{Route('dashboardDetail')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="{{Route('disewaDetail')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Transaksi Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{Route('pengambilan')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Pengambilan Barang
              </p>
            </a>
            
          </li>
          
          <li class="nav-item">
            <a href="{{Route('pengembilan')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Pengembilan Barang
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@yield('dashboard')

 <!-- jQuery -->
 <script src="{{asset('/assets/plugins2/jquery/jquery.min.js')}}"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="{{asset('/assets/plugins2/jquery-ui/jquery-ui.min.js')}}"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
   $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
 <script src="{{asset('assets/plugins2/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <!-- ChartJS -->
 <script src="{{asset('assets/plugins2/chart.js/Chart.min.js')}}"></script>
 <!-- Sparkline -->
 <script src="{{asset('assets/plugins2/sparklines/sparkline.js')}}"></script>
 <!-- JQVMap -->
 <script src="{{asset('assets/plugins2/jqvmap/jquery.vmap.min.js')}}"></script>
 <script src="{{asset('assets/plugins2/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
 <!-- jQuery Knob Chart -->
 <script src="{{asset('assets/plugins2/jquery-knob/jquery.knob.min.js')}}"></script>
 <!-- daterangepicker -->
 <script src="{{asset('assets/plugins2/moment/moment.min.js')}}"></script>
 <script src="{{asset('assets/plugins2/daterangepicker/daterangepicker.js')}}"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="{{asset('assets/plugins2/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
 <!-- Summernote -->
 <script src="{{asset('assets/plugins2/summernote/summernote-bs4.min.js')}}"></script>
 <!-- overlayScrollbars -->
 <script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
 <!-- AdminLTE App -->
 <script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="{{asset('assets/dist/js/demo.js')}}"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>
 <!-- fullCalendar 2.2.5 -->
 <script src="{{asset('assets/plugins2/fullcalendar/main.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/plugins2/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins2/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins2/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins2/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins2/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins2/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins2/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins2/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins2/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins2/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins2/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins2/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</body>
</html>
