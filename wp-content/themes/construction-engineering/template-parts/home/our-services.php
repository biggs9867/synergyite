<?php
/**
 * Template part for displaying Services section
 *
 * @package Construction Engineering
 * @subpackage construction_engineering
 */
?>

<section id="our_services" class="py-5">
  <div class="container">
    <?php if( get_theme_mod( 'construction_engineering_services_heading' ) != '') { ?>
      <h2 class="text-center mb-3"><?php echo esc_html(get_theme_mod('construction_engineering_services_heading')); ?></h2>
    <?php }?>
    <div class="row">
      <?php 
        $post_category = get_theme_mod('construction_engineering_services_section_category');
        if($post_category){
          $page_query = new WP_Query(array( 'category_name' => esc_html( $post_category ,'construction-engineering')));?>
          <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="box mb-3">
                <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                <div class="box-content">
                  <div class="row p-2">
                    <div class="col-lg-10 col-md-9 col-sm-8 col-9 align-self-center">
                      <h3 class="title"><?php the_title(); ?></h3>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-3 align-self-center">
                      <div class="box-btn">
                        <a href="<?php the_permalink(); ?>"><i class="fas fa-chevron-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        }
      ?>
    </div>
  </div>
</section>