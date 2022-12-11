<?php
 include('../includes/config.php');
include ("function.php"); 
headers();
$user = $_REQUEST['user'];
$role_id = $_REQUEST['role_id'];

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
        <div class="row mb-4">
          <div class="col-12"> <a href="insertCase.php?insert='data'&role_id=<?=$role_id?>&user=<?=$user?>" class="btn btn-info float-md-right mr-5">Insert <?=$user?></a></div>
        </div>
        <div class="table-responsive bg-white">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>S.No</th>
                
                <th>Image</th>
                <th>Case Name</th>
                <th>Case Icon</th>
                <th>Prize</th>
                <th>Message</th>
             
                <th>update date</th>
                <th>Action</th>
              </tr>
              <tbody>
              <?php
                      $count = 1;
                      
                    // $user_query = 'SELECT * FROM accounts WHERE `type` = "'.$_REQUEST['user'].'"';
                    $q = $db_conn->query('SELECT * FROM casetable ');
                    $output="";
                        $sno = 0;
                    if(mysqli_num_rows($q) >0){
                            while($row = mysqli_fetch_assoc($q)){
                              $sno++;   
                              $output.="
                                    <tr>
                                    <td>{$sno}</td>                
                                    <td><img src='img/{$row['img']}' width='20px' height='20px' style='border-radius:50%;'</td>                
                                    <td>{$row['title']}</td>                
                                    <td>{$row['icon']}</td>                
                                    <td>{$row['prize']}</td>                
                                    <td>{$row['message']}</td>                
                                    <td>{$row['date_send']}</td>                     
                                    <td class='d-flex'><a href='action/insertCase.php?del_id={$row['case_id']}&role_id={$role_id}&user={$user}' class='btn btn-danger' '><i class='fas fa-drum'></i></a><a href='insertCase.php?edit={$row['case_id']}&role_id={$role_id}&user={$user}' id='edit_btn'   class='ml-1 btn btn-info'><i class='fas fa-book-open'></i></a></td>
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
  $sql = $db_conn->query("SELECT * FROM casetable WHERE case_id = '{$_GET['edit']}'");
  $output="";
  if(mysqli_num_rows($sql) >0){
    $row = mysqli_fetch_assoc($sql);

    }
  
  $output.='
  <div class="card-header">
  <h3 class="card-title text-capitalize"> update '.$user.' Foam</h3>
        </div>
          <form action="action/insertCase.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" value="edit" name="type" >
                    <input type="hidden" value="'.$row['case_id'].'" name="case_id" >
      
                    <input type="hidden" value='.$_REQUEST['user'].'" name="user" >
                    
                    <label class=" text-capitalize" for="Name">Name</label>
                    <input type="text" value="'.$row['title'].'" name="c_name" class="form-control" id="Name" placeholder="Update name">
                  </div>
                  <div class="form-group">
                    <label class=" text-capitalize" for="username">message</label>
                    <input type="text" value="'.$row['message'].'"  name="c_msg" class="form-control" id="username" placeholder="Update message">
                  </div>
                  <div class="form-group">
                    <label class=" text-capitalize" for="exampleInputEmail1">change icons</label>
                    <input type="text" class="form-control" value="'.$row['icon'].'"  name="c_icon" id="exampleInputEmail1" placeholder="Update icons">
                  </div>
                  <div class="form-group">
                    <label class=" text-capitalize" for="phone">Images</label>
                    <input type="file" value="'.$row['img'].'" name="c_img" class="form-control" id="phone" placeholder="Update image">
                  </div>
                  <div class="form-group">
                    <label class=" text-capitalize" for="gender">prize</label>
                    <input type="text" value="'.$row['prize'].'" name="c_prize" class="form-control" id="gender" placeholder="Update gender">
                  </div>
                  
                </div>
                <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>';
}
if(isset($_GET['insert'])){
  // $sql = $db_conn->query("INSERT INTO `register`(`id`, `unique_id`, `name`, `username`, `email`, `password`, `role_id`, `profile`, `edu_id`, `phone`, `address`, `gender`, `data_reg`) VALUES ()");
  $insertOutPut="";
  // if(mysqli_num_rows($sql) >0){
  //   $row = mysqli_fetch_assoc($sql);

  //   }
  
  $insertOutPut.='
  <div class="card-header">
  <h3 class="card-title text-capitalize"> Inset '.$user.' Foam</h3>
        </div>
        <form action="action/insertCase.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" value="insert" name="type" >
                    <input type="hidden" value="'.$row['case_id'].'" name="case_id" >
      
                    <input type="hidden" value='.$_REQUEST['user'].'" name="user" >
                    
                    <label class=" text-capitalize" for="Name">Name</label>
                    <input type="text" value="'.$row['title'].'" name="c_name" class="form-control" id="Name" placeholder="enter name">
                  </div>
                  <div class="form-group">
                    <label class=" text-capitalize" for="username">message</label>
                    <input type="text" value="'.$row['message'].'"  name="c_msg" class="form-control" id="username" placeholder="enter message">
                  </div>
                  <div class="form-group">
                    <label class=" text-capitalize" for="exampleInputEmail1">change icons</label>
                    <input type="text" class="form-control" value="'.$row['icon'].'"  name="c_icon" id="exampleInputEmail1" placeholder="enter icons">
                  </div>
                  <div class="form-group">
                    <label class=" text-capitalize" for="phone">Images</label>
                    <input type="file" value="'.$row['img'].'" name="c_img" class="form-control" id="phone" placeholder="enter image">
                  </div>
                  <div class="form-group">
                    <label class=" text-capitalize" for="gender">prize</label>
                    <input type="text" value="'.$row['prize'].'" name="c_prize" class="form-control" id="gender" placeholder="enter prize">
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
