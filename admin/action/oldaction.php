<?php
include '../../includes/config.php';
if(isset($_POST["edit_id"])){
$table  = "case_appointment";
$column  = "lawyer_status";
 $sts = $_POST["status_edit"];
 $id = $_POST["edit_id"];
 $breadCrumb = $_POST["user"];
 
 
    $q=$db_conn->query("UPDATE $table SET $column = '$sts' WHERE `case_appointment`.`app_id` = $id;");

    
    if($q === true){
        header("location:../admin_cases_cr.php?user=$breadCrumb&sts=$sts");
        echo "success";
    }else{
        echo "failed";
    }
}else{
    echo "wrong";   
};

if(isset($_GET["del_id"])){
    $table  = "case_appointment";
    $column  = "lawyer_status";
     $sts = "deleted";
     $id = $_GET["del_id"];
     
     
        $q=$db_conn->query("UPDATE $table SET $column = '$sts' WHERE `case_appointment`.`app_id` = $id;");
    
        
        if($q === true){
            header("location:../client.php");
            echo "success";
        }else{
            echo "failed";
        }
    };
    

?>