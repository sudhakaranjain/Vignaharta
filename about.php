<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
	<title>VIGNAHARTA</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
	<meta name="author" content="" />

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    

	<!-- CSS
  ================================================== -->
  	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/inner.css" />
    <link rel="stylesheet" href="styles/layout.css" />
    <link rel="stylesheet" href="styles/flexslider.css" />
    <link rel="stylesheet" href="styles/color.css" />
    <link rel="stylesheet" href="styles/prettyPhoto.css"  media="screen" />
    

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/logo1.png" />

    
    
</head>


<body>
<?php
session_start();

?>

	




<div id="bodychild">
	<div id="outercontainer">
    
        <!-- HEADER -->
        <div id="outerheader">
        
			<div class="header-bglight">
                <header id="top">
                    <div class="container">
                        <div class="row">
                           <div id="container-logomenu">
                                <span class="logo-light"></span>
                                <div id="logo" class="three columns">
                                    <a href="home.php"><img src="images/new.png" height="500" width="200" alt=""/></a>
                                </div>
  
                                <section id="navigation" class="nine columns">
                                    <nav id="nav-wrap">
                                        <ul id="topnav" class="sf-menu">
                                            <li class="current"><a href="index.php">HOME</a></li>
                                            <li><a href="about.php">ABOUT US</a>
                                                <!--<ul>
                                                    <li><a href="about-right-sidebar.html">About Right Sidebar</a></li>
                                                    <li><a href="about-left-sidebar.html">About Left Sidebar</a></li>
                                                    <li><a href="about-both-sidebar.html">About Both Sidebar</a></li>
                                                </ul>-->
                                            </li>
                                            <!--li><a href="login.php">LOGIN</a></li>-->
											 <li><a href="category.php">RENT</a></li>
                                            <li><a href="register.php">REGISTER</a></li>
                                            <!--<li><a href="rent.php">RENT</a></li>-->
                                            <li><a href="contact.php">CONTACT US</a></li>
											<?php
			if((isset($_SESSION['username']))&& isset($_SESSION['id']))
			{?>
			 <li style="float:right"><a href="logout.php"><?php echo '<font face="verdana" color="yellow">'.$_SESSION['username'].'</font>';?> Logout</a></li>
			<?php
			}
			else
			{?>
			<li style="float:right"><a href="myaccount.php">LOGIN</a></li>
			<?php
			}
			?>
                                        </ul><!-- topnav -->
                                    </nav><!-- nav -->	
                                </section>
                             </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </header>
                
                <div id="headertext">
                    <div class="container">
                        <div class="row">
                            <div class="headertitle twelve columns">
                                <h1 class="pagetitle">About Us</h1>
                                <!--<span class="pagedesc">This can be your tagline or something you want. Whatever you want!</span>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END HEADER -->
        


        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                	<section id="maincontent" class="twelve columns">
                    
                        <section class="content">
                        
                            <h1 class="titleUppercase"><p>Rigorous competition in the video rental industry due to price reduction from retailer have affected consumer rental and purchasing behavior. The trend of the market indicate that, other than prices, most consumers base their decision to either rent or buy on how convenient, easy and simple the renting process is, as compared to purchasing.The video rental industry is an ever evolving industry that changes with the economy, evolution of culture and technology. To remain viable in the business, the users must be willing to evolve. With the help of a computer and a system which is user-friendly, time efficient and well organized, it will be indeed be very useful to achieve our above mentioned goal.
<br />VIGNAHARTA! A free video viewing and renting website is for students who can watch tutorials here, comment and post questions after registering themselves and also for people of all age groups to view movie trailers and rent them online.
It will take advantage of the internet and World Wide Web to radically improve the way videos are displayed and viewed.</h1>
                         
<!--<div class="row">
                                <div class="one_third columns">
                                    <img src="images/content/a-pic1.jpg" alt="" class="imgblock"/>
                                    <img src="images/shadow-300.png" alt="" class="imgblock"/><br>
                                    <h6 class="titleUppercase margin_bottom_middle">John Doe / <span class="generaltext">Director</span></h6>
                                    <p>Proin vel lorem non urna porttitor vulputate. Vivamus augue mi, placerat id porttitor at, tempus eu nulla.</p>
                                </div>
                                <div class="one_third columns">
                                    <img src="images/content/a-pic2.jpg" alt="" class="imgblock"/>
                                    <img src="images/shadow-300.png" alt="" class="imgblock"/><br>
                                    <h6 class="titleUppercase margin_bottom_middle">Jane Doe / <span class="generaltext">Producer</span> </h6>
                                    <p>Proin vel lorem non urna porttitor vulputate. Vivamus augue mi, placerat id porttitor at, tempus eu nulla.</p>
                                </div>
                                <div class="one_third columns">
                                    <img src="images/content/a-pic3.jpg" alt="" class="imgblock"/>
                                    <img src="images/shadow-300.png" alt="" class="imgblock"/><br>
                                    <h6 class="titleUppercase margin_bottom_middle">Richard Zoe  / <span class="generaltext">Cameraman</span></h6>
                                    <p>Proin vel lorem non urna porttitor vulputate. Vivamus augue mi, placerat id porttitor at, tempus eu nulla.</p>
                                </div>
                            </div>-->
                            
                            <div class="separator"></div>
                            
                            <div class="row">
                                <div class="one_half columns">
                                    <h3 class="titleUppercase">Our Mission</h3>
                                    <h1 class="titleUppercase"><p><i>“To serve the customers by providing a reliable, accessible way to rent videos at reasonable cost”.                                    </p>
                                </i></h1></div>
                                
                                <div class="one_half columns">
                                    <h3 class="titleUppercase">Our Vision</h3>
                                    <h1 class="titleUppercase"><p><i>
