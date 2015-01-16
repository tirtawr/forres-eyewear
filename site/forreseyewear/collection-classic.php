<?php require "header.php"; ?>

	<div class="main">
   	  <div class="about">
   	    <div class="container">
	    	<div class="row" style="margin-top:40px;">
	    		<div class="col-lg-4 gal-title">
	    			<h3><a href="collection-classic-1.php" style="text-decoration:none">Tuero</a></h3>
	    			<h4>Firm, Clear, Simple</h4>
	   	  	    	<!--<a href="order.php" class="btn1 btn-1 btn1-1b">Add to Cart</a>-->	    			
	    		</div>
	    		<div class="col-lg-8 gal-pic">
	    			<img src="images/tuero-1.jpg" alt="" onclick="imageClick('collection-classic-2.php')">
	    		</div>
	    	</div> 	
	    	<div class="clearfix">
	    		
	    	</div>	
	    	<div class="row" style="margin-top:40px;">
	    		<div class="col-lg-8 gal-pic">
	    			<img src="images/karpa-1.jpg" alt="" onclick="imageClick('collection-classic-1.php')">
	    		</div>
	    		<div class="col-lg-4 gal-title">
	    			<h3><a href="collection-classic-1.php">Karpa</a></h3>
	    			<h4>
		    			Warm, Dynamic, Tough
	    			<h4>
	   	  	    	<!--<a href="order.php" class="btn1 btn-1 btn1-1b">Add to Cart</a>-->
	    		</div>
	    	</div>
	    </div>
   	   </div>
	 </div> 		
<script>
function imageClick(url) {
    window.location = url;
}
</script>
<?php require "footer.php"; ?>	