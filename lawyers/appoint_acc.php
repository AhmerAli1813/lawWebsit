<?php 
include 'function.php';
headers();
include '../includes/config.php';
$q = $db_conn->query("SELECT * FROM `approved_cases` WHERE `L_id` = 'lawyer_003'  AND `lawyer_status` = 'accepted' ");
$output="";

if(mysqli_num_rows($q) >0){
        while($row = mysqli_fetch_assoc($q)){
                $output.="
                <tr>
                <td>{$row['app_id']}</td>                
                
                <td>{$row['client_name']}</td>                
                <td>{$row['client_num']}</td>                
                <td>{$row['c_email']}</td>                
                <td>{$row['case_type']}</td>                
                <td>{$row['date_booked']}</td>                
                <td>{$row['appointment_date']}</td>                
                <td>{$row['lawyer_status']}</td>                
                <td class='d-flex'><a href='action/action.php?del_id={$row['app_id']}' class='btn btn-danger' '><i class='fas fa-drum'></i></a><a href='appoint_acc.php?app_id={$row['app_id']}' id='edit_btn'   class='ml-1 btn btn-info'>Invoice</a></td>
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
            <h1>client requested</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">dashboard</li>
            </ol>
          </div>
        </div>
      </div>

    <section class="content my-5">
    <div class="row mb-4">
          <div class="col-12"> <a href="insertCase.php" class="btn btn-info float-md-right mr-5">Insert invoices</a></div>
        </div>
    <div class="table-responsive">
            <table class="table table-primary">
              <thead>
                <tr>
                  <th scope="col">Appointment Id</th>
                
                  <th scope="col">Client Names</th>
                  <th scope="col">Client number</th>
                  <th scope="col">Client email</th>
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

          if(isset($_GET['app_id'])){
                
                $app_id = $_GET['app_id'];
                
                $form = "";  
            $form.='
            <div class="card-header">
            <h3 class="card-title text-capitalize"> invoice Foam</h3>
                  </div>
                    <form action="action/invoice.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                 
                        <input type="hidden" value='.$app_id.' name="app_id" >
                

                 
                        <label class=" text-capitalize" for="Name">Prize</label>
                        <input type="text" value="" name="inv_prize" class="form-control" id="Name" placeholder="amount of case">
                      </div>
                      <div class="form-group">
                        <label class=" text-capitalize" for="username">date</label>
                        <input type="date" value="" name="date" class="form-control" id="username" placeholder="booking date">
                      </div>
                      <div class="form-group">
                        
                        <input type="textarea" class="form-control" value="" name="desc" id="exampleInputEmail1" placeholder=" description">
                      </div>
                  
            
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>';
}
          ?>
          
          
          <!-- Optional: Place to the bottom of scripts -->
         
    <section class="content">
      <div class="container-fluid mt-5">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6 offset-3" style="display:<?=$display?>">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(isset($_GET['invoice_id']))
              {
               echo  $form;
               $display = "block";
              }
              ?>
            </div>
            <!-- /.card -->

          </div>
        </div>
      </div>
    </section>

      </div>
      <!-- /.card -->

    </section>


<?php footers(); ?>