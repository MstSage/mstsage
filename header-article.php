<!DOCUTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title>
<?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 ||  $page >= 2 )
		echo ' | ' . sprintf( _( 'Page %s' ). max( $paged, $page ) );
?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>
</head>


<body layout="default">
<div id="bishop" class="chess">
</div>
<section class="mstsage-pre-grid">
	<div id="king" class="chess">	
	</div>
</section>
<section class="mstsage-grid clear-fix">
	<header id="mstsage-header">
		<div id="header-container" class="header-container no-spine mstsage-transition-opacity">
			<!-- Global Navigation -->
			<nav id="header-nav" class="no-spine content theme-light">
				<div class="mstsage-grid-left-rail browse browse-desktop">
					<button id="browse-button" class="mstsage-button compact">
						<svg class="mstsage-icon icon-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M30 6H2c-.6 0-1 .4-1 1v2c0 .5.4 1 1 1h28c.5 0 1-.4 1-1V7c0-.6-.4-1-1-1zm0 8H2c-.6 0-1 .4-1 1v2c0 .6.4 1 1 1h28c.6 0 1-.4 1-1v-2c0-.6-.4-1-1-1zm0 8H2c-.6 0-1 .4-1 1v2c0 .6.4 1 1 1h28c.6 0 1-.4 1-1v-2c0-.6-.4-1-1-1z"></path></svg>
						<span>Browse</span>
					</button>
				</div>
			</nav>
		</div>
	</header>
</section>



