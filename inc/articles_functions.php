<?php

/**
 * Create Article
 * @author Kenneth Schuetz
 * @link http://www.mstsage.com
 *
 *
**/ 

/*function cptui_register_my_cpts_articles() {

	/**
	 * Post Type: Articles.
	 */

	/*$labels = array(
		'name' => __( 'Articles', 'daemon' ),
		'singular_name' => __( 'Article', 'daemon' ),
		'menu_name' => __( 'Articles', 'daemon' ),
		'all_items' => __( 'All Articles', 'daemon' ),
		'add_new' => __( 'Add New', 'daemon' ),
		'add_new_item' => __( 'Add New Article', 'daemon' ),
		'edit_item' => __( 'Edit Article', 'daemon' ),
		'new_item' => __( 'New Article', 'daemon' ),
		'view_item' => __( 'View Article', 'daemon' ),
		'view_items' => __( 'View Articles', 'daemon' ),
		'search_items' => __( 'Search Article', 'daemon' ),
		'not_found' => __( 'No Articles Found', 'daemon' ),
		'not_found_in_trash' => __( 'No Articles Found in Trash', 'daemon' ),
		'parent_item_colon' => __( 'Parent Article:', 'daemon' ),
		'featured_image' => __( 'Featured Image for this Article', 'daemon' ),
		'set_featured_image' => __( 'Set Featured Image for this Article', 'daemon' ),
		'remove_featured_image' => __( 'Remove Featured Image for this Article', 'daemon' ),
		'use_featured_image' => __( 'Use Featured Image for this Article', 'daemon' ),
		'archives' => __( 'Article Archives', 'daemon' ),
		'insert_into_item' => __( 'Insert into Article', 'daemon' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Article', 'daemon' ),
		'filter_items_list' => __( 'Filter Article List', 'daemon' ),
		'items_list_navigation' => __( 'Article List Navigation', 'daemon' ),
		'items_list' => __( 'Articles List', 'daemon' ),
		'attributes' => __( 'Article Attributes', 'daemon' ),
		'parent_item_colon' => __( 'Parent Article:', 'daemon' ),
	);

	$args = array(
		'label' => __( 'Articles', 'daemon' ),
		'labels' => $labels,
		'description' => 'This is for creating news and entertainment articles.',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_rest' => false,
		'rest_base' => '',
		'has_archive' => true,
		'show_in_menu' => true,
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array( 'slug' => 'articles', 'with_front' => false ),
		'query_var' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-welcome-write-blog',
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'author', 'page-attributes', 'post-formats', 'genesis-seo', 'genesis-cpt-archives-settings' ),
		'taxonomies' => array( 'category', 'post_tag', 'topic-tag', 'platforms', 'genre', 'review_category', 'review_tag' ),
	);

	register_post_type( 'articles', $args );
}

add_action( 'init', 'cptui_register_my_cpts_articles' );*/
 
// Ajax call to update option
add_action( 'wp_ajax_mst_wpos_get_more_post', 'mst_wpos_get_more_post');
add_action( 'wp_ajax_nopriv_mst_wpos_get_more_post','mst_wpos_get_more_post');

add_action( 'wp_ajax_mst_wpos_get_post_by_tag', 'mst_wpos_get_post_by_tag');
add_action( 'wp_ajax_nopriv_mst_wpos_get_post_by_tag','mst_wpos_get_post_by_tag');


