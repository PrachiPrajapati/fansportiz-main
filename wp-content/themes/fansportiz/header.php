<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right-arrow.svg" as="image" type="image/svg+xml">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<script>
	var isfitsr = sessionStorage.getItem("is_this_first_load"), checkUsr = undefined;
	if( isfitsr == "true" ){
		checkUsr = false;
	}else{
		checkUsr = true;
		sessionStorage.setItem("is_this_first_load", "true");
	}
	console.log( checkUsr );
	const pageAccessedByReload = (
	(window.performance.navigation && window.performance.navigation.type === 1) || checkUsr ||
		window.performance.getEntriesByType('navigation').map((nav) => nav.type).includes('reload')
	);
	if( pageAccessedByReload )
		document.body.className += ' intr-page-hard-refreshed';
	else
		document.body.className += ' intr-page-traversed';
</script>
<noscript>
	<section class="nojs-error common-space">
		<div class="content-container"> <span class="error-code t-bold">Oops.</span>
			<div class="full-particles"></div>
			<div class="heading-block">
				<h1 class="t-74-28 t-bold">We have a problem, no JS!</h1>
			</div>
			<div class="content-block">
				<p class="t-36-20 t-medium">We use JavaScript to power the websites we build. Please update your browser or
					turn on support for JavaScript.</p>
			</div>
			<div class="link-block">
				<a class="t-28-15 t-demibold i-right i-slide-right right-arrow-right d-inline-flex align-items-center light-arrow" href="." title="Reload">
					Reload
					<img class="icon icon-arrow-right" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right-arrow.svg"></img>
				</a>
		</div>
			<div class="side-label right">
				<p class="t-12-6 t-medium t-uppercase">Outcome-Centred Approach™</p>
			</div>
		</div>
	</section>
</noscript>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <div class="intrface-loader loading-wrapper">
		<div class="progress-wrapper">
			<div class="spinner-wrapper"></div>
		</div>
		<div class="page-transition"></div>
	</div> -->
	<div class="intrface-loader loading-wrapper main-loader">
		<div class="progress-wrapper">
			<div class="logo-load-wrapper">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Intrface-Logo-Animated-Web.svg" alt="intrface-logo" />
				<span class="loading-progress-wrapper">
					<span class="loading-progress-line" style="width: 0%"></span>
				</span>
			</div>
		</div>
	</div>
	<div class="intrface-loader loading-wrapper sub-loader">
		<div class="progress-wrapper">
			<div class="spinner-wrapper"></div>
		</div>
		<div class="page-transition"></div>
	</div>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
