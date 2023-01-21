<?php

include("includes/config.php");
include 'function.php';
headers();

$unique_id = $_SESSION['unique_id'];

$query = "SELECT * FROM register WHERE unique_id='$unique_id'";

$res = mysqli_query($db_conn,$query);

$row = mysqli_fetch_array($res);
    $username = $row['name'];
    $profiles = $row['profile'];

?>

<div class="container-fluid">
    <div class="row">
       

        <div class="col-md-10 offset-1 p-4">
            <div class="row">
                <div class="col-md-6">
                    <h4><?php echo $username; ?> Profile</h4>

                    <?php
                    
                    if(isset($_POST['update'])){
                        $profile = $_FILES['profile']['name'];

                        if(empty($profile)){

                        }else{
                            $query = "UPDATE register SET profile='$profile' WHERE unique_id='$unique_id'";

                            $result = mysqli_query($db_conn,$query);

                            if ($result){
                                $_SESSION["img"] = $profile;
                                move_uploaded_file($_FILES['profile']['tmp_name'], "dist/img/$profile");
                            }
                        }
                    }
                    
                    ?>

                    <form method="POST" enctype="multipart/form-data">
                        <?php
                        echo "<img src='dist/img/$profiles' class='col-md-12' style='height:250px'>";
                        ?>

                        <br><br>
                        <div class="form-group">
                            <label>UPDATE PROFILE</label>
                            <input type="file" name="profile" class="form-control">
                        </div>
                        <br>
                        <input type="submit" name="update" value="UpDate" class="btn btn-success">
                    </form>
                </div>
                <div class="col-md-6">
                    <?php
                    if(isset($_POST['change'])){
                        $uname = $_POST['uname'];

                        if(empty($uname)){

                        }else{
                            $query = "UPDATE register SET username='$uname' WHERE   unique_id='$unique_id'";

                            $res = mysqli_query($db_conn,$query);

                            if($res){
                                $_SESSION[''] = $uname;
                            }
                        }
                    }
                    ?>
                    <form method="post">
                        <label>Change Username</label>
                        <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Update User name">
                        <br>
                        <input type="submit" name="change" value="Change" class="btn btn-success">
                    </form>

                    <br>

                    <?php
                    if(isset($_POST['update_pass'])){
                        $old_pass = $_POST['old_pass'];
                        $new_pass = $_POST['new_pass'];
                        $con_pass = $_POST['con_pass'];

                        $error = array();

                        $old = mysqli_query($db_conn, "SELECT * FROM register WHERE unique_id ='$unique_id'");

                        $row = mysqli_fetch_array($old);

                        $pass = $row['password'];

                        if(empty($old_pass)){
                            $error['p'] = "Enter Old Password";
                        }else if(empty($new_pass)){
                            $error['p'] = "Enter new Password";
                        }else if(empty($con_pass)){
                            $error['p'] = "Enter Confirm Password";
                        }else if($old_pass != $pass){
                            $error['p'] = "Invaild Old Password";
                        }else if($new_pass != $con_pass){
                            $error['p'] = "Both Password does not Match";

                        }
                            if(count($error)==0){
                                $query = "UPDATE register SET password='$new_pass' WHERE unique_id='$unique_id'";

                                mysqli_query($db_conn ,$query);
                            }

                        
                    }


                    if(isset($error['p'])){
                        $e = $error['p'];

                        $show = "<h5 class='text-center alert alert-danger'>$e</h5>";
                    }else{
                        $show = "";
                    }

                    ?>
                    
                    <form method="POST">
                        <h5 class="text-center my-4">Change Password</h5>
                            <div>
                                <?php
                                echo $show;
                                ?>
                            </div>
                        <div class="form-group">
                            <label>Old Password</label>
                            <input type="password" name="old_pass" class="form-control" placeholder="Old Password">
                        </div>

                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="new_pass" class="form-control" placeholder="New Password">
                        </div>

                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="con_pass" class="form-control" placeholder="Confirm Password">
                        </div>

                        <input type="submit" name="update_pass" value="Update Password" class="btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php footers(); ?>