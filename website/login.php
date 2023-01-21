
<?php
session_start();
error_reporting(0);
include('includes/config.php');

if (isset($_POST['login'])){
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $error = array();

    if (empty($username)){
        $error['error'] = "Enter Username";
    }else if(empty($password)){
        $error['error'] = "Enter Password";
    }

    if (count($error)==0){
        $query = "SELECT * FROM register WHERE username='$username' or email = '$username'";

        $result = mysqli_query($db_conn,$query);

        if (mysqli_num_rows($result) == 1){
           echo $data = mysqli_fetch_assoc($result);
            if($data["password"] != $password){
                $error["error"] == "password is not match";
            }else{

                
                
                echo "<script>alert('You have Login as an Admin!')</script>";
                        $_SESSION["role_id"] = $data["role_id"];
                        $_SESSION["Name"] = $data["name"];
                        $_SESSION["username"] = $data["username"];
                        $_SESSION["unique_id"] = $data["unique_id"];
                         $_SESSION["img"] = $data["profile"];
                if($data["role_id"]=="1"){
                    header("Location:admin/index.php");
                    
                 exit();
             }elseif($data["role_id"] == "2"){
                
                header("Location:lawyers/index.php ");
               
             }elseif($data["role_id"] == "3"){
                
                header("Location:index.php ");
             }   
            }
        }else{
            echo "<script>alert('Invaild Userame or Password')</script>";
        }
    }
}
    include('function.php');
    headers();
    ?>

    <div style="margin-top: 20px;"></div>

    <div class="container" ">
    <div class="row mb-5">
        <div class="col text-center"><h2>Login Pages</h2></div>
    </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 jumbotron">
                    <!-- <img src="img/admin.jpg" class="col-md-12"> -->
                    <form action="" method="post" class="my-4">

                            <div>
                                <?php
                                if (isset($error['error'])){

                                    

                                    $show = '<h4 class="alert alert-danger"> ' .$error['error'] .'"</h4>';

                                }else{
                                    $show = "";
                                }

                                echo $show;
                                ?>
                            </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" placeholder="Enter Password">
                        </div>

                        <input type="submit" name="login" class="btn-cta" value="Login">
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
<?php footers();?>