<?php require "header.php"; ?>

	 <div class="main">
   	  <div class="about">
   	    <div class="container">
	    	<div class="row" >
	    		<div class="col-md-8 col-lg-offset-2 about_left" style="margin-top:-20px;">
		   	  	 	<h3>Karpa</h3>
		   	  	 	<div class="kat-widget center" style="width:60%;">
						<div>
							<a id="kat-widget-link" target="_blank" href="images/karpa-5.jpg"><img class="prodimg" id="kat-widget-img" src="images/karpa-5.jpg"></a>
						</div>
						<center>
						<div>
							<img id="but2" class="kat-widget-button" src="images/but-karpa-2.jpg" onclick="changeImg(2)">
							<img id="but3" class="kat-widget-button" src="images/but-karpa-3.jpg" onclick="changeImg(3)">
							<img id="but4" class="kat-widget-button" src="images/but-karpa-4.jpg" onclick="changeImg(4)">
							<img id="but4" class="kat-widget-button" src="images/but-karpa-5.jpg" onclick="changeImg(5)">
						</div>
						</center>
						<!--<div>
							<img id="but1" class="kat-widget-button" src="images/but-karpa-1.jpg" onclick="changeImg(1)">
							<img class="kat-widget-button" src="images/button.png" onclick="changeClear()">
							<img class="kat-widget-button" src="images/button.png" onclick="changeDark()">
						</div>-->
					</div>
					<p class="m_1" style="text-align:center">
		   	  	 	The warm characteristic of this design is inspired by one kind forest in Indonesia which dominate natural forest in Indonesia. We make this edition as simple as Indonesia&#39;s forest that looks monochrome but beautiful.
		   	  	 	</p>
		   	  	 	<p class="m_1" style="text-align:center">
		   	  	 	Wooden material : Teak and Rosewood (smooth layer)
		   	  	 	</p>
		   	  	 	
		   	  	    <h4><b>Price : 849k</b></h4>
		   	  	    <center><a href="order.php" class="btn1 btn-1 btn1-1b">ORDER</a></center>
		   	  	 	
		   	  	    
		   	  	 </div>
		   	  	 
   	  	</div>
   	 </div>
	 </div>
	<script>
		var curmod = "clear";
		var curnum = 1;
		function changeClear(){
			curmod = "clear";
			changeImg(curnum);
		}
		function changeDark(){
			curmod = "dark";
			changeImg(curnum);
		}
		function changeImg(n){
				curnum = n;
				var img = document.getElementById('kat-widget-img');
				var link = document.getElementById('kat-widget-link');
			if(curmod=="clear"){
				switch (n) {
				    case 1:
				        img.src = "images/karpa-1.jpg";
						link.href = "images/karpa-1.jpg";
				        break;
				    case 2:
				        img.src = "images/karpa-2.jpg";
						link.href = "images/karpa-2.jpg";
				        break;
				    case 3:
				        img.src = "images/karpa-3.jpg";
						link.href = "images/karpa-3.jpg";
				        break;
				    case 4:
				        img.src = "images/karpa-4.jpg";
						link.href = "images/karpa-4.jpg";
				        break;
				    case 5:
				        img.src = "images/karpa-5.jpg";
						link.href = "images/karpa-5.jpg";
				        break;
				}
			}else{//NOT CLEAR
					switch (n) {
				    case 1:
				        img.src = "images/pic1B.png";
						link.href = "images/pic1B.png";
				        break;
				    case 2:
				        img.src = "images/pic2B.png";
						link.href = "images/pic2B.png";
				        break;
				    case 3:
				        img.src = "images/pic3B.png";
						link.href = "images/pic3B.png";
				        break;
				    case 4:
				        img.src = "images/pic4B.png";
						link.href = "images/pic4B.png";
				        break;
				    case 5:
				        img.src = "images/pic5B.png";
						link.href = "images/pic5B.png";
				        break;
				}
			}
				
		}
		
	</script>
<?php require "footer.php"; ?>	