Vignarharta aims to differentiate itself from its competitors and new features shall be incorporated to utilize incentive programs in order to target new costumers.</p>
                                </i></h1></div>
                            </div>
                            
                            <!--<div class="separator"></div>
                            
                            <h3 class="titleUppercase">Our Clients</h3>
                            <p><a href="#"><img src="images/content/client1.png" alt="" class="imgopacity" /></a>
                            <a href="#"><img src="images/content/client2.png" alt="" class="imgopacity" /></a>
                            <a href="#"><img src="images/content/client3.png" alt="" class="imgopacity" /></a>
                            <a href="#"><img src="images/content/client4.png" alt="" class="imgopacity" /></a>
                            <a href="#"><img src="images/content/client5.png" alt="" class="imgopacity" /></a>
                            <a href="#"><img src="images/content/client6.png" alt="" class="imgopacity" /></a></p>-->
                            
                        </section>
                    
                	</section>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
        <div id="shadowbottom"></div>
        
        <!-- FOOTER -->
        <footer id="footersection">

            <!-- FOOTER SIDEBAR -->
            <div id="outerfootersidebar">
                <div class="container">
                    <div id="footersidebar" class="row"> 

                        <!--<div id="footcol1"  class="three columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Latest From Blog</h2>
                                    <ul class="ts-recent-post-widget">
                                        <li>
                                            <h3><a title="Permanent Link to Hello world!" href="#">Hello world!</a></h3>
                                            <span class="lp-text">Donec blandit volutpat ipsum, ac varius nulla commodo ut. Curabitur blandit dignissim nibh sit amet</span>
                                            <span class="clear"></span>
                                        </li>
                                        <li>
                                            <h3><a title="Permanent Link to Maecenas sollicitudin, urna sit amet tristique." href="#">Maecenas sollicitudin, urna sit amet tristique.</a></h3>
                                            <span class="lp-text">Donec blandit volutpat ipsum, ac varius nulla commodo ut. Curabitur blandit dignissim nibh sit amet</span>
                                            <span class="clear"></span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>-->
                        <div id="footcol2"  class="four columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Connect with us.</h2>
                                    <ul class="sn">
                                        <li><a href="http://twitter.com/" title="Twitter"><span class="icon-img twitter"></span></a></li>
                                        <li><a href="http://facebook.com/" title="Facebook"><span class="icon-img facebook"></span></a></li>
                                        <li><a href="https://plus.google.com/" title="Google+"><span class="icon-img google"></span></a></li>
                                        </ul> 
                                </li>
                            </ul>
                        </div>
                        <div id="footcol3"  class="four columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Our Gallery</h2>
                                    <div id="flickr">
                                       <div class="flickr-img"><a href="#"><img alt="" src="images/content/1.jpg"></a></div>
                                        <div class="flickr-img"><a href="#"><img alt="" src="images/content/2.png"></a></div>
                                        <div class="flickr-img"><a href="#"><img alt="" src="images/content/3.jpg"></a></div>
                                        <div class="flickr-img"><a href="#"><img alt="" src="images/content/4.png"></a></div>
                                        <div class="flickr-img"><a href="#"><img alt="" src="images/content/5.jpg"></a></div>
                                        <div class="flickr-img"><a href="#"><img alt="" src="images/content/6.png"></a></div>
                                        <div class="flickr-img"><a href="#"><img alt="" src="images/content/7.png"></a></div>
                                        <div class="flickr-img"><a href="#"><img alt="" src="images/content/8.png"></a></div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                            </ul>
                        </div>
                        <div id="footcol4"  class="three columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Find Us</h2>
                                    <div class="textwidget">
                                        <img src="images/content/map.png" alt="" class="alignleft" />
                                        Don Bosco Institute Of Technology,Kurla<br/>
                                        Mumbai, Maharashtra, India<br/>
                                        Tel: +91 222 25876458
                                    </div>
                              	</li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                 
                    </div>
                </div>
            </div>
            
            <!-- END FOOTER SIDEBAR -->
            
            <!-- COPYRIGHT -->
            <div id="outercopyright">
                <div class="container">
                	<div class="row">
                        <div class="twelve columns">
                            <span id="footer-light"></span>
                            <div id="copyright">
                                 Copyright <sup>&copy</sup>2015. All Rights Reserved. Theme design by <a href="http://vignaharta.co.nf/">Vignaharta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END COPYRIGHT -->
        </footer>
        <!-- END FOOTER -->
        <div class="clear"></div><!-- clear float --> 
	</div><!-- end outercontainer -->
</div><!-- end bodychild -->


<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>

<!-- jQuery Superfish -->
<script type="text/javascript" src="js/hoverIntent.js"></script> 
<script type="text/javascript" src="js/superfish.js"></script> 
<script type="text/javascript" src="js/supersubs.js"></script>

<!-- jQuery Dropdown Mobile -->
<script type="text/javascript" src="js/tinynav.min.js"></script>

<!-- Custom Script -->
<script type="text/javascript" src="js/custom.js"></script>


</body>
</html>
	
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   