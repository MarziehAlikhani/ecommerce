<!-- start of Header -->
	<?php	include('includes/Header.php');	?>
<!-- end of Header -->
 
<!-- Start Online Shopping Cart --> 
<?php	include('includes/Shopping_Cart.php');	?>
<!-- end Online Shopping Cart -->
	
<!-- start of content -->   
    <div id="templatemo_content">
 
	<!-- start of left ocntent -->
				<div id="templatemo_content_left">
					<h1>به سایت خرید آنلاین کالای دیحیتال خوش آمدید </h1>
					<p></p>
					<div class="cleaner_with_height">&nbsp;</div>
										
						<?php
							getPro(); 
							
							getCatPro(); 
							
							getBrandPro(); 
						?>
						
					<div class="cleaner_with_height">&nbsp;</div>
				</div>
    <!-- end of left content  -->
        
<!-- start of right content -->
	<?php	include('includes/Right_Sidebar.php');	?>
<!-- end of right content -->
    <div class="cleaner">&nbsp;</div>
</div>
 <!-- end of content -->
 
<!-- start of footer -->
	<?php include('includes/Footer.php');	?>
<!-- end of footer -->