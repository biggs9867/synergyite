<?php
/*
* Display Logo and contact details
*/
?>

<div class="container">
  <div class=" headerbox">
    <div class="row">
      <div class="col-lg-3 col-md-3">
        <div class="logo">
          <?php if( has_custom_logo() ) construction_hub_the_custom_logo(); ?>
          <?php if( get_theme_mod('construction_hub_site_title_text',true) == 1){ ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php }?>
          <?php $construction_hub_description = get_bloginfo( 'description', 'display' );
          if ( $construction_hub_description || is_customize_preview() ) : ?>
            <?php if( get_theme_mod('construction_hub_site_tagline_text',false) == 1){ ?>
              <p class="site-description"><?php echo esc_html($construction_hub_description); ?></p>
            <?php }?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9">
        <div class="row m-0 contact-section">
          <div class="col-lg-6 col-md-6">
            <?php if( get_theme_mod( 'construction_hub_call_text' ) != '' || get_theme_mod( 'construction_hub_call' ) != '') { ?>
            <i class="fas fa-phone"></i><span class="infotext"><?php echo esc_html( get_theme_mod('construction_hub_call_text','') ); ?></span>
              <span class="simplep"><?php echo esc_html( get_theme_mod('construction_hub_call','') ); ?></span>
            <?php } ?>
          </div>
          <div class="col-lg-6 col-md-6 email">
            <?php if( get_theme_mod( 'construction_hub_mail_text' ) != '' || get_theme_mod( 'construction_hub_mail' ) != '') { ?>
            <i class="fas fa-at"></i><span class="infotext"><?php echo esc_html( get_theme_mod('construction_hub_mail_text','')); ?></span>
            <span class="simplep"><?php echo esc_html( get_theme_mod('construction_hub_mail','') ); ?></span>
            <?php } ?>
          </div>
        </div>
        <?php get_template_part( 'template-parts/navigation/site-nav' ); ?>
      </div>
    </div>
  </div>
</div>
