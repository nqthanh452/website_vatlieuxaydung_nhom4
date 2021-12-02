 <div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<?php
				$getLastestHoaSen = $product->getLastestHoaSen();
				if($getLastestHoaSen){
					while($resulthoasen = $getLastestHoaSen->fetch_assoc()){
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php"> <img src="admin/uploads/<?php echo $resulthoasen['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Hoa Sen</h2>
						<p><?php echo $resulthoasen['productName'] ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $resulthoasen['productId']?>">Thêm vào giỏ</a></span></div>
				   </div>
			   </div>
			   <?php
			}}
			   ?>

			   <?php
				$getLastestDongTam = $product->getLastestDongTam();
				if($getLastestDongTam){
					while($resultdongtam = $getLastestDongTam->fetch_assoc()){
				?>			
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php"><img src="admin/uploads/<?php echo $resultdongtam['image'] ?>" alt="" / ></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Đồng Tâm</h2>
						  <p><?php echo $resultdongtam['productName'] ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $resultdongtam['productId']?>">Thêm vào giỏ</a></span></div>
					</div>
				</div>
			</div>
			<?php
			}}
			   ?>

			<?php
				$getLastestHoaPhat = $product->getLastestHoaPhat();
				if($getLastestHoaPhat){
					while($resulthoaphat = $getLastestHoaPhat->fetch_assoc()){
				?>	
			<div class="section group">
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php"> <img src="admin/uploads/<?php echo $resulthoaphat['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Hòa Phát</h2>
						<p><?php echo $resulthoaphat['productName'] ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $resulthoaphat['productId']?>">Thêm vào giỏ</a></span></div>
				   </div>
			   </div>
			   <?php
			}}
			   ?>

			<?php
				$getLastestNhuaBinhMinh = $product->getLastestNhuaBinhMinh();
				if($getLastestNhuaBinhMinh){
					while($resultnhuabinhminh = $getLastestNhuaBinhMinh->fetch_assoc()){
				?>				
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php"><img src="admin/uploads/<?php echo $resultnhuabinhminh['image'] ?>" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Nhựa Bình Minh</h2>
						  <p><?php echo $resultnhuabinhminh['productName'] ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $resultnhuabinhminh['productId']?>">Thêm vào giỏ</a></span></div>
					</div>
				</div>
				<?php
			}}
			   ?>

			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="images/nha-1.jpg" alt=""/></li>
						<li><img src="images/nha-2.jpg" alt=""/></li>
						<li><img src="images/nha-3.jpg" alt=""/></li>
						<li><img src="images/nha-5.jpg" alt=""/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
</div>