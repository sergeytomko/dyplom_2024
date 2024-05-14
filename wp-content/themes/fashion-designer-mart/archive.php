<?php get_header(); ?>

<div id="content">
   <div class="feature-header">
      <div class="feature-post-thumbnail">
        <div class="slider-alternate">
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>">
        </div>
        <h1 class="post-title feature-header-title"><?php echo(esc_html_e('Archive Post','fashion-designer-mart')); ?></h1>
        <?php if ( get_theme_mod('fashion_designer_mart_breadcrumb_enable',true) ) : ?>
          <div class="bread_crumb text-center">
            <?php fashion_designer_mart_breadcrumb();  ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 mt-5">

        <?php the_archive_title('<h1>', '</h1>') ?> <?php the_archive_description(); ?>

        <div class="row">
          <?php
            if ( have_posts() ) :

              while ( have_posts() ) :

                the_post();
                get_template_part( 'template-parts/content' );

              endwhile;

            else:

              esc_html_e( 'Sorry, no post found on this archive.', 'fashion-designer-mart' );

            endif;

            get_template_part( 'template-parts/pagination' );
          ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>