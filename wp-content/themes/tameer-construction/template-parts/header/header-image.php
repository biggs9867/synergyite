<?php
/**
 * Displays header media
 */
?>
<?php if( get_theme_mod('tameer_construction_show_hide_topbar', false) != '' || get_theme_mod( 'tameer_construction_enable_disable_topbar', false) != ''){ ?>
	<div class="custom-header p-2">

		<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

	</div>
<?php } ?>
