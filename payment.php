<?php
	include 'inc/header.php';
	//include 'inc/slider.php';
 ?>
	  <?php
	  $login_check = Session::get('customer_login');
	  if($login_check==false){
		  header ('Location:login.php');
      }
	  ?>
<?php  
//if(!isset($_GET['proid'])|| $_GET['proid'] == NULL){
 //   echo "<script>windown.location ='404.php' </script>";
//}else{
 //   $id = $_GET['proid'];
//}
//if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['submit'])) {
 //   $quantity = $_POST['quantity'];
 //   $AddtoCart = $ct->add_to_cart($quantity,$id);
//}
?>
<div class="main">
    <div class="content">
    	<div class="section group">
        <div class="content_top">
    		<div class="heading">
    		<h3>Phương thức thanh toán</h3>
    		</div>
    		<div class="clear"></div>
				<div class="method-payment">
					<h3 class="payment">Chọn phương thức thanh toán</h3>
					<div class="wrap-payment">
						<span>
							<a href="offlinepayment.php" class="payment_href">Trực tiếp</a>
						</span>
					<span><a href="onlinepayment.php" class="payment_href">Chuyển khoản</a></span>	
					</div>
					<div class="return-cart"><a href="cart.php">Trở về</a></div>
				</div>
    	</div>
 	</div>
</div>

<?php 
	include 'inc/footer.php';
?>
	