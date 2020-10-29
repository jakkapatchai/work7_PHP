
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://nickzaahhaahha.github.io/HCI_work6/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<!--
เนื่องจากมีปัญหาการ load font ข้ามเครื่อง ผ่านแฟ้ม all.min.css
จึงเพิ่มการกำหนด font-face และเรียกแฟ้มใน current folder
- https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css
- https://www.farahimpex.com/vendor/jeroennoten/laravel-adminlte/resources/assets/vendor/font-awesome/webfonts/
github.io
- https://nickzaahhaahha.github.io/HCI_work6/
- https://github.com/Nickzaahhaahha/HCI_work6
- https://nickzaahhaahha.github.io/HCI_work6/fontawesome-free/css/all.min.css
- http://thaiall.github.io/www/adminlte/adminlte_github.htm
--> 
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li><li class="nav-item d-none d-sm-inline-block">
	  <a href="http://www.thaiall.com/adminlte-3.0.4/pages/examples/burin1.htm" class="nav-link">Burin1</a>
      </li><li class="nav-item d-none d-sm-inline-block">
	  <a href="http://www.thaiall.com/adminlte/adminlte_fa_font.rar" class="nav-link">font.rar</a>
      </li><li class="nav-item d-none d-sm-inline-block">
	  <a href="http://www.thaiall.com/adminlte/adminlte.htm" class="nav-link">htm</a>
	  </li><li class="nav-item d-none d-sm-inline-block">
	  <a href="https://thaiall.github.io/www/adminlte/adminlte_github.htm" class="nav-link">github.io</a>
	  </li>
    </ul>

    <!-- SEARCH FORM -->
    <form action="http://www.google.com" class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-1 pb-1 mb-1 d-flex">
          <img src="https://jakkapatchai.github.io/home/jakkapat.jpg" alt="User Image" style="height:30px;">
        <div class="info">
          <a href="https://github.com/jakkapatchai/home" class="d-block">Jakkapat</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <!-- li class="nav-item has-treeview menu-open" -->

		  <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                จักรพัฒน์ ไชยแก้ว
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="me.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About me</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://www.youtube.com/channel/UCWrZ6-Gu2lkYqHD2vtHjufw/featured?view_as=subscriber" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>youtube</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://web.facebook.com/jakkapatcom" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Facebook</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="pyramid.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pyramid</p>
                </a>
              </li>                 
            </ul>
          </li>

          <li class="nav-item">
            <a href="http://www.thaiall.com/web2" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                /web2
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="https://thaiall.github.io/mygitfriends/adminlte_mygitfriends.htm" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                /My Git Friends
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>		
		
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">  
    <!-- Main content -->
    <section class="content">
<fieldset class="col-12 small-box" style="font-family:kanit;float:left;"><legend><b>Pyramid 1 - 6</b></legend>
              <li><a href="com_01.php">Pyramid_PHP01</a></li>
              <li><a href="com_02.php">Pyramid_PHP02</a></li>
              <li><a href="com_03.php">Pyramid_PHP03</a></li>
              <li><a href="com_04.php">Pyramid_PHP04</a></li>
              <li><a href="com_05.php">Pyramid_PHP05</a></li>
              <li><a href="com_06.php">Pyramid_PHP06</a></li>
              
    <p><br>(\_/)<br>( •_•)<br>/ >com</p>
    
</fieldset>
<fieldset class="col-12 small-box" style="font-family:kanit;float:left;"><legend><b>Pyramid 7 - 12</b></legend>
    
    <li><a href="com_07.php">Pyramid_PHP07</a></li>
    <li><a href="com_08.php">Pyramid_PHP08</a></li>
    <li><a href="com_09.php">Pyramid_PHP09</a></li>
    <li><a href="com_10.php">Pyramid_PHP10</a></li>
    <li><a href="com_11.php">Pyramid_PHP11</a></li>
    <li><a href="com_12.php">Pyramid_PHP12</a></li>
    
<p><br>(\_/)<br>( •_•)<br>/ >com</p>

</fieldset>
<fieldset class="col-12 small-box" style="font-family:kanit;float:left;"><legend><b>Pyramid 13 - 18</b></legend>
    
    <li><a href="com_14.php">Pyramid_PHP14</a></li>
    <li><a href="com_15.php">Pyramid_PHP15</a></li>
    <li><a href="com_16.php">Pyramid_PHP16</a></li>
    <li><a href="com_17.php">Pyramid_PHP17</a></li>
    <li><a href="com_18.php">Pyramid_PHP18</a></li>
    
<p><br>(\_/)<br>( •_•)<br>/ >com</p>

</fieldset>
<fieldset class="col-12 small-box" style="font-family:kanit;float:left;"><legend><b>Pyramid 19 - 24</b></legend>
    
    <li><a href="com_19.php">Pyramid_PHP19</a></li>
    <li><a href="com_20.php">Pyramid_PHP20</a></li>
    <li><a href="com_21.php">Pyramid_PHP21</a></li>
    <li><a href="com_22.php">Pyramid_PHP22</a></li>
    <li><a href="com_23.php">Pyramid_PHP23</a></li>
    <li><a href="com_24.php">Pyramid_PHP24</a></li>
    
<p><br>(\_/)<br>( •_•)<br>/ >com</p>

</fieldset>
<fieldset class="col-12 small-box" style="font-family:kanit;float:left;"><legend><b>Pyramid 25 - 30</b></legend>
    
    <li><a href="com_25.php">Pyramid_PHP25</a></li>
    <li><a href="com_26.php">Pyramid_PHP26</a></li>
    <li><a href="com_27.php">Pyramid_PHP27</a></li>
    <li><a href="com_28.php">Pyramid_PHP28</a></li>
    <li><a href="com_29.php">Pyramid_PHP29</a></li>
    <li><a href="com_30.php">Pyramid_PHP30</a></li>
    
<p><br>(\_/)<br>( •_•)<br>/ >com</p>

</fieldset>
<fieldset class="col-12 small-box" style="font-family:kanit;float:left;"><legend><b>Pyramid 31 - 36</b></legend>
    
    <li><a href="com_31.php">Pyramid_PHP31</a></li>
    <li><a href="com_32.php">Pyramid_PHP32</a></li>
    <li><a href="com_33.php">Pyramid_PHP33</a></li>
    <li><a href="com_34.php">Pyramid_PHP34</a></li>
    <li><a href="com_35.php">Pyramid_PHP35</a></li>
    <li><a href="com_36.php">Pyramid_PHP36</a></li>
<p><br>(\_/)<br>( •_•)<br>/ >com</p>

</fieldset>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://adminlte.io/themes/v3/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="https://adminlte.io/themes/v3/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="https://adminlte.io/themes/v3/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="https://adminlte.io/themes/v3/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="https://adminlte.io/themes/v3/plugins/moment/moment.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="https://adminlte.io/themes/v3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://www.masterhook.net/public/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://adminlte.io/themes/v3/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://adminlte.io/themes/v3/dist/js/demo.js"></script>
</body>
</html>
