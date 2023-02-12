<?php
/**
 * Displays header site branding
 */
?>

<div class="site-branding py-1">
	<div class="row m-0">
		<div class=" col-lg-3 offset-lg-1 col-md-3">
			<div class="mail mb-md-0 mb-2">
				<?php if( get_theme_mod( 'tameer_construction_email','' ) != '') { ?>
              		<a class="email" href="mailto:<?php echo esc_attr( get_theme_mod('tameer_construction_email','') ); ?>"><i class="<?php echo esc_attr(get_theme_mod('tameer_construction_email_icon_changer','fas fa-envelope')); ?> pe-1"></i><?php echo esc_html( get_theme_mod('tameer_construction_email','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('tameer_construction_email','') ); ?></span></a>
                <?php } ?>
         	</div>
	    </div>
	    <div class=" col-lg-2 col-md-3">
	    	<?php if( get_theme_mod( 'tameer_construction_call1','' ) != '') { ?>
				<div class="call mb-md-0 mb-2">		        
				    <a href="tel:<?php echo esc_attr( get_theme_mod('tameer_construction_call1','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('tameer_construction_phone_icon_changer','fas fa-phone-volume')); ?> pe-1"></i><?php echo esc_html( get_theme_mod('tameer_construction_call1','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('tameer_construction_call1','') ); ?></span></a>
			    </div>
		    <?php } ?>
	    </div>
	    <div class=" col-lg-3 col-md-3">
	    	<?php if( get_theme_mod( 'tameer_construction_time','' ) != '') { ?>
		      	<div class="time mb-md-0 mb-2">
                   <span><i class="<?php echo esc_attr(get_theme_mod('tameer_construction_time_icon_changer','fas fa-clock')); ?> pe-1"></i><?php echo esc_html( get_theme_mod('tameer_construction_time','') ); ?></span>
	            </div>
        	<?php } ?>
	    </div>
	    <div class=" col-lg-3 col-md-3">
      		<div class="social-media text-md-end text-cetner">
	          	<?php if( get_theme_mod( 'tameer_construction_facebook_url') != '') { ?>
	            	<a href="<?php echo esc_url( get_theme_mod( 'tameer_construction_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('tameer_construction_facebook_icon_changer','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','tameer-construction' );?></span></a>
	          	<?php } ?>	          	           
	         	<?php if( get_theme_mod( 'tameer_construction_twitter_url') != '') { ?>
	            	<a href="<?php echo esc_url( get_theme_mod( 'tameer_construction_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('tameer_construction_twitter_icon_changer','fab fa-twitter')); ?> ms-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','tameer-construction' );?></span></a>
	         	<?php } ?>
	          	<?php if( get_theme_mod( 'tameer_construction_youtube_url') != '') { ?>
	            	<a href="<?php echo esc_url( get_theme_mod( 'tameer_construction_youtube_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('tameer_construction_youtube_icon_changer','fab fa-youtube')); ?> ms-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','tameer-construction' );?></span></a>
	          	<?php } ?>          
	          	<?php if( get_theme_mod( 'tameer_construction_linkdin_url') != '') { ?>
	            	<a href="<?php echo esc_url( get_theme_mod( 'tameer_construction_linkdin_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('tameer_construction_linkdin_icon_changer','fab fa-linkedin-in')); ?> ms-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','tameer-construction' );?></span></a>
	         	<?php } ?>	
	         	<?php if( get_theme_mod( 'tameer_construction_instagram_url') != '') { ?>
	            	<a href="<?php echo esc_url( get_theme_mod( 'tameer_construction_instagram_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('tameer_construction_instagram_icon_changer','fab fa-instagram')); ?> ms-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','tameer-construction' );?></span></a>
	         	<?php } ?>	
	        </div>
	    </div>
	</div>	
</div>