<?php
include("includes/config.php");

if(isset($_POST['create'])){

    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $password = $_POST['pass'];
    $con_pass = $_POST['con_pass'];
 $date = date('m/d/Y h:i:s a', time());
    $error = array();

    if(empty($fname)){
        $error['ac'] = "Enter Firstname";
    }else if(empty($uname)){
        $error['ac'] = "Enter username";
    }else if(empty($email)){
        $error['ac'] = "Enter Email";
    }else if(empty($phone)){
        $error['ac'] = "Enter Phone Number";
    }else if($gender == ""){
        $error['ac'] = "Select Your Gender";
    }else if($address == ""){
        $error['ac'] = "Select Your address";
    }else if(empty($password)){
        $error['ac'] = "Enter Password";
    }else if($con_pass != $password){
        $error['ac'] = "Both password do not match!";
    }

    if(count($error)==0){
        $unique_id ="client". rand(time(),100);
        $query = "INSERT INTO `register`(`unique_id`, `name`, `username`, `email`, `password`, `role_id`, `profile`, `phone`, `address`, `gender`, `data_reg`, `status`) VALUES
        ('$unique_id', '$firstname' , '$uname','$email' , '$password',3 ,'avatar4.png' ,'$phone','$address' ,'$gender',$date,'pending')";


        $res = mysqli_query($db_conn,$query);

        if($res){
            $_SESSION["role_id"] = "3";
            $_SESSION["Name"] = $firstname;
            $_SESSION["username"] = $uname;
            $_SESSION["unique_id"] = $unique_id;
            $_SESSION["unique_id"] = "avatar4.png";
            header("Location:client/index.php");
        }else{
            echo "<script>alert('failed')</script>";
        }
    }
}

  include( "function.php");
    headers();
  
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0"></div>
            <div class="col-md-6 my-2 jumbotron">
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
                        
                        <select name="gender" class="form-control">
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