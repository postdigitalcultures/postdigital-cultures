<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

<div id="content" class="site-content container py-5">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <div class="row">
      <div class="col">

        <main id="main" class="site-main">

          <!-- Title & Description -->
          <!--<header class="page-header mb-4">
            <h1><?php the_archive_title(); ?></h1>
            <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
          </header>-->

          <!-- Grid Layout -->
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <header class="entry-header">
                <!-- Category name -->
                <?php bootscore_category_badge(); ?>
              </header>

              <ul class="wp-block-latest-posts__list has-dates wp-block-latest-posts has-large-font-size">
                <li>
                  <!-- Title -->
                  <a class="wp-block-latest-posts__post-title" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                  <!-- Meta -->
                  <?php if ('post' === get_post_type()) : ?>
                    <small class="post-date">
                      <?php
                        bootscore_date();
                        #bootscore_author();
                        #bootscore_comments();
                        #bootscore_edit();
                        ?>
                    </small>
                  <?php endif; ?>
                </li>
              </ul>
            <?php endwhile; ?>
          <?php endif; ?>

          <!-- Pagination -->
          <div>
            <?php bootscore_pagination(); ?>
          </div>

        </main><!-- #main -->

      </div><!-- col -->

      <?php get_sidebar(); ?>
    </div><!-- row -->

  </div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();
