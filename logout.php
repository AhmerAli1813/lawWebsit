<?php
session_start();

unset($_SESSION['role_id']);
unset($_SESSION['username']);
unset($_SESSION['unique_id']);
unset($_SESSION['img']);
header("Location:index.php");

if(isset($_SESSION['lawyer'])){
    unset($_SESSION['lawyer']);
}elseif (isset($_SESSION['admin'])){
    unset($_SESSION['admin']);
}elseif(isset($_SESSION['client'])){
    unset($_SESSION['client']);
}

?>