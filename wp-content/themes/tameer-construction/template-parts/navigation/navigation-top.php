<?php
/**
 * Displays top navigation
 */
?>

<div class="header-menu <?php if( get_theme_mod( 'tameer_construction_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
	<div class="row m-0">
		<div class="col-lg-10 offset-lg-1 col-md-10 align-self-center">
			<nav id="site-navigation" class="main-navigation align-self-center" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'tameer-construction' ); ?>">
				<button role="tab" class="menu-toggle p-3 my-3 mx-auto" aria-controls="top-menu" aria-expanded="false">
					<?php
						esc_html_e( 'Menu', 'tameer-construction' );
					?>
				</button>

				<?php wp_nav_menu( array(
					'theme_location' => 'top',
					'menu_id'        => 'top-menu',
				) ); ?>				
			</nav>
		</div>
		<?php if( get_theme_mod('tameer_construction_show_hide_search',true) != ''){ ?>
			<div class="col-lg-1 col-md-2 align-self-center">
				<div class="search-body ps-lg-0 ps-md-3 align-self-center">
					<button type="button" class="search-show"><i class="<?php echo esc_attr(get_theme_mod('tameer_construction_search_icon_changer','fas fa-search')); ?>"></i></button>
				</div>
			</div>
		<?php } ?>
		<div class="searchform-inner">
			<?php get_search_form(); ?>
			<button type="button" class="close"aria-label="Close"><span aria-hidden="true">X</span></button>
		</div>
	</div>
</div>