<?php
/**
 * Index About
 *
 * @package Crypto AirDrop Premium
 */

$cryptoairdrop_about_disabled 	= get_theme_mod('cryptoairdrop_about_disabled', true);

if( $cryptoairdrop_about_disabled == true ) {

$activate_theme_data = wp_get_theme(); // getting current theme data.
$activate_theme = $activate_theme_data->name;

if( 'Crypto AirDrop' == $activate_theme ) {
	$cryptoairdrop_about_title 		= get_theme_mod('cryptoairdrop_about_title', 'We have right solutions to grow your businesses.');
	$cryptoairdrop_about_subtitle 	= get_theme_mod('cryptoairdrop_about_subtitle', 'WORDPRESS THEME');
	$cryptoairdrop_about_desc 		= get_theme_mod('cryptoairdrop_about_desc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusan tium dolor emque totam rem.');
	$cryptoairdrop_about_button_text 		= get_theme_mod('cryptoairdrop_about_button_text', 'Know More');
	$cryptoairdrop_about_button_link 		= get_theme_mod('cryptoairdrop_about_button_link', '#');
	$cryptoairdrop_about_image 				= get_theme_mod('cryptoairdrop_about_image', get_template_directory_uri() . '/assets/img/token/about-us.jpg');
	$cryptoairdrop_about_container_size 	= get_theme_mod('cryptoairdrop_about_container_size', 'container');
	$cryptoairdrop_theme_schema 	= 'theme-light-white';
}
if( 'Crypto Compare' == $activate_theme ) {
	$cryptoairdrop_about_title 		= get_theme_mod('cryptoairdrop_about_title', 'We have right solutions to grow your businesses.');
	$cryptoairdrop_about_subtitle 	= get_theme_mod('cryptoairdrop_about_subtitle', 'WORDPRESS THEME');
	$cryptoairdrop_about_desc 		= get_theme_mod('cryptoairdrop_about_desc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusan tium dolor emque totam rem.');
	$cryptoairdrop_about_button_text 		= get_theme_mod('cryptoairdrop_about_button_text', 'Know More');
	$cryptoairdrop_about_button_link 		= get_theme_mod('cryptoairdrop_about_button_link', '#');
	$cryptoairdrop_about_image 				= get_theme_mod('cryptoairdrop_about_image', wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/about.png');
	$cryptoairdrop_about_container_size 	= get_theme_mod('cryptoairdrop_about_container_size', 'container');
	$cryptoairdrop_theme_schema 	= 'theme-dark';
}
if( 'Crypto Mining' == $activate_theme ) {
	$cryptoairdrop_about_title 		= get_theme_mod('cryptoairdrop_about_title', 'We have right solutions to grow your businesses.');
	$cryptoairdrop_about_subtitle 	= get_theme_mod('cryptoairdrop_about_subtitle', 'WORDPRESS THEME');
	$cryptoairdrop_about_desc 		= get_theme_mod('cryptoairdrop_about_desc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusan tium dolor emque totam rem.');
	$cryptoairdrop_about_button_text 		= get_theme_mod('cryptoairdrop_about_button_text', 'Know More');
	$cryptoairdrop_about_button_link 		= get_theme_mod('cryptoairdrop_about_button_link', '#');
	$cryptoairdrop_about_image 				= get_theme_mod('cryptoairdrop_about_image', wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/about-2.png');
	$cryptoairdrop_about_container_size 	= get_theme_mod('cryptoairdrop_about_container_size', 'container');
	$cryptoairdrop_theme_schema 	= 'theme-blue';
}

?>
<!--About Section---->
<span id="site-content"></span>
<div id="particles-js-2"></div>
<section id="about" class="section about <?php echo esc_html($cryptoairdrop_theme_schema); ?>" style="">
	<div class="<?php echo esc_html($cryptoairdrop_about_container_size); ?>">
		<div class="row">
			<?php if(!empty($cryptoairdrop_about_image)) { ?>
			<div class="col-md-7 col-sm-6 col-xs-12">
				<figure class="about-image">
					<img src="<?php echo esc_url($cryptoairdrop_about_image); ?>" class="img-responsive" alt="About Us" />
				</figure>
			</div>
			<?php } ?>

			<div class="<?php if(!empty($cryptoairdrop_about_image)) echo 'col-md-5'; else  echo 'col-md-12'; ?> col-sm-6 col-xs-12 align-self-center">
				<div class="about-section">
					<h6 class="subtitle text-grey"><?php echo esc_html($cryptoairdrop_about_subtitle); ?></h6>
					<h2 class="title"><?php echo esc_html($cryptoairdrop_about_title); ?></h2>
					<div class="description"><?php echo $cryptoairdrop_about_desc; ?></div>
					<div class="mt-5 about-btn">
						<a href="<?php echo esc_url($cryptoairdrop_about_button_link); ?>" class="btn-large btn-skin btn-animation"><?php echo esc_html($cryptoairdrop_about_button_text); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/End of About Section---->
<?php } ?>