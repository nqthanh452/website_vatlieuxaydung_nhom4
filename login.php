<?php
	include 'inc/header.php';
	include 'inc/slider.php';
 ?>

<div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Đăng nhập tài khoản</h3>
        	<form action="hello" method="get" id="member">
                	<input name="Domain" type="text" value="Tên đăng nhập" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tên đăng nhập';}">
                    <input name="Domain" type="password" value="Password" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                 </form>
                 <p class="note"><a href="#">Quên mật khẩu?</a></p>
                    <div class="buttons"><div><button class="grey">Đăng nhập</button></div></div>
                    </div>
    	<div class="register_account">
    		<h3>Đăng ký tài khoản</h3>
    		<form>
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" value="Họ và tên" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Họ và tên';}" >
							</div>
							
							<div>
							   <input type="text" value="Thành phố bạn đang sống" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Thành phố bạn đang sống';}">
							</div>
							
							<div>
								<input type="text" value="Mã bưu chính" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mã bưu chính';}">
							</div>
							<div>
								<input type="text" value="Địa chỉ E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Địa chỉ E-Mail';}">
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" value="Nơi ở hiện tại " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nơi ở hiện tại';}">
						</div>
		    		<div>
						<select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Quốc gia</option>         
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
							<option value="VN">Việt Nam</option>


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
		    <p class="terms">Nhấp vào 'Tạo tài khoản' đồng nghĩa với việc bạn đồng ý với<a href="#">Điều khoản &amp; Điều kiện</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>

 <?php 
	include 'inc/footer.php';
?>