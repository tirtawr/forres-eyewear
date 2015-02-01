        <hr style="color: #291f19; background: #291f19; height: 2.5px; margin-top:1px; margin-right:20%; margin-left:20%;">
        <div class="cssmenu">
        <ul id="nav">
           <li><a href="warranty.php">Warranty</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
        </div>
     <div class="footer_bottom">
        
       <div class="container" style="margin: 15px 0px">
       <ul class="social" style="letter-spacing:2px">
          <a href="www.facebook.com"><i class="fa fa-facebook fa-2x"></i></a>                
          <a href="www.twitter.com"><i class="fa fa-twitter fa-2x"></i></a>
          <a href="www.instagram.com"><i class="fa fa-instagram fa-2x"></i></a>
       </ul>
      </div>
         <p>
             <center>&copy 2015 Design By Lorem ipsum. All Rights Reserved. Site by Lorem ipsum</center>
         </p>
     </div> 
     
<script>


$('.ex2').hoverizr({speedOut: 'fast',effect:"blur",overlay: "bottom",container: "blurry",stretch: "yes"});

$(document).ready(function(){
  $('.your-class').slick({
  });
});

$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay : 4000,
      pagination : false,
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
  $('.slick-demo-right').slick({   
    autoplay : true,
  });
  $('.slick-demo-left').slick({   
    autoplay : true,
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