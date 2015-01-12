<?php require "header.php"; ?>
<div class="banner-container">
	 <div class="wmuSlider example1 section" id="section-1">
			   <article style="position: absolute; width: 100%; opacity: 0;"> 
			   <img src="images/banner1.jpg" alt="" style="width:100%;">
				</article>
				<article style="position: absolute; width: 100%; opacity: 0;"> 
			   <img src="images/banner2.jpg" alt="" style="width:100%;">
				</article>
				<article style="position: absolute; width: 100%; opacity: 0;"> 
			   <img src="images/banner3.jpg" alt="" style="width:100%;">
				</article>
				<article style="position: absolute; width: 100%; opacity: 0;"> 
			   <img src="images/banner4.jpg" alt="" style="width:100%;">
				</article>
				<ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="">2</a></li>
                </ul>
		  </div>
          <script src="js/jquery.wmuSlider.js"></script> 
			<script>
       			$('.example1').wmuSlider();         
   		    </script> 	
</div>

<?php require "footer.php"; ?>