function mst_wpos_get_more_post()
{
		
	$page = $_POST['paged'];
	$count = $_POST['count'];
	$posts_per_page = $_POST['limit'];
	$post_type = $_POST['post_type'];
	$category_type = $_POST['category_type'];
	$post_type 		= explode(',', $post_type);
	$orderby 		= 'post_date';
	$order 			= 'DESC';
	$taxonomy 		= $_POST['tagname'];
	$args = array (
					'post_type'      	=> $post_type,
					'orderby'        	=> !empty($orderby) 	? $orderby : 'post_date',
					'order'          	=> !empty($order) 		? $order 	: 'DESC',
					'posts_per_page' 	=> !empty($posts_per_page) 		? $posts_per_page 	: '10',
					'paged'          	=> !empty($page) 		? $page 	: '1',
					);
	if($taxonomy != 'all')
	{
		//$args['tag'] = $taxonomy;
		$args['tax_query'] = array(
								array(
									'taxonomy' 			=> $category_type,
									'terms' 			=> $taxonomy,
									'field' 			=> 'slug',
									'operator' => 'IN'
							));
	}

	ob_start();
	global $post;

	//Get post type count
	$query = new WP_Query( $args);
	$post_count = $query->post_count;
	/*echo '<pre>';
	print_r($query);
	echo '</pre>';
	die();*/
	if ( $query->have_posts() ) {
	 while ($query->have_posts()) : $query->the_post();
	
	 $count++;
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					
					<div class='listElmnt'>
						<div class='listElmnt-thumb'>
					 		<a class="listElmnt-storyHeadline thumb" href='<?php the_permalink(); ?>'>
					 			<img src='<?php echo $feat_image; ?>'/>
					 		</a>
						</div>
					 	<div class='listElmnt-blogItem'>
						 	<a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
	                        <p>
		                        <span>
		                        	<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago - '; ?>
		                        </span> <?php echo mst_get_post_excerpt( $post->ID, get_the_content(), 30, '...' ); ?>
		                        <?php echo excerpt_read_more_link(''); ?>
	                        </p>
	                        <?php comments_popup_link('0 Comments &#187;', '1 Comment &#187;', '% Comments &#187;', 'listElmnt-bgIcons listElmnt-iconsComments listElmnt-tools'); ?>
					 	</div>
				 	</div>

	<?php endwhile;
	}
	$data = ob_get_clean();
	$result['success'] 		= 1;
	$result['data'] 		= $data;
	$result['count']		= $count;
	$result['found_post']		= $query->found_posts;
	echo json_encode($result);
	die();
}

function mst_wpos_get_post_by_tag()
{
	$posts_per_page = $_POST['limit'];
	$post_type 		= $_POST['post_type'];
	$post_type 		= explode(',', $post_type);
	$orderby 		= 'post_date';
	$order 			= 'DESC';
	
	$data_tag 		= $_POST['data_tag'];
	$taxonomy 		= $_POST['tagname'];
	$data_taxonomy 		= $_POST['data_taxonomy'];
	$slug 		= $_POST['slug_type'];
	$args = array (
					'post_type'      	=> $post_type,
					'orderby'        	=> !empty($orderby) 	? $orderby : 'post_date',
					'order'          	=> !empty($order) 		? $order 	: 'DESC',
					'posts_per_page' 	=> !empty($posts_per_page) 		? $posts_per_page 	: '10',
					);
	if($data_tag != 'all')
	{
		//$args['tag'] = $data_tag;
		
		$args['tax_query'] = array(
								array(
									'taxonomy' 			=> $data_taxonomy,
									'terms' 			=> $data_tag,
									'field' 			=> 'slug',
									'operator' => 'IN'
							));
	}
	else{
		$terms_slugs = array();
					if(trim($slug)){
						$terms_slugs = explode(',', $slug);
					}
		if(!empty($terms_slugs)){
			$args['tax_query'] = array(
									array(
										'taxonomy' 			=> $data_taxonomy,
										'terms' 			=> $terms_slugs,
										'field' 			=> 'slug',
										'operator' => 'IN'
								));
		}
	}

	ob_start();
	global $post;
	//Get post type count
	$query = new WP_Query( $args);
	$post_count = $query->post_count;
	if ( $query->have_posts() ) {
	 while ($query->have_posts()) : $query->the_post();
	
	 $count++;
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					
					<div class='listElmnt'>
						<div class='listElmnt-thumb'>
					 		<a class="listElmnt-storyHeadline thumb" href='<?php the_permalink(); ?>'>
					 			<img src='<?php echo $feat_image; ?>'/>
					 		</a>
						</div>
					 	<div class='listElmnt-blogItem'>
						 	<a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
	                        <p>
		                        <span>
		                        	<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago - '; ?>
		                        </span> <?php echo mst_get_post_excerpt( $post->ID, get_the_content(), 30, '...' ); ?>
		                        <?php echo excerpt_read_more_link(''); ?>
	                        </p>
	                        <?php comments_popup_link('0 Comments &#187;', '1 Comment &#187;', '% Comments &#187;', 'listElmnt-bgIcons listElmnt-iconsComments listElmnt-tools'); ?>
					 	</div>
				 	</div>

	<?php endwhile;
	}
	$data = ob_get_clean();
	$result['success'] 		= 1;
	$result['data'] 		= $data;
	$result['count']		= $count;

	$result['found_post']		= $query->found_posts;

	echo json_encode($result);
	die();
}
function mstsage_articles_shortcode( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'limit' 			=> '10',
		'post_type'			=> 'post',
		'category'			=> 'post_tag',
		'slug'				=> ''
	), $atts));

	$limit 					= !empty($limit) 		? $limit 		: 10;
	$post_type 				= ($post_type && trim($post_type)) ? trim($post_type) 	: 'post';
	$post_type_str                          = ($post_type && trim($post_type)) ? trim($post_type) 	: 'post';
	$category 				= ($category && trim($category)) ? trim($category) 	: 'post_tag';

	global $post;
	ob_start();

	// WP Query
	$orderby 		= 'post_date';
	$order 			= 'DESC';
	$post_type 		= explode(',', $post_type);
	
	$args = array ( 
		'post_type'      => $post_type,
		'posts_per_page' => $limit,
		'orderby'        => $orderby,
		'order'          => $order,
		) ;
	$terms_slugs = array();
					if(trim($slug)){
						$terms_slugs = explode(',', $slug);
					}
	if(!empty($terms_slugs)){
		$args['tax_query'] = array(
								array(
									'taxonomy' 			=> $category,
									'terms' 			=> $terms_slugs,
									'field' 			=> 'slug',
									'operator' => 'IN'
							));
	}

