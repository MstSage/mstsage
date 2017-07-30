<?php

function mstsage_wp_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );     
}

add_action( 'after_setup_theme', 'mstsage_wp_setup' );

// load css into the website's front-end
function mstsage_enqueue_style() {
    wp_register_style( 'default-sty;e', get_stylesheet_uri(), '', null, 'all' );
    
    // Load our main stylesheet.
	wp_enqueue_style( 'default-style', get_stylesheet_uri() );
    if ( is_front_page() ) {
	if( wp_style_is( 'default-style', 'registered' ) ) {
        // ...deregister it first...
        wp_deregister_style( 'default-style' );
        // ...and re-register it with our own, modified bootstrap-main.css...
        wp_register_style( 'front-page-style', get_template_directory_uri() . '/front-page.css' );
        // ...and enqueue it!
        wp_enqueue_style( 'front-page-style' );    
                }
	}
    if ( is_single() ) {
	if( wp_style_is( 'default-style', 'registered' ) ) {
        // ...deregister it first...
        wp_deregister_style( 'default-style' );
        // ...and re-register it with our own, modified bootstrap-main.css...
        wp_register_style( 'single-style', get_template_directory_uri() . '/single.css' );
        // ...and enqueue it!
        wp_enqueue_style( 'single-style' );    
                }   
        }    
}
add_action( 'wp_enqueue_scripts', 'mstsage_enqueue_style' );


