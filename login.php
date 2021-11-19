<?php
	include 'inc/header.php';
	//include 'inc/slider.php';
 ?>
 <?php
 	$login_check = Session::get('customer_login');
	if($login_check){
		  header('Location:order.php');
	}
 ?>
<?php
if ($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['submit'])) {
	$insertCustomers = $cs->insert_customers($_POST);
}
?>
<?php
	if ($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['login'])) {
	$login_Customers = $cs->login_customers($_POST);
}
?>
<div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Thành viên</h3>
        	<p>Đăng nhập dưới đây</p>
        	<?php
        		if (isset($login_Customers)){
				echo $login_Customers;
			}
        	?>
        	<form action="" method="POST" >
                	<input  type="text" name="email" class="field" placeholder= "Enter Email....">
                    <input  type="password" name="password" class="field" placeholder= "Enter Password...." >
                 
                 <p class="note">Hãy nhập email của bạn nếu bạn quên mật khẩu <a href="#">Tại đây</a></p>
                    <div class="buttons"><div><input type="submit" name="login" class="grey" value ="Đăng nhập"></div></div>
            </form>
                    </div>
    	<div class="register_account">
    		<h3>Đăng kí tài khoản mới</h3>
			<?php
			if (isset($insertCustomers)){
				echo $insertCustomers;
			}
			?>
    		<form action="" method="POST">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name="name" placeholder= "Nhập họ và tên...">
							</div>
							
							<div>
							   <input type="text" name="city" placeholder= "Nhập Thành Phố...">
							</div>
							
							<div>
								<input type="text" name="zipcode" placeholder= "Nhập Zip code...">
							</div>
							<div>
								<input type="text" name="email" placeholder= "Nhập Email...">
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="address" placeholder= "Nhập Địa chỉ...">
						</div>
		    		<div>
						<select id="Quốc tịch" name="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Chọn Quốc Tịch</option>         

							<option value="VNM">Việt Nam</option>

		         </select>
				 </div>		        
	
		           <div>
		          <input type="text" name="phone" placeholder= "Nhập số điện thoại...">
				  
				  <div>
					<input type="text" name="password" placeholder= "Nhập mật khẩu...">
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><input type="submit" name = "submit" class="grey" value ="Tạo tài khoản"></div></div>
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