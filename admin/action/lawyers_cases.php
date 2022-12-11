<?php
include '../../includes/config.php';
if(isset($_POST["edit_id"])){
$table  = "case_appointment";
$column  = "lawyers_status";
 $sts = $_POST["status_edit"];
 $id = $_POST["edit_id"];
 $breadcrumb = $_POST["breadCr"];
 
    $q=$db_conn->query("UPDATE $table SET $column = '$sts' WHERE `case_appointment`.`app_id` = $id;  ");

    
    if($q === true){
        header("location:../lawyers_cases_cr.php?user=$breadCrumb&sts=$sts");
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
     $sts2 = $_GET["column"];
     $breadcrumb = $_GET["breadCrumb"];
     
     
        $q=$db_conn->query("UPDATE $table SET $column = '$sts' WHERE `case_appointment`.`app_id` = $id;");
    
        
        if($q === true){
            header("location:../lawyers_cases_cr.php?user=$breadCrumb&sts=$sts2");
            echo "success";
        }else{
            echo "failed";
        }
    };
    

?>