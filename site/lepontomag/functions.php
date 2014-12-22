<?php

/* Load the core theme framework. */
require_once( trailingslashit( get_template_directory() ) . 'library/hybrid.php' );
new Hybrid();

// Get theme options
global $options;
$options = get_option('swt_theme_options'); 

/* Load theme options */
require_once( trailingslashit( get_template_directory() ) . 'includes/theme-options.php' );

/* Do theme setup on the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'swt_theme_setup' );

/**
 * Theme setup function.  This function adds support for theme features and defines the default theme
 * actions and filters.
 *
 * @since 0.1.0
 */
function swt_theme_setup() {
    
	/* Get action/filter hook prefix. */
	$prefix = hybrid_get_prefix();

	/* Add theme support for core framework features. */
	add_theme_support( 'hybrid-core-menus', array( 'primary' ) );
	add_theme_support( 'hybrid-core-sidebars', array( 'primary', 'subsidiary' ) );
	add_theme_support( 'hybrid-core-widgets' );
	add_theme_support( 'hybrid-core-shortcodes' );
	add_theme_support( 'hybrid-core-drop-downs' );
	add_theme_support( 'hybrid-core-seo' );
	//add_theme_support( 'hybrid-core-template-hierarchy' );

	/* Add theme support for framework extensions. */
	add_theme_support( 'loop-pagination' );
	add_theme_support( 'get-the-image' );
	add_theme_support( 'cleaner-gallery' );

	/* Add theme support for WordPress features. */
	add_theme_support( 'automatic-feed-links' );
	
	/* Set the content width. */
	hybrid_set_content_width( 450 );


	add_filter('dynamic_sidebar_params','widget_first_last_classes');
	
        /* Add fonts to wp_head */
        add_action( 'wp_enqueue_scripts', 'swt_scripts' );	
	
	/* Analytics code */
	global $options;
	if ( $options['swt_analytics_code']!=="" ) {
		add_action('wp_footer', 'swt_analytics2'); 
	}
	
	/* Register shortcodes */
	add_action( 'init', 'swt_register_shortcodes' );
	
	/* Custom excerpt length */
	add_filter( 'excerpt_length', 'swt_excerpt_length' );
}

/**
 * Add shortcodes for read more and custom comments
 * @since 0.1.0
 */
function swt_register_shortcodes() {
	add_shortcode( 'custom_comments', 'swt_custom_comments' );
	add_shortcode( 'read_more', 'swt_read_more' );
	add_shortcode( 'custom_date', 'swt_date' );
}

/* inserts anayltics */
function swt_analytics2() {
	global $options;
	echo stripslashes( $options['swt_analytics_code'] );
}

/* Adding widget-first and widget-last classes to widgets */
function widget_first_last_classes($params) {

	global $my_widget_num; // Global a counter array
	$this_id = $params[0]['id']; // Get the id for the current sidebar we're processing
	$arr_registered_widgets = wp_get_sidebars_widgets(); // Get an array of ALL registered widgets

	if(!$my_widget_num) {// If the counter array doesn't exist, create it
		$my_widget_num = array();
	}

	if(!isset($arr_registered_widgets[$this_id]) || !is_array($arr_registered_widgets[$this_id])) { // Check if the current sidebar has no widgets
		return $params; // No widgets in this sidebar... bail early.
	}

	if(isset($my_widget_num[$this_id])) { // See if the counter array has an entry for this sidebar
		$my_widget_num[$this_id] ++;
	} else { // If not, create it starting with 1
		$my_widget_num[$this_id] = 1;
	}

	$class = 'class="widget-' . $my_widget_num[$this_id] . ' '; // Add a widget number class for additional styling options

	if($my_widget_num[$this_id] == 1) { // If this is the first widget
		$class .= 'widget-first ';
	} elseif($my_widget_num[$this_id] == count($arr_registered_widgets[$this_id])) { // If this is the last widget
		$class .= 'widget-last ';
	}

	$params[0]['before_widget'] = str_replace('class="', $class, $params[0]['before_widget']); // Insert our new classes into "before widget"

	return $params;

}


/*this function allows for the auto-creation of post excerpts*/
function truncate_post($amount,$quote_after=false) {
	$truncate = get_the_content();
	$truncate = apply_filters('the_content', $truncate);
	$truncate = preg_replace('@<script[^>]*?>.*?</script>@si', '', $truncate);
	$truncate = preg_replace('@<style[^>]*?>.*?</style>@si', '', $truncate);
	$truncate = strip_tags($truncate);
	$truncate = substr($truncate, 0, strrpos(substr($truncate, 0, $amount), ' '));
	echo $truncate;
	echo "...";
	if ($quote_after) echo('');
} 

