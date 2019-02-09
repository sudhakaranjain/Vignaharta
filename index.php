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


<body class="home">
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
                                <!--<div id="logo" class="three columns">
                                     <a href="home.php"><img src="images/new.png" align="left" width="800" height="800"  alt=""/></a>
                                </div>-->
  
                                <section id="navigation" class="eight columns">
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
                                <h1 class="pagetitle">Welcome to VIGNAHARTA</h1>
                                <span>The first online video tutorials and movie rental site.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- SLIDER -->
            <div id="outerslider">
                <div class="container">
                <div class="row">
                    <div id="slidercontainer" class="twelve columns">
                    
                        <section id="slider">
                            <div id="slideritems" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="images/content/161.jpg" alt="" />
                                        <div class="flex-caption">
                                           <h1></h1>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/content/162.jpeg" alt="" />
                                        <div class="flex-caption">
                                           <h1></h1>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/content/163.jpg" alt="" />
                                        <div class="flex-caption">
                                           <h1></h1>
                                        </div>
                                    </li>
                                </ul>
                                <img src="images/slider-shadow.png" alt="" class="imgblock"/>
                            </div>
                        </section>
                        
                    </div>
                </div>
                </div>
            </div>
            <!-- END SLIDER -->

        </div>
        <!-- END HEADER -->
        


        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                	<section id="maincontent" class="twelve columns">
                    
                        <section class="content">
                        
                            <div class="highlight-content">
                                <div class="highlight-container"><br>
                                    <h1>We serve you the best education videos and movies on rent at one click.</h1>
                                    <span>We make sure that you learn from our DIY tutorials and at the same time rent a weekend movie to have fun with your family.</span>
                                </div>
                            </div>
  							<div class="spacer"></div>
                            <div class="row">
                                <!--<div class="boxed half columns">
                                    <div class="boxed-content">
                                        <img src="images/content/icon1.png" alt="" class="imgopacity" />
                                        <h3 class="titleUppercase">Action Movies</h3>
                                        <div class="sep"><span class="sep2"></span></div>
                                        <p>We
                                        </p><a href="#" class="button">Start Now</a>
                                    </div>
                                    <div class="shadow-220"></div>
                                </div>-->
                                
                                <!--<div class="boxed half columns">
                                    <div class="boxed-content">
                                        <img src="images/content/icon2.png" alt="" class="imgopacity" />
                                        <h3 class="titleUppercase">Educate Yourself</h3>
                                        <div class="sep"><span class="sep2"></span></div>
                                        <p>E-learning tutorials at a glance. Be it enigneering,science,technology, we provide you everythings.
                                        </p><a href="#" class="button">Start Now</a>
                                    </div>
                                    <div class="shadow-220"></div>
                                </div>-->
                                
                                <div class="boxed half columns">
                                    <div class="boxed-content">
                                        <img src="images/content/icon2.png" alt="" class="imgopacity" />
                                        <h3 class="titleUppercase">Educate Yourself</h3>
                                        <div class="sep"><span class="sep2"></span></div>
                                        <p>E-learning tutorials at a glance. Be it enigneering, science or technology!
                                        </p><a href="technology.php" class="button">Start Now</a>
                                    </div>
                                    <div class="shadow-220"></div>
                                </div>
                                
                                <div class="boxed half columns">
                                    <div class="boxed-content">
                                        <img src="images/content/icon3.png" alt="" class="imgopacity" />
                                        <h3 class="titleUppercase"> Movies</h3>
                                        <div class="sep"><span class="sep2"></span></div>
                                        <p>Viewer's choice! Introducing some of the best trailers at your fingertips......
                                        </p><a href="category.php" class="button">Start Now</a>
                                    </div>
                                    <div class="shadow-220"></div>
                                </div>
                            </div>
                            
                            <div class="separator"></div>
                            
                            
                           <!--<div class="row">
                                <div class="two_third columns">
                                    <h3 class="titleUppercase">Our Collection Movies</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis sit amet luctus nisl tempus. Aenean eget lacinia nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus dignissim suscipit dignissim.</p>
                                    
                                    <div class="tabcontainer">
                                        <ul class="tabs">
                                            <li><a href="#tab0">Top Movies</a></li>
                                            <li><a href="#tab1">New Movies</a></li>
                                            <li><a href="#tab2">Favorite Movies</a></li>
                                        </ul>
                                        <div class="tab-body">
                                            <div id="tab0" class="tab-content">
                                                <p>Nullam tristique imperdiet feugiat. Pellentesque blandit massa sit amet metus condimentum congue. Proin ornare pellentesque lorem, ut cursus arcu egestas ut. Vivamus interdum sodales nisi. Duis fringilla odio tempor dolor accumsan varius. Ut et elit arcu, eget cursus lectus.</p>
                                                <img class="alignleft" src="images/content/pic2.jpg" alt="" />
                                                <h6 class="padding_top_middle margin_bottom_small titleUppercase">Friends serial Movie</h6>
                                                <strong>Lorem ipsum dolor sit amet</strong><br/>
                                                <p>Aliquam sit amet libero enim, non posuere massa. Duis convallis tempor risus at sollicitudin. Vivamus scelerisque leo eu dolor.</p>
                                            </div>
                                        
                                            <div id="tab1" class="tab-content">
                                            <p>#2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat rutrum luctus. Proin nisl augue, tempus quis lacinia at, ultrices eget sapien. Vestibulum at orci a eros molestie rutrum. Fusce interdum erat vel eros elementum vitae interdum massa varius.</p>
                                            </div>
                                        
                                            <div id="tab2" class="tab-content">
                                            <p>#3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat rutrum luctus. Proin nisl augue, tempus quis lacinia at, ultrices eget sapien. Vestibulum at orci a eros molestie rutrum. Fusce interdum erat vel eros elementum vitae interdum massa varius. Morbi fermentum commodo nisi, id interdum mauris suscipit pellentesque. Morbi velit eros, accumsan ut faucibus at, viverra id mi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one_third columns">
                                    <h2 class="rp-shortcode-title">Latest News</h2>
                                    <ul class="rp-shortcode">
                                        <li class="alpha">
                                            <div class="postthumb"><img src="images/content/post-thumb1.jpg" alt="" /></div>
                                            <h3><a href="#">Phasellus tempus mauris quis dui lobortis.</a></h3>
                                            <span class="smalldate">September 02, 2012</span>
                                            <div class="clear"></div>
                                        </li>
                                        <li class="">
                                            <div class="postthumb"><img src="images/content/post-thumb2.jpg" alt="" /></div>
                                            <h3><a href="#">Mauris porta adipiscing mauris, vitae hendrerit</a></h3>
                                            <span class="smalldate">September 02, 2012</span>
                                            <div class="clear"></div>
                                        </li>
                                        <li class="omega">
                                            <div class="postthumb"><img src="images/content/post-thumb3.jpg" alt="" /></div>
                                            <h3><a href="#">Proin elementum posuere libero nec.</a></h3>
                                            <span class="smalldate">August 02, 2012</span>
                                            <div class="clear"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>-->
                            
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

<!-- jQuery Flexslider -->
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
jQuery(window).load(function() {
    jQuery('.flexslider').flexslider({
          animation: "fade",
		  animationDuration: 600,
		  directionNav: false,
		  controlNav: true 
        });
		
});
</script>


</body>
</html>
