<?php include "function.php"; headers();
include 'includes/config.php';
echo '
<aside id="law-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner desc">
		   					<h2 class="heading-section">All cases</h2>
		   					
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>';
    $q=$db_conn->query("SELECT `case_id`, `title`, `message`, `icon` FROM `casetable`LIMIT 0,6");
    
                echo '
                <div id="law-practice" class="law-bg-section">
                    <div class="container">
                        <div class="row animate-box">
                            <div class="col-md-8 col-md-offset-2 text-center law-heading">
                                <h2>Our Legal Practice Area</h2>
                                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                            </div>
                        </div>
                        <div class="row">';
                        if(mysqli_num_rows($q)>0){
                            while($row = mysqli_fetch_assoc($q)){
                                echo '  <div class="col-md-4 text-center animate-box">
                                <div class="services">
                                    <span class="icon">
                                        <i class="'.$row["icon"].'"></i>
                                    </span>
                                    <div class="desc">
                                        <h3><a href="#">'.$row["title"].'</a></h3>
                                        <p>'.$row["message"].'</p>
                                    </div>
                                </div>
                            </div>';
                            }
                        }    
                             echo'<div class="col-md-12 text-center animate-box">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>';
footers();