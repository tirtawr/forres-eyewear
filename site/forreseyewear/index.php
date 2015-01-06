<?php require "header.php"; ?>

	 <div class="wmuSlider example1 section" id="section-1">
			   <article style="position: absolute; width: 100%; opacity: 0;"> 
			   	   <div class="banner-wrap">
			   	   	 <h1>Hallo satu</h1>
				   </div>
				</article>
				<article style="position: absolute; width: 100%; opacity: 0;"> 
				   <div class="banner-wrap">
			   	   	 <h1>Hallo dua</h1>
				   </div>
				</article>
				<article style="position: absolute; width: 100%; opacity: 0;"> 
				   <div class="banner-wrap">
			   	   	 <h1>Hallo tiga</h1>
				   </div>
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

<?php require "footer.php"; ?>