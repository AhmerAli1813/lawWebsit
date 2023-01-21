
<?php
include '../includes/config.php';
function error404(){
            echo ' <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>404 Error Page</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">404 Error Page</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
            <div class="error-page">
              <h2 class="headline text-warning"> 404</h2>

              <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

                <p>
                  We could not find the page you were looking for.
                  Meanwhile, you may <a href="../../index.php">return to dashboard</a> or try using the search form.
                </p>

                <form class="search-form">
                  <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.input-group -->
                </form>
              </div>
              <!-- /.error-content -->
            </div>
            <!-- /.error-page -->
            </section>
            <!-- /.content -->
</div>';
}
function headers()
{
  session_start();
  if(isset($_SESSION["role_id"])){
    if($_SESSION["role_id"]!="1"){
      header("Location:../login.php ");          
    }else{

      $userImg = $_SESSION["img"];
      $userName = $_SESSION["Name"];
    }
    
  }else{  

    header("Location:../login.php ");          
}

error_reporting(0);


    echo  '
    <!DOCTYPE html>
                                        <html lang="en">
                                        <head>
                                        <meta charset="utf-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1">
                                        <title>AdminLTE 3 | Dashboard</title>
                                        
                                        <!-- Google Font: Source Sans Pro -->
                                        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
                                        <!-- Font Awesome -->
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
                                        <!-- Ionicons -->
                                        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
                                        <!-- Tempusdominus Bootstrap 4 -->
                                        <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
                                        <!-- iCheck -->
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
                                        <!-- JQVMap -->
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css">
                                        <!-- Theme style -->
                                        <link rel="stylesheet" href="../dist/css/adminlte.min.css">
                                        <!-- overlayScrollbars -->
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.0/css/OverlayScrollbars.min.css">
                                        <!-- Daterange picker -->
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.1/daterangepicker.css">
                                        <!-- summernote -->
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css">
                                            </head>
                                        
                                        <body class="hold-transition sidebar-mini">
                                        <!-- Site wrapper -->
                                        <div class="wrapper">
                                        <!-- Navbar -->
                                       
                           <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                           <!-- Left navbar links -->
                        <ul class="navbar-nav">
                           <li class="nav-item">
                               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                           </li>
                           <li class="nav-item d-none d-sm-inline-block">
                               <a href="../index.php" class="nav-link">Home</a>
                           </li>
                           <li class="nav-item d-none d-sm-inline-block">
                               <a href="../practice.php" class="nav-link">Practical area</a>
                           </li>
                           </li>
                           <li class="nav-item d-none d-sm-inline-block">
                               <a href="../AllCase.php" class="nav-link">cases</a>
                           </li>
                           </li>
                           <li class="nav-item d-none d-sm-inline-block">
                               <a href="../contact.php" class="nav-link">Contact</a>
                           </li>
                           <li class="nav-item d-none d-sm-inline-block">
                               <a href="../about.php" class="nav-link">about</a>
                           </li>
                        </ul>

                           <!-- Right navbar links -->
                           <ul class="navbar-nav ml-auto">
                           <!-- Navbar Search -->
                           <li class="nav-item">
                               <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                               <i class="fas fa-search"></i>
                               </a>
                               <div class="navbar-search-block">
                               <form class="form-inline">
                                   <div class="input-group input-group-sm">
                                   <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                   <div class="input-group-append">
                                       <button class="btn btn-navbar" type="submit">
                                       <i class="fas fa-search"></i>
                                       </button>
                                       <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                       <i class="fas fa-times"></i>
                                       </button>
                                   </div>
                                   </div>
                               </form>
                               </div>
                           </li>

                           <!-- Messages Dropdown Menu -->
                           <li class="nav-item dropdown">
                               <a class="nav-link" data-toggle="dropdown" href="#">
                               <i class="far fa-comments"></i>
                               <span class="badge badge-danger navbar-badge">3</span>
                               </a>
                               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                               <a href="#" class="dropdown-item">
                                   <!-- Message Start -->
                                   <div class="media">
                                   <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                   <div class="media-body">
                                       <h3 class="dropdown-item-title">
                                       Brad Diesel
                                       <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                       </h3>
                                       <p class="text-sm">Call me whenever you can...</p>
                                       <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                   </div>
                                   </div>
                                   <!-- Message End -->
                               </a>
                               <div class="dropdown-divider"></div>
                               <a href="#" class="dropdown-item">
                                   <!-- Message Start -->
                                   <div class="m   edia">
                                   <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                   <div class="media-body">
                                       <h3 class="dropdown-item-title">
                                       John Pierce
                                       <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                       </h3>
                                       <p class="text-sm">I got your message bro</p>
                                       <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                   </div>
                                   </div>
                                   <!-- Message End -->
                               </a>
                               <div class="dropdown-divider"></div>
                               <a href="#" class="dropdown-item">
                                   <!-- Message Start -->
                                   <div class="media">
                                   <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                   <div class="media-body">
                                       <h3 class="dropdown-item-title">
                                       Nora Silvester
                                       <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                       </h3>
                                       <p class="text-sm">The subject goes here</p>
                                       <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                   </div>
                                   </div>
                                   <!-- Message End -->
                               </a>
                               <div class="dropdown-divider"></div>
                               <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                               </div>
                           </li>
                           <!-- Notifications Dropdown Menu -->
                           <li class="nav-item dropdown">
                               <a class="nav-link" data-toggle="dropdown" href="#">
                               <i class="far fa-bell"></i>
                               <span class="badge badge-warning navbar-badge">15</span>
                               </a>
                               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                               <span class="dropdown-item dropdown-header">15 Notifications</span>
                               <div class="dropdown-divider"></div>
                               <a href="#" class="dropdown-item">
                                   <i class="fas fa-envelope mr-2"></i> 4 new messages
                                   <span class="float-right text-muted text-sm">3 mins</span>
                               </a>
                               <div class="dropdown-divider"></div>
                               <a href="#" class="dropdown-item">
                                   <i class="fas fa-users mr-2"></i> 8 friend requests
                                   <span class="float-right text-muted text-sm">12 hours</span>
                               </a>
                               <div class="dropdown-divider"></div>
                               <a href="#" class="dropdown-item">
                                   <i class="fas fa-file mr-2"></i> 3 new reports
                                   <span class="float-right text-muted text-sm">2 days</span>
                               </a>
                               <div class="dropdown-divider"></div>
                               <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                               </div>
                           </li>
                           <li class="nav-item  d-inline-block">
                           <!-- Sidebar user (optional) -->
                                        <div class="  user-panel d-flex">
                                            <a href="../profile.php?unique_id='.$_SESSION["unique_id"].'" class="image">
                                            <img src="../dist/img/'.$userImg.'" class="img-circle elevation-2" alt="User Image">
                                            </a>
                                            <div class="info">
                                            <a href="../profile.php?unique_id='.$_SESSION["unique_id"].'" class="d-block text-capitalize text-dark">'.$userName.'</a>
                                            </div>
                                            

                                        </div>
                                 </li>
                              </li>
                              <li class="nav-item  d-inline-block">
                              <a href="../logout.php" class="btn btn-dark btn-sm"><i class=" fas fa-sign-out-alt"></i></a>
                          </li>
                      </ul>
                       </nav>
                                        <!-- /.navbar -->

                                        <!-- Main Sidebar Container -->
                                        <aside class="main-sidebar sidebar-dark-primary elevation-4">
                                        <!-- Brand Logo -->
                                        <a href="index.php" class="brand-link">
                                        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                                        <span class="brand-text font-weight-light">Law <span class="text-danger">.</span></span>
                                        </a>

                                        <!-- Sidebar -->
                                        <div class="sidebar">
                                        <!-- Sidebar user (optional) -->
                                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                            <a href="../profile.php?unique_id='.$_SESSION["unique_id"].'" class="image">
                                            <img src="../dist/img/'.$userImg.'" class="img-circle elevation-2" alt="User Image">
                                            </a>
                                            <div class="info">
                                            <a href="../profile.php?unique_id='.$_SESSION["unique_id"].'" class="d-block text-capitalize">'.$userName.'</a>
                                            </div>
                                            
                                            <div class="info">
                                            <a href="../logout.php?" class="d-block text-capitalize"><i class="fas fa-sign-out-alt"></i></a>
                                            </div>

                                        </div>

                                        <!-- SidebarSearch Form -->
                                        <div class="form-inline">
                                            <div class="input-group" data-widget="sidebar-search">
                                            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-sidebar">
                                                <i class="fas fa-search fa-fw"></i>
                                                </button>
                                            </div>
                                            </div>
                                        </div>

                                          <!-- Sidebar Menu -->
                                          <nav class="mt-2">
                                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                              <!-- Add icons to the links using the .nav-icon class
                                                   with font-awesome or any other icon font library -->
                                              <li class="nav-item menu-open">
                                                <a href="index.php" class="nav-link active">
                                                  <i class="nav-icon fas fa-tachometer-alt"></i>
                                                  <p>Dashboard</p>
                                                </a>
                                              </li>
                                    
                                              <li class="nav-item has-treeview menu-is-opening menu-open ">
                                                <a href="#" class="nav-link">
                                                  <i class="nav-icon fas fa-users"></i>
                                                  <p>
                                                    Manage Accounts
                                                    <i class="right fas fa-angle-left"></i>
                                                  </p>
                                                </a>
                                                <ul class="nav nav-treeview" style="display:block">
                                                  <li class="nav-item">
                                                    <a href="tables.php?user=lawyer&role_id=2" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>Lawyers</p>
                                                    </a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a href="tables.php?user=client&role_id=3" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>Clients</p>
                                                    </a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a href="jb_request.php?user=job requested&role_id=2&sts=pending" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>Job pending</p>
                                                    </a>
                                                  </li>
                                                  
                                                  <li class="nav-item">
                                                    <a href="jb_request.php?user=job requested&role_id=2&sts=approved" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>Job approved</p>
                                                    </a>
                                                  </li>
                                                  
                                                  <li class="nav-item">
                                                    <a href="jb_request.php?user=job requested&role_id=2&sts=discharged" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>Job discharged</p>
                                                    </a>
                                                  </li>
                                                  
                                                </ul>
                                              </li>
                                    
                                              <li class="nav-item has-treeview">
                                                <a href="#" class="nav-link">
                                                  <i class="nav-icon fas fa-suitcase-rolling"></i>
                                                  <p>
                                                    Manage Cases
                                                    <i class="right fas fa-angle-left"></i>
                                                  </p>
                                                </a>
                                                <ul class="nav nav-treeview">
                                                  <li class="nav-item">
                                                    <a href="admin_cases_cr.php?user=Admin pending Case&sts=pending" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>Admin pending Case</p>
                                                    </a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a href="admin_cases_cr.php?user=Admin accepted Case&sts=approved" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>Admin accepted Case</p>
                                                    </a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a href="admin_cases_cr.php?user=Admin rejected Case&sts=rejected" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>Admin rejected Case</p>
                                                    </a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a href="client_cases_cr.php?user=client requested Case&sts=requested" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>clients Requested Case</p>
                                                    </a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a href="client_cases_cr.php?user=client accepted Case&sts=accepted" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>clients accepted Case</p>
                                                    </a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a href="client_cases_cr.php?user=client rejected Case&sts=rejected" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>clients rejected Case</p>
                                                    </a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a href="client_cases_cr.php?user=client deleted Case&sts=deleted" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>clients deleted Case</p>
                                                    </a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a href="lawyers_cases_cr.php?user=client accepted Case&sts=accepted" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>lawyers accepted Case</p>
                                                    </a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a href="lawyers_cases_cr.php?user=client rejected Case&sts=rejected" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>lawyers rejected Case</p>
                                                    </a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a href="lawyers_cases_cr.php?user=client deleted Case&sts=deleted" class="nav-link">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>lawyers deleted Case</p>
                                                    </a>
                                                  </li>
                                                 
                                                </ul>
                                              </li>
                                              <li class="nav-item menu-open">
                                              <a href="insertCase.php?user=cases&role_id='.$_SESSION["role_id"].'" class="nav-link ">
                                                <i class="nav-icon fas   fa-book-dead"></i>
                                                <p>Cases</p>
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
                                            
                                            ';
};
function case_select_input(){
  include '../includes/config.php';
  $q=$db_conn->query("SELECT `case_id`, `title` FROM `casetable`");
  if(mysqli_num_rows($q)){
      
      while($row = mysqli_fetch_assoc($q)){
          echo '<option value='.$row['case_id'].'>'.$row['title'].'</option> ';
      }
  }
}
function footers()
{
    echo '
                <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

                <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Apptech SFC</b> 3.2.0
                </div>
                <strong>Copyright &copy; 2022-2023 <a href="#">Apptech E-project</a>.</strong> All rights reserved.
                </footer>

                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                </aside>
                <!-- /.control-sidebar -->
                    </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
            <!-- jQuery -->
            <script src="../plugins/jquery/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            <!-- Bootstrap -->
            <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.0/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            
            
            <!-- PAGE PLUGINS -->
            <!-- jQuery Mapael -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mapael/2.2.0/js/jquery.mapael.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mapael/2.2.0/js/maps/usa_states.min.js"></script>
            <!-- ChartJS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
            
            <!-- AdminLTE for demo purposes -->
            
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="../dist/js/pages/dashboard2.js"></script>
            
            
            <!-- Bootstrap 4 -->
            
            <!-- AdminLTE App -->
            <script src="../dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="../dist/js/demo.js"></script>
            </body>
            </html>
            ';
}
?>

