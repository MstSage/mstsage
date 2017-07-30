jQuery(function($){
    
	$(window).scroll(function() {	    
                        
            //$(".site-header .nav").addClass("fixed-menu");
	   
            if($(this).scrollTop() > 90){
            
                $("#header-container #header-nav").addClass("fixed");
        
            }else{
        	
                $("#header-container #header-nav").removeClass("fixed");
        
            }   
	
        });
        
        $(window).scroll(function() {	    
                        
            //$(".site-header .nav").addClass("fixed-menu");
	   
            if($(this).scrollTop() > 90){
            
                $(".dpad-container").removeClass("hidden");
        
            }else{
        	
                $(".dpad-container").addClass("hidden");
        
            }   
	
        });
        
        $(window).scroll(function() {	    
                        
            //$(".site-header .nav").addClass("fixed-menu");
	   
            if($(this).scrollTop() > 90){
            
                $(".mstsage-logo").addClass("mstsage-transition");
                $(".mstsage-logo").removeClass("hidden-opacity");
        
            }else{
        	
                $(".mstsage-logo").removeClass("mstsage-transition");
                $(".mstsage-logo").addClass("hidden-opacity");
        
            }   
	
        });

	
    //Fliter Articles
	
    $(document).on('click', '.mst-tag', function(){

        var current_obj = $(this);
    
        var data_tag = $(this).data('tag');
    
        var data_tag_name = $(this).data('tagname');
    
        var category = $(this).data('category');
   
    
        current_obj.attr('disabled', 'disabled');
    
        var limit = $(this) .closest(".inc-blogrollv2articles").find('.mst-loader-wrap-are').find(".mst-article-limit").attr('data-limit');
    
        var post_type = $(this) .closest(".inc-blogrollv2articles").find('.mst-loader-wrap-are').find(".mst-article-limit").attr('data-post-type');

        var slug_type = $(this) .closest(".inc-blogrollv2articles").find('.mst-loader-wrap-are').find(".mst-article-limit").attr('data-slug');

    
        $('.mst-loader-warp').css("display", "block");
    
        current_obj.closest(".inc-blogrollv2articles").find('.mst-tag').removeClass('selected');
    
    
        limit = parseInt(limit);
    
        $('.mst-wpos-load-more-btn').attr('data-tag',data_tag);
    
        $('.mst-wpos-load-more-btn').attr('data-paged',1);
        
        var data = {
                    
            action      : 'mst_wpos_get_post_by_tag',
                    
            limit       : limit,
                    
            post_type   : post_type,
                    
            data_tag    : data_tag,
                    
            data_taxonomy    : category,
                    
            tagname     : data_tag_name,

            slug_type   : slug_type,
                
        };
    
        $.post(wposmst.ajaxurl,data,function(response) {
        
            var result = $.parseJSON(response);
                
            if( result.sucess = 1 && (result.data != '') ) {
             
                //$("#mst-all-articles").html('');
            
                current_obj.closest(".inc-blogrollv2articles").find(".mst-all-articles").html('');
            
                current_obj.closest(".inc-blogrollv2articles").find(".mst-all-articles").append(result.data);
            
                current_obj.removeAttr('disabled', 'disabled');
            
                current_obj.addClass('selected');
            
                $('.mst-wpos-load-more-btn').attr('data-count',result.count);
          
                found_post = parseInt(result.found_post);
            
                if(found_post > limit){
                
                    // alert('true found ' +result.found_post +' limit' + limit);
                
                    $('.mst-ajax-btn-wrap').show();
            
                }
            
                else{
                
                    // alert('False '+result.found_post);
                 
                    $('.mst-ajax-btn-wrap').hide();
            
                }
        
            } else if(result.data == '') {
            
                current_obj.closest(".inc-blogrollv2articles").find(".mst-all-articles").html('');
            
                //current_obj.closest(".inc-blogrollv2articles").find(".mst-all-articles").append(result.data);
            
                current_obj.parent('.mst-ajax-btn-wrap').hide();
                
                var info_html = '<div class="mst-info">'+wposmst.no_post_msg+'</div>';
                
                //current_obj.parent().after(info_html);
                 
                current_obj.closest(".inc-blogrollv2articles").find(".mst-all-articles").html(info_html);
               
                setTimeout(function() {
                    
                    $(".mst-info").fadeOut("normal", function() {
                        
                        $(this).remove();
                    
                    });
                
                }, 2000 );
                
                current_obj.removeAttr('disabled', 'disabled');
                
                current_obj.removeClass('mst-btn-active');
        
            }
        
            $('.mst-loader-warp').css("display", "none");     
    
        });
    
        return false;
   
    });
  
    // For loadmore
  
    $(document).on('click', '.mst-wpos-load-more-btn', function(){
    
        var current_obj = $(this);
    
        current_obj.addClass('mst-btn-active');
    
        current_obj.attr('disabled', 'disabled');
    
        var old_current_txt = current_obj.text();
    
        $('.mst-info').remove();
    
        var paged       = (parseInt(current_obj.attr('data-paged')) + 1);
    
        var count       = parseInt(current_obj.attr('data-count'));


    
        var tagname       = current_obj.attr('data-tag');
    
        var limit = $(this) .closest(".mst-loader-wrap-are").find("#mst-article-limit").attr('data-limit');

        var category_type  = $(this) .closest(".mst-loader-wrap-are").find("#mst-article-limit").attr('data-post-tag');
    
        var post_type = $(this) .closest(".mst-loader-wrap-are").find("#mst-article-limit").attr('data-post-type');
    
        var data = {
                    
            action      : 'mst_wpos_get_more_post',
                    
            paged       : paged,
                    
            count       : count,
                    
            limit       : limit,
                    
            post_type   : post_type,
                    
            tagname     : tagname,

            category_type : category_type
                
        };
        
        current_obj.text('Loading...');
    
        $.post(wposmst.ajaxurl,data,function(response) {

            
            var result = $.parseJSON(response);
        
            if( result.sucess = 1 && (result.data != '') ) {            
            
                current_obj.attr('data-paged', paged);
            
                current_obj.attr('data-count', result.count);
                        
                current_obj.closest(".inc-blogrollv2articles").find(".mst-all-articles").append(result.data);
            
                current_obj.removeAttr('disabled', 'disabled');
            
                current_obj.removeClass('mst-btn-active');
            
                current_obj.text(old_current_txt);
            
                return false;
       
            } else if(result.data == '') {
            
                current_obj.parent('.mst-ajax-btn-wrap').hide();
            
                var info_html = '<div class="mst-info">'+wposmst.no_post_msg+'</div>';
            
                current_obj.parent().after(info_html);
            
                setTimeout(function() {
                
                    $(".mst-info").fadeOut("normal", function() {
                
                    });
            
                }, 2000 );
            
                current_obj.removeAttr('disabled', 'disabled');
            
                current_obj.removeClass('mst-btn-active');
           
                current_obj.text(old_current_txt);
        
            }
    
        });
  
    });

});

