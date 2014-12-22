<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

	<div class="entry-info">
		
		<?php echo apply_atomic_shortcode( 'top_info', '<div class="top-info">[custom_comments] [custom_date]</div>' ); ?>
		<div class="entry-meta">
			<?php echo do_shortcode( '[entry-author] [entry-edit-link]' ); ?>
			<?php echo do_shortcode( '[entry-terms taxonomy="category"]' ); ?>
			<?php echo apply_atomic_shortcode( 'tags', '[entry-terms]' ); ?>
		</div>
	</div><!-- .entry-info -->

	<div class="post-content">
		
		<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
		
		<div class="entry-summary">
			<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'size' => 'thumbnail', 'image_class' => 'alignright', 'width' => 80, 'height' => 80 ) ); ?>			
			<?php the_excerpt(); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', hybrid_get_parent_textdomain() ), 'after' => '</p>' ) ); ?>
			<?php echo do_shortcode( '[read_more]' ); ?>
		</div><!-- .entry-summary -->

	</div><!-- .post-content -->
        

</div><!-- .hentry -->