<?php
include '../../includes/config.php';

if(isset($_POST["type"])){
    if($_POST["type"]=="edit"){
        $user = $_POST['user'];
        $role_id = $_POST['role_id'];
        $unique_id=  $_POST['unique_id'];          
             
        $sts = $_POST['status'];             
        $salary =$_POST['salary'];             
        

        
        
        $q=$db_conn->query("UPDATE `job_request` SET `status`='$sts',`salary`='$salary'  WHERE `lawyer_id`='$unique_id'");

            
            if($q === true){
                header("location:../jb_request.php?role_id={$role_id}&user={$user}&sts=$sts");
                echo "success";
            }else{
                echo "failed";
            }
    }     
}
if(isset($_GET["del_id"])){
    
     $id = $_GET["del_id"];
     $user = $_GET['user'];
     $role_id = $_GET['role_id'];
     $sts = $_GET['sts'];
        

        $sql2=$db_conn->query("UPDATE `job_request` SET `status`='deleted'  where lawyer_id = '$id'");
    
        
        if($sql2 === true){
            header("location:../jb_request.php?role_id={$role_id}&user={$user}sts=$sts");
            echo "success";
        }else{
            echo "failed";
        }
    };
    

?>