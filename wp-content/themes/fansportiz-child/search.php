<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if ( have_posts() ) {
	?>
	<!-- <header class="page-header header-padding">
		<div class="container">
			
		</div>
	</header> -->
	<!-- .page-header -->

	<!-- <div class="search-result-count default-max-width"> -->
		<?php
		// printf(
		// 	esc_html(
		// 		/* translators: %d: The number of search results. */
		// 		_n(
		// 			'We found %d result for your search.',
		// 			'We found %d results for your search.',
		// 			(int) $wp_query->found_posts,
		// 			'twentytwentyone'
		// 		)
		// 	),
		// 	(int) $wp_query->found_posts
		// );
		?>
<!-- </div> -->
<!-- .search-result-count -->
	<?php
	// Start the Loop.
	// while ( have_posts() ) {
	// 	the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		// get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
	// } // End the loop.

	// Previous/next page navigation.
	// twenty_twenty_one_the_posts_navigation(); ?>
	<div class=" header-padding">
		<section class="common-padding blog-list-wrapper  mt-0">
			<div class="container">
				<h1 class="search-header mb-lg-5 mb-md-4 mb-3">
						<?php
						printf(
							/* translators: %s: Search term. */
							esc_html__( 'Search Results for:  %s', 'twentytwentyone' ),
							'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
						);
						?>
					</h1>
				<div class="blog-listing">
					<ul class="row pl-0 blog-list-wrap-box">
				<?php
				/* short-code for Blog Event Post Start (Pagination)  */
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : "";
				$args = array(
				'paged' => $paged,
				'post_type' => 'post',
				'posts_per_page' => 6,
				);
				$blogposts = new WP_Query($args);
				if ( $blogposts->have_posts() ) { 
					add_filter('the_content', 'wpautop'); $pagecount = $blogposts->max_num_pages; ?>
					<?php while($blogposts->have_posts()): $blogposts->the_post(); ?>
						<li class="col-lg-4 col-sm-6 blog-item-wrapper">
							<div class="blog-item-box">
								<div class="blog-item">
									<div class="blog-banner-img">
										<?php $image = get_the_post_thumbnail_url($post->ID,'full'); ?>       
										<a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo $image; ?>" alt="fantasy"> </a>                        
									</div>
									<div class="blog-desc">
										<h5><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h5>
										<h6 class="post_date"><?php echo get_the_date( 'M  dS, Y' ); ?></h6>
										<p><?php echo get_the_excerpt();  ?></p>
										<a class="read_more" href="<?php echo get_the_permalink(); ?>">Read More</a>
									</div>
								</div>
							</div>
						</li>
						<?php endwhile; ?>
				</ul>
				</div>
				
					<?php if( $pagecount > 1 && !is_front_page() ): ?>
						<div class="text-center">
					<form id="loadmore-form-submit">
						<input type="hidden" name="action" value="loadMorePostsFuncAjax" />
						<input type="hidden" name="page-no" value="2" />
						<input type="hidden" name="total-pages" value="<?php echo $pagecount;?>" />
						<div class="loading-btn btn-center " style="display: none;"><img src="<?php echo get_stylesheet_directory_uri().'/images/loadmore.gif';?>" alt="loading-image" /> </div>
						<div class="text-center btn-box"> 
							<button type="submit" name="submit" class="load-more load-more-btn cta-header-btn d-inline-block"><span><?php _e('Load more','shade space'); ?></span></button>
						</div>
						</div>
					</form>
				<?php endif; ?>
				<?php } else { echo __( 'No Results Found!', 'Fansportiz' ); } 
				wp_reset_postdata(); ?>
			</div>
		</section>
	</div> <?php
	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/search-content-none' );
}

get_footer();
