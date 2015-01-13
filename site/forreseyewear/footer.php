     <div class="footer_bottom">
         <div class="container">
           	 <ul class="social">
				<li><a href=""> <i class="fb"> </i> </a></li>
				<li><a href=""><i class="rss"> </i> </a></li>
				<li><a href=""><i class="tw"> </i> </a></li>
			</ul>
		 </div>
     </div> 
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