/*$args['tax_query'] = array(
								array(
									'taxonomy' 			=> 'platform',
									'terms' 			=> 'pc',
									'field' 			=> 'slug',
									'operator' => 'IN'
							));*/
	$current_link = get_permalink();
	$current_tag = '';
	if(isset($_REQUEST['tag'])){
		$args['tag'] =$_REQUEST['tag'];
		
		$current_tag = $_REQUEST['tag'];
	}
	$query = new WP_Query( $args);
	
	//Get post type count
	$post_count = $query->post_count;
	$all_post = $query->found_posts;
	/*echo '<pre>';
	echo $query->found_posts.'<br>';
	print_r($query);
	echo '</pre>';*/
	$count = 0;
	?>
	<div class='inc-blogrollv2articles'>
		<div class="blogrollContainer">
			<div class='mstsage-blogrollFiltersContainer'>
				<ul class="mstsage-blogrollFilters clear">
					<?php 
					$active_class = '';
						if($current_tag == '')
						{
							$active_class = 'selected';
						}
						
					?>
					<li>
						<a href='<?php echo get_permalink();?>' class='mst-tag <?php echo $active_class;?>' id='all-tags' data-tag='all' data-tagname='all' data-category='<?php echo $category;?>' data-countpost='<?php echo $all_post;?>'><?php _e('All','theme-domain')?></a>
					</li>
					<?php
					
					$terms_args = 	array( 
										'taxonomy'      => $category,
										'hide_empty'    => true,
										'orderby'       => 'term_id',
							    		'post_types'    =>$post_type,
									);
					if(!empty($terms_slugs)){
						$terms_args['slug'] = $terms_slugs;
					}
					$tags = get_terms( $terms_args );
					foreach ( $tags as $tag ) {
						
						$tag_name = $tag->name;
						$tag_slug = $tag->slug;
						$tag_link = $current_link.'?tag='.$tag_slug;
						$active_class = '';
						
						if($tag->slug == $current_tag)
						{
							$active_class = 'selected';
						}
						?>
						<li>
							<a href='<?php echo $tag_link;?>' title='<?php echo $tag_name;?> Tag' id='<?php echo $tag_slug;?>' data-tag='<?php echo $tag_slug;?>' data-tagname='<?php echo $tag_name;?>' data-category='<?php echo $category;?>'  class='mst-tag-<?php echo $tag_slug;?> mst-tag <?php echo $active_class;?>'><?php echo $tag_name;?></a>
						</li>

						<?php
						
					}
					?>
				</ul>
			</div>

				<div id='mst-all-articles' class='mst-all-articles mst-clearfix'>
	<?php  while ($query->have_posts()) : $query->the_post();
	$count++;

	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					
					<div class='listElmnt'>
						<div class='listElmnt-thumb'>
					 		<a class="listElmnt-storyHeadline thumb" href='<?php the_permalink(); ?>'>
					 			<img src='<?php echo $feat_image; ?>'/>
					 		</a>
						</div>
					 	<div class='listElmnt-blogItem'>
						 	<a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
	                        <p>
		                        <span>
		                        	<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago - '; ?>
		                        </span> <?php echo mst_get_post_excerpt( $post->ID, get_the_content(), 30, '...' ); ?>
		                        <?php echo excerpt_read_more_link(''); ?>
	                        </p>
	                        
                                    <?php comments_popup_link('0 Comments &#187;', '1 Comment &#187;', '% Comments &#187;', 'listElmnt-bgIcons listElmnt-iconsComments listElmnt-tools'); ?>
							
					 	</div>
				 	</div>

	<?php endwhile; ?>
				</div>
				<div class='mst-loader-warp'>
					<div class='mst-loader'>
						<img class='mst-loader-img' src='<?php echo get_stylesheet_directory_uri()?>/media/ajax-loader-spinner.gif' class='mst-loader-img' alt='loader'>
					</div>
				</div>
				<div class='mst-info'></div>
				<div class='mst-loader-wrap-are'>
					<span id='mst-article-limit' class='mst-article-limit' data-limit='<?php echo $limit; ?>' data-post-tag='<?php echo $category;?>' data-slug='<?php echo $slug;?>' data-post-type='<?php echo $post_type_str; ?>' ></span>
					<?php if ($all_post > $limit) { ?>
						<div class='mst-ajax-btn-wrap'>
							<button type="button" class='mst-wpos-load-more-btn' data-paged='1' data-count='<?php echo $count;?>' data-tag='all'>
								<?php _e('Load More','theme-domain');?>
							</button>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
				
	<?php wp_reset_query(); // Reset wp query

	$content .= ob_get_clean();
	return $content;
}
add_shortcode('articles', 'mstsage_articles_shortcode');


