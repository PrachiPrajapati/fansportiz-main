<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<section class="no-results not-found">
	<div class="m-0 search-page-content-none common-padding">
		<div class="container py-md-0 py-3">
			<div class="row ">
				<div class="col-md-9 mb-md-0 mb-4">
					<h1 class="search-header mb-lg-5 mb-md-4 mb-3">
						<?php
						printf(
							/* translators: %s: Search term. */
							esc_html__( 'Search Results for:  %s', 'twentytwentyone' ),
							'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
						);
						?>
					</h1>
					<h5><?php esc_html_e( "Yikes ! The ball is out of the park. But we'll keep looking for you", 'twentytwentyone' ); ?></h5>
				</div>
				<div class="col-md-3 mb-md-0 mb-4">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div><!-- .page-content -->
</section><!-- .no-results -->
