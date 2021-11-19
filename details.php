<?php
	include 'inc/header.php';
	//include 'inc/slider.php';
 ?>
<?php  
if(!isset($_GET['proid'])|| $_GET['proid'] == NULL){
    echo "<script>windown.location ='404.php' </script>";
}else{
    $id = $_GET['proid'];
}
if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['submit'])) {
    $quantity = $_POST['quantity'];
    $AddtoCart = $ct->add_to_cart($quantity,$id);
}?>
<div class="main">
    <div class="content">
    	<div class="section group">
			<?php
			 $get_product_details = $product->get_details($id);
			 
			 if($get_product_details){
				 while($result_details = $get_product_details->fetch_assoc()){
			 
			?>
				<div class="cont-desc span_1_of_2">				
					<div class="grid images_3_of_2">
						<img src="admin/uploads/<?php echo $result_details['image'] ?>" alt="" />
					</div>
				<div class="desc span_3_of_2">
					<h2><?php echo $result_details['productName'] ?></h2>
					<p><?php echo $result_details['product_desc'] ?></p>					
					<div class="price">
						<p>Giá: <span><?php echo $result_details['price']." VND" ?></span></p>
						<p>Danh Mục: <span><?php echo $result_details['catName'] ?></span></p>
						<p>Hãng:<span><?php echo $result_details['brandName'] ?></span></p>
					</div>
				<div class="add-cart">
					<form action="" method="post">
						<input type="number" class="buyfield" name="quantity" value="1" min="1"/>
						<input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
                       </form>
					 <?php
                        if(isset($AddtoCart)){
                                echo '<span style = "color:red;font-size:18px;">'.$AddtoCart.'</span>';
                            }
                        ?>
                     		
				</div>
			</div>
			<div class="product-desc">
			<h2>Product Details</h2>
			<?php echo $result_details['product_desc'] ?>
	    </div>
				
	</div>
	<?php
			}
		}
	?>
				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>
					<?php
					$getall_catgory = $cat->show_category_frontend();
						if($getall_catgory){
								while($result_allcat = $getall_catgory->fetch_assoc()){
						

					?>
				      <li><a href="productbycat.php?catid=<?php echo $result_allcat['catId'] ?>"><?php echo $result_allcat['catName']  ?></a></li>
				    <?php
								}
						}
					?> 
    				</ul>
    	
 				</div>
 		</div>
</div>

<?php 
	include 'inc/footer.php';
?>	




