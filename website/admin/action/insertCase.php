<?php
include '../../includes/config.php';
session_start();
if($_POST["type"]=="edit"){
        $table  = "casetable";
 $id = $_POST["case_id"];
 $user = $_POST["user"];
 $title = $_POST["c_name"];
 $msg = $_POST["c_msg"];
 
 $c_prize = $_POST["c_prize"];
 $c_icon = $_POST["c_icon"];
 $breadcrumb = $_POST["user"];
 $role_id = $_SESSION["role_id"];

    $image = $_FILES['c_img']['name'];



    $q=$db_conn->query("UPDATE $table  SET `title`='$title',`message`='$msg',`date_send`=NOw(),`icon`='$c_icon',`img`='$image',`prize`='$c_prize' WHERE  `case_id` = $id;  ");

    
    if($q === true){
        header("location:../insertCase.php?user=$breadCrumb&role_id=");
        if ($result){
            
           $move = move_uploaded_file($_FILES['c_img']['tmp_name'], "img/$image");
        }
        if($move){
            header("location:../insertCase.php?user=$breadCrumb&role_id=success");
            
        }else{
            header("location:../insertCase.php?user=$breadCrumb&role_id=cant move");
        
        }
        echo "success";
    }else{
        echo "failed";
    }
}
if($_POST["type"]=="insert"){
        $table  = "casetable";
 $id = $_POST["case_id"];
 $user = $_POST["user"];
 $title = $_POST["c_name"];
 $msg = $_POST["c_msg"];
 
 $c_prize = $_POST["c_prize"];
 $c_icon = $_POST["c_icon"];
 $breadcrumb = $_POST["user"];
 $role_id = $_SESSION["role_id"];

    $image = $_FILES['c_img']['name'];



    $q=$db_conn->query("INSERT INTO `casetable`( `title`, `message`, `date_send`, `icon`, `img`, `prize`) VALUES ('$title','$msg',NOw(),'$c_icon','$image','$c_prize')");

    
    if($q === true){
        header("location:../insertCase.php?user=$breadCrumb&role_id=");
        if ($result){
            
           $move = move_uploaded_file($_FILES['c_img']['tmp_name'], "img/$image");
        }
        if($move){
            header("location:../insertCase.php?user=$breadCrumb&role_id=success");
            
        }else{
            header("location:../insertCase.php?user=$breadCrumb&role_id=cant move");
        
        }
        echo "success";
    }else{
        echo "failed";
    }
}
else{
    echo "wrong";   
};

if(isset($_GET["del_id"])){
    $table  = "casetable";
    
    
    $id = $_GET["del_id"];
    
    $breadcrumb = $_GET["breadCrumb"];
    
    
       $q=$db_conn->query("DELETE FROM `casetable` WHERE `case_id` = $id;");
   
       
       if($q === true){
        header("location:../insertCase.php?user=$breadCrumb&role_id=");
           echo "success";
       }else{
           echo "failed";
       }
    }

?>