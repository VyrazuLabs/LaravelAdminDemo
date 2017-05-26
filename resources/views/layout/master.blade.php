<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  @yield('meta')
  <link rel="shortcut icon" type="image/jpg" href="../img/favicon.jpg"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('css/font-awesome/css/font-awesome.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('css/_all-skins.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('css/iCheck/blue.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ url('css/datepicker3.css') }}">
   <!-- daterange picker -->
  <link rel="stylesheet" href="{{ url('css/daterangepicker.css') }}">
  <!--timepicker-->
  <link rel="stylesheet" href="{{ url('css/bootstrap-timepicker.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('css/dataTables.bootstrap.css') }}">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ url('css/owl.theme.css') }}">
  <!-- font family -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>

  <!-- PNOTIFY -->
  <link rel="stylesheet" href="{{ url('css/pnotify.custom.min.css') }}">
  
  <!-- Custom Css -->
  <link rel="stylesheet" href="{{ url('css/admin-section.css') }}">

   <link rel="stylesheet" type="text/css" href="{{ url('css/chosen.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ url('css/chosen.css') }}">

  <!-- dataTables options -->
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Test</b>Project</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->

          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
                <!-- type 0 is super admin -->
                
                    <span class="label label-success"></span>
                  
            </a>
            
            <ul class="dropdown-menu">
              <li class="header"></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
                      
                </ul>
              </li>
              <li class="footer"><a></a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <img src="{{ url('#') }}" alt="..." class="user-image" alt="User Image">
              <span class="hidden-xs"></span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                
                <img src="{{ url('#') }}" alt="..." class="img-circle" alt="User Image">
                <p>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  
                    <a href="{{url('#')}}" class="btn btn-default btn-flat">Profile</a>
                  
                </div>
                <div class="pull-right">
                  <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <li><a href="{{url('/#')}}"><i class="fa fa-home"></i></a></li>
          <!-- Sign Out -->
          <li>
            <a href="{{url('/logout')}}"><i class="fa fa-sign-out"></i></a>

          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     <!-- Sidebar user panel -->
     
      <div class="user-panel">
        <div class="image">
         
          <img src="{{ url('#') }}" alt="..." class="img-circle center-block" alt="User Image">
        </div>
        <div class="text-center info info-head-custom">
          <p></p>
          
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
      <ul class="sidebar-menu">
       
          <li class="active treeview">
            <a href="{{ url('/admin_rwt/dashboard') }}">
              <i class="fa fa-dashboard"></i><span>Dashboard</span>
            </a>
          </li>
          
          <li class="treeview"><a href="#"><i class="fa fa-building-o"></i><span>User</span><i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/admin_rwt/user/create') }}"><i class="fa fa-plus-square-o"></i><span>Create User</span></a></li>
              <li><a href="{{ url('/admin_rwt/user/list')}}"><i class="fa fa-list"></i><span>User List</span></a></li>
            </ul>
          </li>
          <li class="treeview"><a href="#"><i class="fa fa-building-o"></i><span>Company</span><i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/admin_rwt/company/create') }}"><i class="fa fa-plus-square-o"></i><span>Create Company</span></a></li>
              <li><a href="{{ url('/admin_rwt/company/list')}}"><i class="fa fa-list"></i><span>Company List</span></a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="{{ url('/admin_rwt/original-list') }}">
              <i class="fa fa-pencil-square-o"></i><span>Original List</span>
            </a>
          </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- container section start -->
    @yield('content')
  <!-- container fluid section end -->
 
<footer class="main-footer">
    <strong>Copyright &copy; 2016-2017 <a href="#">Vyrazu Labs</a>.</strong> All rights
    reserved.
  </footer>
  
</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="{{ url('js/jQuery-2.2.0.min.js') }}"></script>

<!-- Bootstrap 3.3.5 -->
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<!-- datepicker -->
<script src="{{ url('js/bootstrap-datepicker.js') }}"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ url('js/daterangepicker.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('js/app.min.js') }}"></script>
<!-- nicescroll -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<!-- owl carousel  -->
<script type="text/javascript" src="{{ url('js/owl.carousel.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ url('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('js/dataTables.bootstrap.min.js') }}"></script>

 <!-- dataTables options -->
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script> 
<!-- PNOTIFY js -->
<script type="text/javascript" src="{{ url('js/pnotify.custom.min.js') }}"></script>
<script src="{{ url('js/chosen.jquery.js') }}"></script>
<script src="{{ url('js/chosen.jquery.min.js') }}"></script>
<!--timepicker-->
<script src="{{ url('js/bootstrap-timepicker.min.js') }}"></script>
<!-- custom js -->
{{-- <script type="text/javascript" src="{{ url('js/custom.js') }}"></script> --}}
<script type="text/javascript">
  //Date picker
    $('#datepicker').datepicker({
      "setDate": new Date(),
      autoclose: true
    });

    //PNOTIFY GLOBAL POPUPS
    @if( session('success') )
      new PNotify({
          title: 'Success',
          text: '{{ session("success") }}',
          type: 'success',
          buttons: {
              sticker: false
          }
      });
    @endif
    @if( session('error') )
      new PNotify({
          title: 'Error',
          text: '{{ session("error") }}',
          type: 'error',
          buttons: {
              sticker: false
          }
      });
    @endif
    $('.reservationDate').datepicker();

    //to active menu
    var url = window.location;
    // for sidebar menu entirely but not cover treeview
    $('ul.sidebar-menu a').filter(function() {
      return this.href == url;
    }).parent().addClass('active');

    // for treeview
    $('ul.treeview-menu a').filter(function() {
      return this.href == url;
    }).closest('.treeview').addClass('active');
</script>
@yield('add-footer-js')

</body>
</html>
