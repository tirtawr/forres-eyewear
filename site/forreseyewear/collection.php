<?php require "header.php"; ?>

	 <div class="main">
   	  <div class="about">
   	    <div class="container">
	    	<div class="row" style="margin-top:40px;">
	    		<div class="row">
	    			<div class="col-lg-6 cat-title">
	    				<h3><a href="collection-wild.php">Wild</a></h3>
	    				<img src="images/p1.jpg" alt="" onclick="imageClick('collection-wild.php')">
	    			</div>
	    			<div class="col-lg-6 cat-title">
	    				<h3 style="text-align:center;"><a href="collection-classic.php">Classic</a></h3>
	    				<img src="images/p4.jpg" alt="" onclick="imageClick('collection-classic.php')">
	    			</div>
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