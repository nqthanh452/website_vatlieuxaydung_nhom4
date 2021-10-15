<?php
	include 'inc/header.php';
	include 'inc/slider.php';
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
    	<div class="register_account">
    		<h3>Đăng kí tài khoản mới</h3>
    		<form>
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" value="Họ và tên" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Họ và tên';}" >
							</div>
							
							<div>
							   <input type="text" value="Thành phố" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Thành phố';}">
							</div>
							
							<div>
								<input type="text" value="Mã thành phố" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mã thành phố';}">
							</div>
							<div>
								<input type="text" value="E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}">
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" value="Địa chỉ" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Địa chỉ';}">
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
		          <input type="text" value="Số điện thoại" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Số điện thoại';}">
		          </div>
				  
				  <div>
					<input type="text" value="Mật khẩu" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mật khẩu';}">
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><button class="grey">Tạo tài khoản</button></div></div>
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