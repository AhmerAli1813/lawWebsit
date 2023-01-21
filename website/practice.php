<?php include "function.php"; headers();
include 'includes/config.php';
                echo '	<div id="law-blog" class="law-bg-section">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center law-heading">
                            <h2>Practice area Post</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                    <div class="row">';
                    $q=$db_conn->query("SELECT `case_id`, `title`, `message`, `date_send`,  `img` FROM `casetable`");
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
        footers();