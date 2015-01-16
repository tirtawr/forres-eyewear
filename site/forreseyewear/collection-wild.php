<?php require "header.php"; ?>

	<div class="main">
   	  <div class="about">
   	    <div class="container">
	    	<div class="row" style="margin-top:40px;">
	    		<div class="col-lg-4 gal-title">
	    			<h3><a href="collection-wild-1.php">Harimau Sumatera</a></h3>
	    			<h4>Elegant, Graceful, Majestic</h4>
	   	  	    	<!--<a href="order.php" class="btn1 btn-1 btn1-1b">Add to Cart</a>-->
	    		</div>
	    		<div class="col-lg-8 gal-pic">
	    			<img src="images/harimau-1.jpg" alt="" onclick="imageClick('collection-wild-2.php')">
	    		</div>
	    	</div> 	
	    	<div class="clearfix">
	    		
	    	</div>	
	    	<div class="row" style="margin-top:40px;">
	    		<div class="col-lg-8 gal-pic">
	    			<img src="images/elang-1.jpg" alt="" onclick="imageClick('collection-wild-1.php')">
	    		</div>
	    		<div class="col-lg-4 gal-title">
	    			<h3><a href="collection-wild-2.php">Elang Jawa</a></h3>
	    			<h4>
	    				Strong, Brave, Dauntless
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