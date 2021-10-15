<?php
	include 'inc/header.php';
	//include 'inc/slider.php';
 ?>

<div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Thành viên</h3>
        	<p>Đăng nhập dưới đây</p>
        	<form action="Xin chào" method="get" id="Thành viên">
                	<input name="Domain" type="text" value="Tên đăng nhập" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tên đăng nhập';}">
                    <input name="Domain" type="password" value="Mật khẩu" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mật khẩu';}">
                 </form>
                 <p class="note">Hãy nhập email của bạn nếu bạn quên mật khẩu <a href="#">Tại đây</a></p>
                    <div class="buttons"><div><button class="grey">Đăng nhập</button></div></div>
            </div>
            <?php

            ?>
    	<div class="register_account">
    		<h3>Đăng kí tài khoản mới</h3>
    		<form>
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name="Họ và tên" placeholder="Nhập họ và tên...">
							</div>
							
							<div>
							   <input type="text" name="Thành phố" placeholder="Nhập thành phố...">
							</div>
							
							<div>
								<input type="text" name="Mã thành phố" placeholder="Nhập mã thành phố...">
							</div>
							<div>
								<input type="text" name="Địa chỉ E-Mail" placeholder="Nhập E-Mail">
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="Địa chỉ" placeholder="Nhập địa chỉ...">
						</div>
		    		<div>
						<select id="Quốc tịch" name="Quốc tịch" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Chọn Quốc Tịch</option>         
							<option value="AF">Afghanistan</option>
							<option value="AL">Albania</option>
							<option value="DZ">Algeria</option>
							<option value="AR">Argentina</option>
							<option value="AM">Armenia</option>
							<option value="AW">Aruba</option>
							<option value="AU">Australia</option>
							<option value="AT">Austria</option>
							<option value="AZ">Azerbaijan</option>
							<option value="BS">Bahamas</option>
							<option value="BH">Bahrain</option>
							<option value="BD">Bangladesh</option>
							<option value="USA">Mỹ</option>
							<option value="VNM">Việt Nam</option>

		         </select>
				 </div>		        
	
		           <div>
		          <input type="text" name="Số điện thoại" placeholder="Nhập số điện thoại...">
		          </div>
				  
				  <div>
					<input type="text" name="Mật khẩu" placeholder="Nhập mật khẩu...">
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><input type="submit" name="submit" class="grey" value="Tạo tài khoản"></div></div>
		    <p class="terms">Nhấn vào 'Tạo tài khoản' nếu bạn đồng ý với <a href="#">Chính sách &amp; Điều khoản</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>

 <?php 
	include 'inc/footer.php';
?>