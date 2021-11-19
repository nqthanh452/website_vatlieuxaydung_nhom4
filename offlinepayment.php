<?php
	include 'inc/header.php';
	//include 'inc/slider.php';
 ?>
<?php  
if(isset($_GET['orderid']) && $_GET['orderid'] =="order"){
    $customer_id = Session::get('customer_id');
	$insertOrder = $ct->insertOrder($customer_id);
	$delCart = $ct->del_all_data_cart();
	header('Location:success.php');
}
// if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['submit'])) {
//     $quantity = $_POST['quantity'];
//     $AddtoCart = $ct->add_to_cart($quantity,$id);
// }
?>
<form action="" method="POST">
<div class="main">
  <div class="content">
    <div class="section group">
    		<div class="heading">
      		<h3>Thanh toán trực tiếp</h3>
    		</div>
    		<div class="clear"></div>      
        <div class="box_left">
 					<div class="cartpage">	
						<?php
						if(isset($update_quantity_cart)){
							echo $update_quantity_cart;
						}
						?>
						<?php
						if(isset($delcart)){
							echo $delcart;
						}
						?>						
						<table class="tblone">
							<tr>
                <th width="5%">STT</th>
								<th width="15%">Tên sản phẩm</th>
								<th width="15%">Đơn giá</th>
								<th width="25%">Số lượng</th>
								<th width="20%">Tổng tiền</th>
								<th width="10%">Hàng động</th>
							</tr>
							<?php
							$get_product_cart = $ct->get_product_cart(); 
							if($get_product_cart){
								$subtotal = 0;
								$qty = 0;
							  $i=0;
								while($result = $get_product_cart->fetch_assoc()){$i++;
							?>
							<tr>
                <td><?php echo $i;?></td>
								<td><?php echo $result['productName'] ?></td>
								<td><?php echo $result['price'].' '.'VNĐ' ?></td>
								<td><?php echo $result['quantity'] ?></td>
								<td><?php
								$total = $result['price'] * $result['quantity'];
								echo $total.' '.'VNĐ';
								?></td>
								<td><a href="?cartid=<?php echo $result['cartId']?>">Xóa</a></td>
							</tr>
						<?php
							
						$subtotal += $total;
						$qty = $qty + $result['quantity'];
							}
						}
						?>
								
							</table>
							<?php 
									$check_cart = $ct->check_cart();
										if($check_cart){
												?>
						<table style="float:right;text-align:left;" width="40%">
							<tr>
								<th>Tổng cộng : </th>
								<td><?php

									echo $subtotal.' '.'VNĐ';
									Session::set('sum',$subtotal);
									Session::set('qty',$qty);

								?></td>
							</tr>
							<tr>
								<th>VAT : </th>
								<td>10%</td>
							</tr>
							<tr>
								<th>Thành tiền :</th>
								<td><?php
								$vats = $subtotal * 0.1;
								$gtotal = $subtotal + $vats ;
								echo $gtotal.' '.'VNĐ';
								?></td>
							</tr>
					  </table>
					  <?php
					}else{
					 		echo 'Giỏ hàng trống! Làm ơn shopping ngay bây giờ';
					 }
					 		?> 	
					</div>        
        </div>
        <div class="box_right">
        <table class="tblone">
            <?php
            $id = session::get('customer_id');
            $get_customer =$cs->show_customer($id);
            if($get_customer){
                while($result =$get_customer->fetch_assoc()){
            ?>
            <tr>
                <td>Tên</td>
                <td>:</td>
                <td><?php echo $result['name'] ?></td>
								</tr>
            <tr>
                <td>Thành phố</td>
                <td>:</td>
                <td><?php echo $result['city'] ?></td>
								</tr>
            <tr>
                <td>Số điện thoại</td>
                <td>:</td>
                <td><?php echo $result['phone'] ?></td>
								</tr>
            <tr>
                <td>Zipcode</td>
                <td>:</td>
                <td><?php echo $result['zipcode'] ?></td>
								</tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $result['email'] ?></td>
								</tr>
            <tr>
                <td>Địa chỉ</td>
                <td>:</td>
                <td><?php echo $result['address'] ?></td>
								</tr>
            <tr>
                <td colspan='3'><a href='editprofile.php'>Sửa thông tin cá nhân</a></td>
								</tr>                
            <?php
                }
                }
            ?>
        </table>
        </div>
    </div>
  </div>
	<a href="?orderid=order" class="submit-order">Đặt Hàng Ngay</a>
		<!-- <input type="submit" class='submit-order' value="Đặt hàng ngay" name="order"/> -->
</div>
</form>
<?php 
	include 'inc/footer.php';
?>	




