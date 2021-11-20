<?php
include 'inc/header.php';
//include 'inc/slider.php';
?>
<?php 
    $login_check = Session::get('customer_login');
	 if($login_check == false){
		 header('Location:login.php');
	 }
?> 
 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Your Details Ordered</h2>
						
						<table class="tblone">
							<tr>
								<th width="20%">ID</th>
								<th width="20%">Product Name</th>
								<th width="10%">Image</th>
								<th width="15%">Price</th>
								<th width="15%">Quantity</th>
								<th width="10%">Date</th>
								<th width="10%">Status</th>
								<th width="10%">Action</th>
							</tr>
							<?php
							$customer_id = Session::get('customer_id');
							$get_cart_ordered = $ct->get_cart_ordered($customer_id); 
							if($get_cart_ordered){
								$i = 0;
								$qty = 0;
							
								while($result = $get_cart_ordered->fetch_assoc()){
									$i++;
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $result['productName'] ?></td>
								<td><img src="admin/uploads/<?php echo $result['image'] ?>" alt=""/></td>
								<td><?php echo $result['price'].' '.'VNĐ' ?></td>
								<td>
									<?php echo $result['quantity'] ?>
								</td>
								<td><?php echo $fm->formatDate($result['date_order'])?></td>
								<td>
									<?php 
										if($result['status']=='0'){
											echo 'Pending';
										}else{
											echo 'Processed';
										}
									?>
								</td>
								<?php 
								if($result['status']=='0'){
								?>
								<td><?php echo 'N/A';?></td>
								<?php 
							   }else{

							  
								?>
								<td><a href="?cartid=<?php echo $result['cartId']?>">Xóa</a></td>
								<?php 
								}
								?>
							</tr>
						<?php
							}
						}
						?>								
							</table>	
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="index.html"> <img src="images/shop.png" alt="" /></a>
						</div>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php
include 'inc/footer.php';
?>