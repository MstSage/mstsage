<?php get_header(); ?>
<div class="preShell">
	<!-- Advertising Area -->
	<div id="king" class="chess noprint">
	</div>
</div>
<div class="shell container-content-main">
	<div class="inc-vertNav">
	</div>
	<div class="article_topBorder">
	</div>
	<div class="container_24 clear">
		<div class="grid_16">
			<h1 class="topicTitle"><?php wp_title(''); ?></h1>
			<div class="diag-blackRule">
			</div>
			<?php echo do_shortcode('[articles post_type="videos,post" ]'); ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<div class="postShell">
	<div id="rook" class="chess noprint">
	</div>
</div>
<?php get_footer(); ?>
