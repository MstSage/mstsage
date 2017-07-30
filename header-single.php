<!DOCUTYPE HTML>

<html <?php language_attributes(); ?>>
    <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
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
					
                            <menu id="browse-dropdown" class="mstsage-menu mstsage-grid-left-rail">
						
                                <?php wp_nav_menu( array( 'theme_location' => 'browse-gaming', 'menu_id' => 'browse-gaming', 'menu_class' => 'browse-category', 'container' => '' ) ); ?>
						
                                    <?php wp_nav_menu( array( 'theme_location' => 'browse-entertainment', 'menu_id' => 'browse-entertainment', 'menu_class' => 'browse-category', 'container' => '' ) ); ?>
						
                                        <?php wp_nav_menu( array( 'theme_location' => 'browse-more', 'menu_id' => 'browse-more', 'menu_class' => 'browse-category', 'container' => '' ) ); ?>
						
                                <div id="browse-social">
                            
                                    <a href="http://www.youtube.com/mstsage" class="browse-social-youtube" title="MstSage Entertainment on YouTube"><span class="hidden">MstSage Entertainment on YouTube</span></a>
                            
                                    <a href="http://www.facebook.com/mstsage" class="browse-social-facebook" title="MstSage Entertainment on Facebook"><span class="hidden">MstSage Entertainment on Facebook</span></a>
                            
                                    <a href="http://twitter.com/mstsage" class="browse-social-twitter" title="MstSage Entertainment on Twitter"><span class="hidden">MstSage Entertainment on Twitter</span></a>
                            
                                    <a href="http://www.mstsage.com/wikis/mstsage-community-central/How_to_Follow_MstSage Entertainment" class="browse-social-more">MORE</a>
                        
                                </div>
					
                            </menu>
					
                            <a href="/">
						
                                <span class="hidden">Browse</span>
						
                                <figure class="mstsage-logo mstsage-transition hidden-opacity">
							
                        <svg class="mstsage-icon icon-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 579.9 177.7"><defs><linearGradient id="a" x1="221.98" y1="103.92" x2="221.98" y2="19.34" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#7b2800"/><stop offset="1" stop-color="#ffcb05"/></linearGradient><linearGradient id="b" x1="315.1" y1="156.47" x2="315.1" y2="71.88" xlink:href="#a"/><linearGradient id="c" x1="342.24" y1="103.92" x2="342.24" y2="19.34" xlink:href="#a"/><linearGradient id="d" x1="339.42" y1="103.93" x2="339.42" y2="19.34" xlink:href="#a"/><linearGradient id="e" x1="410.45" y1="156.47" x2="410.45" y2="71.88" xlink:href="#a"/><linearGradient id="f" x1="441.53" y1="103.93" x2="441.53" y2="19.33" xlink:href="#a"/><linearGradient id="g" x1="515.94" y1="103.93" x2="515.94" y2="19.33" xlink:href="#a"/><linearGradient id="h" x1="522.86" y1="156.47" x2="522.86" y2="71.88" xlink:href="#a"/><linearGradient id="i" x1="559.56" y1="103.93" x2="559.56" y2="19.33" xlink:href="#a"/><linearGradient id="j" x1="551.28" y1="103.92" x2="551.28" y2="19.34" xlink:href="#a"/><linearGradient id="k" x1="551.73" y1="103.93" x2="551.73" y2="19.33" xlink:href="#a"/><linearGradient id="l" x1="535.17" y1="103.93" x2="535.17" y2="19.33" xlink:href="#a"/><linearGradient id="m" x1="276.75" y1="137.67" x2="276.75" y2="110.41" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#230000"/><stop offset="1" stop-color="#ed1c24"/></linearGradient><linearGradient id="n" x1="265.17" y1="137.67" x2="265.17" y2="110.41" xlink:href="#m"/><linearGradient id="o" x1="319.22" y1="137.67" x2="319.22" y2="110.41" xlink:href="#m"/><linearGradient id="p" x1="315.69" y1="137.67" x2="315.69" y2="110.41" xlink:href="#m"/><linearGradient id="q" x1="315.88" y1="137.67" x2="315.88" y2="110.41" xlink:href="#m"/><linearGradient id="r" x1="308.81" y1="137.67" x2="308.81" y2="110.41" xlink:href="#m"/><linearGradient id="s" x1="338.43" y1="137.67" x2="338.43" y2="110.41" xlink:href="#m"/><linearGradient id="t" x1="354.84" y1="190.22" x2="354.84" y2="162.95" xlink:href="#m"/><linearGradient id="u" x1="326.71" y1="137.67" x2="326.71" y2="110.41" xlink:href="#m"/><linearGradient id="v" x1="358.07" y1="137.67" x2="358.07" y2="110.41" xlink:href="#m"/><linearGradient id="w" x1="298.6" y1="137.67" x2="298.6" y2="110.41" xlink:href="#m"/><linearGradient id="x" x1="376.11" y1="137.67" x2="376.11" y2="110.41" xlink:href="#m"/><linearGradient id="y" x1="393.13" y1="137.67" x2="393.13" y2="110.41" xlink:href="#m"/><linearGradient id="z" x1="413.86" y1="137.67" x2="413.86" y2="110.41" xlink:href="#m"/><linearGradient id="aa" x1="402.29" y1="137.67" x2="402.29" y2="110.41" xlink:href="#m"/><linearGradient id="ab" x1="438.49" y1="137.67" x2="438.49" y2="110.41" xlink:href="#m"/><linearGradient id="ac" x1="468.73" y1="137.67" x2="468.73" y2="110.41" xlink:href="#m"/><linearGradient id="ad" x1="465.2" y1="137.67" x2="465.2" y2="110.41" xlink:href="#m"/><linearGradient id="ae" x1="465.39" y1="137.67" x2="465.39" y2="110.41" xlink:href="#m"/><linearGradient id="af" x1="458.32" y1="137.67" x2="458.32" y2="110.41" xlink:href="#m"/><linearGradient id="ag" x1="488.11" y1="137.67" x2="488.11" y2="110.41" xlink:href="#m"/><linearGradient id="ah" x1="476.53" y1="137.67" x2="476.53" y2="110.41" xlink:href="#m"/><linearGradient id="ai" x1="509.96" y1="137.67" x2="509.96" y2="110.41" xlink:href="#m"/><linearGradient id="aj" x1="508.76" y1="137.67" x2="508.76" y2="110.41" xlink:href="#m"/><linearGradient id="ak" x1="256.31" y1="137.67" x2="256.31" y2="110.41" xlink:href="#m"/><linearGradient id="al" x1="251.88" y1="137.67" x2="251.88" y2="110.41" xlink:href="#m"/><linearGradient id="am" x1="252.12" y1="137.67" x2="252.12" y2="110.4" xlink:href="#m"/><linearGradient id="an" x1="243.28" y1="137.67" x2="243.28" y2="110.41" xlink:href="#m"/><linearGradient id="ao" x1="548.64" y1="137.72" x2="548.64" y2="108.44" xlink:href="#m"/><linearGradient id="ap" x1="204.9" y1="137.72" x2="204.9" y2="108.44" xlink:href="#m"/><radialGradient id="aq" cx="105.42" cy="140.17" r="96.19" gradientTransform="translate(131 -33.5) rotate(45)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffcb05"/><stop offset="0.39" stop-color="#7b2800"/><stop offset="0.67" stop-color="#ffcb05"/><stop offset="1" stop-color="#7b2800"/></radialGradient><radialGradient id="ar" cx="88.35" cy="87.62" r="96.19" gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#aq"/><radialGradient id="as" cx="105.42" cy="140.17" r="96.19" xlink:href="#aq"/><radialGradient id="at" cx="88.35" cy="87.62" r="96.19" gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#aq"/></defs><title>Logo</title><polygon points="180.1 72.8 231.5 21.8 231.5 53.8 263.8 21.8 263.8 96.3 244.4 96.3 244.4 64 211.8 96.6 211.8 65 180.1 96.3 180.1 72.8" style="fill:url(#a)"/><path d="M309,112.1q8.6,0,14,5.1a17.1,17.1,0,0,1,5.4,12.9,18.4,18.4,0,0,1-5.3,13.1,17.2,17.2,0,0,1-12.9,5.6H286.8V134h21.8a3.2,3.2,0,0,0,2.5-1.2,4.1,4.1,0,0,0,1-2.8q0-3.2-4.3-3.2a19.5,19.5,0,0,1-14.5-5.8,19.1,19.1,0,0,1-5.7-14,16.5,16.5,0,0,1,5.8-12.5,19,19,0,0,1,13.3-5.3h36.8l-15.5,15.4H306.1a4.2,4.2,0,0,0-2.4.7,2.5,2.5,0,0,0-1.1,2.2,3.5,3.5,0,0,0,1.7,3.4A12.1,12.1,0,0,0,309,112.1Z" transform="translate(-17.1 -52.5)" style="fill:url(#b)"/><polygon points="316.2 52.3 331.7 36.9 368.2 36.9 352.8 52.3 316.2 52.3" style="fill:url(#c)"/><polygon points="331.3 52.2 347.6 36.9 347.6 52.3 347.6 96.3 331.3 96.3 331.3 52.2" style="fill:url(#d)"/><path d="M403,102.9q10.5,0,17.4,6.4a21.1,21.1,0,0,1,6.8,16,23.1,23.1,0,0,1-6.7,16.4,21.4,21.4,0,0,1-16.1,7H375.1V130.2h27.2a4,4,0,0,0,3.2-1.4,4.9,4.9,0,0,0,1.2-3.3q0-4.2-5.3-4.2-11,0-18.1-7a23.7,23.7,0,0,1-7.1-17.6A20.5,20.5,0,0,1,383.2,81a24.1,24.1,0,0,1,16.7-6.4h45.9L426.4,93.8H399.2a5.6,5.6,0,0,0-3,.7,3.3,3.3,0,0,0-1.4,2.6q0,3.3,2.4,4.5A12.4,12.4,0,0,0,403,102.9Z" transform="translate(-17.1 -52.5)" style="fill:url(#e)"/><polygon points="414.5 77 454.5 36.9 468.6 36.9 468.6 96.3 452.3 96.3 452.3 88.7 426.5 88.7 441.1 74.2 452.3 74.2 452.3 58.4 414.5 96.3 414.5 77" style="fill:url(#f)"/><rect x="508.6" y="59.4" width="14.6" height="36.86" style="fill:url(#g)"/><path d="M540.3,104.7H521.4a15.5,15.5,0,0,0-11,4.4,14,14,0,0,0-4.7,10.6,14.3,14.3,0,0,0,3.9,10,12.4,12.4,0,0,0,9.5,4.3h6.6v14.9h-7.5a26.4,26.4,0,0,1-20-8.6,28.8,28.8,0,0,1-8.1-20.5q0-12.6,9.9-21.5a34,34,0,0,1,23.4-8.9h32.2Z" transform="translate(-17.1 -52.5)" style="fill:url(#h)"/><polygon points="539.3 52.3 543.3 36.9 579.9 36.9 564.4 52.3 539.3 52.3" style="fill:url(#i)"/><polygon points="537.9 59.5 564.7 59.5 564.7 74.2 543.3 74.2 537.9 59.5" style="fill:url(#j)"/><polygon points="538.8 81.4 564.7 81.4 564.7 96.3 543.3 96.3 538.8 81.4" style="fill:url(#k)"/><polygon points="527 53.2 543.3 36.9 543.3 52.3 543.3 96.3 527 96.3 527 53.2" style="fill:url(#l)"/><polygon points="285.1 135.5 268.4 118.8 268.7 110.1 277.7 119.2 277.7 110.1 285.1 110.1 285.1 135.5" style="fill:url(#m)"/><polygon points="261.7 117.1 268.7 110.1 268.7 135.5 261.7 135.5 261.7 117.1" style="fill:url(#n)"/><polygon points="310.6 116.7 312.3 110.1 327.9 110.1 321.3 116.7 310.6 116.7" style="fill:url(#o)"/><polygon points="310 119.8 321.4 119.8 321.4 126.1 312.3 126.1 310 119.8" style="fill:url(#p)"/><polygon points="310.4 129.2 321.4 129.2 321.4 135.5 312.3 135.5 310.4 129.2" style="fill:url(#q)"/><polygon points="305.3 117.1 312.3 110.1 312.3 116.7 312.3 135.5 305.3 135.5 305.3 117.1" style="fill:url(#r)"/><polygon points="345.2 135.7 331.7 122.2 340 122.2 345.2 127.6 345.2 135.7" style="fill:url(#s)"/><path d="M354,162.7a9.1,9.1,0,0,1,6.2,2,7.5,7.5,0,0,1,2.3,6,7.7,7.7,0,0,1-2.3,5.7,8.1,8.1,0,0,1-6,2.3h-1.4l.4-.2-4.1-3.2h3.1a3.3,3.3,0,0,0,2.4-.8,2.7,2.7,0,0,0,.8-2.1,2.5,2.5,0,0,0-.8-1.9,3.5,3.5,0,0,0-2.4-.7h-4.9v-6.6Z" transform="translate(-17.1 -52.5)" style="fill:url(#t)"/><polygon points="323.2 117.1 330.2 110.1 330.2 135.5 323.2 135.5 323.2 117.1" style="fill:url(#u)"/><polygon points="360.4 110.1 356.9 110.1 353.6 110.1 347 116.7 353.4 116.7 353.4 135.5 356.9 135.5 360.4 135.5 360.4 116.7 362.6 116.7 369.2 110.1 360.4 110.1" style="fill:url(#v)"/><polygon points="297.4 110.1 294.1 110.1 287.5 116.7 293.9 116.7 293.9 135.5 297.4 135.5 300.9 135.5 300.9 116.7 303.1 116.7 309.7 110.1 300.9 110.1 297.4 110.1" style="fill:url(#w)"/><polygon points="364.6 127.3 381.7 110.1 387.7 110.1 387.7 135.5 380.7 135.5 380.7 132.3 369.7 132.3 375.9 126.1 380.7 126.1 380.7 119.3 364.6 135.5 364.6 127.3" style="fill:url(#x)"/><polygon points="389.6 117.1 396.6 110.1 396.6 135.5 389.6 135.5 389.6 117.1" style="fill:url(#y)"/><polygon points="422.2 135.5 405.5 118.8 405.8 110.1 414.8 119.2 414.8 110.1 422.2 110.1 422.2 135.5" style="fill:url(#z)"/><polygon points="398.8 117.1 405.8 110.1 405.8 135.5 398.8 135.5 398.8 117.1" style="fill:url(#aa)"/><polygon points="424.2 127.5 441.8 110.1 441.8 121 452.8 110.1 452.8 135.6 446.2 135.6 446.2 124.5 435 135.6 435 124.8 424.2 135.6 424.2 127.5" style="fill:url(#ab)"/><polygon points="460.1 116.7 461.8 110.1 477.4 110.1 470.8 116.7 460.1 116.7" style="fill:url(#ac)"/><polygon points="459.5 119.8 470.9 119.8 470.9 126.1 461.8 126.1 459.5 119.8" style="fill:url(#ad)"/><polygon points="459.9 129.2 470.9 129.2 470.9 135.5 461.8 135.5 459.9 129.2" style="fill:url(#ae)"/><polygon points="454.8 117.1 461.8 110.1 461.8 116.7 461.8 135.5 454.8 135.5 454.8 117.1" style="fill:url(#af)"/><polygon points="496.5 135.5 479.7 118.8 480 110.1 489.1 119.2 489.1 110.1 496.5 110.1 496.5 135.5" style="fill:url(#ag)"/><polygon points="473 117.1 480 110.1 480 135.5 473 135.5 473 117.1" style="fill:url(#ah)"/><polygon points="498.9 116.7 505.5 110.1 521.1 110.1 514.5 116.7 498.9 116.7" style="fill:url(#ai)"/><polygon points="505.3 116.7 512.2 110.1 512.2 116.7 512.2 135.5 505.3 135.5 505.3 116.7" style="fill:url(#aj)"/><polygon points="245.5 112 247.6 103.8 267.2 103.8 258.9 112 245.5 112" style="fill:url(#ak)"/><polygon points="244.7 115.9 259 115.9 259 123.7 247.6 123.7 244.7 115.9" style="fill:url(#al)"/><polygon points="245.2 127.6 259 127.6 259 135.5 247.6 135.5 245.2 127.6" style="fill:url(#am)"/><polygon points="238.9 112.5 247.6 103.8 247.6 112 247.6 135.5 238.9 135.5 238.9 112.5" style="fill:url(#an)"/><polygon points="183.2 158.1 179.4 143.5 182.3 143.5 184.9 154.7 190.6 143.5 192.5 143.5 195.2 154.7 200.7 143.5 203.2 143.5 195.7 158.1 193.7 158.1 191 147.2 185.3 158.1 183.2 158.1" style="fill:#231f20"/><polygon points="205.5 158.1 207.4 143.5 222.2 143.5 221.9 145.7 209.9 145.7 209.4 149.4 216.6 149.4 216.4 151.6 209.1 151.6 208.6 156 220.7 156 220.4 158.1 205.5 158.1" style="fill:#231f20"/><path d="M263.6,196h2.5l6.8,14.6h-3l-1.5-3.4h-4.8v-2.1h3.9l-3-7-.9,1.3Zm-10.4,14.6L263.5,196h.1v3.4l-3.9,5.7h3.9v2.1h-5.3l-2.3,3.4Z" transform="translate(-17.1 -52.5)" style="fill:#231f20"/><path d="M289.4,198.2h-3.5V196h5a3.1,3.1,0,0,1,2.3.7,2.6,2.6,0,0,1,.4,2.2l-.4,3.3a3.2,3.2,0,0,1-1,2.1,3.8,3.8,0,0,1-2.4.7h-1.9l5.7,5.7h-3.7l-3.9-4.4v-3.4h2.9a2,2,0,0,0,1.3-.3,1.8,1.8,0,0,0,.5-1.2l.2-1.7a1.5,1.5,0,0,0-.2-1.1A1.6,1.6,0,0,0,289.4,198.2Zm-3.5,0h-4.3l-.6,4.7h4.9v3.4l-1.2-1.3h-4l-.7,5.7h-2.8l1.9-14.6h6.8Z" transform="translate(-17.1 -52.5)" style="fill:#231f20"/><polygon points="281.3 158.1 283.2 143.5 297.9 143.5 297.7 145.7 285.7 145.7 285.2 149.4 292.4 149.4 292.1 151.6 284.9 151.6 284.4 156 296.5 156 296.2 158.1 281.3 158.1" style="fill:#231f20"/><polygon points="314.3 158.1 316.2 143.5 330.9 143.5 330.6 145.7 318.7 145.7 318.2 149.4 325.4 149.4 325.1 151.6 317.9 151.6 317.3 156 329.4 156 329.2 158.1 314.3 158.1" style="fill:#231f20"/><path d="M355.3,199c0,.4,0,.9,0,1.3s-.1.9-.1,1.3l-1.2,9.1h-2.5l1.9-14.6h2.1l9.5,9.6.8.9.7,1.1c0-.4,0-.9,0-1.3s.1-.9.1-1.4l1.1-8.8h2.5l-1.9,14.6h-1.9l-9.7-9.7-.9-1Z" transform="translate(-17.1 -52.5)" style="fill:#231f20"/><polygon points="366.7 145.7 365.1 158.1 362.3 158.1 363.9 145.7 357 145.7 357.3 143.5 373.9 143.5 373.6 145.7 366.7 145.7" style="fill:#231f20"/><polygon points="376.2 158.1 378 143.5 392.8 143.5 392.5 145.7 380.5 145.7 380 149.4 387.3 149.4 387 151.6 379.8 151.6 379.2 156 391.3 156 391 158.1 376.2 158.1" style="fill:#231f20"/><path d="M425.5,198.2H422V196h5a3.1,3.1,0,0,1,2.3.7,2.6,2.6,0,0,1,.4,2.2l-.4,3.3a3.2,3.2,0,0,1-1,2.1,3.8,3.8,0,0,1-2.4.7h-1.9l5.7,5.7h-3.7l-3.9-4.4v-3.4h2.9a2,2,0,0,0,1.3-.3,1.8,1.8,0,0,0,.5-1.2l.2-1.7a1.4,1.4,0,0,0-.2-1.1A1.6,1.6,0,0,0,425.5,198.2Zm-3.5,0h-4.3l-.6,4.7H422v3.4l-1.2-1.3h-4l-.7,5.7h-2.8l1.9-14.6H422Z" transform="translate(-17.1 -52.5)" style="fill:#231f20"/><polygon points="426 145.7 424.4 158.1 421.7 158.1 423.3 145.7 416.4 145.7 416.6 143.5 433.2 143.5 433 145.7 426 145.7" style="fill:#231f20"/><path d="M459.3,196h2.5l6.8,14.6h-3l-1.5-3.4h-4.8v-2.1h3.9l-3-7-.9,1.3ZM449,210.7,459.3,196h.1v3.4l-3.9,5.7h3.9v2.1H454l-2.3,3.4Z" transform="translate(-17.1 -52.5)" style="fill:#231f20"/><polygon points="458.6 158.1 455.9 158.1 457.7 143.5 460.5 143.5 458.6 158.1" style="fill:#231f20"/><path d="M486.2,199c0,.4,0,.9,0,1.3s-.1.9-.1,1.3l-1.2,9.1h-2.5l1.9-14.6h2.1l9.5,9.6.8.9.7,1.1c0-.4,0-.9,0-1.3s.1-.9.1-1.4l1.1-8.8h2.5l-1.9,14.6h-1.9l-9.7-9.7-.9-1Z" transform="translate(-17.1 -52.5)" style="fill:#231f20"/><path d="M509.8,198.8c0,.2-.1.5-.1.9v1.2l-1.3,9.9h-2.3l1.9-14.6h2.3l6.1,9.5,7.9-9.5h2.6l-1.9,14.6h-2.6l1.3-9.9.2-1,.3-1-.6,1.2-.6.8-6.6,7.6h-.7l-4.9-7.5-.5-.9A8.1,8.1,0,0,1,509.8,198.8Z" transform="translate(-17.1 -52.5)" style="fill:#231f20"/><polygon points="514.6 158.1 516.5 143.5 531.2 143.5 531 145.7 519 145.7 518.5 149.4 525.7 149.4 525.4 151.6 518.2 151.6 517.7 156 529.8 156 529.5 158.1 514.6 158.1" style="fill:#231f20"/><path d="M555.6,199c0,.4,0,.9,0,1.3s-.1.9-.1,1.3l-1.2,9.1h-2.5l1.9-14.6h2.1l9.5,9.6.8.9.7,1.1c0-.4,0-.9,0-1.3s.1-.9.1-1.4L568,196h2.5l-1.9,14.6h-1.9l-9.7-9.7-.9-1Z" transform="translate(-17.1 -52.5)" style="fill:#231f20"/><polygon points="567 145.7 565.4 158.1 562.7 158.1 564.3 145.7 557.3 145.7 557.6 143.5 574.2 143.5 573.9 145.7 567 145.7" style="fill:#231f20"/><polygon points="531.6 116.1 573.4 116.1 565.6 123.4 523.9 123.4 531.6 116.1" style="fill-rule:evenodd;fill:url(#ao)"/><polygon points="187.9 116.1 229.7 116.1 221.9 123.4 180.1 123.4 187.9 116.1" style="fill-rule:evenodd;fill:url(#ap)"/><rect x="43.1" y="78.6" width="125.7" height="125.67" transform="translate(-86 63.8) rotate(-45)" style="fill:url(#aq)"/><rect x="49.8" y="85.3" width="112.3" height="112.26" transform="translate(-86 63.8) rotate(-45)" style="fill:#231f20"/><rect x="38" y="38" width="101.8" height="101.81" style="fill:url(#ar)"/><rect x="42.8" y="42.8" width="92.1" height="92.06" style="fill:#231f20"/><rect x="66.1" y="101.6" width="79.6" height="79.57" transform="translate(-86 63.8) rotate(-45)" style="fill:url(#as)"/><rect x="71" y="106.5" width="69.8" height="69.82" transform="translate(-86 63.8) rotate(-45)" style="fill:#231f20"/><polygon points="123.8 67.6 125.9 69.6 117 78.6 102 78.6 102 83.8 117.1 83.8 117.1 94.2 102 94.2 102 99.3 117.1 99.3 117.1 110 102 110 90.9 110 90.9 91.6 72.4 110.2 72.4 92.2 54.4 110 49.7 101.2 83.6 67.6 83.6 85.8 102 67.6 123.8 67.6" style="fill-rule:evenodd;fill:url(#at)"/></svg>
						
                                </figure>
					
                            </a> 
				
                        </div>
				
                        <div class="search-container">
					
                            <input id="search-input" type="text" maxlength="60" placeholder="Search" name="query" autocomplete="off" title="Search">
					
                                <svg class="mstsage-icon icon-search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 33"><path clip-rule="evenodd" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M20 21l6.1 7"></path><circle clip-rule="evenodd" fill="none" stroke="currentColor" stroke-width="4" stroke-miterlimit="10" cx="14.5" cy="13.5" r="8.5"></circle></svg>
				
                        </div>
				
                            <?php wp_nav_menu( array( 'theme_location' => 'popular-links', 'menu_id' => '', 'menu_class' => 'popular-links', 'container' => '' ) ); ?>
					
                        <div id="user-tools-container">
                            
                            <script type="text/javascript">
                                
    var cssNode = document.createElement('link');
    
    cssNode.type = 'text/css';
    
    cssNode.rel = 'stylesheet';
    
    cssNode.href = '//oystatic.ignimgs.com/cache/css/f7/4c/f74c7a4977b4a57dca9909bb74ef8a44.css';
    
    cssNode.media = 'screen';
    
    document.getElementsByTagName("head")[0].appendChild(cssNode);
    
    var scriptNode = document.createElement('script');
    
    scriptNode.type = 'text/javascript';
    
    scriptNode.src = '//oystatic.ignimgs.com/cache/js/2b/72/2b72af0ca654ba5d6d9ddb4fccefd941.js';
    
    document.getElementsByTagName('head')[0].appendChild(scriptNode);
                            
                            </script>
					
                            <script>
						
    jQuery(document).find('.ignHeader-authentication .ignHeader-loginLink').click(function(e) {
							
        e.preventDefault();
							
        e.stopPropagation();
							
        e.stopImmediatePropagation();
							
        var $this = jQuery(this),
								
        getStartedUrl = encodeURIComponent(window.location.href + '/' + $this.parent().data('get-started-redirect')),
								
        returnUrl = $this.data('registration-from-header') ? getStartedUrl : encodeURIComponent(window.location.href),
								
        url = 'http://widgets.ign.com/social/shared/registration/' + $this.attr('js-data') + '.jsonp?disable_js=false&r=' + returnUrl;
							
        jQuery.ajax({
								
            url: url,
								
            dataType: 'jsonp',
								
            success: function(data) {
									
        jQuery('body').append(data);
								
    }
							
        });
						
    });
					
                            </script>
					
                            <div class="user-tools logged-out" js-data="{&quot;isPrime&quot;:0,&quot;nickname&quot;:&quot;&quot;}" style="">
						
                                <div class="ignHeader-authentication" data-get-started-redirect="get-started-redirect">
							
                                    <a href="https://s.ign.com/signin" js-data="signin" class="ignHeader-loginLink authReturnUrl" data-signin-from-header="true">Sign in</a>
						
                                </div>
						
                                <ul class="user-tools-dropdown">
							
                                    <li class="user-option"><a href="https://s.ign.com/register">Register</a></li>
							
                                    <li class="user-option"><a href="http://my.ign.com/prime/hub">Prime</a></li>
						
                                </ul>
					
                            </div>
					
                            <script type="text/javascript">
						
    try { ign.social.addtomyign.init(); } catch(err) {};
					
                            </script>
				
                        </div>
			
                    </nav>
		
                </div>
	
            </header>

        



