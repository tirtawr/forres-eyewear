<?php require "header.php"; ?>

	 <div class="main">
   	  <div class="about">
   	    <div class="container">
	    	<div class="row" >
	    		<div class="col-md-8 col-lg-offset-2 about_left" style="margin-top:-20px;">
		   	  	 	<h3>The Javan Hawk-Eagle</h3>
		   	  	 	<div class="kat-widget center" style="width:60%;">
						<div>
							<a id="kat-widget-link" target="_blank" href="images/elang-1.jpg"><img class="prodimg" id="kat-widget-img" src="images/elang-1.jpg"></a>
						</div>
						<center>
						<div>
							<img id="but1" class="kat-widget-button" src="images/but-eagle-1.jpg" onclick="changeImg(1)">
							<img id="but2" class="kat-widget-button" src="images/but-eagle-2.jpg" onclick="changeImg(2)">
							<img id="but3" class="kat-widget-button" src="images/but-eagle-3.jpg" onclick="changeImg(3)">
							<img id="but4" class="kat-widget-button" src="images/elang-1.jpg" onclick="changeImg(4)">
						</div>
						<!--<div>
							<img class="kat-widget-button" src="images/button.png" onclick="changeClear()">
							<img class="kat-widget-button" src="images/button.png" onclick="changeDark()">
						</div>-->
					</center>
					</div>
		   	  	 	<p class="m_1" style="text-align:justify">
		   	  	 	Javan Hawk Eagle is the national bird of Indonesia and endemic in Java island . We adopt the glorious style of this bird to remind you that this bird are endangered because of its limited ongoing habitat loss.	
		   	  	 	</p>
		   	  	 	<p class="m_1" style="text-align:justify">
		   	  	 	Wooden material : Rosewood (Frame) , Teak (Handle) , and Jengkol wood (Smooth layer in frame)
		   	  	 	</p>
		   	  	 	<p class="m_1" style="text-align:justify">
		   	  	 	We choose the Rosewood and Jengkol because of its strong and cool color characteristic that represent our design with Teak wood layer for beautify.
		   	  	 	</p>
		   	  	 	<p class="m_1" style="text-align:justify">
		   	  	 	</p>	
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
				        img.src = "images/eagle-1.jpg";
						link.href = "images/eagle-1.jpg";
				        break;
				    case 2:
				        img.src = "images/eagle-2.jpg";
						link.href = "images/eagle-2.jpg";
				        break;
				    case 3:
				        img.src = "images/eagle-3.jpg";
						link.href = "images/eagle-3.jpg";
				        break;
				    case 4:
				        img.src = "images/elang-1.jpg";
						link.href = "images/elang-1.jpg";
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