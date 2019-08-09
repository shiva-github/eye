<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="background-header">
    <div class="container">
      <div class="row border-bottom">
        <div class="col-md-1 pb-1 pt-1 pl-0 col-6">
          <a id="skip-main" class="skip-link screen-reader-text" href="#main"><?php _e( 'Skip to main', 'fire' ); ?></a>
        </div>
        <div class="col-6 col-md-2 pb-1" id="contrast">
          <?php
          if ( is_active_sidebar( 'accessibility-header-widget' ) ) : ?>

            <?php dynamic_sidebar( 'accessibility-header-widget' ); ?>

          <?php endif; ?>
        </div>
        <div class="d-none d-sm-block d-md-block col-md-9 float-right text-right">

          <span class="phone-head">020 2697 4000</span>
          <span class="text-head"><a href="http://www.pbmaindia.org/" target="_blank">TECHNICAL TRAINING INSTITUTE PBMA</a> | WOMEN'S DESTITUTE</span>
          <span class="social-head">
            <a href="https://www.facebook.com/hvdeh.org/" title="Facebook Social Media" onclick="return ! window.open(this.href);" ><img src="<?php echo site_url().'/wp-content/themes/hvd/assets/images/facebook.png'; ?>" alt="Facebook" /></a>
            <a href="#" target="_blank" title="Twitter Social Media"><img src="<?php echo site_url().'/wp-content/themes/hvd/assets/images/twitter.png'; ?>" alt="" /></a>
            <a href="#" target="_blank" title="Linkedin Social Media"><img src="<?php echo site_url().'/wp-content/themes/hvd/assets/images/linkedin.png'; ?>" alt="" /></a>
          </span>
        </div>
      </div>
    </div>      
    
    <header role="banner">
      <div class="container">
        <div id="header-image">
          <!-- <img src="<?php //get_template_directory_uri() . '/assets/images/header.jpg'?>"> -->
          <?php
            // if ( get_theme_mod('header_text') ) {
          ?>
          <div class="row logo-header-text">
            <div class="header-col-1">
              <div class="logo" title="Website Logo">
                <?php
                if (function_exists( 'the_custom_logo' )) {
                  the_custom_logo();
                }
                ?>
              </div>

            </div>

            <div class="header-col-2">
              <div id="main_navbar" role="navigation" aria-label="Main navigation" class="navbar navbar-expand-md navbar-light">



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerNav" aria-controls="headerNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'best-reloaded' ); ?>">
                  <span class="navbar-toggler-icon"></span><span class="sr-only"><?php esc_html_e( 'Toggle Navigation', 'fire' ); ?></span>
                </button>
                <nav class="collapse navbar-collapse" id="headerNav" role="navigation" aria-label="Main Menu">
                  <span class="sr-only"><?php esc_html_e( 'Main Menu', 'fire' ); ?></span>
                  <?php
                  wp_nav_menu( array(
                    'theme_location' => 'top_menu',
                    'depth' => 3,
                    'container' => false,
                    'menu_class' => 'navbar-nav float-right mr-0 ml-auto',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                  ) );
                  ?>
                </nav>

                <div class="search-header">
                 |&nbsp;&nbsp; <img src="<?php echo site_url(); ?>/wp-content/themes/hvd/assets/images/HVD_search.png" alt="search image " width="12" class="toggle">
                 <div class="search-wrapper" style="display: none;">
                  <?php get_search_form();?>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </header>
  <?php 
  //if (!site_url()) {
    ?>
    <div class="line-1"></div>
    <div class="line-2"></div>
    <div class="line-1"></div>
    <?php
  //}

  ?>
</div>