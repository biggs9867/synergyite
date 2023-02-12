<?php
/**
 * Template Name: Front Page
 *
 * @package Construction Engineering
 * @subpackage construction_engineering
 */
?>

<main id="tp_content" role="main">
	<div class="remove-hd-bg">
		<div class="slide-box">
			<?php get_template_part( 'template-parts/home/slider' ); ?>
			<?php get_header(); ?>
		</div>
		<?php get_template_part( 'template-parts/home/our-project' ); ?>
		<?php get_template_part( 'template-parts/home/our-services' ); ?>
		<?php get_template_part( 'template-parts/home/home-content' ); ?>
	</div>
</main>

<?php get_footer();