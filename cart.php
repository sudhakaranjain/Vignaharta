<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Book Store</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
session_start();
if(!(isset($_SESSION['username']))&& !(isset($_SESSION['id'])))
{
header('location:myaccount.php?confirm=1');

exit();
}
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
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>My cart</div>
        
        	<div class="feat_prod_box_details">
            
            <table class="cart_table">
            	<tr class="cart_title">
                	<td>Item pic</td>
                	<td>Book name</td>
                    <td>Qty</td>
					<td>Price</td>
                                 
                </tr>	   
<?php
include("script/conn.php");
$id=$_SESSION['id'];
$sql="SELECT * FROM wishlist WHERE customer_id=$id";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
?>
       

<?php
while($row = mysqli_fetch_assoc($result))
{
$movie_id=$row['movie_id'];
$sql1="SELECT * FROM movies WHERE movie_id=$movie_id LIMIT 1";
$result1=mysqli_query($con,$sql1);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result1))
{
$movie_id=$row['movie_id'];
$name=$row['name'];
$price=$row['price'];
$link=$row['link'];
?>
<tr>
                	<td><img src='<?php echo $link ?>' alt="" title="" border="0" class="cart_thumb" /></td>
                	<td><?php echo $name ?></td>
                    <td>1</td>
                    <td><?php echo $price ?></td>             
                </tr> 
<?php
}
}
}
}
?>




       

                
            	         
            	

                              
            
            </table>
            
             
            
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
</html>

