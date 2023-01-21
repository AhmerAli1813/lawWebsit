<?php
      include( "function.php");
    headers();
        include("../includes/config.php");
    ?>

    <div class="container-fluid">

            <div class="col-md-10  offset-1">
                <h5 class="text-center my-2">Total Income</h5>

                <?php
                    $query = "SELECT * FROM income";

                    $res = mysqli_query($db_conn,$query);

                    $output = "";

                    $output .= "
                        <table class='table table-bordered'>
                            <tr>
                                <th>ID</th>
                                <th>Lawyer</th>
                                <th>Client</th>
                                <th>Date Discharge</th>
                                <th>Amount Paid</th>
                            </tr>
                    ";

                    if(mysqli_num_rows($res)<1){
                        $output .= "
                            <tr>
                                <td class='text-center' colspan='4'>No Client Discharch Yet!</td>
                            </tr>
                        ";
                    }

                    while ($row = mysqli_fetch_array($res)){
                        $output .= "
                            <tr>
                                <td>".$row['id']."</td>
                                <td>".$row['lawyer']."</td>
                                <td>".$row['client']."</td>
                                <td>".$row['date_discharge']."</td>
                                <td>".$row['amount_paid']."</td>
                        ";
                    }

                    $output .= "</tr></table>";

                    echo $output;
                ?>
            </div>
        </div>
    </div>
</body>
</html>