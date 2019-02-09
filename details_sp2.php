<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Book Store</title>
<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
</head>
<body>
<?php
session_start();

?>
<div id="wrap">

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
                    <div class="price"><strong>PRICE:</strong> <span class="red">100 $</span></div>
                    
                    <a href="billing.php?book=2" class="more"><img src="images/order_now.gif" alt="" title="" border="0" /></a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="add_cart.php?book=2" class="contact" style="margin:0px 10px 0px 10px">Cart</a>  
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>	
            
              
            
            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">
        
                	
                
             <div class="cart" >
                  <a href="cart.php"><div class="title"><span class="title_icon"><img src="images/cart.gif" alt="" title="" /></span>My cart</div></a>
              
              </div>
        
             
             
             
             <div class="right_box">
             
             	<div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" title="" /></span>Categories</div> 
                
                <ul class="list">
                <ul class="list">
                <li><a href="novel.php">Novels</a></li>
                <li><a href="technical.php">Technical</a></li>
                <li><a href="children.php">Children</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="science.php">Science</a></li>
                <li><a href="business.php">Business</a></li>
                <li><a href="entrance.php">Entrance Exam</a></li>
                <li><a href="biographics.php">Biographics</a></li>
                <li><a href="religious.php">Religious</a></li>
                <li><a href="category.php">Specials</a></li>                                              
                                                   
                </ul>
                
             	
             
             </div>         
             
        
             
        
        </div><!--end of right content-->
        
        
       
       
       <div class="clear"></div>
       </div><!--end of center content-->
       
              
       <div class="footer">
       	<div class="left_footer"><img src="images/footer_logo.gif" alt="" title="" /><br /> <a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="images/csscreme.gif" alt="free templates" title="free templates" border="0" /></a></div>
        <div class="right_footer">
        <a href="#">home</a>
        <a href="#">about us</a>
        <a href="#">services</a>
        <a href="#">privacy policy</a>
        <a href="#">contact us</a>
       
        </div>
        
       
       </div>
    

</div>

</body>
<script type="text/javascript">

var tabber1 = new Yetii({
id: 'demo'
});

</script>
</html>

