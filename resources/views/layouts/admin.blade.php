<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="{{asset('homee/images/graduation cap.png')}}">
  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="{{url('adminn/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('adminn/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('adminn/css/AdminLTE.css')}}">
  <link rel="stylesheet" href="{{url('adminn/css/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{url('adminn/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{url('adminn/css/style.css')}}" />
  <script src="{{url('adminn')}}/js/angular.min.js"></script>
  <script src="{{url('adminn')}}/js/app.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Adminn</b>LTE</span>
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
          <!-- Messages: style can be found in dropdown.less-->
         
            
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="https://www.gravatar.com/avatar/{{md5(Auth::user()->email)}}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="https://www.gravatar.com/avatar/{{md5(Auth::user()->email)}}" class="img-circle" alt="User Image">

                <p>
                  {{Auth::user()->name}}
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                <a href="{{route('logout')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://www.gravatar.com/avatar/{{md5(Auth::user()->email)}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="">
            <i class="fa fa-th"></i> <span>Trang chủ quản trị</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">Hot</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>QL danh mục</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i>Danh sách danh mục</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>QL Sản phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i>Danh sách sản phẩm</a></li>
          <li><a href="{{route('color.index')}}"><i class="fa fa-circle-o"></i> Color</a></li>
          <li><a href="{{route('size.index')}}"><i class="fa fa-circle-o"></i> Size</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>QL Banner</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{route('banner.index')}}"><i class="fa fa-circle-o"></i>Danh sách banner</a></li>
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
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Trang chủ quản trị</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          @yield('content')
        </div>
        <!-- /.box-body -->
  
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="{{url('adminn')}}/js/jquery.min.js"></script>
<script src="{{url('adminn')}}/js/jquery-ui.js"></script>
<script src="{{url('adminn')}}/js/bootstrap.min.js"></script>
<script src="{{url('adminn')}}/js/adminlte.min.js"></script>
<script src="{{url('adminn')}}/js/dashboard.js"></script>
<script src="{{url('adminn')}}/tinymce/tinymce.min.js"></script>
<script src="{{url('adminn')}}/tinymce/config.js"></script>
<script src="{{url('adminn')}}/js/function.js"></script>
<script src="{{url('adminn')}}/js/slug.js"></script>
</body>
</html>
