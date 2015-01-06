<?php require "header.php"; ?>

	 <div class="main">
   	  <div class="about">
   	    <div class="container">
	    	<div class="row" style="margin-top:40px;">
		   	  	 <div class="col-md-5 about_left">
		   	  	 	<h3>Classic 1</h3>
		   	  	 	<div class="kat-widget">
						<div>
							<a id="kat-widget-link" target="_blank" href="images/pic1A.png"><img class="prodimg" id="kat-widget-img" src="images/pic1A.png"></a>
						</div>
						<center>
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
					</center>
					</div>
		   	  	 	
		   	  	 </div>
		   	  	 <div class="col-md-7 about_right">
		   	  	 	<p class="m_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet</p>
		   	  	    <p class="m_2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</p>
		   	  	    <a href="#" class="btn1 btn-1 btn1-1b">Read More</a>
		   	  	 </div>    		
			</div>
   	  	</div>;
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