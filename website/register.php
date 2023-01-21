<?php
include("includes/config.php");
session_start();
if(isset($_POST['create'])){

    $firstName = $_POST['fname'];
    
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $password = $_POST['pass'];
    $con_pass = $_POST['con_pass'];
 $date = date('m/d/Y h:i:s a', time());
    $error = array();

    if(empty($firstName)){
        $error['apply'] = "Enter firstName";
    }else if(empty($uname)){
        $error['apply'] = "Enter username";
    }else if(empty($email)){
        $error['apply'] = "Enter Email";
    }else if(empty($phone)){
        $error['apply'] = "Enter Phone Number";
    }else if($gender == ""){
        $error['apply'] = "Select Your Gender";
    }else if($address == ""){
        $error['apply'] = "Select Your address";
    }else if(empty($password)){
        $error['apply'] = "Enter Password";
    }else if($con_pass != $password){
        $error['apply'] = "Both password do not match!";
    }

    if(count($error)==0){
        $unique_id ="client". rand(time(),100);
        $query = "INSERT INTO `register`(`unique_id`, `name`, `username`, `email`, `password`, `role_id`, `profile`, `phone`, `address`, `gender`, `data_reg`) VALUES
        ('$unique_id', '$firstName' , '$uname','$email' , '$password',3 ,'avatar4.png' ,'$phone','$address' ,'$gender',NOW())";


        $res = mysqli_query($db_conn,$query);

        if($res){
            $_SESSION["role_id"] = "3";
            $_SESSION["Name"] = $firstName;
            $_SESSION["username"] = $uname;
            $_SESSION["unique_id"] = $unique_id;
            $_SESSION["img"] = "avatar4.png";
            header("Location:index.php");
        }else{
            echo "<script>alert('failed')</script>";
        }
    }
}

  include( "function.php");
    headers();
  
    if(isset($error['apply'])){
        $s = $error['apply'];
    
        $show = "<h5 class='text-center alert alert-danger'>$s</h5>";
    }else{
        $show = "";
    }
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0"></div>
            <div class="col-md-6 my-2 jumbotron">
                <div>
                    <?php echo $show; ?>
                </div>
                <h2 class="text-center text-danger my-2 mb-5">Create Account</h2>
                <form method="POST">
                    <div class="form-group mb-3">
                        
                        <input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter First Name">
                    </div>


                    <div class="form-group mb-3">
                        
                        <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter User Name">
                    </div>

                    <div class="form-group mb-3">
                        
                        <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Enter Email Address">
                    </div>

                    <div class="form-group mb-3">
                        
                        <input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone Number">
                    </div>

                    <div class="form-group mb-3">
                        
                        <select name="gender" style="height: 55px;" class="form-control">
                            <option value="">Select Your Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="address" placeholder="address" class="form-control">
                           
                    </div>
                        <div class="form-group mb-3">
                            
                            <input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">
                        </div>

                        <div class="form-group mb-3">
                            
                            <input type="password" name="con_pass" class="form-control" autocomplete="off" placeholder="Enter Confirm Password">
                        </div>

                        <input type="submit" name="create" value="Create Account" class="btn btn-danger">

                        <p class="text-right">I already have an account <a href="login.php">Click here</a></p>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>