/* Creates read more link */
function read_more_func( $attr ) {

	$attr = shortcode_atts( array( 'text' => __( 'Read More', hybrid_get_parent_textdomain() ) ), $attr );

	return "<a class='more-link' href=" . get_permalink() . ">{$attr['text']}</a>";
}

/* Fonts */
function swt_scripts() {
        wp_register_style( 'swt-fonts', 'http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,latin-ext,cyrillic' );
        wp_enqueue_style( 'swt-fonts' );
	
	global $options;
		
	if ( !is_singular() && $options['swt_slider'] == 'Display' ) {
		wp_enqueue_script( 'slider', trailingslashit( get_template_directory_uri() ) . 'js/slider.js', array( 'jquery' ), '20130115', true );
		wp_enqueue_script( 'script', trailingslashit( get_template_directory_uri() ) . 'js/scripts.js', array( 'jquery' ), '20130115', true );
	}
}

/**
 * Custom number of comments shortcode. 
 *
 * @since 0.1.0
 */
function swt_custom_comments( $attr ) {

	$comments_link = '';
	$number = doubleval( get_comments_number() );
	$attr = shortcode_atts( array( 'zero' => __( '<span class="emp">0</span> comments', 'lepontomag' ), 'one' => __( '<span class="emp">%1$s</span> comment', 'lepontomag' ), 'more' => __( '<span class="emp">%1$s</span> comments', 'lepontomag' ), 'css_class' => 'comments-link', 'none' => '', 'before' => '', 'after' => '' ), $attr );

	if ( 0 == $number && !comments_open() && !pings_open() ) {
		if ( $attr['none'] )
			$comments_link = '<span class="' . esc_attr( $attr['css_class'] ) . '">' . sprintf( $attr['none'], number_format_i18n( $number ) ) . '</span>';
	}
	elseif ( 0 == $number )
		$comments_link = '<a class="' . esc_attr( $attr['css_class'] ) . '" href="' . get_permalink() . '#respond" title="' . sprintf( esc_attr__( 'Comment on %1$s', 'lepontomag' ), the_title_attribute( 'echo=0' ) ) . '">' . sprintf( $attr['zero'], number_format_i18n( $number ) ) . '</a>';
	elseif ( 1 == $number )
		$comments_link = '<a class="' . esc_attr( $attr['css_class'] ) . '" href="' . get_comments_link() . '" title="' . sprintf( esc_attr__( 'Comment on %1$s', 'lepontomag' ), the_title_attribute( 'echo=0' ) ) . '">' . sprintf( $attr['one'], number_format_i18n( $number ) ) . '</a>';
	elseif ( 1 < $number )
		$comments_link = '<a class="' . esc_attr( $attr['css_class'] ) . '" href="' . get_comments_link() . '" title="' . sprintf( esc_attr__( 'Comment on %1$s', 'lepontomag' ), the_title_attribute( 'echo=0' ) ) . '">' . sprintf( $attr['more'], number_format_i18n( $number ) ) . '</a>';

	if ( $comments_link )
		$comments_link = $attr['before'] . $comments_link . $attr['after'];

	return $comments_link;

}

/**
 * Custom read more shortcode for read more button
 *
 * @since 0.1
 */
function swt_read_more( $attr ) {

	$attr = shortcode_atts( array( 'text' => __( 'Read More', 'lepontomag' ) ), $attr );

	return "<a class='more-link' href=" . get_permalink() . ">{$attr['text']}</a>";
}
/**
 * Custom date
*/
function swt_date( $attr ) {
	$attr = shortcode_atts( array( 'before' => '', 'after' => '' ), $attr );

	$published = '<abbr class="published" title="' . sprintf( get_the_time( esc_attr__( 'l, F jS, Y, g:i a', 'lepontomag' ) ) ) . '"><span class="emp">' . get_the_time( 'j' ) . '</span> ' . get_the_time( 'F' ) . '</abbr>';
	return $attr['before'] . $published . $attr['after'];
}

/**
 * Custom excerpt lenght
 * 
 * @since 0.1
 */
function swt_excerpt_length( $length ) {
    
	return 40;
    
}
?>