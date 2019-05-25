<div id="templatemo_content_right">
        	<div class="templatemo_right_section">
            	<h4>جستجو</h4>
                <div class="templatemo_right_section_content">
                    <form method="get" action="resault.php">
                            <input name="user_query" type="text" id="keyword" placeholder="کلمه مورد نظر را وارد کنید."/>
                            <input type="submit" name="search" class="button" value="جستجو" />
                     </form>
                 </div>
            </div>
            
            
            <div class="templatemo_right_section">
						<h4>دسته بندی ها</h4>
						<div class="templatemo_right_section_content">
							<ul>
								<?php getCat(); ?>
							</ul>
						</div>
			</div>
					
			<div class="templatemo_right_section">
						<h4>برندها</h4>
						<div class="templatemo_right_section_content">
							<ul>
								<?php getBrand() ?>
							</ul>
						</div>
			</div>
					
            
 
            <div class="templatemo_right_section">
            	<h4>W3C Validations</h4>
            	<div class="templatemo_right_section_content">
                    <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
				</div>
            </div>
        </div>