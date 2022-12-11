
<?php
  include( "function.php");
    headers();
?>

<div style="margin-top: 50px;"></div>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3 mx-1 shadow">
                <img src="asset/images/info.png" style="width: 100%; height:190px;">

                <h5 class="text-center">Click on the button for more information.</h5>
                <a href="#">
                    <button class="btn btn-success my-5" style="margin-left: 20%;">More Information</button>
                </a>
            </div>

            <div class="col-md-4 mx-1 shadow">
                <img src="asset/images/client.jpg" style="width: 100% ;">
                <h5 class="text-center">Create Account so that we can take good Justice of you.</h5>
                <a href="register.php">
                    <button class="btn btn-success my-3" style="margin-left: 30%;">Create Account!!!</button>
                </a>
            </div>

            <div class="col-md-4 mx-1 shadow">
                <img src="asset/images/lawyer.jpg" style="width: 100% ;">
                <h5 class="text-center">We are Employing for Lawyers</h5>
                <a href="lawyerform.php">
                    <button class="btn btn-success my-5" style="margin-left: 30%;">Apply Now!!!</button>
                </a>
            </div>
        </div>
    </div>
</div>
    <?php footers(); ?>

</body>
</html>