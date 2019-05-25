<!-- start of Header -->
	<?php	include('includes/Header.php');	?>
<!-- end of Header -->
 
<!---- Start Online Shopping Cart ----> 
<?php	include('includes/Shopping_Cart.php');	?>
<!---- end Online Shopping Cart ---->
	
<!-- start of content -->   
    <div id="templatemo_content">
 
	<!-- start of left ocntent -->
	<div id="templatemo_content_left">
					<h1>به سایت خرید آنلاین کالای دیحیتال خوش آمدید </h1>
					<p></p>
					<div class="cleaner_with_height">&nbsp;</div>
										
<?php 
if(isset($_GET['product_id'])){
		global $con;
		$id_product=$_GET['product_id'];
		$get_pro="select * from products where product_id='$id_product'";
		$run_pro=@mysqli_query($con,"SET NAMES utf8");
		$run_pro=@mysqli_query($con,"SET CHARACTER SET utf8");
		$run_pro=mysqli_query($con,$get_pro);
		while($row_pro=mysqli_fetch_array($run_pro))
		{
			$pro_id=$row_pro['product_id'];
			$pro_title=$row_pro['product_title'];
			$pro_price=$row_pro['product_price'];
			$pro_desc=$row_pro['product_desc'];
			$pro_image=$row_pro['product_image'];
			
			echo"
			<div class='product_box_detail'>
				<h3 class='h3_details'>$pro_title
				<br/><br/><div class='price'>قیمت:<span>$pro_price تومان</span></div>
				</h3>
				<div style='width:100%;float:right;'>
				<img style='width:70%;height:300px;float:right;margin:0 15%;' src='Admin_area/$pro_image' alt='image' />
				</div>
				<br/><br/><br/><br/>
				<p>$pro_desc</p>
				<div class='buynow'><a href='index.php?add_cart=$pro_id'>هم اکنون می خرید</a></div>
				<a href='index.php'>بازگشت به صفحه ی اصلی سایت!</a>
			</div>";
		}
	}
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