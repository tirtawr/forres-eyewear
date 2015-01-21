<?php require "header.php"; ?>

	 <div class="main">
   	  <div class="about">
   	    <div class="container">
	    	<div class="row" style="margin-top:40px;">
	    		<div class="col-md-8 col-lg-offset-2 about_left">
		   	  	 	<h3>The Javan Hawk-Eagle</h3>
		   	  	 	<div class="kat-widget">
						<div>
							<a id="kat-widget-link" target="_blank" href="images/elang-1.jpg"><img class="prodimg" id="kat-widget-img" src="images/elang-1.jpg"></a>
						</div>
						<!--<center>
						<div>
							<img id="but1" class="kat-widget-button" src="images/button.png" onclick="changeImg(1)">
							<img id="but2" class="kat-widget-button" src="images/button.png" onclick="changeImg(2)">
							<img id="but3" class="kat-widget-button" src="images/button.png" onclick="changeImg(3)">
							<img id="but4" class="kat-widget-button" src="images/button.png" onclick="changeImg(4)">
							<img id="but5" class="kat-widget-button" src="images/button.png" onclick="changeImg(5)">
						</div>
						<div>
							<img class="kat-widget-button" src="images/button.png" onclick="changeClear()">
							<img class="kat-widget-button" src="images/button.png" onclick="changeDark()">
						</div>
					</center>-->
					</div>
		   	  	 	<p class="m_1" style="text-align:justify">
		   	  	 		
		   	  	 		&nbsp;&nbsp;&nbsp;&nbsp;The Javan Hawk-Eagle is majestic with its unique pattern of feathers and its black crest on its head. The design of these glasses are inspired by this species and has wooden material of Rosewood.</p>
		   	  	 	<p class="m_1" style="text-align:justify">
		   	  	    	&nbsp;&nbsp;&nbsp;&nbsp;Its dauntless posture inspires you to be confident and vivacious in facing the world.</p>
		   	  	    <p class="m_1" style="text-align:justify">
		   	  	    	&nbsp;&nbsp;&nbsp;&nbsp;Our Wild Edition is inspired by the endemic fauna of Indonesia. It has a series of designs that are portrayed from the lines, shapes and characteristics of a fauna.</p>
		   	  	    <p class="m_1" style="text-align:justify">
		   	  	 		&nbsp;&nbsp;&nbsp;&nbsp;Be wild in facing your every day activities. Don&#8217;t be afraid to stand out from the crowd and let yourself show who you are and how unique you can be.</p>
		   	  	    </p><br>
		   	  	    <h4><b>Price : 949k</b></h4>
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
				        img.src = "images/pic1A.png";
						link.href = "images/pic1A.png";
				        break;
				    case 2:
				        img.src = "images/pic2A.png";
						link.href = "images/pic2A.png";
				        break;
				    case 3:
				        img.src = "images/pic3A.png";
						link.href = "images/pic3A.png";
				        break;
				    case 4:
				        img.src = "images/pic4A.png";
						link.href = "images/pic4A.png";
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