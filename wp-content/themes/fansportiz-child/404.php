<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<section class="banner-section error-404 not-found">
	<div class="thankyou-content">
		<div  class="kt-row-layout-inner kt-layout-id_c8b331-7b">
			<div class="banner-content mx-auto">
				<div class="wp-block-image">
					<figure class="aligncenter size-full">
						<img  src="https://www.fansportiz.com/wp-content/uploads/2023/01/error-icon.svg" alt="thank-you-icon"/>
					</figure>
				</div>
				<h1 class="has-text-align-center"><strong>Red Card ! </strong></h1>
				<h5 class="has-text-align-center">Slow Down Sport. The page you are looking cannot be found.</h5>
				<div class="is-layout-flex wp-block-buttons is-content-justification-center">
					<div class="wp-block-button outline-btn">
						<a class="wp-block-button__link">Back to home</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();