<!-- start of Header -->
	<?php	include('includes/Header.php');	?>
<!-- end of Header -->
 
<!-- start of content -->   
<div id="templatemo_content">
 
<!-- start of left ocntent -->
<div id="templatemo_content_left">
	<h1></h1>
	
	<div class="cleaner_with_height">&nbsp;</div>
							
	<div>
						
		<form action="customer_register.php" method="post" enctype="multipart/form-data" > 
								
			<table align="center">
									
				<tr >
					<td colspan="6" >
						<h2>  ثبت نام</h2>
					</td>
				</tr>
									
				<tr >
					<td colspan="3" >
						<b style="font-family:b nazanin;font-size:18px;">نام   :   </b>
					</td>
					<td colspan="3" >
						<input type="text"    size="35" name="c_name" placeholder="نام خود را وارد نمایید." />
					</td>
				</tr>
										
				<tr>
					<td colspan="3" >
						<b style="font-family:b nazanin;font-size:18px;">نام خانوادگی  :  </b>
					</td>
					<td colspan="3" >
						<input type="text"    size="35" name="c_lastname" placeholder="نام خانوادگی خود را وارد نمایید." />
					</td> 
				</tr>
 
				<tr>
					<td colspan="3" >
						<b style="font-family:b nazanin;font-size:18px;">جنسیت  :  </b>
					</td>
					<td colspan="3" >
						<select name="c_gender" >
							<option >جنسیت مورد نظرتان را انتخاب نمایید.</option>
							<option value="مرد" >مرد</option>
							<option value="زن" >زن</option>
						</select>
					</td>
				</tr>
																	
										
				<tr >
					<td colspan="3" >
						<b style="font-family:b nazanin;font-size:18px;">تصویری از خودتان  :  </b>
					</td>
					<td colspan="3" >
						<input type="file" name="c_image"  />
					</td>
				</tr>
										
				<tr>
					<td colspan="3" >
						<b style="font-family:b nazanin;font-size:18px;">ایمیل  :  </b>
					</td>
					<td colspan="3" >
						<input type="text"    size="35" name="c_email" placeholder="ایمیل خود را وارد نمایید." />
					</td>
				</tr>
										
				<tr >
					<td colspan="3" >
						<b style="font-family:b nazanin;font-size:18px;">نام استان  :  </b>
					</td>
					<td colspan="3" >
						<select name="state" onChange="iranwebsv(this.value);">
							<option value="0">لطفا استان را انتخاب نمایید</option>
							<option value="تهران">تهران</option>
							<option value="گیلان">گیلان</option>
							<option value="آذربایجان شرقی">آذربایجان شرقی</option>
							<option value="خوزستان">خوزستان</option>
							<option value="فارس">فارس</option>
							<option value="اصفهان">اصفهان</option>
							<option value="خراسان رضوی">خراسان رضوی</option>
							<option value="قزوین">قزوین</option>
							<option value="سمنان">سمنان</option>
							<option value="قم">قم</option>
							<option value="مرکزی">مرکزی</option>
							<option value="زنجان">زنجان</option>
							<option value="مازندران">مازندران</option>
							<option value="گلستان">گلستان</option>
							<option value="اردبیل">اردبیل</option>
							<option value="آذربایجان غربی">آذربایجان غربی</option>
							<option value="همدان">همدان</option>
							<option value="کردستان">کردستان</option>
							<option value="کرمانشاه">کرمانشاه</option>
							<option value="لرستان">لرستان</option>
							<option value="بوشهر">بوشهر</option>
							<option value="کرمان">کرمان</option>
							<option value="هرمزگان">هرمزگان</option>
							<option value="چهارمحال و بختیاری">چهارمحال و بختیاری</option>
							<option value="یزد">یزد</option>
							<option value="سیستان و بلوچستان">سیستان و بلوچستان</option>
							<option value="ایلام">ایلام</option>
							<option value="کهگلویه و بویراحمد">کهگلویه و بویراحمد</option>
							<option value="خراسان شمالی">خراسان شمالی</option>
							<option value="خراسان جنوبی">خراسان جنوبی</option>
							<option value="البرز">البرز</option>
						</select>
					</td>
				</tr>
										
				<tr >
					<td colspan="3" >
						<b style="font-family:b nazanin;font-size:18px;">نام شهر  :  </b>
					</td>
					<td colspan="3" >
						<select name="city" id="city">
							<option value="0">لطفا استان را انتخاب نمایید</option>
						</select>
					</td>
				</tr>
										
				<tr >
					<td colspan="3" >
						<b style="font-family:b nazanin;font-size:18px;">آدرس  :  </b>
					</td>
					<td colspan="3" >
						<input type="text"    size="35" name="c_address" placeholder="آدرس خود را وارد نمایید." />
					</td>
				</tr>
										
				<tr >
					<td colspan="3" >
						<b style="font-family:b nazanin;font-size:18px;">تلفن همراه  :  </b>
					</td>
					<td colspan="3" >
						<input type="text"    size="35" name="c_phone" placeholder="تلفن خود را وارد نمایید ." />
					</td>
				</tr>
										
				<tr >
					<td colspan="3" >
						<b style="font-family:b nazanin;font-size:18px;">پسورد  :  </b>
					</td>
					<td colspan="3" >
						<input type="password" size="35" name="c_password" placeholder="پسوردتان را وارد نمایید" />
					</td>
				</tr>							
											
				<tr align="center">
					<td colspan="6" height="55">
						<input type="submit" name="register" value="ایجاد حساب کاربری">
					</td>
				</tr>
										
			</table>
 
		</form>
 
	</div>
												
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