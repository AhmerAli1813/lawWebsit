
<?php include 'function.php';headers(); ?>
<!-- Content Header (Page header) -->
    <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
  </div>
        <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-graduation-cap"></i></span>

              <div class="info-box-content">
                <span class="info-box-text  text-capitalize">Total Users</span>
                <span class="info-box-number">
                <?php  $AllUser=$db_conn->query("SELECT COUNT(*) as 'AllUser' FROM `register` ") ;
                              
                              $AllUser_result = mysqli_fetch_assoc($AllUser);
                             echo "<h3>{$AllUser_result["AllUser"]}</h3>"; 
                
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon  bg-gradient-lightblue elevation-1"><i class="fas fa-graduation-cap"></i></span>

              <div class="info-box-content">
                <span class="info-box-text  text-capitalize">Admins</span>
                <span class="info-box-number">
                <?php  $AllUser=$db_conn->query("SELECT COUNT(*) as 'AllUser' FROM `register` where role_id ='1' ") ;
                              
                              $AllUser_result = mysqli_fetch_assoc($AllUser);
                             echo "<h3>{$AllUser_result["AllUser"]}</h3>"; 
                
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon  bg-gradient-indigo elevation-1"><i class="fas fa-graduation-cap"></i></span>

              <div class="info-box-content">
                <span class="info-box-text  text-capitalize">new Lawyers</span>
                <span class="info-box-number">
                <?php  $AllUser=$db_conn->query("SELECT COUNT(*) as 'newLawyer' FROM `job_request` WHERE `status` = 'pending' ") ;
                              
                              $AllUser_result = mysqli_fetch_assoc($AllUser);
                             echo "<h3>{$AllUser_result["newLawyer"]}</h3>"; 
                
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-capitalize">Total Lawyers</span>
                <?php  $lawyer=$db_conn->query("SELECT COUNT(*) as 'lawyer' FROM `job_request` WHERE `status` = 'approved' ") ;
                              
                              $lawyer_result = mysqli_fetch_assoc($lawyer);
                             echo "<h3>{$lawyer_result["lawyer"]}</h3>"; 
                
                ?>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
            
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon   bg-gradient-danger elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text  text-capitalize">Rejected Lawyers</span>
                <span class="info-box-number">
                <?php  $AllUser=$db_conn->query("SELECT COUNT(*) as 'RejectedLawyer' FROM `job_request` WHERE `status` = 'rejected' ") ;
                              
                              $AllUser_result = mysqli_fetch_assoc($AllUser);
                             echo "<h3>{$AllUser_result["RejectedLawyer"]}</h3>"; 
                
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon  bg-blue elevation-1"><i class="fas  fa-user-friends"></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-capitalize">Total Client</span>
                <?php  $lawyer=$db_conn->query("SELECT COUNT(*) as 'lawyer' FROM `register` where role_id = 3 ") ;
                              
                              $lawyer_result = mysqli_fetch_assoc($lawyer);
                             echo "<h3>{$lawyer_result["lawyer"]}</h3>"; 
                
                ?>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book-open"></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-capitalize">Total amount</span>
                <?php $q2 =$db_conn->query("SELECT  sum(amount_paid) as profit FROM `income`") ;
                $profit =  mysqli_fetch_assoc($q2);
                echo ' <h3>'.$profit["profit"].'<sup style="font-size: 20px">PKR</sup></h3>';
             ?>  

              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book-open"></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-capitalize">profit amount</span>
                <?php $q2 =$db_conn->query("SELECT  sum(amount_paid * 0.35) as profit FROM `income`") ;
                $profit =  mysqli_fetch_assoc($q2);
                echo ' <h3>'.$profit["profit"].'<sup style="font-size: 20px">PKR</sup></h3>';
             ?>  

              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book-open"></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-capitalize">lawyer amount</span>
                <?php $q2 =$db_conn->query("SELECT  sum(amount_paid * 0.655) as profit FROM `income`") ;
                $profit =  mysqli_fetch_assoc($q2);
                echo ' <h3>'.$profit["profit"].'<sup style="font-size: 20px">PKR</sup></h3>';
             ?>  

              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-question"></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-capitalize">New case </span>
                <?php  $lawyer=$db_conn->query("SELECT COUNT(*) as 'lawyer'  FROM `appointment` where status = 'pending' ") ;
                              
                              $lawyer_result = mysqli_fetch_assoc($lawyer);
                             echo "<h3>{$lawyer_result["lawyer"]}</h3>"; 
                
                ?>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon  bg-gradient-green elevation-1"><i class="fas fa-object-group"></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-capitalize">Approved case </span>
                <?php  $lawyer=$db_conn->query("SELECT COUNT(*) as 'lawyer'  FROM `appointment` where status = 'approved' ") ;
                              
                              $lawyer_result = mysqli_fetch_assoc($lawyer);
                             echo "<h3>{$lawyer_result["lawyer"]}</h3>"; 
                
                ?>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon   bg-gradient-danger elevation-1"><i class="fas  fa-object-ungroup"></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-capitalize">rejected case </span>
                <?php  $lawyer=$db_conn->query("SELECT COUNT(*) as 'lawyer'  FROM `appointment` where status = 'rejected' ") ;
                              
                              $lawyer_result = mysqli_fetch_assoc($lawyer);
                             echo "<h3>{$lawyer_result["lawyer"]}</h3>"; 
                
                ?>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
<?php footers()  ?>
