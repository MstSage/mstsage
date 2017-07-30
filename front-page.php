<?php get_header(front); ?>
<div class="preShell">	
    <!-- Advertising Area -->	
    <div id="king" class="chess noprint">	
    </div>
</div>
<div class="shell container-content-main">	
    <div class="inc-vertNav">	
    </div>	
    <div class="container_24 clear">		
        <div id="coverStoriesContainer">
            <?php dynamic_sidebar( 'home_coverstories' ); ?>
        </div>		
        <div class="grid_16 main-column-content">
            
                <div class="extra-coverStories">
                    <?php dynamic_sidebar( 'home_extracoverstories' ); ?>
                </div>
                <!-- START: Breaking News Widget -->
                <div id="promo_breakingnews_img_container">
                    <?php dynamic_sidebar( 'home_breakingnews' ); ?>
                </div>
                <!-- END: Breaking News Widget -->
            <div class="blogrollContainer">           
                <?php dynamic_sidebar( 'home_blogroll' ); ?>
            </div>		
        </div>		
        
<?php get_sidebar(); ?>
       
	
    </div>
</div>
</div>

<div class="postShell">
	
    <div id="rook" class="chess noprint">
	
    </div>

</div>

    <?php get_footer(); ?>
