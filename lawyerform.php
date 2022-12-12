
<?php
include("includes/config.php");
session_start();
error_reporting(0);
if(isset($_POST['apply'])){

     $firstname = $_POST['fname'];
   
     $username = $_POST['uname'];
     $email = $_POST['email'];
     $gender = $_POST['gender'];
     $phone = $_POST['phone'];
     $address = $_POST['address'];
     $password = $_POST['pass'];
     $confirm_password = $_POST['con_pass'];
     $date = date("d-m-y");    
    $error = array();

    if(empty($firstname)){
        $error['apply'] = "Enter Firstname";
    }else if(empty($username)){
        $error['apply'] = "Enter Username";
    }else if(empty($email)){
        $error['apply'] = "Enter Email";
    }else if($gender == ""){
        $error['apply'] = "Slect Your Gender";
    }else if(empty($phone)){
        $error['apply'] = "Enter Phone number";
    }else if($address == ""){
        $error['apply'] = "Please Select Your address";
    }else if(empty($password)){
        $error['apply'] = "Enter Password";
    }else if($confirm_password != $password){
        $error['apply'] = "Both password do not match";
    }

    if (count($error) == 0){
        $unique_id ="lawyer-". rand(time(),100);
        $q=$db_conn->query("INSERT INTO `job_request`( `lawyer_id` ) VALUES( '$unique_id')");
        
         $query = "INSERT INTO `register`(`unique_id`, `name`, `username`, `email`, `password`, `role_id`, `profile`, `phone`, `address`, `gender`, `data_reg`) VALUES
        ('$unique_id','$firstname' , '$username','$email' , '$password',2 ,'avatar5.png' ,'$phone','$address' ,'$gender',NOW() )";

        $result = mysqli_query($db_conn, $query);
            
        if($result){
            echo "<script>alert('You have successfully Applied')</script>";
                $_SESSION["role_id"] = "2";
                $_SESSION["Name"] = $firstname;
                $_SESSION["username"] = $username;
                $_SESSION["unique_id"] = $unique_id;
                $_SESSION["img"] = "avatar5.png";
            header("Location:lawyers/index.php");
        }else{
            echo "<script>alert('Failed')</script>";
        }
    }

}

if(isset($error['apply'])){
    $s = $error['apply'];

    $show = "<h5 class='text-center alert alert-danger'>$s</h5>";
}else{
    $show = "";
}
  include( "function.php");
      headers();
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 my-3 jumbotron">
                <h2 class="text-center mb-5 ">Apply Now!!!</h2>
                <div>
                    <?php echo $show; ?>
                </div>
                <form method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
                    <div class="form-group">
                        
                        <input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter First Name" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>"/>
                    </div>


                    <div class="form-group">
                        
                        <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter User name" value="<?php if(isset($_POST['uname'])) echo $_POST['uname']; ?>"/>
                    </div>
                        
                    <div class="form-group">
                        
                        <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Enter Email Address" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"/>
                    </div>

                    <div class="form-group">
                        
                        <select name="gender" class="form-control" placeholder="gender">
                            <option value="" >Select Gender</option>
                            <option value="Male" selected>Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        
                        <input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone Number" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>"/>
                    </div>

                    <div class="form-group">
                        
                            <input type="text" name="address" class="form-control " placeholder="address">
                    </div>

                    <div class="form-group">
                        
                        <input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password"/>
                    </div>

                    <div class="form-group">
                        
                        <input type="password" name="con_pass" class="form-control" autocomplete="off" placeholder="Enter Confirm Password"/>
                    </div>

                    <input type="submit" name="apply" value="Apply Now" class="btn btn-success"/>

                    <p class="text-right mr-5 mt-5">I already have an account <a href="login.php">Click here</a></p>

                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>