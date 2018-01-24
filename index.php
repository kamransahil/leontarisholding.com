<?php
error_reporting(0);
if(isset($_POST['submit'])) {
	$senderName = $_POST['contactName'];
	$email = $_POST['contactEmail'];
	$subject = $_POST['contactSubject'];
	$comment = $_POST['contactMessage'];

	$senderName = trim($senderName);
	$email = trim($email);
	$message = trim($comment);
	$sendingMessage = "";

	if($senderName != "" && $email != "" && $message != "") {
		if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//			$message = wordwrap($message, 300);
			$message = $senderName.'<br />'.$subject.'<br /><br />'.$message;
			//mail("info@kernelinnovation.com",$senderName,$message,"From:$email\n");
			mail("info@kernelinnovation.com",$senderName,$message,"From:$email\n");
			$sendingMessage = "Your message has been sent successfully.";
		} else {
			$sendingMessage = "Your email address is incorrect. please check and retry.";
		}
	} else {
		$sendingMessage = "Empty message cannot be sent.";
	}

}
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>
        <!-- Global Site Tag (gtag.js) - Google Analytics -->


        <!--- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title>LEONTARIS HOLDING LTD | SOFTWARE COMPANY </title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Mobile Specific Metas
       ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
   ================================================== -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="assets/css/new.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicons
             ================================================== -->
        <link rel="shortcut icon" href="favicon.ico" >

    </head>

    <body data-spy="scroll" data-target="#nav-wrap">


        <!-- Header
        ================================================== -->
        <header class="mobile">

            <div class="row">

                <div class="col full">

                    <div class="logo">
                        <a href="#"><img alt="" src="images/logo.png"></a>
                    </div>

                    <nav id="nav-wrap">

                        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
                        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

                        <ul id="nav" class="nav">

                            <li><a href="#intro">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>

                    </nav>

                </div>

            </div>

        </header>
        <!-- Header End -->
        <section id="intro">

            <div class="row section-head">
                <div class="col full">

                    <h2 style="margin-top: 50px;">Home</h2>
                    <p class="desc" style="color: #2ca3e7;">Welcome on our website!</p>

                    <p class="intro" style="color: #2ca3e7;">Our company LEONTARIS HOLDING LTD is a result and final completion of our trasformation, 
                        which started already in 2017 as owners preparations and plans. With tireless efforts we managed
                        to build several companies, that we transpformed to our parent company LEONTARIS HOLDING LTD.</p>

                    <p class="intro" style="color: #2ca3e7;">LEONTARIS HOLDING LTD follows on from quality and professionality, which is unrivalled today. 
                        Our experience reflects itself in our work, we offer our professionality, 100% quality of our services and goods, 
                        we are friendly to your requirements and we are willing to be to your disposition anytime, to achieve mutual success.</p>


                </div>

            </div>



        </section>
        <!-- Portfolio Section
          ================================================== -->
        <section id="about">

            <div class="row section-head">
                <div class="col full">

                    <h2>About Us</h2>
                    <p class="desc">Welcome on our website!</p>

                    <p class="intro">Our company LEONTARIS HOLDING LTD is a result and final completion of our trasformation, 
                        which started already in 2017 as owners preparations and plans. With tireless efforts we managed
                        to build several companies, that we transpformed to our parent company LEONTARIS HOLDING LTD.</p>

                    <p class="intro">LEONTARIS HOLDING LTD follows on from quality and professionality, which is unrivalled today. 
                        Our experience reflects itself in our work, we offer our professionality, 100% quality of our services and goods, 
                        we are friendly to your requirements and we are willing to be to your disposition anytime, to achieve mutual success.</p>


                </div>
            </div>

            <div class="row">

                <!-- Portfolio Wrapper -->
                <div id="portfolio-wrapper">

                    <div class="col portfolio-item">
                        <div class="item-wrap">
                            <a href="#" data-reveal-id="modal-01"><img src="images/auto/1.jpg" alt=""/></a>
                            <div class="portfolio-item-meta">
                                <h5><a href="#">Picture 1</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col portfolio-item">
                        <div class="item-wrap">
                            <a href="#" data-reveal-id="modal-02"><img src="images/auto/2.jpg" alt=""/></a>
                            <div class="portfolio-item-meta">
                                <h5><a href="#">Picture 2</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col portfolio-item">
                        <div class="item-wrap">
                            <a href="#" data-reveal-id="modal-03"><img src="images/auto/3.jpg" alt=""/></a>
                            <div class="portfolio-item-meta">
                                <h5><a href="#">Picture 3</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col portfolio-item">
                        <div class="item-wrap">
                            <a href="#" data-reveal-id="modal-04"><img src="images/auto/4.jpg" alt=""/></a>
                            <div class="portfolio-item-meta">
                                <h5><a href="#">Picture 4</a></h5>
                            </div>
                        </div>
                    </div>



                </div> <!-- Portfolio Wrapper End -->


            </div> <!-- End Row -->


            <!-- Modal Popup
                 =========================================================== -->

            <!-- modal-01 -->
            <div id="modal-01" class="reveal-modal">

                <img class="scale-with-grid" src="images/auto/1.jpg" alt="" />

                <div class="description-box">
                    <h4>Picture 1</h4>
                    <p></p>
                    <span class="categories"><i class="icon-tag"></i>Text 1, Text 2</span>
                </div>

                <div class="link-box">
                    <a href="#"></a> <!--Details-->
                    <a class="close-reveal-modal">Close</a>
                </div>

            </div><!-- modal-01 End -->

            <!-- modal-02 -->
            <div id="modal-02" class="reveal-modal">

                <img class="scale-with-grid" src="images/auto/2.jpg" alt="" />

                <div class="description-box">
                    <h4>Picture 2</h4>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                    <span class="categories"><i class="icon-tag"></i>Text 1, Text 2n</span>
                </div>

                <div class="link-box">
                    <a href="#"></a>
                    <a class="close-reveal-modal">Close</a>
                </div>

            </div> <!-- modal-02 End -->

            <!-- modal-03 -->
            <div id="modal-03" class="reveal-modal">

                <img class="scale-with-grid" src="images/auto/3.jpg" alt="" />

                <div class="description-box">
                    <h4>Picture 3</h4>

                    <p></p>
                    <span class="categories"><i class="icon-tag"></i>Text 1, Text 2</span>
                </div>

                <div class="link-box">
                    <a href="#"></a>
                    <a class="close-reveal-modal">Close</a>
                </div>

            </div> <!-- modal-03 End -->

            <!-- modal-04 -->
            <div id="modal-04" class="reveal-modal">

                <img class="scale-with-grid" src="images/auto/4.jpg" alt="" />

                <div class="description-box">
                    <h4>Picture 4</h4>
                    <p></p>
                    <span class="categories"><i class="icon-tag"></i>Text 1, Text 2</span>
                </div>

                <div class="link-box">
                    <a href="#"></a>
                    <a class="close-reveal-modal">Close</a>
                </div>

            </div> <!-- modal-04 End -->


        </section> <!-- Portfolio End -->

        <!-- About Section
       ==================================================
        <section id="about">
     
           <div class="row section-head">
     
              <div class="col one-fourth">
                 <h2>O nás</h2>
                 <p class="desc">Tohle jsme my</p>
              </div>
     
              <div class="col three-fourths">
     
                                                      <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labori
                                 s nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                 officia deserunt mollit anim id est laborum. </p>
     
     
              </div>
     
           </div>
     
            Process Wrap End
           <br><br>
           <div class="row">
              <div class="col full"><h3>Seznamte se s naším týmem</h3></div>
           </div>
     
     
            Team Wrap End
           <div class="row team-wrap">
     
              <div class="col one-fourth">
     
                 <img src="images/team/team-img-01.jpg" alt=""/>
     
                 <div class"member-name">
                    <h5>Roman Baroň</h5>
                    <span>Projektový manažer</span>
                 </div>
     
                 <ul class="member-social">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus-sign"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-skype"></i></a></li>
                 </ul>
     
                             </div>
     
              <div class="col one-fourth">
     
                 <img src="images/team/team-img-02.jpg" alt=""/>
     
                 <div class"member-name">
                    <h5>Jméno Přijmení</h5>
                    <span>Projektový manažer</span>
                 </div>
     
     
     
                             </div>
     
              <div class="col one-fourth">
     
                 <img src="images/team/team-img-03.jpg" alt=""/>
     
                 <div class"member-name">
                    <h5>Jméno Přijmení</h5>
                    <span>Povolání 2</span>
                 </div>
     
                 <ul class="member-social">
     
                 </ul>
     
                             </div>
     
              <div class="col one-fourth">
     
                 <img src="images/team/team-img-04.jpg" alt=""/>
     
                 <div class"member-name">
                    <h5>Jméno Přijmení</h5>
                    <span>Povolání 1</span>
                 </div>
     
                 <ul class="member-social">
     
                 </ul>
     
                             </div>
     
           </div>  Team Wrap End
           <br>
            Testimonials
           <div class="row">
     
              <div class="col full section-head">
                 <h2>Reference</h2>
                 <p class="desc">Co říkají naši klienti.</p>
              </div>
     
           </div>
     
           <div class="row testimonials">
     
              <div class="col half">
     
                 <div class="client-author">
                    <img src="images/client-img.png" alt="" />
                    <div class="name">
                       <p>Petr Novotný<span>Povolání 4</span></p>
                    </div>
                 </div>
     
                           <div class="client-cite">
                                   <p>Naprostá spokojenost ve všech ohledech, profesionální přístup a odvedená práce</p>
                           </div>
     
              </div>
     
              <div class="col half">
     
                 <div class="client-author">
                    <img src="images/client-img.png" alt="" />
                    <div class="name">
                       <p>Franta Vomáčka<span>Povolání 8</span></p>
                    </div>
                 </div>
     
                           <div class="client-cite">
                                   <p>Po důkladné analýze našich firemních dat byla přestavba na 4 x 4 pro nás jasnou volbou</p>
                           </div>
     
              </div>
     
           </div>   Testimonials End
     
     
        </section>  About Section End-->

        <!-- Call-to-Action Section
        ================================================== -->
        <section id="call-to-action">

            <div class="row">

                <div class="col three-fourths">

                    <h2><a href="#">Website Under Construction.</a></h2>
                    <p>Looking for an awesome and reliable business partner? Try <a href="#"><span>LEONTARIS </span></a>.
                        Get <span>chance to </span> start successful business with us <span>RIGHT NOW</span>.
                        <!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. --></p>

                </div>

                <div class="col one-fourth action">

                    <a href="#" class="button">Sign Up Now</a>

                </div>

            </div>


        </section> <!-- Call-to-Action Section End-->

        <!-- Map Section
        ================================================== -->
        <section id="map">
       <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQVaTl9VWZ_7u1eyx3Y08eqrwfFKa8IyA&callback=initMap"
           type="text/javascript"></script>
     
                      <script>
      function initMap() {
              var uluru = {lat: 51.530, lng: -0.0935};
              var map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 10,
                      center: uluru
              });
              var marker = new google.maps.Marker({
                      position: uluru,
                      map: map
              });
      }
     </script>
     
     
     
        </section> 
        <!--Map Section End-->

        <!-- Contact Section
       ================================================== -->
        <section id="contact">

            <div class="row section-head">
                <div class="col full">
                    <h2>CONTACT US</h2>
                    <p class="desc" style="margin-top: 30px;">Get in touch with us.</p>
                </div>
            </div>

            <div class="row">
                <aside class="col g-5">

                    <h3>Contact information</h3>

                    <p>
                        LEONTARIS HOLDING LTD<br />
                        Company number 11102580<br />
                        20-22 Wenlock Road<br />
                        N1 7GU London<br /> 
                        England<br />


                    </p>
                    <p>
                        Tel: +44 560 386 2969<br />
                        Email: info [@] leontarisholding.com
                    </p><br />
                    <img src="incorporatio-certificate.jpg" alt="Incorporation certificate" width="210" height="297">


                    <!--<h3>Template Info</h3>
        
                     <p>Kreative is a free website template by <a href="http://www.styleshout.com/">styleshout.com</a>. This work is
                              released and licensed under the <a href="http://creativecommons.org/licenses/by/3.0/" rel="license">
                              Creative Commons Attribution 3.0 License</a>, which means that you are free to
                              use and modify it for any personal or commercial purpose. All I ask is that you give me credit by including a credit link to
                              <a href="http://www.styleshout.com/">my website</a>.
                    </p>-->

                </aside>
                <div class="col g-7">

                    <!-- form -->
                    <form method="post" id="contact" action="">
                        <fieldset>

                            <div style="margin-bottom: 30px;">
                                <label for="contactName">Name<span class="required">*</span></label>
                                <input class="form-control" placeholder="input your name" name="contactName"  type="text" id="contactName" size="35" value="<?= $name?>" />
                                <span class="error"></span>
                            </div>

                            <div style="margin-bottom: 30px;">
                                <label for="contactEmail">Email <span class="required">*</span></label>
                                <input class="form-control" name="contactEmail"  type="email" placeholder="input your email" id="contactEmail" size="35" value="<?= $email?>" />
                                <span class="error"><?= $email_error ?></span>
                            </div>

                            <div style="margin-bottom: 30px;">
                                <label for="contactSubject">Subject</label>
                                <input class="form-control" name="contactSubject"  type="text" placeholder="input subject" id="contactSubject" size="35" value="<?= $subject?>" />
                                <span  class="error"><?= $subject_error ?></span>
                            </div>

                            <div style="margin-bottom: 30px;">
                                <label  for="contactMessage">Message  <span class="required">*</span></label>
                                <textarea class="form-control" name="contactMessage" placeholder="description" id="contactMessage" rows="10" cols="50" ></textarea>
                                <span style="margin-left: 120px;" class="error"><?= $message_error ?></span>
                            </div>
                            
                            <div style="margin-bottom: 30px;">
                                <span style="color: #000"><?php
					if ($sendingMessage != "") {
						echo "<h2 style='color: #000;'>".$sendingMessage."</h2>";
					}
					?></span>
                                <button type="submit" class="submit" id="submit" name="submit" >Submit</button>
                                
                                <span id="image-loader">
                                    <img src="images/loader.gif" alt="" />
                                </span>
                            </div>

                        </fieldset>
                    </form> 
                    <!-- Form End -->
                                        <!--<p id="label"></p>-->
                    <!-- contact-warning -->
                    <div id="message-warning"></div>
                    <!-- contact-success -->
                    <div id="message-success">
                        <i class="icon-ok"></i>Your message was sent, thank you!<br />
                    </div>

                </div>




            </div>

        </section> <!-- Contact Section End-->

        <!-- footer
        ================================================== -->
        <!--   <footer>
        
              <div class="row">
        
                 <div class="col g-7">
                    <ul class="copyright">
                       <li>&copy; 2017 LEONTARIS HOLDING LTD </li>
                       <li>Design by <a href="http://www.wenshichen.com/" title="Styleshout">WenshiChen</a></li>
                    </ul>
                 </div>
        
                 <div class="col g-5 pull-right">
                    <ul class="social-links">
                       <li><a href="#"><i class="icon-facebook"></i></a></li>
                       <li><a href="#"><i class="icon-twitter"></i></a></li>
                       <li><a href="#"><i class="icon-google-plus-sign"></i></a></li>
                       <li><a href="#"><i class="icon-linkedin"></i></a></li>
                       <li><a href="#"><i class="icon-skype"></i></a></li>
                       <li><a href="#"><i class="icon-rss-sign"></i></a></li>
                    </ul>
                 </div>
        
              </div>
        
           </footer>-->

        <footer>
            <p class="center bg-primary" style="padding:1px; margin:0 auto;">
            <ul class="copyright">
                <li>&copy; 2017 LEONTARIS HOLDING LTD </li>
                <li>Design by <a href="http://www.wenshichen.com/" title="Styleshout">WenshiChen</a></li>
            </ul>
            <!--</p>-->
        </footer><!-- Footer End-->

        <!-- Java Script
        ================================================== -->

<!--<script>
    //ajax for district shows in combo box when province select
     $("#submit").click(function () {
//            alert("hello");
                 var name = $("#contactName").val();
                 var email = $("#contactEmail").val();
                 var subject = $("#contactSubject").val();
                 var message = $("#contactMessage").val();
                 alert (name);
//                    alert (email);
//                    alert (subject);
//                    alert (message);
//                    if (name === "" || email === "" || subject === "" || message === "")
//                    {
//                        alert("Please insert your name");
//                    } 
//                    else
//                    {
                     $.ajax({
                         url: "ajax/sendEmail.php",
                         type: "GET",
                         data: {"name": name, "email": email, "subject": subject, "message": message},
                         cache: false,
                         async: false,
                         success: function (data) {
                             $("#label").html(data);
                         }
                     });
//                    }

             });
             //ajax for district shows in combo box when province select
</script>-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

        <script src="js/scrollspy.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/jquery.reveal.js"></script>
        <!--<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>-->
        <!--<script src="js/gmaps.js"></script>-->
        <script src="js/init.js"></script>
        <script src="js/smoothscrolling.js"></script>

    </body>

</html>
