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
          <a target="_blank" href="https://www.facebook.com/forreseyewear"><i class="fa fa-facebook fa-2x"></i></a>                
          <a target="_blank" href="https://twitter.com/ForresEyewear"><i class="fa fa-twitter fa-2x"></i></a>
          <a target="_blank" href="http://instagram.com/forres_ "><i class="fa fa-instagram fa-2x"></i></a>
       </ul>
      </div>
         <p>
             <center>&copy 2015 Design By Aditya Dwiputra. All Rights Reserved. Site by <a href="https://github.com/tirtawr" target="_blank">Tirta</a> and <a href="https://github.com/tegarajipangestu" target="_blank">Tegar</a></center>
         </p>
     </div> 
     
<script>



$('.ex2').hoverizr({speedOut: 'fast',effect:"blur",overlay: "bottom",container: "blurry",stretch: "yes"});

$(document).ready(function(){
  $('.carousel').carousel({
  interval: 2000;
  wrap:false;
})

});

});

$(document).ready(function() {
 
  $("#owl-demo-left").owlCarousel({
 
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

  $("#owl-demo-right").owlCarousel({
 
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