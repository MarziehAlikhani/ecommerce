<?php 

    session_start();
	include('functions/functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="fa"  dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>فروشگاه اینترنتی خرید کالا دیجیتال</title>
<script src="js/city.js" type="text/javascript"></script>
<meta name="keywords" content="free website template, flower shop, website templates, CSS, HTML" />
<meta name="description" content="Flower Shop - free website template, W3C compliant HTML CSS layout" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!--  Free CSS Template | Designed by TemplateMo.com  -->
</head>
<body>
<div id="templatemo_container">
<div id="templatemo_top_panel">
    	<!--<div class="social-icons">
					<ul>
						<li class="twitter" style="background-color: #ebbce5">
							<a href="http://www.twitter.com" target="_blank">Twitter</a>
						</li>
						<li class="facebook" style="background-color: #ebbce5">
							<a href="http://www.facebook.com" target="_blank">Facebook</a>
						</li>
						<li class="youtube" style="background-color: #ebbce5">
							<a href="http://www.youtube.com" target="_blank">YouTube</a>
						</li>
						<li class="googleplus" style="background-color: #ebbce5">
							<a href="http://www.googleplus.com" target="_blank">Google +r</a>
						</li>
						<li class="skype" style="background-color: #ebbce5">
							<a href="http://www.skype.com" target="_blank">Skype</a>
						</li>
						<li class="rss" style="background-color: #ebbce5">
							<a href="#" target="_blank">RSS Feed</a>
						</li>
					</ul>
				</div>-->
         <div id="templatemo_shopping_cart">
			 <?php  
				if(isset($_GET['add_cart'])){
					cart();
					echo "<br><b>  محصول مورد نظر شما به سبد خرید اضافه شد.  <b/><br/> ";
				}
				
				echo "<span> <b>  تعداد محصولات خریداری شده توسط شما تاکنون  <b/></span>" ;
				total_items();
			 ?>
        </div>
  </div>
     
     <div id="templatemo_header">
     	<a href="index.php" style="cursor:pointer;" ><img src="images/logo.png"  height="85px" alt="Flower Shop" /></a>
     </div>
     
     <div id="templatemo_banner">
     	<a href="#"><img src="images/templatemo_banner_image.jpg" alt="Flower Shop - Free Web Template" title="Flower Shop - Free Web Template" border="0" /></a>     </div>
<!---start of menu -->     
<div id="templatemo_menu_panel">
        <ul>
            <li><a href="index.php" class="current">خانه</a></li>
            <li><a href="all_products.php" target="_parent">همه محصولات</a></li>
            <li><a href="customer/my_account.php" target="_parent">حساب من</a></li>
            <li><a href="#" target="_parent">Singout(خروج)</a></li>  
            <li><a href="cart.php">سبد خرید</a></li>
			<li><a href='#'>درباره ی ما</a></li>			
            <li><a href="#">تماس با ما</a></li>                     
        </ul> 
    </div> 
<!-- end of menu -->