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
    <link rel="stylesheet" href="styles/color.css" />
    

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
<!--<div id="wrap">

       <div class="header">
       		<div class="logo"><a href="index.php"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>            
        <div id="menu">
            <ul>                                                                       
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li class="selected"><a href="category.php">Books</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="contact.php">Contact us</a></li>
			
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
            </ul>
        </div>     
            
            
       </div> 
       
       
       <div class="center_content">
       	<div class="left_content">
        	
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Product name</div>
        
        	<div class="feat_prod_box_details">
            
            	<div class="prod_img"><a href="details.php"><img src="images/prod1.gif" alt="" title="" border="0" /></a>
                <br /><br />
                <a href="images/big_pic.jpg" rel="lightbox"><img src="images/zoom.gif" alt="" title="" border="0" /></a>
                </div>
                
                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title">Details</div>
                    <p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<br />
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.                    </p>
                    <div class="price"><strong>PRICE:</strong> <span class="red">100 $</span></div>-->
					
                      
                     <!--<a href="billing.php?movie=1" class="more"><img src="images/order_now.gif" alt="" title="" border="0" /></a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="add_cart.php?movie=1" class="contact" style="margin:0px 10px 0px 10px">Cart</a>  
                    <div class="clear"></div>
                    </div>-->
                    
                    <!--<div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>	
            
              
            
            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">
        
                	
                <!--<div class="cart" >
                  <a href="cart.php"><div class="title"><span class="title_icon"><img src="images/cart.gif" alt="" title="" /></span>My cart</div></a>
              
              </div>-->
        
             
             
             
             
        
        
        </div><!--end of right content-->
        
        
       
       


























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
                                    <a href="home.php"><img src="images/new.png" alt=""/></a>
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
                                <h1 class="pagetitle">Our Movies</h1>
                                <span class="pagedesc">Some exclusive MOVIE TRAILERS are waiting out here for you!


</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END HEADER -->
        


        <!-- MAIN CONTENT -->
        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                	<section id="maincontent" class="twelve columns">
                    
                        <section class="content">
                            
                            <!-- Begin Portfolio Nav -->
                            <!--<div id="frame-filter">
                            <ul id="filter">
                                <li class="current"><a href="#" data-filter="*">All Categories</a></li>
                                <li><a href="#" data-filter=".musical">Action</a></li>
                                <li><a href="#" data-filter=".romantic">Romantic</a></li>
                                <li><a href="#" data-filter=".trailer">Exclusive</a></li>
                            </ul> 
                            <div class="clear"></div>
                            </div> -->
                            <!-- End Portfolio Nav -->    
                              
                            <!-- Begin Portfolio Items -->
                            <div id="ts-display" class="row">
                                    <div class="one_third columns item musical">
                                        <div class="ts-display-pf-img">
                                            <span class="rollover">
                                                <a class="pftitle" href="https://www.youtube.com/watch?v=62E4FJTwSuc" title="INTERSTELLAR"><span>INTERSTELLAR</span></a>
                                                <span class="pf-utility ">
                                                    <a class="pfzoom" href="https://www.youtube.com/watch?v=62E4FJTwSuc" data-rel="prettyPhoto[mixed]" >zoom</a>
                                                    <a class="pflink" href="https://www.youtube.com/watch?v=62E4FJTwSuc">link</a>
                                                </span>
                                            </span>
                                            <img src="images/content/pf/Interstellar.jpg" alt=""/>						
                                        </div>
                                        <span class="shadowpfimg"><img src="images/shadow-pf.png" alt=""/></span> 
                                    <h3>Price: Rs.200</h3>

                                        <a href="billing.php" class="button">Rent</a>
										                                
                                        </div> <div class="one_third columns item romantic"> <p
class="details">Interstellar is a British- American 2014 science fiction epic film directed by Christopher Nolan,
starring Matthew McConaughey, Anne Hathaway, Jessica Chastain and Michael Caine. The film features a crew of astronauts
who travel through a wormhole in search of a new home for humanity. Brothers Christopher and Jonathan Nolan wrote the
screenplay, which has its origins in a script Jonathan developed in 2007. Christopher Nolan produced the film with his
wife Emma Thomas, and Lynda Obst. Caltech theoretical physicist Kip Thorne, whose work inspired the film, was an
executive producer and acted as scientific consultant.</div>
                                    
							
                            </div>
                            <!-- End Portfolio Items -->
                            
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
                                Copyright &copy;2013. All Rights Reserved. Theme design by <a href="http://vignaharta.co.nf/">Vignaharta</a>
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

<!-- jQuery PrettyPhoto -->
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/fade.js"></script>
<script type="text/javascript" src="js/jquery-easing-1.3.js"></script>

<!-- jQuery Isotope -->
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script>
function runisotope(){
	$container = jQuery('#ts-display');
		$container.isotope({
			itemSelector : '.item'
		});

	// filter items when filter link is clicked
	jQuery('#filter li').click(function(){
	jQuery('#filter li').removeClass('current');
		jQuery(this).addClass('current');
			var selector = jQuery(this).find('a').attr('data-filter');
			$container.isotope({ filter: selector });
		return false;
	}); 
};
jQuery(window).load(function(){
	runisotope();
});

jQuery(window).resize(function(){
	runisotope();
});
</script>


</body>
</html>
