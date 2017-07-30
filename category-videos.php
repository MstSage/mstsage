<?php get_header(); ?>
<div class="preShell">	    
    <!-- Advertising Area -->	    
    <div id="king" class="chess noprint">	    
    </div>        
</div>
<div class="shell container-content-main">	
    <div class="inc-vertNav">	
    </div>	
    <div id="main-wrapper" class="clear top_1">		
        <div class="container_24 module-top bottom_1">			
            <?php dynamic_sidebar( 'latest_video' ); ?>                    
            <div id class="grid_16 main-content">                        
                <div class="hdr-video bottom_1 grid_16 alpha">                            
                    <h1 class="topicTitle"><?php wp_title(''); ?></h1>                        
                </div>                        
                    <?php echo do_shortcode('[articles post_type="emd_video" category="category" slug="game-trailers,movie-trailers,video-reviews,series"]'); ?>                                                      
            </div>                    
                <?php get_sidebar(); ?>		
        </div>	
    </div>
</div>							
    <?php get_footer(); ?>