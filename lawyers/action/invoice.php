<?php
include "../../includes/config.php";

if(mysqli_num_rows($q)){
        $q2=$db_conn->query("SELECT MAX(invoice_id) as last_inv FROM `income`");
        if(mysqli_num_rows($q2) >0){

        $last = mysqli_fetch_assoc($q2);
        
        function increment($matches)
                    {
                        if(isset($matches[1]))
                        {
                            $length = strlen($matches[1]);
                            return sprintf("%0".$length."d", ++$matches[1]);
                        }    
                }

                    $invoice = $last['last_inv'];

                    $invoice =  preg_replace_callback( "|(\d+)|", "increment", $invoice);

                    $app_id = $_POST["app_id"];
                    $prize = $_POST["inv_prize"];
                    $date = $_POST["date"];
                    $desc = $_POST["desc"];
                    $q=$db_conn->query("INSERT INTO `income`( `invoice_id`, `app_id`, `date_discharge`, `amount_paid`, `description`) VALUES ('$invoice','$app_id','$date','$prize','$desc')");

                    if($q==true){
                    header("location:../appoint_acc.php?msg=success");
                    }else{
                        echo "serve is slow";
                    }
        }
}else{
    header("location:../appoint_acc.php?msg=error:you already make this invoice");   
}