<?php 
include 'function.php';
headers();
include '../includes/config.php';

$user = $_REQUEST['user'];
$sts = $_REQUEST['sts'];
$breadcrumb = $_REQUEST['user'];
$q = $db_conn->query("SELECT app_id ,C_id , client_name, case_type,date_booked, appointment_date, Admin_status FROM `case_appointment` WHERE  `Admin_status`  = '$sts' ");
$output="";

if(mysqli_num_rows($q) >0){
        while($row = mysqli_fetch_assoc($q)){
                $output.="
                <tr>
                <td>{$row['app_id']}</td>                
                <td>{$row['C_id']}</td>                
                <td>{$row['client_name']}</td>                
                <td>{$row['case_type']}</td>                
                <td>{$row['date_booked']}</td>                
                <td>{$row['appointment_date']}</td>                
                <td>{$row['Admin_status']}</td>                
                <td class='d-flex'><a href='action/admin_cases.php?user=$breadcrumb&column=$sts&del_id={$row['app_id']}' class='btn btn-danger' '><i class='fas fa-drum'></i></a><a href='admin_cases_cr.php?user=$breadcrumb&sts=$sts&edit={$row['app_id']}' id='edit_btn'   class='ml-1 btn btn-info'><i class='fas fa-book-open'></i></a></td>
                </tr>                
                ";
        }
}else{
    $output= "<tr><td class='text-center'>no data found<td></tr>";
}
        
?>

<!-- <a href='' data-bs-toggle='modal' data-bs-target='#edit_form' class='btn btn-info btn-sm'><i class='fas fa-book-open'></i></a> -->
    <!-- Main content -->
    <section class="content-header ">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>manage <?=$user?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?=$user?></li>
            </ol>
          </div>
        </div>
      </div>

    <section class="content my-5">
          <div class="table-responsive">
            <table class="table table-primary">
              <thead>
                <tr>
                  <th scope="col">Appointment Id</th>
                  <th scope="col">Client Id</th>
                  <th scope="col">Client Names</th>
                  <th scope="col">Case </th>
                  <th scope="col">Date Booked</th>
                  <th scope="col">appointment Booked</th>
                  <th scope="col">status</th>
                  <th scope="col">action</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php echo $output ?>
              </tbody>
            </table>
          </div>
          
          <!-- Modal trigger button -->
          
          <!-- Modal Body -->
          <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
          <?php 

          if(isset($_GET['edit'])){
            echo '
<form action="action/admin_cases.php" method="POST">
            <input type="hidden" name="edit_id" value='.$_GET["edit"].' >
            <input type="hidden" name="status_edit" value='.$_GET["sts"].' >
            <input type="hidden" name="breadCr" value='.$_GET["user"].' >
            <div class="row">
                <div class="col-12 ">
                <div class="form-group">
                        <label> working</label>
                        <select class="form-control select2 select2-danger" name="status_edit" data-dropdown-css-class="select2-danger" style="width: 100%;">
                            <option>action</option>
                            <option>pending</option>
                            <option>approved</option>
                            <option>rejected</option>
                        </select>
                        </div>
                        <!-- /.form-group -->
                </div>


            <!-- /.col -->
        </div>
        <input type="submit" value="save">
</form>';
}
          ?>
          
          
          <!-- Optional: Place to the bottom of scripts -->
         

      </div>
      <!-- /.card -->

    </section>


<?php footers(); ?>