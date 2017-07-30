<?php

/**
 * Games Custom Post Type Functions
 *
 * @package			Daemon
 * @author			Kenneth Schuetz
 * @link			http://www.mstsage.com
 * @copyright		Copyright (c) 2016, MstSage Entertainment
 * @license			GPL-2.0+
 */

// Register Games Custom Post Type
function games_post_type() {

	$labels = array(
		'name'                  => _x( 'Games', 'Post Type General Name' ),
		'singular_name'         => _x( 'Game', 'Post Type Singular Name' ),
		'menu_name'             => __( 'Games' ),
		'name_admin_bar'        => __( 'Game' ),
		'archives'              => __( 'Game Archives' ),
		'parent_item_colon'     => __( 'Parent Game:' ),
		'all_items'             => __( 'All Games' ),
		'add_new_item'          => __( 'Add New Game' ),
		'add_new'               => __( 'Add New' ),
		'new_item'              => __( 'New Game' ),
		'edit_item'             => __( 'Edit Game' ),
		'update_item'           => __( 'Update Game' ),
		'view_item'             => __( 'View Game' ),
		'search_items'          => __( 'Search Game' ),
		'not_found'             => __( 'Not found' ),
		'not_found_in_trash'    => __( 'Not found in Trash' ),
		'featured_image'        => __( 'Box Art' ),
		'set_featured_image'    => __( 'Set featured image' ),
		'remove_featured_image' => __( 'Remove featured image' ),
		'use_featured_image'    => __( 'Use as featured image' ),
		'insert_into_item'      => __( 'Insert into item' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item' ),
		'items_list'            => __( 'Games list' ),
		'items_list_navigation' => __( 'Games list navigation' ),
		'filter_items_list'     => __( 'Filter items list' ),
	);
	$args = array(
		'label'                 => __( 'Game' ),
		'description'           => __( 'Site games.' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes', 'post-formats'),
		'taxonomies'            => array( 'category', 'post_tag', 'platforms', 'genres' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-sos',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite' 				=> array( 'slug' => 'games', 'with_front' => false ),
		'capability_type'       => 'post',
	);
	register_post_type( 'games', $args );

}
add_action( 'init', 'games_post_type', 0 );

// Register Game Videos Custom Post Type
function game_videos_post_type() {

	$labels = array(
		'name'                  => _x( 'Game Videos', 'Post Type General Name' ),
		'singular_name'         => _x( 'Game Video', 'Post Type Singular Name' ),
		'menu_name'             => __( 'Game Videos' ),
		'name_admin_bar'        => __( 'Game Videos' ),
		'archives'              => __( 'Game Video Archives' ),
		'parent_item_colon'     => __( 'Parent Game Video:' ),
		'all_items'             => __( 'All Game Videos' ),
		'add_new_item'          => __( 'Add New Game Video' ),
		'add_new'               => __( 'Add New Video' ),
		'new_item'              => __( 'New Game Video' ),
		'edit_item'             => __( 'Edit Game Video' ),
		'update_item'           => __( 'Update Game Video' ),
		'view_item'             => __( 'View Game Video' ),
		'search_items'          => __( 'Search Game Video' ),
		'not_found'             => __( 'Not found' ),
		'not_found_in_trash'    => __( 'Not found in Trash' ),
		'featured_image'        => __( 'Featured Image' ),
		'set_featured_image'    => __( 'Set featured image' ),
		'remove_featured_image' => __( 'Remove featured image' ),
		'use_featured_image'    => __( 'Use as featured image' ),
		'insert_into_item'      => __( 'Insert into item' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item' ),
		'items_list'            => __( 'Game Videos list' ),
		'items_list_navigation' => __( 'Game Videos list navigation' ),
		'filter_items_list'     => __( 'Filter items list' ),
	);
	$args = array(
		'label'                 => __( 'Game Videos' ),
		'description'           => __( 'Site game videos.' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes', 'post-formats'),
		'taxonomies'            => array( 'category', 'post_tag', 'platforms', 'genres' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-sos',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite' 				=> array( 'slug' => 'videos/games', 'with_front' => false ),
		'capability_type'       => 'post',
	);
	register_post_type( 'game-videos', $args );

}
add_action( 'init', 'game_videos_post_type', 0 );

// Register Game Videos Custom Post Type
function game_images_post_type() {

	$labels = array(
		'name'                  => _x( 'Game Images', 'Post Type General Name' ),
		'singular_name'         => _x( 'Game Image', 'Post Type Singular Name' ),
		'menu_name'             => __( 'Game Images' ),
		'name_admin_bar'        => __( 'Game Images' ),
		'archives'              => __( 'Game Image Archives' ),
		'parent_item_colon'     => __( 'Parent Game Image:' ),
		'all_items'             => __( 'All Game Images' ),
		'add_new_item'          => __( 'Add New Game Image' ),
		'add_new'               => __( 'Add New Image' ),
		'new_item'              => __( 'New Game Image' ),
		'edit_item'             => __( 'Edit Game Image' ),
		'update_item'           => __( 'Update Game Image' ),
		'view_item'             => __( 'View Game Image' ),
		'search_items'          => __( 'Search Game Image' ),
		'not_found'             => __( 'Not found' ),
		'not_found_in_trash'    => __( 'Not found in Trash' ),
		'featured_image'        => __( 'Featured Image' ),
		'set_featured_image'    => __( 'Set featured image' ),
		'remove_featured_image' => __( 'Remove featured image' ),
		'use_featured_image'    => __( 'Use as featured image' ),
		'insert_into_item'      => __( 'Insert into item' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item' ),
		'items_list'            => __( 'Game Images list' ),
		'items_list_navigation' => __( 'Game Images list navigation' ),
		'filter_items_list'     => __( 'Filter items list' ),
	);
	$args = array(
		'label'                 => __( 'Game Images' ),
		'description'           => __( 'Site game images.' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes', 'post-formats'),
		'taxonomies'            => array( 'category', 'post_tag', 'platforms', 'genres' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-sos',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite' 				=> array( 'slug' => 'images/games', 'with_front' => false ),
		'capability_type'       => 'post',
	);
	register_post_type( 'game-images', $args );

}
add_action( 'init', 'game_images_post_type', 0 );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Platforms.
	 */

	$labels = array(
		'name' => __( 'Platforms', 'daemon' ),
		'singular_name' => __( 'Platform', 'daemon' ),
		'menu_name' => __( 'Platforms', 'daemon' ),
		'all_items' => __( 'All Platforms', 'daemon' ),
		'edit_item' => __( 'Edit Platform', 'daemon' ),
		'view_item' => __( 'View Platform', 'daemon' ),
		'update_item' => __( 'Update Platform Name', 'daemon' ),
		'add_new_item' => __( 'Add New Platform', 'daemon' ),
		'new_item_name' => __( 'New Platform Name', 'daemon' ),
		'parent_item' => __( 'Parent Platform', 'daemon' ),
		'parent_item_colon' => __( 'Parent Platform:', 'daemon' ),
		'search_items' => __( 'Search Platforms', 'daemon' ),
		'popular_items' => __( 'Popular Platforms', 'daemon' ),
		'separate_items_with_commas' => __( 'Separate Platforms with Commas', 'daemon' ),
		'add_or_remove_items' => __( 'Add or Remove Platforms', 'daemon' ),
		'choose_from_most_used' => __( 'Choose From Most Used Platforms', 'daemon' ),
		'not_found' => __( 'No Platforms Found', 'daemon' ),
		'no_terms' => __( 'No Platforms', 'daemon' ),
		'items_list_navigation' => __( 'Platforms List Navigation', 'daemon' ),
		'items_list' => __( 'Platforms List', 'daemon' ),
	);

	$args = array(
		'label' => __( 'Platforms', 'daemon' ),
		'labels' => $labels,
		'public' => true,
		'hierarchical' => true,
		'label' => 'Platforms',
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'platforms', 'with_front' => false, ),
		'show_admin_column' => true,
		'show_in_rest' => false,
		'rest_base' => '',
		'show_in_quick_edit' => true,
	);
	register_taxonomy( 'platforms', array( 'post', 'page', 'attachment', 'games', 'game-videos', 'game-images', 'articles', 'wp-wiki-guides', 'mecs_story', 'review' ), $args );

	/**
	 * Taxonomy: Genres.
	 */

	$labels = array(
		'name' => __( 'Genres', 'daemon' ),
		'singular_name' => __( 'Genre', 'daemon' ),
		'menu_name' => __( 'Genre', 'daemon' ),
		'all_items' => __( 'All Genres', 'daemon' ),
		'edit_item' => __( 'Edit Genre', 'daemon' ),
		'view_item' => __( 'View Genre', 'daemon' ),
		'update_item' => __( 'Update Genre Name', 'daemon' ),
		'add_new_item' => __( 'Add New Genre', 'daemon' ),
		'new_item_name' => __( 'New Genre Name', 'daemon' ),
		'parent_item' => __( 'Parent Genre', 'daemon' ),
		'parent_item_colon' => __( 'Parent Genre:', 'daemon' ),
		'search_items' => __( 'Search Genres:', 'daemon' ),
		'popular_items' => __( 'Popular Genres', 'daemon' ),
		'separate_items_with_commas' => __( 'Separate Genres with Commas', 'daemon' ),
		'add_or_remove_items' => __( 'Add or Remove Genres', 'daemon' ),
		'choose_from_most_used' => __( 'Choose From Most Used Genres', 'daemon' ),
		'not_found' => __( 'No Genres Found', 'daemon' ),
		'no_terms' => __( 'No Genres', 'daemon' ),
		'items_list_navigation' => __( 'Genres List Navigation', 'daemon' ),
		'items_list' => __( 'Genre List', 'daemon' ),
	);

	$args = array(
		'label' => __( 'Genres', 'daemon' ),
		'labels' => $labels,
		'public' => true,
		'hierarchical' => true,
		'label' => 'Genres',
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'genre', 'with_front' => false,  'hierarchical' => true, ),
		'show_admin_column' => true,
		'show_in_rest' => false,
		'rest_base' => '',
		'show_in_quick_edit' => true,
	);
	register_taxonomy( 'genre', array( 'post', 'page', 'attachment', 'games', 'game-videos', 'game-images', 'articles', 'wp-wiki-guides', 'mecs_story', 'review' ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );

function mstsage_games_shortcode($atts, $content = null){

	extract(shortcode_atts(array(
		'limit' 			=> '10',
	), $atts));

	$limit 	= !empty($limit) 		? $limit 		: 10;

	global $post;

	// WP Query
	$orderby 		= 'post_date';
	$order 			= 'DESC';
	$post_type 		= 'games';

	$taxonomy 		= array('platform');
	$args = array(
		'orderby'           => 'name', 
	    'order'             => 'ASC',
	    'hide_empty'        => true, 
	);

	$platforms 	= get_terms( $taxonomy, $args );
	$count 		= 1;
	
	foreach ($platforms as $platform) {
	
		$args = array ( 
			'post_type'      => $post_type,
			'posts_per_page' => 1,
			'orderby'        => $orderby,
			'order'          => $order,
		);
		
		$args['tax_query'] = array(
			array(
				'taxonomy' 			=> 'platform',
				'field' 			=> 'term_id',
				'terms' 			=> $platform->term_id,
				'include_children'	=> false,
			),
		);

		ob_start();

		// WP Query
		$query 		= new WP_Query($args);
		
		if ( $query->have_posts() ) { 
			while ($query->have_posts()) : $query->the_post(); $count++; $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
			
				<div class="mst-latest-games">
					<div class="mst-games-img">
						<img src="<?php echo $feat_image; ?>" />
					</div>
					<div class="mst-games-title">
						<a href="<?php echo get_the_permalink(); ?>"><h4><?php the_title(); echo '('.$platform->name.')'; ?></h4></a>
					</div>
				</div>
		<?php endwhile;

		} // End of have posts

		wp_reset_query(); // Reset wp query

		$content .= ob_get_clean();

		if($count > $limit){
			break;
		}

		$count++;
	}
	return $content;
}
add_shortcode("latest_games", "mstsage_games_shortcode");

function mstsage_genre_shortcode($atts, $content = null){

	extract(shortcode_atts(array(
		'limit' 			=> '10',
		'exclude_post' 		=> '',
		'words_limit' 		=> 40,
	), $atts));

	$limit 				= !empty($limit) 				? $limit 						: 10;
	$exclude_post 		= !empty($exclude_post)			? explode(',', $exclude_post) 	: array();
	$words_limit 		= !empty($words_limit) 			? $words_limit 					: 40;
	global $post;

	// WP Query
	$orderby 		= 'post_date';
	$order 			= 'DESC';
	$post_type 		= 'games';
	
	$args = array ( 
		'post_type'      => $post_type,
		'posts_per_page' => $limit,
		'orderby'        => $orderby,
		'order'          => $order,
		'post__not_in'	 => $exclude_post,
	);
	
	$args['tax_query'] = array(
			array(
				'taxonomy' 			=> 'genre',
				'field' 			=> 'term_id',
				'terms' 			=> '0',
				'operator'			=> 'NOT IN',
				'include_children'	=> false,
		));

	$query 	= new WP_Query($args); 
	ob_start(); ?>

	<?php wp_reset_query(); // Reset wp query

	if ( $query->have_posts() ) { ?>
		<div class="mst-you-may-wrap">

			<h4 class="single-games-static-title">Games You May Like</h4>
			<?php while ($query->have_posts()) : $query->the_post(); $count++; $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
			
				<div class="mst-you-may-games">
					<div class="mst-games-img">
						<img src="<?php echo $feat_image; ?>" />
					</div>
					<div class="mst-you-may-bottom-content">
						<div class="mst-you-may-title">
							<a href="<?php echo get_the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
						</div>
						<div class="mst-you-may-content">
							<?php echo mst_get_post_excerpt($post->ID, get_the_content(), $words_limit); ?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div><?php
	}

	$content .= ob_get_clean();
	
	return $content;
}
add_shortcode("latest_genre", "mstsage_genre_shortcode");


function mstsage_games_left_article($atts, $content = null){

	extract(shortcode_atts(array(
		'limit' 			=> 2,
	), $atts));

	$limit 				= !empty($limit) 					? $limit 						: 2;
	global $post;

	// WP Query
	$orderby 		= 'post_date';
	$order 			= 'DESC';
	$post_type 		= 'article';
	
	$args = array ( 
		'post_type'      => $post_type,
		'posts_per_page' => $limit,
		'orderby'        => $orderby,
		'order'          => $order,
	);

	$query 	= new WP_Query($args); 
	ob_start(); ?>

	<?php wp_reset_query(); // Reset wp query

	if ( $query->have_posts() ) { ?>
		<div class="mst-left-article-main-wrp">
			<div class="left-article-main-title">Latest Stories</div>

			<?php while ($query->have_posts()) : $query->the_post(); ?>
			
				<div class="mst-left-article-wrap">
					<div class="mst-left-article-title">
						<a href="<?php echo get_the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
					</div>
					<div class="mst-left-article-bottom">
						<div class="mst-left-article-comment"><i class="fa fa-comment"></i></div>
						<div class="mst-left-article-date"><?php echo get_the_date('F d, Y'); ?></div>
					</div>
				</div>
			<?php endwhile; ?>
		</div><?php
	}

	$content .= ob_get_clean();
	
	return $content;
}
add_shortcode("games_single_article", "mstsage_games_left_article");


function my_acf_load_field( $field )
{
    $field['choices'] = array(
        'custom' => 'My Custom Choice'
    );
    return $field;
}

// acf/load_field/key={$field_key} - filter for a specific field based on it's name
add_filter('acf/load_field/key=field_525c37d91ae8d', 'my_acf_load_field');
