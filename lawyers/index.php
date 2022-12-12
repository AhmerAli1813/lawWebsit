<?php 
include 'function.php';
headers();
include '../includes/config.php';
$uq_id = $_SESSION['unique_id'];
?>

<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>lawyers panel pages</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content"> 
    <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php  $ped_cases=$db_conn->query("SELECT COUNT(*) as 'pending_cases' FROM `case_appointment` WHERE L_id = '$uq_id' AND  Admin_status =  'approved' and lawyer_status !='deleted' and lawyer_status = 'pending' and client_status !='deleted'") ;
                              
                              $ped_cases_result = mysqli_fetch_assoc($ped_cases);
                             echo "<h3>{$ped_cases_result["pending_cases"]}</h3>"; 
                
                ?>
               

                <p class=" text-capitalize">case pending</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box  bg-info">
              <div class="inner">
              <?php  $accepted_cases=$db_conn->query("SELECT COUNT(*) as 'accepted_cases' FROM `case_appointment` WHERE L_id = '$uq_id' and lawyer_status = 'accepted'") ;
                              
                              $accepted_cases_result = mysqli_fetch_assoc($accepted_cases);
                             echo "<h3>{$accepted_cases_result["accepted_cases"]}</h3>"; 
                
                ?>
               

                <p class=" text-capitalize">case accepted</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php $q2 =$db_conn->query("SELECT  sum(amount_paid * 0.65) as profit FROM `income` ") ;
                $profit =  mysqli_fetch_assoc($q2);
                echo ' <h3>'.$profit["profit"].'<sup style="font-size: 20px">PKR</sup></h3>';
             ?>  
             

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box  bg-danger">
              <div class="inner">
              <?php  $rejected_cases=$db_conn->query("SELECT COUNT(*) as 'rejected_cases' FROM `case_appointment` WHERE L_id = '$uq_id' and lawyer_status = 'rejected'") ;
                              
                              $rejected_cases_result = mysqli_fetch_assoc($rejected_cases);
                             echo "<h3>{$rejected_cases_result["rejected_cases"]}</h3>"; 
                
                ?>
               

                <p class=" text-capitalize">case rejected</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
         
          <!-- ./col -->
        </div>
    </section>
    
<?php  
      

footers();
?>