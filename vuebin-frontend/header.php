<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>vuebin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
      <link rel="stylesheet" href="dist/css/vuebin.css">
	  <link  rel="stylesheet" href="dist/css/suggestion-box.min.css">
  <link rel="stylesheet" href="dist/css/color.css">
  
  <link rel="stylesheet" href="dist/css/skins.css">
  <!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
 <script src="dist/js/suggestion-box.min.js"></script>


</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>V</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img style="width:100px;height:auto;" src="dist/img/logo.png"alt="logo"> </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
		<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
           <ul class="nav navbar-nav ">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                     
						<li class="page-scroll">
                            <a href="institutes.php">INSTITUTES</a>
                        </li>
                        <li class="page-scroll">
                            <a href="course.php">COURSES</a>
                        </li>
                      
                    </ul>
         
        </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav ">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>

                        <li class="page-scroll">
                              <form action="" >
                              <div class="search-form">
								<div class="form-group has-feedback">
									<label for="search" class="sr-only">Search</label>
									<input type="text" class="form-control" name="search" id="search" placeholder="Search videos">
									<span class="fa fa-search form-control-feedback"></span>
								</div>
								</div>
									<div class="location-hide" style="display:none">
									<div class="row">
									<div class="col-md-10">
										<input type="text" class="form-control " name="search"  placeholder="Location">
										</div>	
										<button class="btn btn-sm btn-primary col-md-2">Go</button>
									</div>
									</div>
									
							
							</form>
							
                        </li>
						
						<li class="page-scroll" style="padding-left:30px;margin-top:5px">
                           <button class="btn btn-sm btn-primary pull-right">Upload</button>
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
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Editor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         
        </li> 
		<li class="treeview">
          <a href="form-validations.php">
            <i class="fa fa-dashboard"></i> <span>form validations</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         
        </li>
		<li class="treeview">
          <a href="datatable.php">
            <i class="fa fa-dashboard"></i> <span>Datatables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li class="active"><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
       
       
    </section>
    <!-- /.sidebar -->
  </aside>

 	<script>
    $(document).ready(function () {
        $('#search').suggestionBox({
            filter: true,
            widthAdjustment: -8,
            leftOffset: 0,
            topOffset: 0,
        }).loadSuggestions('suggestions.json');
    });
</script>
<script>
$(document).ready(function(){
    $("#search").click(function(){
        $('.location-hide').toggle();
    });
});
</script>