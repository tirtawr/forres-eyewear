<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ForresWP
 */

get_header(); ?>

	 <div class="wmuSlider example1 section" id="section-1">
			   <article style="position: absolute; width: 100%; opacity: 0;"> 
			   	   <div class="banner-wrap">
			   	   	 <h1>Hallo satu</h1>
				   </div>
				</article>
				<article style="position: absolute; width: 100%; opacity: 0;"> 
				   <div class="banner-wrap">
			   	   	 <h1>Hallo dua</h1>
				   </div>
				</article>
				<article style="position: absolute; width: 100%; opacity: 0;"> 
				   <div class="banner-wrap">
			   	   	 <h1>Hallo tiga</h1>
				   </div>
				</article>
				<ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="">2</a></li>
                </ul>
		  </div>
          <script src="js/jquery.wmuSlider.js"></script> 
			<script>
       			$('.example1').wmuSlider();         
   		    </script> 

<?php get_footer(); ?>
