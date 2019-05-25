<?php
 
$con=mysqli_connect("localhost","root","","ecommerce");
	if(mysqli_connect_errno())
	{
		echo "ارتباط با پایگاه داده برقرار نیست . شماره خطا :".mysqli_connect_errno();
	}
 
	//getting categories
	function getCat()
	{
		global $con;
		$get_cat="select * from categories";
		//for persion languge
		$run_cat=@mysqli_query($con,"SET NAMES utf8");
		$run_cat=@mysqli_query($con,"SET CHARACTER SET utf8");
		$run_cat=@mysqli_query($con,$get_cat);
		while($row_cat=@mysqli_fetch_array($run_cat))
		{
			$cat_id=$row_cat['cat_id'];
			$cat_title=$row_cat['cat_title'];
			echo "<li><a href='index.php?cat_id=$cat_id'>$cat_title</a></li>";
		}
		
	}
 
	//getting brands
	function getBrand()
	{
		global $con;
		$get_brand="select * from brands";
		$run_brand =@mysqli_query($con,"SET NAMES utf8");
		$run_brand =@mysqli_query($con,"SET CHARACTER SET utf8");
		$run_brand=@mysqli_query($con,$get_brand);
		while($row_brand=@mysqli_fetch_array($run_brand))
		{
			$brand_id=$row_brand['brand_id'];
			$brand_title=$row_brand['brand_title'];
			echo "<li><a href='index.php?brand_id=$brand_id'>$brand_title</a></li>";
		}
	}
 
	//display products
	function getPro()
	{
	
		global $con;
		
		//display products when not set cat_id and brand_id
		if((!isset($_GET['cat_id']))&&(!isset($_GET['brand_id']))){
			$get_pro="select * from products order by RAND() LIMIT 0,6";
			$run_pro=@mysqli_query($con,"SET NAMES utf8");
			$run_pro=@mysqli_query($con,"SET CHARACTER SET utf8");
			$run_pro=mysqli_query($con,$get_pro);
			echo"<h2>جدیدترین محصولات</h2>";
			while($row_pro=mysqli_fetch_array($run_pro))
			{
				
				$pro_id=$row_pro['product_id'];
				$pro_cat=$row_pro['product_cat'];
				$pro_brand=$row_pro['product_brand'];
				$pro_title=$row_pro['product_title'];
				$pro_price=$row_pro['product_price'];
				$pro_desc=$row_pro['product_desc'];
				$pro_image=$row_pro['product_image'];
				
				echo"
				<div class='product_box'>
					<h3>$pro_title</h3>
					<img width='200' height='150' src='Admin_area/$pro_image' alt='image' />
					<div class='price'>قیمت:<span>$pro_price تومان</span></div>                           
					<div class='buynow'><a href='index.php?add_cart=$pro_id'>هم اکنون می خرید</a></div>
					<a href='details.php?product_id=$pro_id'>جزئیات</a>
				</div>";
			}
		}
	}
 
 
	//display products when set cat_id 
	function getCatPro()
	{	
		global $con;
		if(isset($_GET['cat_id'])){
			
			$pro_cat_id=$_GET['cat_id'];
			//query getting products of cat
			$get_pro="select * from products where 	product_cat='$pro_cat_id' ";
			
			//query getting name of category
			$get_cat_name="select cat_title from categories where cat_id='$pro_cat_id' ";
			
			$run_pro=@mysqli_query($con,"SET NAMES utf8");
			$run_pro=@mysqli_query($con,"SET CHARACTER SET utf8");
			$run_pro=mysqli_query($con,$get_pro);
			$run_cat_name=mysqli_query($con,$get_cat_name);
			
			//display name of category
			while($row_cat_name=mysqli_fetch_array($run_cat_name))
			{
				$pro_cat_name=$row_cat_name['cat_title'];
				echo"<h2>$pro_cat_name</h2>";
			}			
			
			//display message when empty of category
			$cunt_pro_cat=mysqli_num_rows($run_pro);
			if($cunt_pro_cat==0)
			{
				echo"<br/><br/><b><h3>متاسفانه محصول خاصی در این دسته وجود ندارد</h3></b>";			
			}
						
			//display products of category
			while($row_pro=mysqli_fetch_array($run_pro))
			{
				
				$pro_id=$row_pro['product_id'];
				$pro_cat=$row_pro['product_cat'];
				$pro_brand=$row_pro['product_brand'];
				$pro_title=$row_pro['product_title'];
				$pro_price=$row_pro['product_price'];
				$pro_desc=$row_pro['product_desc'];
				$pro_image=$row_pro['product_image'];
				
				echo"
				<div class='product_box'>
					<h3>$pro_title</h3>
					<img width='200' height='150' src='Admin_area/$pro_image' alt='image' />
					<div class='price'>قیمت:<span>$pro_price تومان</span></div>                           
					<div class='buynow'><a href='index.php?add_cart=$pro_id'>هم اکنون می خرید</a></div>
					<a href='details.php?product_id=$pro_id'>جزئیات</a>
				</div>";
			}
		}
		
	}
 
	//display products when set brand_id
	function getBrandPro()
	{	
		global $con;
		if(isset($_GET['brand_id'])){
			
			$pro_brand_id=$_GET['brand_id'];
			//query getting products of brand
			$get_pro="select * from products where 	product_brand='$pro_brand_id' ";
			
			//query getting name of brand
			$get_brand_name="select brand_title from brands where brand_id='$pro_brand_id' ";
			
			$run_pro=@mysqli_query($con,"SET NAMES utf8");
			$run_pro=@mysqli_query($con,"SET CHARACTER SET utf8");
			$run_pro=mysqli_query($con,$get_pro);
			$run_brand_name=mysqli_query($con,$get_brand_name);
			
			//display name of brand
			while($row_brand_name=mysqli_fetch_array($run_brand_name))
			{
				$pro_brand_name=$row_brand_name['brand_title'];
				echo"<h2>$pro_brand_name</h2>";
			}
			
			//display message when empty of brand
			$cunt_pro_brand=mysqli_num_rows($run_pro);
			if($cunt_pro_brand==0)
			{
				echo"<br/><br/><b><h3>متاسفانه محصول خاصی در این برند وجود ندارد .</h3></b>";			
			}
							
			//display products of brand
			while($row_pro=mysqli_fetch_array($run_pro))
			{
				
				$pro_id=$row_pro['product_id'];
				$pro_cat=$row_pro['product_cat'];
				$pro_brand=$row_pro['product_brand'];
				$pro_title=$row_pro['product_title'];
				$pro_price=$row_pro['product_price'];
				$pro_desc=$row_pro['product_desc'];
				$pro_image=$row_pro['product_image'];
				
				echo"
				<div class='product_box'>
					<h3>$pro_title</h3>
					<img width='200' height='150' src='Admin_area/$pro_image' alt='image' />
					<div class='price'>قیمت:<span>$pro_price تومان</span></div>                           
					<div class='buynow'><a href='index.php?add_cart=$pro_id'>هم اکنون می خرید</a></div>
					<a href='details.php?product_id=$pro_id'>جزئیات</a>
				</div>";
			}
		}
	}
	
 
	//getting IP User
	function getIp()
	{
//whether ip is from remote address		
		$ip=$_SERVER['REMOTE_ADDR'];
 
//whether ip is from share internet		
		if(!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		}
 
//whether ip is from proxy		
		elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];	
		}
		return $ip;
	}
 
		//creating the shopping cart
	//import attribute product and IP address user with press buy button in cart table
	function cart()
	{
		global $con;
		
		if(isset($_GET['add_cart']))
		{
			$pro_id=$_GET['add_cart'];
			
			//creating or using cookie 
			if(isset($_COOKIE["ipUserEcommerce"]))
			{
				$ip	= $_COOKIE["ipUserEcommerce"];
			}else{
				$ip=getIp();
				setcookie('ipUserEcommerce',$ip,time()+1206900);
			}
			
			$check_pro="select * from cart where p_id='$pro_id' AND ip_add='$ip' ";
			$run_check=@mysqli_query($con,$check_pro);
			if(@mysqli_num_rows($run_check)>0)
			{
				echo "";
			}
			else
			{
				$insert_pro="insert into cart (p_id,ip_add,qty)values('$pro_id','$ip',1)";
				$run_insert_pro=@mysqli_query($con,$insert_pro);
			}
		}
	}
	
	//getting the total added items
	function total_items()
	
	{
		
		if(isset($_GET['add_cart']))
		{	
			global $con;
			//<span style="background-color: #ff0000;" data-mce-style="background-color: #ff0000;">
			//creating or using cookie 
			if(isset($_COOKIE["ipUserEcommerce"]))
			{
				$ip	= $_COOKIE["ipUserEcommerce"];
			}else{
				$ip=getIp();
				setcookie('ipUserEcommerce',$ip,time()+1206900);
			}//</span>
		
			
			$get_items = "select * from cart where ip_add='$ip'";
			
			$run_items=@mysqli_query($con,$get_items);
			
			$count_items=@mysqli_num_rows($run_items);
		
		}else
		{	
		
			global $con;
			//<span style="background-color: #ff0000;" data-mce-style="background-color: #ff0000;">
			//creating or using cookie 
			if(isset($_COOKIE["ipUserEcommerce"]))
			{
				$ip	= $_COOKIE["ipUserEcommerce"];
			}else{
				$ip=getIp();
				setcookie('ipUserEcommerce',$ip,time()+1206900);
			}
//</span>			
			$get_items = "select * from cart where ip_add='$ip'";
			
			$run_items =@mysqli_query($con,$get_items);
			
			$count_items =@mysqli_num_rows($run_items);
		}
		
		echo $count_items;
	
	}

	//getting the total price of the items in the cart
	
	function total_price()
	{
		$total = 0;
		
		global $con;
		
		//creating or using cookie 
		if(isset($_COOKIE["ipUserEcommerce"]))
		{
			$ip	= $_COOKIE["ipUserEcommerce"];
			}else{
			$ip=getIp();
			setcookie('ipUserEcommerce',$ip,time()+1206900);
		}
		
		$sel_price = "select * from cart where ip_add='$ip'";
		
		$run_price = mysqli_query($con,$sel_price);
		
		while($p_price = mysqli_fetch_array($run_price))
		
		{
			$pro_id = $p_price['p_id'];
			
			$pro_qty = $p_price['qty'];
			
			$pro_price = "select * from products where product_id='$pro_id'";
			
			$run_pro_price = mysqli_query($con,$pro_price);
			
			while($pp_price = mysqli_fetch_array($run_pro_price))
			
			{
				$product_price = array($pp_price['product_price']*$pro_qty);
				
				$values = array_sum($product_price);
				
				$total += $values;
				
			}
			
		}
		
		echo $total." تومان ";	
	}
?>