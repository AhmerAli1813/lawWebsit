<?php include "function.php";

headers();
echo '
<aside id="law-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
           <li style="background-image: url(images/img_bg_1.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                       <div class="slider-text-inner desc">
                           <h2 class="heading-section">Contact Us</h2>
                           
                       </div>
                   </div>
               </div>
           </li>
          </ul>
      </div>
</aside>';
echo '

<div id="law-contact">
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-push-1 animate-box">
            
            <div class="law-contact-info">
                <h3>Contact Information</h3>
                
                <ul class="law-footer-links">
                    <li>Suite #103 , 1st floor , progressicve center , shahrah-e-faidal,karachi,pakistan</li>
                    <li><a href="tel://111-278324">111-APTECH(278324)</a></li>
                    <li><a href="mailto:aptech-education.com.pk">wwww.aptech-education.com.pk</a></li>
                    
                </ul>

            </div>

        </div>
        <div class="col-md-6 animate-box">
            <h3>Send A Message</h3>
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
    
</div>
</div>

';
lawyers(); 
advices();  
 footers();