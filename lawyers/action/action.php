<?php
include '../../includes/config.php';
if(isset($_POST["edit_id"])){
$table  = "case_appointment";
$column  = "lawyer_status";
 $sts = $_POST["status_edit"];
 $id = $_POST["edit_id"];
 
 
    $q=$db_conn->query("UPDATE $table SET $column = '$sts' WHERE `case_appointment`.`app_id` = $id;");

    
    if($q === true){
        header("location:../cases.php");
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
            header("location:../cases.php");
            echo "success";
        }else{
            echo "failed";
        }
    };
    

?>