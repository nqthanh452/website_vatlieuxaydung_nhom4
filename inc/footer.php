<div class="footer">
	  <div class="wrapper">	
	  <div class="section group">
			 <div class="col_1_of_4 span_1_of_4">
					 <h3>Thông tin</h3>
					 <ul>
					 <li><a href="#">Về chúng tôi</a></li>
					 <li><a href="contact.php"><span>Các chi nhánh</span></a></li>
					 <li><a href="#">Dịch vụ chăm sóc khách hàng</a></li>
					 <li><a href="#">Đặt hàng và Trả hàng</a></li>
					 </ul>
				 </div>
			 <div class="col_1_of_4 span_1_of_4">
				 <h3>Tài khoản của tôi</h3>
					 <ul>
						 <li><a href="contact.php">Đăng nhập</a></li>
						 <li><a href="index.php">Xem giỏ hàng</a></li>
						 <li><a href="#">Mong muốn của bạn</a></li>						</ul>
			 </div>
			 <div class="col_1_of_4 span_1_of_4">
				 <h3>Liên hệ</h3>
					 <ul>
						 <li><span>+84 905 636 700</span></li>
						 <li><span>+84 905 646 800</span></li>
					 </ul>
					 <div class="social-icons">
						 <h3>Theo dõi chúng tôi</h3>
							  <ul>
							   <li class="facebook"><a href="#" target="_blank"> </a></li>
							   <li class="googleplus"><a href="#" target="_blank"> </a></li>
							   <li class="contact"><a href="#" target="_blank"> </a></li>
							   <div class="clear"></div>
						  </ul>
						 </div>
			 </div>
		 </div>
		 <div class="copy_right">
			 <p>Hãy để chúng tôi tạo cho bạn một tổ ấm</p>
		</div>
  </div>
 </div>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
</body>
</html>