function excerpt_read_more_link($output) {
    global $post;
    if ($post->post_type == 'emd_video')
        $read_more_text = 'See More »';
    else
        $read_more_text = 'Read More »';
    return $output . '<a class="more-link" href="'. get_permalink($post->ID) . '">'.$read_more_text.'</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

 /**
 * Register our sidebars and widgetized areas.
 *
 */

 function mstsage_widgets_init() {
     register_sidebar( array(		
         'name'          => 'Home Cover Stories',		
         'id'            => 'home_coverstories',		
         'before_widget' => '',		
         'after_widget'  => '',		
         'before_title'  => '<h2 class="rounded">',		
         'after_title'   => '</h2>',
	
         ) );
     
     register_sidebar( array(		
         'name'          => 'Home Extra Cover Stories',		
         'id'            => 'home_extracoverstories',		
         'before_widget' => '',		
         'after_widget'  => '',		
         'before_title'  => '<h2 class="rounded">',		
         'after_title'   => '</h2>',
	
         ) );
	 
	 register_sidebar( array(		
         'name'          => 'Latest Videos',		
         'id'            => 'latest_video',		
         'before_widget' => '',		
         'after_widget'  => '',		
         'before_title'  => '',		
         'after_title'   => '',
	
         ) );
     
    register_sidebar( array(		
         'name'          => 'Home Breaking News',		
         'id'            => 'home_breakingnews',		
         'before_widget' => '',		
         'after_widget'  => '',		
         'before_title'  => '<h2 class="rounded">',		
         'after_title'   => '</h2>',
	
         ) );
     
     register_sidebar( array(		
         'name'          => 'Home Blogroll',		
         'id'            => 'home_blogroll',		
         'before_widget' => '',		
         'after_widget'  => '',		
         'before_title'  => '',		
         'after_title'   => '</h2>',
	
         ) );
     
     register_sidebar( array(
		
         'name'          => 'Home Right Rail',
		
         'id'            => 'home_rightrail',
		
         'before_widget' => '<div>',
		
         'after_widget'  => '</div>',
		
         'before_title'  => '<h2 class="rounded">',
		
         'after_title'   => '</h2>',
	
         ) );
      register_sidebar( array(
		
         'name'          => 'Article Cover Card Image',
		
         'id'            => 'article_covercardimage',
		
         'before_widget' => '',
		
         'after_widget'  => '',
		
         'before_title'  => '<h2>',
		
         'after_title'   => '</h2>',
	
         ) );
     register_sidebar( array(
		
         'name'          => 'Article Big Story',
		
         'id'            => 'article_bigstory',
		
         'before_widget' => '',
		
         'after_widget'  => '',
		
         'before_title'  => '<h2>',
		
         'after_title'   => '</h2>',
	
         ) );
     
     register_sidebar( array(
		
         'name'          => 'Article Left Rail',
		
         'id'            => 'article_leftrail',
		
         'before_widget' => '<div>',
		
         'after_widget'  => '</div>',
		
         'before_title'  => '<h2 class="rounded">',
		
         'after_title'   => '</h2>',
	
         ) );
     
 }

 add_action( 'widgets_init', 'mstsage_widgets_init' );

 function new_excerpt_more( $more ) {
    
     return '';

     
     
 }

 add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Enqueue script in child theme
 *
 * @since 1.0.0
 */

 add_action( 'wp_enqueue_scripts', 'add_enqueue_public_js' );

 function add_enqueue_public_js() {
    
     wp_register_script( 'child-script',get_stylesheet_directory_uri() . '/js/public-deamon-js.js');
    
     wp_enqueue_script('child-script');
    
    
     wp_localize_script( 'child-script', 'wposmst', array(
                                                            
         'ajaxurl'       => admin_url( 'admin-ajax.php', ( is_ssl() ? 'https' : 'http' ) ),
                                                            
         'no_post_msg'   => __('Sorry, No more post to display.', 'theme-domain'),
                                                            
         'limit'     => 10,
                                                            
         'load_more_msg' =>__('Load More', 'theme-domain'),
                                                            
         'loading_msg' =>__('Loading....', 'theme-domain'),
                                                        
         ));

     
 }
 
 //Remove WPAUTOP from ACF TinyMCE Editor
function acf_wysiwyg_remove_wpautop() {
    remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'acf_wysiwyg_remove_wpautop');

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

// Articles Functions

 include( get_stylesheet_directory() . '/inc/articles_functions.php' );

// Games Functions

 include( get_stylesheet_directory() . '/inc/games_functions.php' );

// Navigation Menus

 function mstsage_menus() {
  
     register_nav_menus(
    
             array(
      
                 'browse-gaming' => __( 'Browse Gaming' ),
      
                 'browse-entertainment' => __( 'Browse Entertainment' ),
      
                 'browse-more' => __( 'Browse More' ),
	  
                 'popular-links' => __( 'Popular Links' )
    
                 )
  
             );

     
 }

 add_action( 'init', 'mstsage_menus' );


 function add_menuclass_gaming( $nav_menu, $args ) {
    
     if( $args->theme_location == 'browse-gaming' )
        
         return preg_replace( '/<a /', '<a class="browse-link"', $nav_menu );
    
     return $nav_menu;

     
 }

 add_filter( 'wp_nav_menu', 'add_menuclass_gaming', 10, 2 );


 function add_menuclass_entertainment( $nav_menu, $args ) {
    
     if( $args->theme_location == 'browse-entertainment' )
        
         return preg_replace( '/<a /', '<a class="browse-link"', $nav_menu );
    
     return $nav_menu;
     
     
 }

 add_filter( 'wp_nav_menu', 'add_menuclass_entertainment', 10, 2 );

 function add_menuclass_more( $nav_menu, $args ) {
    
     if( $args->theme_location == 'browse-more' )
        
         return preg_replace( '/<a /', '<a class="browse-link"', $nav_menu );
    
     return $nav_menu;
  
     
 }

 add_filter( 'wp_nav_menu', 'add_menuclass_more', 10, 2 );

 function add_menuclass_popular( $nav_menu, $args ) {
    
     if( $args->theme_location == 'popular-links' )
        
         return preg_replace( '/<a /', '<a class="popular-link"', $nav_menu );
    
     return $nav_menu;
   
 
 }

 add_filter( 'wp_nav_menu', 'add_menuclass_popular', 10, 2 );

//Deletes all CSS classes and id's, except for those listed in the array below

 function custom_wp_nav_menu($var) {
        
     return is_array($var) ? array_intersect($var, array(
                
//List of allowed menu classes
                
         'current_page_item',
                
         'current_page_parent',
                
         'current_page_ancestor',
                
         'first',
                
         'last',
                
         'vertical',
                
         'horizontal',
               
         )
        
             ) : '';

     
 }

 add_filter('nav_menu_css_class', 'custom_wp_nav_menu');

 add_filter('nav_menu_item_id', 'custom_wp_nav_menu');

 add_filter('page_css_class', 'custom_wp_nav_menu');
 
//Replaces "current-menu-item" with "active"

 function current_to_active($text){
        
     $replace = array(
                
//List of menu item classes that should be changed to "active"
                
         'current_page_item' => 'active',
                
         'current_page_parent' => 'active',
                
         'current_page_ancestor' => 'active',
        
         );
        
     $text = str_replace(array_keys($replace), $replace, $text);
                
     return $text;
        
     
 }

 add_filter ('wp_nav_menu','current_to_active');
 
//Deletes empty classes and removes the sub menu class

 function strip_empty_classes($menu) {
    
     $menu = preg_replace('/ class=""| class="sub-menu"/','',$menu);
    
     return $menu;

     
 }
 
 add_filter ('wp_nav_menu','strip_empty_classes');
 
 add_filter('show_admin_bar', '__return_false');
 
 // Add facebook script in body tag

 function mst_script_body(){ ?>
	
<div id="fb-root"></div>
	
<script>
    (function(d, s, id) {
	  
    var js, fjs = d.getElementsByTagName(s)[0];
	  
    if (d.getElementById(id)) return;
	  
    js = d.createElement(s); js.id = id;
	  
    js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
	  
    fjs.parentNode.insertBefore(js, fjs);
	
}(document, 'script', 'facebook-jssdk'));

</script>
	
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

<?php }

?>