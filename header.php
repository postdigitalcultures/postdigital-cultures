<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.2.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Onion-Location Header -->
  <meta http-equiv="onion-location" content="http://testing.onion" />
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,700,800" rel='stylesheet' type='text/css'>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <div id="page" class="site">

  
  <header id="masthead" class="site-header">

    <div>

      <nav id="nav-main" class="navbar navbar-expand-lg">

        <div class="container-fluid">

          <!-- Navbar Brand -->
          <a class="navbar-brand xs d-md-none" href="<?php echo esc_url(home_url()); ?>">
            <img class="img-fluid" style="height: 60px;" aria-label="Home" alt="CPC logo" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/cpc_logo.svg">
          </a>
          <a class="navbar-brand text-dark md d-none d-md-block" href="<?php echo esc_url(home_url()); ?>">
            <div id="logo-first">Centre for</div>
            <div id="logo-third"><span id="logo-second">Postdigital</span> Cultures</div>
          </a>

          <div class="navlinks-plus-search">

            <!-- Offcanvas Navbar -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
              <div class="offcanvas-header">
                <span class="h5 mb-0">
                  <img class="img-fluid mobile-logo" style="height: 60px;" aria-label="Home" alt="CPC logo" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/cpc_logo.svg">
                </span>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <!-- Bootstrap 5 Nav Walker Main Menu -->
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => false,
                  'menu_class' => '',
                  'fallback_cb' => '__return_false',
                  'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav ms-auto %2$s">%3$s</ul>',
                  'depth' => 2,
                  'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
                <!-- Bootstrap 5 Nav Walker Main Menu End -->
              </div>
            </div>


            <div class="header-actions d-flex align-items-center">

              <!-- Top Nav Widget -->
              <div class="top-nav-widget">
                <?php if (is_active_sidebar('top-nav')) : ?>
                  <div>
                    <?php dynamic_sidebar('top-nav'); ?>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Searchform Large -->
              <div class="d-none d-lg-block ms-1 ms-md-2 top-nav-search-lg">
                <?php if (is_active_sidebar('top-nav-search')) : ?>
                  <div>
                    <!-- Search Button Outline Secondary Right -->
                    <form class="searchform input-group" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                      <label for="site-search-desktop" hidden>Search</label>
                      <input id="site-search-desktop" type="text" name="s" class="form-control" placeholder="<?php _e('Search', 'bootscore'); ?>">
                      <button type="submit" class="input-group-text btn btn-outline-primary"><i class="fa-solid fa-magnifying-glass"></i><span class="visually-hidden-focusable">Search</span></button>
                    </form>                  
                  </div>
                <?php endif; ?>
              </div>

              <!-- Search Toggler Mobile -->
              <button class="btn btn-outline-primary d-lg-none ms-1 ms-md-2 top-nav-search-md" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-search" aria-expanded="false" aria-controls="collapse-search">
                <i class="fa-solid fa-magnifying-glass"></i><span class="visually-hidden-focusable">Search</span>
              </button>

              <!-- Navbar Toggler -->
              <button class="btn btn-outline-primary d-lg-none ms-1 ms-md-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
                <i class="fa-solid fa-bars"></i><span class="visually-hidden-focusable">Menu</span>
              </button>

            </div><!-- .header-actions -->

          </div><!-- .navlinks-plus-search -->

        </div><!-- .container -->

      </nav><!-- .navbar -->

      <!-- Top Nav Search Mobile Collapse -->
      <div class="collapse container d-lg-none" id="collapse-search">
        <?php if (is_active_sidebar('top-nav-search')) : ?>
          <div class="mb-2">
            <!-- Search Button Outline Secondary Right -->
            <form class="searchform input-group" method="get" action="<?php echo esc_url(home_url('/')); ?>">
              <label for="site-search-mobile" hidden>Search</label>
              <input id="site-search-mobile" type="text" name="s" class="form-control" placeholder="<?php _e('Search', 'bootscore'); ?>">
              <button type="submit" class="input-group-text btn btn-outline-primary"><i class="fa-solid fa-magnifying-glass"></i><span class="visually-hidden-focusable">Search</span></button>
            </form>
          </div>
        <?php endif; ?>
      </div>

    </div><!-- .fixed-top .bg-light -->

  </header><!-- #masthead -->
