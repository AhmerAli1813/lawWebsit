<?php include "function.php";
headers();
?>
<aside id="law-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner desc">
		   					<h2 class="heading-section">About Us</h2>
		   					
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
    <?php choose();
    include 'includes/config.php';
    echo ' <section class="law-about content mb-5  container">

    <div class="row animate-box">
        <div class="col-md-8 col-md-offset-2 text-center law-heading">
            <h2>Our Attorneys</h2>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
        </div>
    </div>
    <!-- Default box -->
    <div class="card card-solid">
    <div class="card-body pb-0">
        <div class="row">';

    $q=$db_conn->query("SELECT * FROM `lawyers`");
    if(mysqli_num_rows($q) >0){
        while($row =mysqli_fetch_assoc($q)){
            echo'<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                    Digital Strategist
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                    <div class="col-7">
                        <h2 class="lead"><b>'.$row['name'].'</b></h2>
                        <p class="text-muted text-sm"><b>About: </b> '.$row["about"].' </p>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: '.$row['address'].'</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: '.$row["phone"].'</li>
                        </ul>
                    </div>
                    <a href="lawyerprofile.php?unique_id='.$row['unique_id'].'" class="col-5 text-center">
                        <img src="dist/img/'.$row['images'].'" alt="user-avatar" class="img-circle img-fluid">
                    </a>
                    </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>
                        <a href="lawyerprofile.php?unique_id='.$row['unique_id'].'" class="btn btn-sm btn-primary">
                            <i class="fas fa-user"></i> View Profile
                        </a>
                        </div>
                    </div>
                    </div>
                </div>';
                }
                }
                
                echo'</div>
            </div>
        </div>
        </section>
        ';
        advices();
        footers();