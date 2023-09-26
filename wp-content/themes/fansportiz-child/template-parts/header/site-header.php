<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>" role="banner">
 <div class="d-flex justify-content-between align-items-center w-100">
 	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	<div class="navbarbox">
		<?php get_template_part( 'template-parts/header/site-nav' ); ?>
		<!-- <a href="#form-section" class="cta-header-btn d-md-block d-none"><span>Start a Project</span></a> -->
	</div>
 </div>
	

</header><!-- #masthead -->
