<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.2.0.0
 */

?>

<footer>

  <div class="bootscore-footer pt-5 pb-3 text-primary">

    <!-- Top Footer Widget -->
    <?php if (is_active_sidebar('top-footer')) : ?>
      <div>
        <?php dynamic_sidebar('top footer'); ?>
      </div>
    <?php endif; ?>

    <div class="d-md-flex flex-md-row mb-3">
      <!-- Footer 1 Widget -->
      <div class="me-auto p-2 md d-none d-md-block">
        <?php if (is_active_sidebar('footer-1')) : ?>
          <div>
            <?php dynamic_sidebar('footer-1'); ?>
          </div>
        <?php endif; ?>
      </div>
      <!-- Footer 2 Widget -->
      <div class="p-2 px-5">
        <?php if (is_active_sidebar('footer-2')) : ?>
          <div>
            <?php dynamic_sidebar('footer-2'); ?>
          </div>
        <?php endif; ?>
      </div>
      <!-- Footer 3 Widget -->
      <div class="p-2 px-5">
        <?php if (is_active_sidebar('footer-3')) : ?>
          <div>
            <?php dynamic_sidebar('footer-3'); ?>
          </div>
        <?php endif; ?>
      </div>
      <!-- Footer 4 Widget -->
      <div class="p-2 px-5">
        <?php if (is_active_sidebar('footer-4')) : ?>
          <div>
            <?php dynamic_sidebar('footer-4'); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

      <!-- Bootstrap 5 Nav Walker Footer Menu -->
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
        'depth' => 1,
        'walker' => new bootstrap_5_wp_nav_menu_walker()
      ));
      ?>
      <!-- Bootstrap 5 Nav Walker Footer Menu End -->

    </div>

  <div class="bootscore-info bg-light py-2 text-center text-primary">
    <?php if (is_active_sidebar('bottom-footer')) : ?>
      <div class="container">
        <small><?php dynamic_sidebar('bottom-footer'); ?></small>
        <div class="row">
          <div class="col-md-12 onion">
            <a href="http://testing.onion">
              <img class="onion" aria-label="Link to onion service version" src="<?php echo get_stylesheet_directory_uri(); ?>/img/onion-svgrepo-com.svg">
            </a>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>

</footer>

<!-- To top button -->
<a href="#" class="btn btn-primary shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
