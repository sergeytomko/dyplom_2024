<?php get_header(); ?>

<div id="content">
    <div class="feature-header">
      <div class="feature-post-thumbnail">
         <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            else:
              ?>
              <div class="slider-alternate">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>">
              </div>
              <?php
            endif;
          ?>
        <h1 class="post-title feature-header-title"><?php the_title(); ?></h1>
        <?php if ( get_theme_mod('fashion_designer_mart_breadcrumb_enable',true) ) : ?>
          <div class="bread_crumb text-center">
            <?php fashion_designer_mart_breadcrumb();  ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  <div class="container">
    <?php $fashion_designer_mart_theme_layout = get_theme_mod( 'fashion_designer_mart_page_layout','Right Sidebar');
            if($fashion_designer_mart_theme_layout == 'One Column'){ ?>
                <?php while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content-page'); 
                endwhile; ?>
        <?php }else if($fashion_designer_mart_theme_layout == 'Right Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-8 col-md-8 mt-5">
                    <?php
                        while ( have_posts() ) :
                          the_post();
                          get_template_part( 'template-parts/content', 'page');

                          wp_link_pages(
                            array(
                              'before' => '<div class="fashion-designer-mart-pagination">',
                              'after' => '</div>',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                            )
                          );
                          comments_template();
                        endwhile;
                      ?>
                </div>
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <?php }else if($fashion_designer_mart_theme_layout == 'Left Sidebar'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-lg-8 col-md-8 mt-5">
                    <?php
                        while ( have_posts() ) :
                          the_post();
                          get_template_part( 'template-parts/content', 'page');

                          wp_link_pages(
                            array(
                              'before' => '<div class="fashion-designer-mart-pagination">',
                              'after' => '</div>',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                            )
                          );
                          comments_template();
                        endwhile;
                      ?>
                </div>
            </div>
        <?php }else {?>
            <div class="row">
               <div class="col-lg-8 col-md-8 mt-5">
                    <?php
                        while ( have_posts() ) :
                          the_post();
                          get_template_part( 'template-parts/content', 'page');

                          wp_link_pages(
                            array(
                              'before' => '<div class="fashion-designer-mart-pagination">',
                              'after' => '</div>',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                            )
                          );
                          comments_template();
                        endwhile;
                      ?>
                </div>
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <?php } ?>
  </div>
</div>

<?php get_footer(); ?>