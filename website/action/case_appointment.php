<?php
session_start();
include "../includes/config.php";
if(isset($_SESSION["unique_id"])){
    $lawyer_id = $_POST["lawyer_id"];
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $case = $_POST["select_case"];
    $book_date = $_POST["book_date"];
    $client_id = $_SESSION["unique_id"];
 echo   $page = $_POST["page"];


   echo $q=$db_conn->query("INSERT INTO `appointment`(`C_id`, `L_id`,  `case_type`, `date_booked`) VALUES ('$client_id','$lawyer_id','$case','$book_date');");

    if($q){
        header("Location:../$page.php?unique_id=$lawyer_id&msg=success");    
    }else{
        header("Location:../$page.php?unique_id=$lawyer_id&msg=error");    
    }
}else{
    header("Location:login.php");
}