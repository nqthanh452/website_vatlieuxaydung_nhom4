<?php
	include 'inc/header.php';

 ?>
<?php 
if(!isset($_GET['catid'])|| $_GET['catid'] == NULL){
    echo "<script>windown.location ='404.php'; </script>";
}else{
    $id = $_GET['catid'];
}


?>

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Danh mục: </h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
			  <?php 
				$productbycat = $cat->get_product_by_cat($id);
				if($productbycat){
					while($result = $productbycat->fetch_assoc()){

					
				
			  ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview-3.php"><img src="images/feature-pic1.png" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					 <p><span class="price">$505.22</span></p>
				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>
				</div>
			<?php
					}
				}	
			?>

			</div>

	
	
    </div>
 </div>

 <?php 
	include 'inc/footer.php';
?>
