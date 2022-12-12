<?php
include 'includes/config.php';
function error404(){
    echo ' <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>404 Error Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">404 Error Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="error-page">
      <h2 class="headline text-warning"> 404</h2>

      <div class="error-content">
        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

        <p>
          We could not find the page you were looking for.
          Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search form.
        </p>

        <form class="search-form">
          <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
              </button>
            </div>
          </div>
          <!-- /.input-group -->
        </form>
      </div>
      <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
    </section>
    <!-- /.content -->
        </div>';
}
   function headers(){
    
            session_start();
    echo '<!DOCTYPE HTML>
                <html>
                    <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <title>Law websites</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
                    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                                <!-- Animate.css -->
                                <link rel="stylesheet" href="asset/css/animate.css">
                                
                                <!-- Icomoon Icon Fonts-->
                                <link rel="stylesheet" href="asset/css/icomoon.css">
                                
                                <!-- Bootstrap  -->
                                <link rel="stylesheet" href="asset/css/bootstrap.css">
                                

                                <!-- Magnific Popup -->
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnify/2.3.3/css/magnify.min.css">

                                <!-- Owl Carousel  -->
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
                                <!-- Flexslider  -->
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.0/flexslider.min.css">

                                <!-- Theme style  -->
                
                    <link rel="stylesheet" href="asset/css/style.css">
                    
    
                    <!-- Modernizr JS -->
                    <script src="asset/js/modernizr-2.6.2.min.js"></script>
                    <!-- FOR IE9 below -->
                    <!--[if lt IE 9]>
                    <script src="asset/js/respond.min.js"></script>
                    <![endif]-->
    
                    </head>
                    <body>
                        
                    
                    
                                        
                    <nav class="law-nav" role="navigation">
                        <div class="top-menu">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <div id="law-logo"><a href="index.html">Law<span>.</span></a></div>
                                    </div>
                                    <div class="col-xs-10 text-right menu-1">
                                        <ul>
                                            <li class="active"><a href="index.html">Home</a></li>
                                            <li><a href="practice.html">Practice Areas</a></li>
                                            <li><a href="won.html">Won Cases</a></li>
                                            <li class="has-dropdown">
                                                <a href="blog.html">Blog</a>
                                                <ul class="dropdown">
                                                    <li><a href="#"></a></li>
                                                    <li><a href="#">eCommerce</a></li>
                                                    <li><a href="#">Branding</a></li>
                                                    <li><a href="#">API</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.php">Contact</a></li>';
                                            if(isset($_SESSION['unique_id'])){
                                               echo ' <li><a href="about.html">'.$_SESSION['Name'].'</a></li>
                                               <li class="has-dropdown">
                                                <a href="profile.php?unique_id='.$_SESSION['unique_id'].'"><img src="dist/img/'.$_SESSION["img"].'" width="50px" height="50px" style="border-radius:50% ;" alt=""></a>
                                               <ul class="dropdown">
                                                   <li> <a href="profile.php?unique_id='.$_SESSION['unique_id'].'"><img src="dist/img/'.$_SESSION["img"].'" width="50px" height="50px" style="border-radius:50% ;" alt=""></a>
                                                   </li>
                                                   <li>'.$_SESSION['username'].'</li>
                                                   <li><a href="editProfile.php">sitting</a></li>
                                                   <li><a href="profile.php?unique_id='.$_SESSION['unique_id'].'">profile</a></li>
                                                   <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
                                                   
                                               </ul>
                                           </li>';
                                            }

                                            else{
                                                echo '
                                                <li class="btn-cta"><a href="login.php"><span>Login</span></a></li>
                                                <li class="btn-cta"><a href="registerLayout.php"><span>Sign Up</span></a></li>
                                                ';
                                            }
                                            echo'
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </nav>';
 }
 function  carousel (){
                echo '
                <aside id="law-hero" class="js-fullheight">
                    <div class="flexslider js-fullheight">
                        <ul class="slides">
                           <li style="background-image: url(asset/images/img_bg_2.jpg);">
                               <div class="overlay-gradient"></div>
                               <div class="container">
                                   <div class="row">
                                       <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                           <div class="slider-text-inner">
                                               <h1>Expert Legal Solutions</h1>
                                                <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
                                                <p><a class="btn btn-primary btn-lg" href="#">Make An Appointment</a></p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </li>
                           <li style="background-image: url(asset/images/img_bg_2.jpg);">
                               <div class="overlay-gradient"></div>
                               <div class="container">
                                   <div class="row">
                                       <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                           <div class="slider-text-inner">
                                               <h1>Business Law</h1>
                                                <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
                                                <p><a class="btn btn-primary btn-lg btn-learn" href="#">Make An Appointment</a></p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </li>
                           <li style="background-image: url(asset/images/img_bg_2.jpg);">
                               <div class="overlay-gradient"></div>
                               <div class="container">
                                   <div class="row">
                                       <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                           <div class="slider-text-inner">
                                               <h1>Defend Your Constitutional Right with Legal Help</h1>
                                                <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
                                                <p><a class="btn btn-primary btn-lg btn-learn" href="#">Make An Appointment</a></p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </li>		   	
                          </ul>
                      </div>
                </aside>';
 }
 function  dataCount(){
                echo '
                <div id="law-counter" class="law-counters law-bg-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 text-center animate-box">
                                <span class="icon"><i class="icon-user"></i></span>
                                <span class="law-counter js-counter" data-from="0" data-to="27539" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="law-counter-label">Satisfied Clients</span>
                            </div>
                            <div class="col-md-3 text-center animate-box">
                                <span class="icon"><i class="icon-speech-bubble"></i></span>
                                <span class="law-counter js-counter" data-from="0" data-to="23563" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="law-counter-label">Cases Won</span>
                            </div>
                            <div class="col-md-3 text-center animate-box">
                                <span class="icon"><i class="icon-trophy"></i></span>
                                <span class="law-counter js-counter" data-from="0" data-to="5067" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="law-counter-label">Awards Won</span>
                            </div>
                            <div class="col-md-3 text-center animate-box">
                                <span class="icon"><i class="icon-users"></i></span>
                                <span class="law-counter js-counter" data-from="0" data-to="2587" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="law-counter-label">Lawyers</span>
                            </div>
                        </div>
                    </div>
                </div>';
 }
 function   choose(){
                echo '
                <div id="law-content">
                    <div class="video law-video" style="background-image: url(asset/images/video.jpg);">
                        <a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video2"></i></a>
                        <div class="overlay"></div>
                    </div>
                    <div class="choose animate-box">
                        <div class="law-heading">
                            <h2>Why Choose Us?</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                            Adoption Law 50%
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            Family Law 80%
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            Real Estate Law 70%
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                            Personal Injury Law 40%
                            </div>
                        </div>
                    </div>
                </div>';
 }
 function   laws(){
    include 'includes/config.php';
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
                                <p><a class="btn btn-primary btn-lg btn-learn" href="allCase.php">View More</a></p>
                            </div>
                        </div>
                    </div>
                </div>';
 }
 function   Counseling(){
                echo '
                <div id="law-project">
                    <div class="container">
                        <div class="row animate-box">
                            <div class="col-md-8 col-md-offset-2 text-center law-heading">
                                <h2>Counseling</h2>
                                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 text-center law-project animate-box" data-animate-effect="fadeIn">
                                <a href="#"><img src="asset/images/project-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                                    <h3>Business</h3>
                                    <span>CEO. Hon Doe</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center law-project animate-box" data-animate-effect="fadeIn">
                                <a href="#"><img src="asset/images/project-2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                                    <h3>Legal Advice</h3>
                                    <span>Atty. John Doe</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center law-project animate-box" data-animate-effect="fadeIn">
                                <a href="#"><img src="asset/images/project-3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                                    <h3>investment</h3>
                                    <span>Ptr. Jhon Doe</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center law-project animate-box" data-animate-effect="fadeIn">
                                <a href="#"><img src="asset/images/project-4.webp" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                                    <h3>Affidavit</h3>
                                    <span>Atty. Boo Doe</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center law-project animate-box" data-animate-effect="fadeIn">
                                <a href="#"><img src="asset/images/project-5.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                                    <h3>Sports</h3>
                                    <span>Atty. Smith D</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center law-project animate-box" data-animate-effect="fadeIn">
                                <a href="#"><img src="asset/images/project-6.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                                    <h3>Photography</h3>
                                    <span>Phtr. Arnt Tee</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>';
 }
 function   Testimonials(){
                echo '
                <div id="law-testimonial" class="law-bg-section">
                    <div class="container">
                        <div class="row animate-box">
                            <div class="col-md-6 col-md-offset-3 text-center law-heading">
                                <h2>Testimonials</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="row animate-box">
                                    <div class="owl-carousel owl-carousel-fullwidth">
                                        <div class="item">
                                            <div class="testimony-slide active text-center">
                                                <figure>
                                                    <img src="asset/images/user-1.jpg" alt="user">
                                                </figure>
                                                <span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
                                                <blockquote>
                                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimony-slide active text-center">
                                                <figure>
                                                    <img src="asset/images/user-1.jpg" alt="user">
                                                </figure>
                                                <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                                <blockquote>
                                                    <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimony-slide active text-center">
                                                <figure>
                                                    <img src="asset/images/user-1.jpg" alt="user">
                                                </figure>
                                                <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                                <blockquote>
                                                    <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
 }
 function   advices(){
                echo '	<div id="law-consult">
                <div class="video law-video" style="background-image: url(asset/images/video.jpg);">
                </div>
                <div class="choose animate-box">
                    <div class="law-heading">
                        <h2>Free Legal Consultation</h2>
                    </div>
                    <form action="#">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <!-- <label for="fname">First Name</label> -->
                                <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                            </div>
                            <div class="col-md-6">
                                <!-- <label for="lname">Last Name</label> -->
                                <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                            </div>
                        </div>
        
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="text" id="email" class="form-control" placeholder="Your email address">
                            </div>
                        </div>
        
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
                                <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                            </div>
                        </div>
        
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="message">Message</label> -->
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>
        
                    </form>	
                </div>
            </div>
        ';
 }
 function   blogs(){
    include 'includes/config.php';
                echo '	<div id="law-blog" class="law-bg-section">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center law-heading">
                            <h2>Recent Post</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                    <div class="row">';
                    $q=$db_conn->query("SELECT `case_id`, `title`, `message`, `date_send`,  `img` FROM `casetable`LIMIT 0,3");
                        if(mysqli_num_rows($q)>0){
                            while($row = mysqli_fetch_assoc($q)){
                    echo'    <div class="col-lg-4 col-md-4">
                            <div class="law-blog animate-box">
                                <a href="caseDel.php?caseId='.$row['case_id'].'"><img class="img-responsive" src="dist/img/'.$row['img'].'" alt=""></a>
                                <div class="blog-text">
                                    <span class="posted_on">'.$row['date_send'].'</span>
                                    <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                    <h3><a class="text-capitalize" href="caseDel.php?caseId='.$row['case_id'].'">'.$row['title'].'</a></h3>
                                    <p>'.$row['message'].'</p>
                                    <a href="caseDel.php?caseId='.$row['case_id'].'" class="btn btn-primary">Read More</a>
                                </div> 
                            </div>
                        </div>';
                            }
                        }
                        echo'
                        
                    </div>
                </div>
            </div>
        ';
 }
 
 function lawyers(){
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
}
 function   advice_corousel(){
                echo '<div id="law-started" style="background-image:url(asset/images/img_bg_2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center law-heading">
                            <h2>Legal Advice</h2>
                            <p>We help people effectively fight their offenders back and successfully defend their own stand!</p>
                        </div>
                    </div>
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <p><a href="#" class="btn btn-default btn-lg">Consultation</a></p>
                        </div>
                    </div>
                </div>
            </div>';
 }
 
 function   footers(){
                echo '	<footer id="law-footer" role="contentinfo">
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-3 law-widget">
                            <h4>Attorneys Law</h4>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                        </div>
                        <div class="col-md-3 col-md-push-1">
                            <h4>Navigation</h4>
                            <ul class="law-footer-links">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Admin & lawyer Panels</a></li>
                                <li><a href="#">Won Cases</a></li>
                                <li><a href="contact.php">contact </a></li>
                                <li><a href="about.php">About us</a></li>
                            </ul>
                        </div>
        
                        <div class="col-md-3 col-md-push-1">
                            <h4>Contact Information</h4>
                            <ul class="law-footer-links">
                                <li>Suite #103 , 1st floor , progressicve center , shahrah-e-faidal,karachi,pakistan</li>
                                <li><a href="tel://111-278324">111-APTECH(278324)</a></li>
                                <li><a href="mailto:aptech-education.com.pk">wwww.aptech-education.com.pk</a></li>
                                
                            </ul>
                        </div>
        
                        <div class="col-md-3 col-md-push-1">
                            <h4>Opening Hours</h4>
                            <ul class="law-footer-links">
                                <li>Mon - Thu: 9:00 - 21 00</li>
                                <li>Fri 8:00 - 21 00</li>
                                <li>Sat 9:30 - 15: 00</li>
                            </ul>
                        </div>
        
                    </div>
        
                    <div class="row copyright">
                        <div class="col-md-12 text-center">
                            <p>
                                <small class="block">&copy; 2022  law Website. All Rights Reserved.</small> 
                                <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">Aptech SFC </a> Student: <a href="http://unsplash.co/" target="_blank">E-project</a></small>
                            </p>
                            <p>
                                <ul class="law-social-icons">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                </ul>
                            </p>
                        </div>
                    </div>
        
                </div>
            </footer>
            
        
            <div class="gototop js-top">
                <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
            </div>
                                        
                           
                            <!-- Bootstrap 4 -->
                            
                            <!-- AdminLTE App -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="asset/js/jquery.min.js"></script>
            <!-- jQuery Easing -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
            <!-- Bootstrap -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
            <!-- Waypoints -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
            
            <!-- Stellar Parallax -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js"></script>
            <!-- Carousel -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
            <!-- Flexslider -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider.min.js"></script>
            <!-- countTo -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.min.js"></script>
            <!-- Magnific Popup -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
            <script src="asset/js/magnific-popup-options.js"></script>
            <!-- Main -->
            <script src="asset/js/main.js"></script>
            <script src="dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="dist/js/demo.js"></script>
            </body>
        </html>
        
        ';
 }
?>