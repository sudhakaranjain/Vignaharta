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
                                <h1 class="pagetitle">BILL</h1>
                                <span class="pagedesc">Thank you for purchasing with us. Please fill in your details. 


</span>
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
                
                    <section id="maincontent" class="nine columns positionleft">
                    	<div class="main">
                        
                            <section class="content">
                            	
								<!--<p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30164.905920933666!2d72.889857!3d19.080735!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8d1745d15baac575!2sDon+Bosco+Institute+Of+Technology!5e0!3m2!1sen!2sus!4v1427617106625" width="400" height="300" frameborder="0" style="border:0"></iframe></p>-->


                                <div class="separator"></div>
                                
                                <div id="contactform">
                                    <form name="billing" method="POST" action="receipt.php">          
									
                    <table>
					<tr>
                    <td><strong><b>Name:</b></strong></td>
                    <td><input type="text" id="name" name="name"  style="height:30px; width:250px" required/></td>
                    </tr>
					
					<tr>
                    <td><strong>Username:</strong></td>
                    <td><input type="text" id="username" name="username" style="height:30px; width:250px" required/></td>
                    </tr>
   
                    <tr>
                    <td><strong>Email:</strong></td>
                    <td><input type="email" id="email" name="email" style="height:30px; width:250px" required /></td>
                    </tr>
					
					<!--<tr>
                    <td><strong>Movie Name:</strong></td>
                    <td><input type="text" id="book" name="book"  style="height:30px; width:250px; background-color:#eee " value='<?php echo $name ?>'/></td>
                    </tr>
					
					<tr>
                    <td><strong>Total Cost:</strong></td>
                    <td><input type="text" value='<?php echo $price ?>' id="cost" name="cost"  style="height:30px; width:250px; background-color:#eee "/></td>
                    </tr>-->
					<tr>
                    <td><strong>Address:</strong></td>
                    <td><input type="text" id="address" name="address" style="height:30px; width:250px" required /></td>                    </tr>
					
					<tr>
                    <td><strong>Locality/town:</strong></td>
                    <td><input type="text" id="town" name="town" style="height:30px; width:250px" required/></td>
                    </tr>
					<tr>
                    <td><strong>Pincode:</strong></td>
                    <td><input type="text" id="pincode" name="pincode" style="height:30px; width:250px" required/></td>
                    </tr>
                   
                    
					</table>
                    <div class="form_row">
                        <div class="terms">
                        <input type="checkbox" name="terms" required />
                        I agree to the <a href="#">terms &amp; conditions</a>                      
						</div>
                    </div> 

                    
                    <div class="form_row">
                    <input type="submit" class="register" value="buy" />
                    </div>   
                  </form>  

                                </div><!-- end contactform -->
                                
                            </section>
                         
                        </div>
                    </section>
                    
                    <aside class="three columns">
                    
                    	<div class="sidebar">
                        <ul>
                            
                            <!--<li class="widget-container">
                                <h2 class="widget-title">Widget Title</h2>			
                                <div class="textwidget">
                                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultrices interdum nulla sit amet gravida. Etiam elementum porta arcu. Duis at est metus.
                                </div>
                            </li>
                            <li class="widget-container">
                                <h2 class="widget-title">Accordion</h2>			
                                <div class="textwidget">
                                    <ul class="ts-accordion">
                                        <li>
                                            <h2 class="accordion-title"><span class="accordion-icon"></span>Business Company</h2>
                                            <div class="accordion-content">
                                                Consequat te olim letalis premo ad hos olim odio olim indoles ut venio iusto. Euismod, sagaciter diam neque antehabeo blandit, jumentum transverbero luptatum.
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <h2 class="accordion-title"><span class="accordion-icon"></span>Communication</h2>
                                            <div class="accordion-content">
                                                Consequat te olim letalis premo ad hos olim odio olim indoles ut venio iusto. Euismod, sagaciter diam neque antehabeo blandit, jumentum transverbero luptatum.
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <h2 class="accordion-title"><span class="accordion-icon"></span>Graphic Design</h2>
                                            <div class="accordion-content">
                                                Consequat te olim letalis premo ad hos olim odio olim indoles ut venio iusto. Euismod, sagaciter diam neque antehabeo blandit, jumentum transverbero luptatum.
                                            </div>
                                        </li>
                                    </ul>
								</div> 
                            </li>-->
                        </ul>
                        </div>
                        
                    </aside>
                    
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
        <div id="shadowbottom"></div>
        <!-- FOOTER -->
        <footer id="footersection">

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

<!-- Form Contact Script -->
<script type="text/javascript" src="js/contact.js"></script>


</body>
</html>


