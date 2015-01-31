<?php require "header.php"; ?>

	 <div class="main">
   	  <div class="about">
   	    <div class="container">
	    	<div class="row"  >
	    		<div class="col-md-8 col-lg-offset-2 about_left">
		   	  	 	<h3>Tuero</h3>
		   	  	 	<div class="kat-widget">
						<div>
							<a id="kat-widget-link" target="_blank" href="images/tuero-4.jpg"><img class="prodimg" id="kat-widget-img" src="images/tuero-4.jpg"></a>
						</div>
						<center>
						<div>
							<img id="but1" class="kat-widget-button" src="images/but-tuero-1.jpg" onclick="changeImg(1)">
							<img id="but2" class="kat-widget-button" src="images/but-tuero-2.jpg" onclick="changeImg(2)">
							<img id="but3" class="kat-widget-button" src="images/but-tuero-3.jpg" onclick="changeImg(3)">
							<img id="but4" class="kat-widget-button" src="images/but-tuero-4.jpg" onclick="changeImg(4)">
						</div>
						</center>
						<!--<div>
							<img class="kat-widget-button" src="images/button.png" onclick="changeClear()">
							<img class="kat-widget-button" src="images/button.png" onclick="changeDark()">
						</div>-->
					</div>
		   	  	 	<p class="m_1" style="text-align:justify">
		   	  	 		
		   	  	 		&nbsp;&nbsp;&nbsp;&nbsp;Tuero projects a confident and bold statement. Its rectangular frame has a layering material of two wooden materials: Rosewood and Jengkol. </p>
		   	  	 	<p class="m_1" style="text-align:justify">
		   	  	    	&nbsp;&nbsp;&nbsp;&nbsp;The contrast between the dark Rosewood and light Jengkol gives an element of boldness, projecting an elegant appearance for every day use.</p>
		   	  	    <p class="m_1" style="text-align:justify">
		   	  	    	&nbsp;&nbsp;&nbsp;&nbsp;Our Classic Edition is accented with the layering of multiple wooden materials. The combination of classic frame design and layering effect adds a trace of uniqueness and authenticity, but still portrays a taste of simplicity.</p>
		   	  	    <p class="m_1" style="text-align:justify">
		   	  	 		&nbsp;&nbsp;&nbsp;&nbsp;Forests in Indonesia become the inspiration to naming each Classic Edition design. They are the core homeland of where the heart of our products originated.</p>
		   	  	    </p><br>
		   	  	    <h4><b>Price : 849k</b></h4>
		   	  	    <center><a href="order.php" class="btn1 btn-1 btn1-1b">ORDER</a></center>
		   	  	 	

		   	  	 </div>

		   	  	 
		   	  	 
		   	  	    		
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
				        img.src = "images/tuero-1.jpg";
						link.href = "images/tuero-1.jpg";
				        break;
				    case 2:
				        img.src = "images/tuero-2.jpg";
						link.href = "images/tuero-2.jpg";
				        break;
				    case 3:
				        img.src = "images/tuero-3.jpg";
						link.href = "images/tuero-3.jpg";
				        break;
				    case 4:
				        img.src = "images/tuero-4.jpg";
						link.href = "images/tuero-4.jpg";
				        break;
				    case 5:
				        img.src = "images/pic5A.png";
						link.href = "images/pic5A.png";
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