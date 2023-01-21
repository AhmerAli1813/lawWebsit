<?php
 include('../includes/config.php');
include ("function.php"); 
headers();
$user = $_REQUEST['user'];
$role_id = $_REQUEST['role_id'];
$sts = $_REQUEST['sts'];

?>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage <?=$user?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accounts</a></li>
              <li class="breadcrumb-item active"><?php echo ucfirst($_REQUEST['user']); ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- info boxes -->
        <div class="table-responsive bg-white">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>S.No</th>
                <th> ID</th>
                <th>Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Address</th>
                <th>Gender</th>
                <th>status</th>
                <th>salary</th>
                <th>Date Registration</th>
                <th>Action</th>
              </tr>
              <tbody>
              <?php
                      $count = 1;
                      
                    // $user_query = 'SELECT * FROM accounts WHERE `type` = "'.$_REQUEST['user'].'"';
                    $q = $db_conn->query("SELECT * FROM `lawyers_appointmets` where status = '{$_REQUEST['sts']}' and status != 'deleted'");
                    $output="";
                        $sno = 1;
                    if(mysqli_num_rows($q) >0){
                            while($row = mysqli_fetch_assoc($q)){
                              $sno++;   
                              $output.="
                                    <tr>
                                    <td>{$sno}</td>                 
                                    <td>{$row['unique_id']}</td>                
                                    <td>{$row['name']}</td>                
                                    <td>{$row['username']}</td>                
                                    <td>{$row['email']}</td>                
                                    <td>{$row['phone']}</td>                
                                    <td>{$row['address']}</td>                
                                    <td>{$row['gender']}</td>                
                                    <td>{$row['status']}</td>       
                                    <td>{$row['salary']}</td>       
                                    <td>{$row['data_reg']}</td>                     
                                    <td class='d-flex'><a href='action/action.php?del_id={$row['unique_id']}&role_id={$role_id}&user={$user}&sts={$sts}' class='btn btn-danger' '><i class='fas fa-drum'></i></a><a href='jb_request.php?edit={$row['unique_id']}&role_id={$role_id}&user={$user}&sts={$sts}' id='edit_btn'   class='ml-1 btn btn-info'><i class='fas fa-book-open'></i></a></td>
                                    </tr>                
                                    ";
                            }
                    }else{
                        $output= "<tr><td class='text-center'>no data found<td></tr>";
                    }
                            
                    ?>
                        
              <?php echo $output ?>                       
              </tbody>
            </thead>
          </table>
          <?php 

if(isset($_GET['edit'])){
  $sql = $db_conn->query("SELECT * FROM `lawyers_appointmets` where status = '{$_REQUEST['sts']} ' AND unique_id = '{$_GET['edit']}'");
  $output="";
  if(mysqli_num_rows($sql) >0){
    $row = mysqli_fetch_assoc($sql);

    }
  
  $output.='
  <div class="card-header">
  <h3 class="card-title text-capitalize"> update '.$user.' Foam</h3>
        </div>
          <form action="action/job.php" method="POST">
          <div class="card-body">
            <div class="form-group">
              <input type="hidden" value="edit" name="type" >
              <input type="hidden" value='.$row['unique_id'].' name="unique_id" >
              <input type="hidden" value='.$_REQUEST['role_id'].' name="role_id" >
              <input type="hidden" value='.$_REQUEST['user'].' name="user" >
            </div>
            <div class="form-group">
                        <label>select status</label>
                        <select class="form-control select2 select2-danger" name="status" data-dropdown-css-class="select2-danger" style="width: 100%;">
                        <option selected="selected">pending</option>
                        <option>approved</option>
                        <option>rejected</option>
                        </select>
                        </div>
            <div class="form-group">
              <label class=" text-capitalize" for="username">salary</label>
              <input type="text" value='.$row['salary'].' name="salary" class="form-control" id="username" placeholder="Update username">
            </div>
            
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>';
}

?>
    <section class="content">
      <div class="container-fluid mt-5">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6 offset-3" style="display:<?=$display?>">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(isset($_GET['edit']))
              {
               echo  $output;
               $display = "block";
              }elseif(isset($_GET['insert'])){
                echo  $insertOutPut;
                $display="none";
              }
              ?>
            </div>
            <!-- /.card -->

          </div>
        </div>
      </div>
    </section>

        </div>
      </div>
    </section>
    <!-- /.content -->
<?php footers() ?>
