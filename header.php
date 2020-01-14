<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

  <head>
    <title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>  
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
    <?php wp_head(); ?>

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" <?php body_class(); ?> > 

    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container mb-3">
          <div class="d-flex align-items-center">
            <div class="site-logo mr-auto">
              <a href="/"><?php bloginfo( 'name' ); ?> <img src="<?php the_field('logo', 'option'); ?>"></a>
            </div>
            <div class="site-quick-contact d-none d-lg-flex ml-auto ">
              <div class="d-flex site-info align-items-center mr-5">
                <span class="block-icon mr-3"><span class="icon-map-marker text-yellow"></span></span>
                <span>Дніпровська 1, <br> м. Вишгород</span>
              </div>
              <div class="d-flex site-info align-items-center">
                <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                <span>+380 73 500 50 88 <br> veselka-mriy@i.ua</span>
              </div>

            </div>
          </div>
        </div>


        <div class="container">
          <div class="menu-wrap d-flex align-items-center">
            <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>

              <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                <?php 
              $args = array(
                'menu'            => 'head_menu',
                'menu_class'      => 'site-menu main-menu js-clone-nav mr-auto',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'depth'           => 0,
                'walker'          => '',
                'theme_location'  => ''
              );
              wp_nav_menu( $args );
               ?>   
              </nav>

            <?php if(get_field('social', 'option')): ?>
               <div class="top-social ml-auto">
                  <?php while(has_sub_field('social', 'option')): ?>
                    <a href="<?php the_sub_field('social_link'); ?>"><i style="color: <?php the_sub_field('social_color'); ?>;" class="fab fa-<?php the_sub_field('social_title'); ?>"></i></a>
                  <?php endwhile; ?>
                </div>
             <?php endif; ?>

          </div>
        </div>



      </header>