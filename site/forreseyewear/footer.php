     <div class="footer_bottom">
         <div class="container">
           	 <ul class="social" style="letter-spacing:2px">
                <a href="www.facebook.com"><i class="fa fa-facebook fa-2x"></i></a>                
                <a href="www.twitter.com"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="www.instagram.com"><i class="fa fa-instagram fa-2x"></i></a>
			</ul>
		 </div>
     </div> 
     <div class="header_top">
         <br><br><br>
         <p>
             Copyright &copy Forreseyewear 2015
         </p>
     </div>
     <script>
$('.ex2').hoverizr({speedOut: 'fast',effect:"blur",overlay: "bottom",container: "blurry",stretch: "yes"});

$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay : 4000
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});
     </script>
     <script>

$(document).ready(function() {

  if ($(window).width() > 768) {
            $('.navbar-default .dropdown').on('mouseover', function(){
				$('.dropdown-toggle', this).next('.dropdown-menu').show();
            }).on('mouseout', function(){
				$('.dropdown-toggle', this).next('.dropdown-menu').hide();
            });
        }
        else {
            $('.navbar-default .dropdown').off('mouseover').off('mouseout');
        }
  $('.dropdown-toggle').click(function() {
        if ($(this).next('.dropdown-menu').is(':visible')) {
            window.location = $(this).attr('href');
        }
    });
});
     </script>
</body>
</html>