/**
 * Function to get post excerpt
 * @author Kenneth Schuetz
 * @link http://www.mstsage.com
 */
function mst_get_post_excerpt( $post_id = null, $content = '', $word_length = '55', $more = '...' ) {
	
	$has_excerpt 	= false;
	$word_length 	= !empty($word_length) ? $word_length : '55';
	
	// If post id is passed
	if( !empty($post_id) ) {
		if (has_excerpt($post_id)) {

			$has_excerpt 	= true;
			$content 		= get_the_excerpt();

		} else {
			$content = !empty($content) ? $content : get_the_content();
		}
	}

	if( !empty($content) && (!$has_excerpt) ) {
		$content = strip_shortcodes( $content ); // Strip shortcodes
		$content = wp_trim_words( $content, $word_length, $more );
	}
	
	return $content;
}

//Tag wise post counting
function mst_count_post_by_tag($tag_slug ='all' , $post_type = 'post')
{
	$post_type 		= explode(',', $post_type);
	$args = array(	'post_type'      => $post_type,
					'posts_per_page' => -1,
					) ;
	if($tag_slug != 'all'){
		$args['tag'] = $tag_slug;
	}
	$query = new WP_Query( $args);
	//Get post type count
	$post_count = $query->post_count;
	return $post_count;
}