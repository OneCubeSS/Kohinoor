<?php 
  include 'send.php';

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<link rel="icon" href="favicon.ico">
        <title>Kohinoor Group: Real Estate Developer and Property Builder in Pune</title>
        
        <!--======== All Stylesheet =========-->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/linearicons.css" rel="stylesheet">
        <!--=== plugins ===-->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">
        <!--=== end plugins ===-->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
	</head>	
    
    <body>
        <!--======== header =========-->
        <header id="home" class="fixed-top">
          
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- menu 4 -->
                    <div class="navbar navbar-default default-menu menu-4" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-4" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand default-logo" href="#"> <img src="https://www.kohinoorpune.com/hs-fs/hubfs/Kohinoor%20new%20logo%20for%20website-01.png?width=161&name=Kohinoor%20new%20logo%20for%20website-01.png" alt=""></a>
                                
                                <p class="navbar-brand default-logo" style="padding-top: 20px;">                                 
                                    <a href="tel: +91 9082004094" style="color: white; text-decoration: none;">
                                        <i class="fa fa-phone" class="ri-phone-line"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=+919167271425">
                                        <img src="images/w1.png"  class="ri-phone-line" style="margin-top: -12px;">
                                    </a>
                                </p> 
                            </div>

                            <div class="collapse navbar-collapse" id="menu-4">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a class="scroll" href="#home">Home</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Sapphire <span class="caret"></span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="">About Us</a></li>
                                                <li><a href="">Why Kohinoor</a></li>
                                                <li><a href="">FAQs</a></li>
                                                <li><a href="">Hiring</a></li>
                                                <li><a href="">Sada Sukhi Raho Policy</a></li>
                                               
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects<span class="caret"></span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="">Residential Projects</a></li>
                                                <li><a href="">Commercial Projects</a></li>                                            
                                            </ul>
                                        </div>
                                    </li>        
                                    <li><a href="#contact">Contact Us</a></li>
                                    <li><button class="sales_Enquiry" onClick="document.getElementById('contact').scrollIntoView();"
                                        >SALES ENQUIRY</button></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end menu -->
                </div>
            </div>            
        </header>
        <!--======== end header =========-->
        
        <!--======== intro =========-->
        <img class="logo_absolute" src="https://www.kohinoorpune.com/hs-fs/hubfs/Kohinoor%20Sapphire-LP%20Logo.jpg?width=224&name=Kohinoor%20Sapphire-LP%20Logo.jpg">
        <div class="wraper"> 
            <div class="fill">
                <img src="https://www.kohinoorpune.com/hubfs/Sapphire.jpg" alt="" height="650" />
            </div>
            <div class="head_text">
                <div class="overlay">
                    <h2>Bringing an envious lifestyle to Pune</h2>
                    <h4>Premium 2 BHK Homes Starting From 49.6 Lacs* <br> 
                        At(Infographic) Tathawade,Pune</h4>
                    <h4> For Exclusive Offers* <button type="button" class="pre-btn" 
                        data-toggle="modal" data-target="#prebookform">Pre-Book Now</button></h4>
                </div>
            </div>
        </div>

        <!-- Pre-booking Modal -->
        <div class="modal fade" id="prebookform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <h3 class="modal-title" id="exampleModalLabel">Book Now</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="send.php" id="bookcta" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="text-lbl">Full Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Please enter full name">
                            </div>
                            <div class="form-group">
                                <label for="email1" class="text-lbl">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <label for="mobile" class="text-lbl">Phone Number</label>
                                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Phone number">
                            </div>
                        </div>
                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button type="submit" class="send-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Download Modal -->
        <div class="modal fade" id="downloadform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <h3 class="modal-title" id="exampleModalLabel">Book Now</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="send.php" id="ctadownload" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="text-lbl">Full Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Please enter full name">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-lbl">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <label for="mobile" class="text-lbl">Phone Number</label>
                                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Phone number">
                            </div>
                        </div>
                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button type="submit" class="send-btn" data-toggle="modal" onClick="download_file('./docs/Kohinoor-Sapphire_Brochure.pdf','Kohinoor-Sapphire_Brochure')"
                                data-target="#thanks" data-dismiss="modal">Download</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Thank you Modal -->
        <div class="modal fade" id="thanks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="top: 80px;">
                    <div class="modal-header border-bottom-0">
                    </div>
                    <div class="modal-body">
                        <label class="text-lbl">Thanks for contacting us, Your broucher is Ready</label>
                    </div>
                    <div class="modal-footer border-top-0 d-flex justify-content-center">
                        <button type="submit" class="send-btn" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- <section class="intro"  >
             <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="background-image: url(https://www.kohinoorpune.com/hubfs/Sapphire.jpg);">
                    </div>
            </div> 
        </section> -->
                    <!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators" style="margin-bottom: 0%;">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active" style="background-color: black;border: 2px solid white"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" style="background-color: black;border: 2px solid white"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="intro-content text-center">
                                    <img src="https://www.kohinoorpune.com/hubfs/Website%20Banner_Coral%20Desktop.jpg" alt="Backgroung image1" style="height: 726px;">
                                </div>
                            </div>
                            <div class="item">
                                <div class="intro-content text-center">
                                    <img src="https://www.kohinoorpune.com/hubfs/Tinsel-Town_20-80-Campaign_Website-Banner.jpg" alt="backgroung image" style="height: 726px;">
                                </div>
                            </div>
                          
                        </div>
                    </div> -->
                    <!-- <div class="jumboton">
                            <img src="https://www.kohinoorpune.com/hubfs/Sapphire.jpg">
                    </div>
                </div>
            </div>
        </section> -->
        <!--======== end intro =========-->
        
        <!--======== recent event =========-->
        <!-- <section class="recent-event">
            <div class="row">
                <div class="col-md-3 col-md-offset-1 col-sm-12">
                    <div class="event-box text-center">
                        <h3>Recent Events</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit agrel.</p>
                        <a class="btn btn-primary" href="#" role="button">Read More <i class="lnr lnr-chevron-right "></i></a>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="row">
                        <div class="col-sm-3 p-l-r-0">
                            <div class="event-img">
                                <img src="images/event-2.png" alt="image">
                                <div class="event-overflow">
                                    <p>Hanery Parkin</p>
                                    <small>Jan 8, 2016</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 p-l-r-0">
                            <div class="event-img">
                                <img src="images/event-1.png" alt="image">
                                <div class="event-overflow">
                                    <p>Hanery Parkin</p>
                                    <small>Jan 8, 2016</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 p-l-r-0">
                            <div class="event-img">
                                <img src="images/event-2.png" alt="image">
                                <div class="event-overflow">
                                    <p>Hanery Parkin</p>
                                    <small>Jan 8, 2016</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 p-l-r-0">
                            <div class="event-img">
                                <img src="images/event-1.png" alt="image">
                                <div class="event-overflow">
                                    <p>Hanery Parkin</p>
                                    <small>Jan 8, 2016</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--======== end recent evnt =========-->
        
        <!--======== what we do =========-->
        <section id="what-we-do" class="what-we-do">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">  
                        <div class="col-md-12 col-xs-12">
                            <h2 class="video_h3">KOHINOOR SAPPHIRE</h2>
                            <p class="video_p">Strategically located in Tathawade, with everyday conveniences and lifestyle comforts in the immediate neighbourhood, 
                                Kohinoor Sapphire is a thoughtfully planned project designed to fill homes with positive vibrations, 
                                keep negative influences at bay, help you introspect and rediscover yourself all over again.</p>
                            <p class="video_p">Born out of a well-thought blueprint, the design philosophy integrates the principles and practices of 
                                Vastu, and other proven sciences to bring peace, positivity and balance in the lives of the residents. 
                                Besides, this project of 2 BHK residences also come with well-planned amenities to further take the 
                                chaos of urban life away and fill your life with happiness. So, bid goodbye to stress and elevate 
                                yourself to a blissful state of mind every day.</p>
                        </div>              
                      <!-- <div class="col-md-3">
                        <h2 class="section-title">30+</h2>
                        <h3 class="home-highlight">PROJECTS <br>ACROSS PUNE</h3>
                      </div>
                      <div class="col-md-3">
                        <h2 class="section-title">37 YEARS</h2>
                        <h3 class="home-highlight">OF MATCHLESS
                            <br>LEGACY</h3>
                      </div>
                      <div class="col-md-3">
                        <h2 class="section-title">4 MILLION</h2>
                        <h3 class="home-highlight">SQUARE FEET<br>
                            DELIVERED</h3>
                      </div>
                      <div class="col-md-3">
                        <h2 class="section-title">5000+</h2>
                        <h3 class="home-highlight">HAPPY<br>
                            FAMILIES</h3>
                      </div> -->
                        
                    </div>
                </div>   

                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-12 sales_Enquiry_know-more" class="">
                       <button class="dwnload_broch" data-toggle="modal" data-target="#downloadform"><strong>DOWNLOAD E-BROCHURE</strong></button>
                    </div>   
                </div>   
                <div class="row">
                    <h2 class="video_h3">WHOM IS THIS PROJECT IDEAL FOR?</h2>
                    <div class="col-md-12 three_divs">
                        <div class="col-md-4">
                            <img style="float:left;" src="https://www.kohinoorpune.com/hs-fs/hubfs/Kohinoor%20-%20V2/Projects/Individual%20Project/Icons/IT%20WORKING%20PROFESSIONALS.png?width=83&name=IT%20WORKING%20PROFESSIONALS.png">
                            <p style="padding-top: 40px;" class="video_p">IT Professionals</p>  
                        </div>
                        <div class="col-md-4">
                           <img style="float:left;" src="https://www.kohinoorpune.com/hs-fs/hubfs/Entrepreneurs%20.png?width=123&name=Entrepreneurs%20.png">
                        <p style="padding-top: 40px;" class="video_p">SMB Entrepreneurs</p>  
                        </div>
                          <div class="col-md-4">
                            <img style="float:left;" src="https://www.kohinoorpune.com/hs-fs/hubfs/Kohinoor%20-%20V2/Projects/Individual%20Project/Icons/YOUNG%20PARTNERS.png?width=67&name=YOUNG%20PARTNERS.png">
                        <p style="padding-top: 40px;" class="video_p">Working Families</p>  
                        </div>
                    </div> 
                </div>
                <div class="row" style="padding-top: 30px;">
                    <div class="col-md-12">   
                        <div class="col-md-6 col-xs-6 col-sm-6">
                            <iframe width="555" height="312" src="https://www.youtube.com/embed/UKxbh0A5ntI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-6 col-xs-6 col-sm-6">
                            <iframe width="555" height="312" src="https://www.youtube.com/embed/dysBK6156do" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
        <!--======== end what we do =========-->
        
        <!--======== about us =========-->
        <section id="about-us" class="about-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-xs-12 four_divs">
                        <h2 class="video_h3_project">Project Highlight</h2>
                       <div class="row" style="padding-top: 40px;">
                        <div class="col-md-6 col-xs-12 col-sm-12">
                            <img style="float:left;border-width: 0px;height: 100px;width: 100px;
                            border: 0px;" width="100" src="https://www.kohinoorpune.com/hs-fs/hubfs/Community%20Living.png?width=101&name=Community%20Living.png">
                        <p style="padding-top: 40px;" class="four_div_p"><strong>COMMUNITY LIVING</strong></p>  
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <img style="float:left;border-width: 0px;height: 100px;width: 100px;
                                border: 0px;"  width="100" src="https://www.kohinoorpune.com/hs-fs/hubfs/24x7%203-tier%20security1%20.png?width=59&name=24x7%203-tier%20security1%20.png">
                        <p style="padding-top: 40px;" class="four_div_p"><strong>MULTIPLE LEVELS OF SECURITY</strong></p>  
                                </div>

                       </div>
                       <div class="row" style="padding-top: 40px;">
                        <div class="col-md-6 col-xs-12 col-sm-12">
                            <img style="float:left;border-width: 0px;height: 100px;width: 100px;
                            border: 0px;" width="100" src="https://www.kohinoorpune.com/hs-fs/hubfs/Top%20class%20amenities%20%20.png?width=95&name=Top%20class%20amenities%20%20.png">
                        <p style="padding-top: 40px;" class="four_div_p"><strong>TOP CLASS AMENITIES</strong></p>  
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <img style="float:left;border-width: 0px;height: 100px;width: 100px;
                                border: 0px;" width="100" src="https://www.kohinoorpune.com/hs-fs/hubfs/Kohinoor%20-%20V2/Projects/Individual%20Project/Project%20Highlight/PROMINENT%20LOCATION%20IN%20HINJEWADI.png?width=78&name=PROMINENT%20LOCATION%20IN%20HINJEWADI.png">
                        <p style="padding-top: 40px;" class="four_div_p"><strong>PRIME LOCATION IN TATHAWADE</strong></p>  
                                </div>

                       </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!--======== end about us =========-->
        
        <!--======== our service =========-->
        <section id="service" class="our-service">
            <div class="ccontainer">
                <!-- <div class="row">
                    <div class="col-md-12">   
                        <div class="col-md-4 col-xs-4">
                            <iframe width="400" height="300" src="https://www.youtube.com/embed/ML9Z28WBjp0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <iframe width="400" height="300" src="https://www.youtube.com/embed/UKxbh0A5ntI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <iframe width="400" height="300" src="https://www.youtube.com/embed/8OPxw6cxAOY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>             
                        </div>
                    </div>
                </div> -->
                <!-- <div class="row">
                    <div class="col-md-12 ongng_prjcts">
                        <h1>ONGOING PROJECT</h1>
                    </div>
                </div> -->
                <!-- <div class="row images_ongng_prjcts">
                    <div class="col-md-6 col-md-offset-1">
                <img src="https://www.kohinoorpune.com/hubfs/1_RESIDENTIAL%20(1).jpg">
                    </div>
                    <div class="col-md-6">
                <img src="https://www.kohinoorpune.com/hubfs/1_COMMERCIAL%20(1).jpg">
                    </div>
                </div> -->
                <div class="row" style="margin-top: 50px;margin-bottom: 30px;">
                    <!-- <div class="col-md-12 life_at_khnr"><h1>PROJECT GALLERY</h1></div> -->
                    <h1 class="video_h3">PROJECT GALLERY</h1>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators" style="margin-bottom: 0%;">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active" style="background-color: black;border: 2px solid white"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" style="background-color: black;border: 2px solid white"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" style="background-color: black;border: 2px solid white"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3" style="background-color: black;border: 2px solid white"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4" style="background-color: black;border: 2px solid white"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="5" style="background-color: black;border: 2px solid white"></li>
                            </ol>
    
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="intro-content text-center">
                                       <img class="img-level" src="https://www.kohinoorpune.com/hubfs/Kohinoor%20Sapphire_LP%20Banner_Dec%2019_Mid%20Banner-04%20(1).jpg">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="intro-content text-center">
                                        <img class="img-level" src="https://www.kohinoorpune.com/hubfs/Kohinoor%20Sapphire_LP%20Banner_Dec%2019_Mid%20Banner-02%20(1).jpg">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="intro-content text-center">
                                        <img class="img-level" src="./images/Gallery-1.jpg">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="intro-content text-center">
                                        <img class="img-level" src="./images/Gallery-2.jpg">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="intro-content text-center">
                                        <img class="img-level" src="./images/Gallery-3.jpg">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="intro-content text-center">
                                        <img class="img-level" src="./images/Gallery-4.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="four-slide">
                            <div class="single-slide"><img src="images/service-1.jpg" alt="">
                                <div class="service-overflow text-center">
                                    <h3>Responsive</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit agrel. 
                                    Donec odio. Quisque volutpat mattis eros.  Rerat ut turpis.</p>
                                </div>
                            </div>
                            <div class="single-slide"><img src="images/service-2.jpg" alt="">
                                <div class="service-overflow text-center">
                                    <h3>Web Design</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit agrel. 
                                    Donec odio. Quisque volutpat mattis eros.  Rerat ut turpis.</p>
                                </div>
                            </div>
                            <div class="single-slide"><img src="images/service-3.jpg" alt="">
                                <div class="service-overflow text-center">
                                    <h3>Development</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit agrel. 
                                    Donec odio. Quisque volutpat mattis eros.  Rerat ut turpis.</p>
                                </div>
                            </div>
                            <div class="single-slide"><img src="images/service-4.jpg" alt="">
                                <div class="service-overflow text-center">
                                    <h3>Programming</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit agrel. 
                                    Donec odio. Quisque volutpat mattis eros.  Rerat ut turpis.</p>
                                </div>
                            </div>
                            <div class="single-slide"><img src="images/service-1.jpg" alt="">
                                <div class="service-overflow text-center">
                                    <h3>Bootstrap</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit agrel. 
                                    Donec odio. Quisque volutpat mattis eros.  Rerat ut turpis.</p>
                                </div>
                            </div>
                            <div class="single-slide"><img src="images/service-2.jpg" alt="">
                                <div class="service-overflow text-center">
                                    <h3>Wordpress</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit agrel. 
                                    Donec odio. Quisque volutpat mattis eros.  Rerat ut turpis.</p>
                                </div>
                            </div>
                            <div class="single-slide"><img src="images/service-3.jpg" alt="">
                                <div class="service-overflow text-center">
                                    <h3>Joomla</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit agrel. 
                                    Donec odio. Quisque volutpat mattis eros.  Rerat ut turpis.</p>
                                </div>
                            </div>
                            <div class="single-slide"><img src="images/service-4.jpg" alt="">
                                <div class="service-overflow text-center">
                                    <h3>Web Design</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit agrel. 
                                    Donec odio. Quisque volutpat mattis eros.  Rerat ut turpis.</p>
                                </div>
                            </div>
                            <div class="single-slide"><img src="images/service-1.jpg" alt="">
                                <div class="service-overflow text-center">
                                    <h3>HTML5</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit agrel. 
                                    Donec odio. Quisque volutpat mattis eros.  Rerat ut turpis.</p>
                                </div>
                            </div>
                            <div class="single-slide"><img src="images/service-2.jpg" alt="">
                                <div class="service-overflow text-center">
                                    <h3>CSS3</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit agrel. 
                                    Donec odio. Quisque volutpat mattis eros.  Rerat ut turpis.</p>
                                </div>
                            </div>
                            <div class="single-slide"><img src="images/service-3.jpg" alt="">
                                <div class="service-overflow text-center">
                                    <h3>Responsive</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit agrel. 
                                    Donec odio. Quisque volutpat mattis eros.  Rerat ut turpis.</p>
                                </div>
                            </div>
                            <div class="single-slide"><img src="images/service-4.jpg" alt="">
                                <div class="service-overflow text-center">
                                    <h3>Wordpress</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit agrel. 
                                    Donec odio. Quisque volutpat mattis eros.  Rerat ut turpis.</p>
                                </div>
                            </div>
                        </div> -->
                    </div> 
                </div>
            </div>
        </section>
        <!--======== end our service =========-->
        
        <!--======== extra featrue =========-->
        <section class="extra-feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-12 col-xs-12"> 
                    <h2 class="video_h3">AMENITIES</h2>                      
                   
                    <div class="col-md-4 col-xs-12 col-sm-12"> 
                       <ul>
                        <li class="red-arrow">
                            <img class="img-responsive" src="./images/am-ico-clubhous-active.svg">
                            <span class="li-text">Club House</span>
                        </li>
                        <li class="red-arrow">
                            <img class="img-responsive" src="./images/am-ico-partyhal-active.svg">
                            <span class="li-text">Multipurpose Hall</span>
                        </li>
                        <li class="red-arrow">
                            <img class="img-responsive" src="./images/am-ico-partyhal-active.svg">
                            <span class="li-text">Reception & Waiting Area</span>
                        </li>
                        <li class="red-arrow">
                            <img class="img-responsive" src="./images/am-ico-indoorga-active.svg">
                            <span class="li-text">Indoor Games: Table Tennis, Carrom <br>& Chess</span>
                        </li>
                        <li class="red-arrow">
                            <img class="img-responsive" src="./images/am-ico-gymnasiu-active.svg">
                            <span class="li-text">Well Equipped Gym</span>
                        </li>
                    </ul>
                    </div>  
                    
                    <div class="col-md-4 col-xs-12 col-sm-12"> 
                        <ul>
                            <li class="red-arrow">
                                <img class="img-responsive" src="./images/am-ico-kidsplay-active.svg">
                                <span class="li-text">Kids’ Play Area</span>
                            </li>
                            <li class="red-arrow">
                                <img class="img-responsive" src="./images/am-ico-sewagetr-active.svg">
                                <span class="li-text">Lifestyle Amenities</span>
                            </li>
                            <li class="red-arrow">
                                <img class="img-responsive" src="./images/am-ico-jacuzzi-active.svg">
                                <span class="li-text">Toddlers’ Room / Creche</span>
                            </li>
                            <li class="red-arrow">
                                <img class="img-responsive" src="./images/am-ico-partyhal-active.svg">
                                <span class="li-text">Co-Working Space with Café</span>
                            </li>
                            <li class="red-arrow">
                                <img class="img-responsive" src="./images/am-ico-normalpa-active.svg">
                                <span class="li-text">Well-maintained Garden</span>
                            </li>
                            <li class="red-arrow">
                                <img class="img-responsive" src="./images/am-ico-sauna-active.svg">
                                <span class="li-text">Pergola Seating</span>
                            </li>
                        </ul>
                    </div>  
                    <div class="col-md-4 col-xs-12 col-sm-12"> 
                        <ul>
                            <li class="red-arrow">
                                <img class="img-responsive" src="./images/am-ico-concierg-active.svg">
                                <span class="li-text">Senior Citizens’ Deck</span>
                            </li>
                            <li class="red-arrow">
                                <img class="img-responsive" src="./images/am-ico-gymnasiu-active.svg">
                                <span class="li-text">Open Air Gym</span>
                            </li>
                            <li class="red-arrow">
                                <img class="img-responsive" src="./images/am-ico-kids-swim-active.svg">
                                <span class="li-text">Swimming Pool with Kids’ Pool</span>
                            </li>
                            <li class="red-arrow">
                                <img class="img-responsive" src="./images/am-ico-tennisco-active.svg">
                                <span class="li-text">Multipurpose Game Court</span>
                            </li>
                            <li class="red-arrow">
                                <img class="img-responsive" src="./images/am-ico-partyhal-active.svg">
                                <span class="li-text">Amphitheatre</span>
                            </li>
                        </ul>
                    </div>  
                </div>  
            </div>
            </div>    
        </section>
        <!--======== end extra featrue =========-->
        
        <!--======== our expets =========-->
        <section id="team" class="our-experts">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-12 col-xs-12"> 
                        <h1 class="video_h3">SPECIFICATIONS</h1>
                        <div class="col-md-6 col-md-6 col-xs-6">
                           
                                <div class="panel-group" id="accordion2">
                                    <div class="card">
                                    
                                        <div class="card-header" id="subheadingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link cardBtn" data-toggle="collapse" data-target="#subcollapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="fa fa-plus" style="font-size:20px;color:red;float:right;"></i>Doors
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="subcollapseOne" class="collapse" aria-labelledby="subheadingOne" data-parent="#accordion2">
                                            <div class="card-body">
                                               <ul>
                                                   <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Laminated finish polished flush door shutter for main door, bedroom and toilets</li>
                                                   <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Good quality fittings for doors</li>
                                               </ul>
                                            </div>
                                        </div>
                                       
                                    </div>
          
                                    <div class="card">
                                        <div class="card-header" id="subheadingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed cardBtn" data-toggle="collapse" data-target="#subcollapseTwo" aria-expanded="false" aria-controls="subcollapseTwo">
                                                    <i class="fa fa-plus" style="font-size:20px;color:red;float:right;"></i>Windows
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="subcollapseTwo" class="collapse" aria-labelledby="subheadingTwo" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Powder coated aluminium sliding windows with mosquito net</li>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>MS grill from inside for living room, bedroom and kitchen</li>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Black granite window sill</li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="subheadingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed cardBtn" data-toggle="collapse" data-target="#subcollapseThree" aria-expanded="false" aria-controls="subcollapseThree">
                                                    <i class="fa fa-plus" style="font-size:20px;color:red;float:right;"></i>Flooring
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="subcollapseThree" class="collapse" aria-labelledby="subheadingThree" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Vitrified flooring in the entire apartment</li>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Anti-skid ceramic flooring for terraces, dry balcony and toilets</li>
                                                    <!-- <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Black granite window sill</li> -->
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="subheadingfour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link cardBtn" data-toggle="collapse" data-target="#subcollapsefour" aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="fa fa-plus" style="font-size:20px;color:red;float:right;"></i>Railing
                                                </button>
                                            </h5>
                                        </div>
                            
                                        <div id="subcollapsefour" class="collapse" aria-labelledby="subheadingfour" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Terrace railing</li>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Dry balcony railing - Parapet wall with round pipe</li>
                                                    <!-- <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Black granite window sill</li> -->
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         
                        </div>

                        <div class="col-md-6 col-md-6 col-xs-6">
                           
                                <div class="panel-group" id="accordion2">
                                    <div class="card">
                                        <div class="card-header" id="subheadingFive">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link cardBtn" data-toggle="collapse" data-target="#subcollapseFive" aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="fa fa-plus" style="font-size:20px;color:red;float:right;"></i>Kitchen
                                                </button>
                                            </h5>
                                        </div>
                            
                                        <div id="subcollapseFive" class="collapse" aria-labelledby="subheadingFive" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Black Granite kitchen platform with stainless steel sink and outlets for purifier</li>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Dado up to lintel level</li>
                                                    <!-- <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Black granite window sill</li> -->
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
          
                                    <div class="card">
                                        <div class="card-header" id="subheadingSix">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed cardBtn" data-toggle="collapse" data-target="#subcollapseSix" aria-expanded="false" aria-controls="subcollapseSix">
                                                    <i class="fa fa-plus" style="font-size:20px;color:red;float:right;"></i>Toilets
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="subcollapseSix" class="collapse" aria-labelledby="subheadingSix" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Concealed plumbing with chrome plated fittings of good quality</li>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Hot and cold mixing unit in toilets</li>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Dado for toilets up to lintel level</li>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Glass partition between shower area and dry area</li>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Toilets with false ceiling</li>
                                                    
                                                    <!-- <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Black granite window sill</li> -->
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="subheadingSeven">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed cardBtn" data-toggle="collapse" data-target="#subcollapseSeven" aria-expanded="false" aria-controls="subcollapseSeven">
                                                    <i class="fa fa-plus" style="font-size:20px;color:red;float: right;"></i>Electrification and Cabling
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="subcollapseSeven" class="collapse" aria-labelledby="subheadingSeven" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Concealed Copper wiring and good quality switches in all apartments</li>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Telephone and TV points in living room and provision for master bedroom</li>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Provision for inverter in each apartment</li>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>AC point provision in hall and bedroom</li>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Centralized dish for entertainment</li>
                                        
                                                    <!-- <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Black granite window sill</li> -->
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="subheadingEight">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link cardBtn" data-toggle="collapse" data-target="#subcollapseEight" aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="fa fa-plus" style="font-size:20px;color:red;float:right;"></i>Other
                                                </button>
                                            </h5>
                                        </div>
                            
                                        <div id="subcollapseEight" class="collapse" aria-labelledby="subheadingEight" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Plastic emulsion paint on all walls and ceilings internally, along with Apex/Texture paint externally</li>
                                                    <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Water supply through over head water tanks</li>
                                                     <li class="red-arrow"><i class="fa fa-caret-right" style="font-size:20px;color:red;display: inline-block;float: left;margin-left: 10px;"></i>Drainage piping (under slung)</li> 
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                       
                        </div>
                      
                    </div>
                    <!-- <div class="col-md-8">
                        <div class="three-slide">
                            <div class="single-slide"><img class="img-circle" src="images/expert-1.jpg" alt="">
                                <div class="text-center">
                                    <h3 class="expert-name">Jhon Doe</h3>
                                    <strong class="expert-tag">Founder / CEO</strong>
                                </div>
                            </div>
                            <div class="single-slide"><img class="img-circle" src="images/expert-3.jpg" alt="">
                                <div class="text-center">
                                    <h3 class="expert-name">Rahaman</h3>
                                    <strong class="expert-tag">Co - founder</strong>
                                </div>
                            </div>
                            <div class="single-slide"><img class="img-circle" src="images/expert-2.jpg" alt="">
                                <div class="text-center">
                                    <h3 class="expert-name">Jhon Doe</h3>
                                    <strong class="expert-tag">Maneger</strong>
                                </div>
                            </div>
                            <div class="single-slide"><img class="img-circle" src="images/expert-4.jpg" alt="">
                                <div class="text-center">
                                    <h3 class="expert-name">Jhon Doe</h3>
                                    <strong class="expert-tag">Founder / CEO</strong>
                                </div>
                            </div>
                            <div class="single-slide"><img class="img-circle" src="images/expert-1.jpg" alt="">
                                <div class="text-center">
                                    <h3 class="expert-name">Rahaman</h3>
                                    <strong class="expert-tag">Co - founder</strong>
                                </div>
                            </div>
                            <div class="single-slide"><img class="img-circle" src="images/expert-2.jpg" alt="">
                                <div class="text-center">
                                    <h3 class="expert-name">Jhon Doe</h3>
                                    <strong class="expert-tag">Maneger</strong>
                                </div>
                            </div>
                        </div>   
                    </div>     -->
                </div>
            </div>    
        </section>
        <!--======== end our expets =========-->
        
        <!--======== talk about us =========-->
        <section class="talk-about-us">
            <div class="container">
                <div class="row" >
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center" style="display: flex;justify-content: left;"> 
                        <img src="https://pbs.twimg.com/profile_images/859316928334225408/8eeQwYan_400x400.jpg" style="margin-top: 20px;margin-bottom: 20px;height: 65px;margin-right: 25px;">
                        <h2 class="section-title" style="color: white;">MahaRERA Number - P52100022378</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center"> 
                        <div class="cta">
                        <button type="button" class="cta-btn" data-toggle="modal" data-target="#prebookform">
                            Book a Free Visit</button>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
        <!--======== end talk about us =========-->

        <!-- Contact Us -->
        <section class="extra-feature" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-12 col-xs-12">
                        <h2 class="video_h3">CONTACT US</h2>
                    </div>
                    <div class="col-md-12 col-md-12 col-xs-12">
                        <div class="col-md-6 col-md-12 col-xs-12">

                            <?php 
                echo $alert ;
            ?>
                        <form action="" id="contactus" method="POST" style="padding-bottom: 20px;">                          
                            <div class="form-group">
                                <label for="name" class="text-lbl">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Please enter Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>                           
                      
                          <div class="form-group">
                            <label for="email" class="text-lbl">Your Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Please enter Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validate"></div>
                          </div>
                           <div class="form-group">
                              <label for="mobile" class="text-lbl">Your Phone Number</label>
                              <input type="phone" class="form-control" name="mobile" id="mobile" placeholder="Please enter Phone No." data-rule="Phone" data-msg="Please enter a valid Phone No." />
                              <div class="validate"></div>
                            </div>
                      
                          <div class="form-group">
                            <label for="message" class="text-lbl">Write Something</label>
                            <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Please write something for us"></textarea>
                             <div class="validate"></div>
                          </div>
                         
                          <div class="text-center">
                            <input type="submit" name="submit" class="send-btn" value="Send">            
                           </div>
                        </form>
                        </div>
                        <div class="col-md-6 col-md-12 col-xs-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.9672136922936!2d73.75358231489422!3d18.620544387350858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b98a0c0dbe07%3A0x12fe5f6f8018989e!2sKohinoor%20Sapphire!5e0!3m2!1sen!2sin!4v1603668335310!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" style="border:0; width: 100%; height: 350px;" ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact US -->
        
        <!--======== our clients =========-->
        <!-- <section class="our-client">
            <div class="container">
                <div class="row">
                    <h2 class="section-title" style="display: flex;justify-content: center;">BLOGS</h2>
                    <div class="col-md-12 col-sm-12 col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators" style="margin-bottom: 0%;">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active" style="background-color: black;border: 2px solid white"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" style="background-color: black;border: 2px solid white"></li>
                            </ol>
    
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="intro-content text-center">
                                        <iframe width="900" height="506" src="https://www.youtube.com/embed/p7ADRXCDwYc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="intro-content text-center">
                                        <iframe width="900" height="506" src="https://www.youtube.com/embed/5AiHOdZfXQo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                          
                       
                    </div>
                </div>
            </div>    
        </section> -->
        <!--======== end our clients =========-->
        
        <!--======== contact =========-->
        <!-- <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                        
                        <p class="small-tag">Ask Qestions</p>
                        <h2 class="section-title">Contact Message</h2>
                        <div class="border"><span class="border-l-r"><i class="fa fa-envelope-o"></i></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail3">Your Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail3">Your Email</label>
                                    <input type="Email" class="form-control" id="exampleInputEmail3" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail3">Phone</label>
                                    <input type="tel" class="form-control" id="exampleInputEmail3" placeholder="Phone">
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail3">Massage</label>
                                    <textarea class="form-control textarea" rows="5" placeholder="Massage"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block">Send Massage</button>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>    
        </section> -->
        <!--======== end contact =========-->
        
        <!--======== footer =========-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-md-12 text-center">
                       <img src="https://www.kohinoorpune.com/hs-fs/hubfs/Kohinoor%20logo-01.png?width=142&name=Kohinoor%20logo-01.png">
                    </div>
                    <div class="col-md-12 col-sm-12 col-md-12 text-center">
                        <div class="col-md-4 col-sm-4 col-md-4 text-center">
                            <h4 class="heading">Contact Us</h4>
                            <ul class="footer_list">
                                <!-- <li><a href="mailto:sales@kohinoorpune.com" rel=" noopener">sales@kohinoorpune.com</a></li>
                                <li><a href="tel:+020%206764%201839" rel=" noopener">020 6764 1839</a></li> -->
                                <li>
                                    <a href="tel: +91 9082004094" style="color: white; text-decoration: none;">
                                    <i class="fa fa-phone" class="ri-phone-line"></i> &nbsp; &nbsp; +91 9082004094</a>
                                </li>

                                <li>
                                    <a href="tel: +91 9167271425" style="color: white; text-decoration: none;">
                                    <i class="fa fa-whatsapp" class="ri-phone-line"></i> &nbsp; &nbsp; +91 9167271425</a>
                                </li>
                            </ul>
                         </div>
                         <div class="col-md-4 col-sm-4 col-md-4 text-center">
                           <h4 class="heading">Address</h4>
                           <ul class="footer_list">
                               <li> Kohinoor Sapphire </li>
                               <li>Aundh Ravet BRTS Road, Near Silver Gym S.No.41/2 & 62/2,</li>
                               <li>Village, Tathawade, Pune, Maharashtra 411033</li>
                            </ul>
                         </div>
                         <div class="col-md-4 col-sm-4 col-md-4 text-center">
                            <ul class="footer_list_icons">
                                <li><a href="https://www.facebook.com/punekohinoorgroup/" rel="noopener" target="_blank"><img src="https://www.kohinoorpune.com/hubfs/Kohinoor%20-%20V2/facebook-logo-1.png" alt="Facebook Logo"></a></li>
                                <li><a href="https://www.linkedin.com/in/kohinoor-group-pune-91a7a8151/" rel="noopener" target="_blank"><img src="https://www.kohinoorpune.com/hubfs/Kohinoor%20-%20V2/linked-in-logo-of-two-letters-1.png" alt="LinkedIn Logo"></a></li>
                                <li><a href="https://www.instagram.com/kohinoorgrouppune/" rel="noopener" target="_blank"><img src="https://www.kohinoorpune.com/hubfs/Kohinoor%20-%20V2/instagram-1.png" alt="Instagram Logo"></a></li>
                                <li><a href="https://twitter.com/kohinoorpune" rel="noopener" target="_blank"><img src="https://www.kohinoorpune.com/hubfs/Kohinoor%20-%20V2/twitter-1.png" alt="Twitter Logo"></a></li>
                                <li><a href="https://www.youtube.com/channel/UCQD7ob6r7EXQXKXUCsXDZDg" rel="noopener" target="_blank"><img src="https://www.kohinoorpune.com/hubfs/Kohinoor%20-%20V2/youtube-1.png" alt="YouTube Logo"></a></li>
                                </ul>
                         </div>
                        
                     </div>
                     <div class="col-md-12 col-sm-12 col-md-12 text-center">
                         <img src="https://www.kohinoorpune.com/hs-fs/hubfs/Kohinoor%20-%20V2/MAHARERA%20logo-1.png?width=133&name=MAHARERA%20logo-1.png" style="margin-top: 20px;margin-bottom: 20px;height: 65px;">
                                              
                        </div>
                        <div class="col-md-12 col-sm-12 col-md-12 text-center" style="margin-bottom: 10px;">
                            <span style="color: #ef3e2e;">Kohinoor Group -</span><span> All Rights Reserved -&nbsp; </span><span style="color: #ef3e2e;">2020</span>
                        </div>
                </div>
            </div>    
        </footer>
        <!--======== end footer =========-->
        
        <!--======== All Javascript =========-->
        <script src="js/jquery-2.1.1.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
        
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/forms-email.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
        /* Helper function */
            function download_file(fileURL, fileName) {
                // for non-IE
                if (!window.ActiveXObject) {  
                    console.log("Inside function", fileURL, fileName);
                    var save = document.createElement('a');
                    save.href = fileURL;
                    save.target = '_blank';
                    var filename = fileURL.substring(fileURL.lastIndexOf('/')+1);
                    save.download = fileName || filename;
                    if ( navigator.userAgent.toLowerCase().match(/(ipad|iphone|safari)/) && navigator.userAgent.search("Chrome") < 0) {
                        document.location = save.href;
                        // window event not working here
                    } else {
                        var evt = new MouseEvent('click', {
                            'view': window,
                            'bubbles': true,
                            'cancelable': false
                        });
                        save.dispatchEvent(evt);
                        (window.URL || window.webkitURL).revokeObjectURL(save.href);
                    } 
                }
                // for IE < 11
                else if ( !! window.ActiveXObject && document.execCommand) {
                    var _window = window.open(fileURL, '_blank');
                    _window.document.close();
                    _window.document.execCommand('SaveAs', true, fileName || fileURL)
                    _window.close();
                }
            }
        </script>

    </body>
</html>