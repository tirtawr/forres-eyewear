<?php

global $options;
$options = get_option('swt_theme_options');

if ( !is_single() && !is_page() && $options['swt_slider']=='Display' ) {

	$slider_cat = $options['swt_slide_category'];
	$slider_cat_id = get_cat_ID( $slider_cat );
	$slide_count = $options['swt_slide_count'];

?>
	<div id="slider-wrap">
		<div id="slider">
			<ul>
				<?php $swt_query = new WP_Query( 'cat= '. $slider_cat_id .'&showposts='.$slide_count.'' ); while ( $swt_query->have_posts() ) : $swt_query->the_post(); ?>
				
				<li>
					<div class="slider-entry">
						<?php echo apply_atomic_shortcode( 'slider_title', '[entry-title]' ); ?>
						<?php echo apply_atomic_shortcode( 'slider_byline', '<div class="slider-byline">[entry-author] [custom_comments css_class="slide-comments"]</div>' ); ?>	        

						
						<p><?php truncate_post( 140, true ); ?></p>
						<?php echo do_shortcode( '[read_more]' ); ?>
					</div>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img src="<?php echo get_post_meta( $post->ID, 'slide', true ); ?>" alt="<?php the_title() ?>" width="750" height="340" /></a>
				</li>
					
				<?php endwhile; ?>
			</ul>		
		</div><!--#slider-->
	</div><!--#slider-wrap-->
<?php } ?>
