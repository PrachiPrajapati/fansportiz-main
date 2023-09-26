<?php 
/* 
Template Name: Blogs
*/
get_header();
?>
<div class="blog-listing-page ">
    <section class="common-banner-section common-padding" style="background-image:url('<?php echo home_url(); ?>/wp-content/uploads/2023/05/fansportiz-blog-banner-img.jpg');">
        <div class="container">
            <div class="banner-desc-common">
                <h1 class="text-center page-title-box"><b><?php echo get_the_title(); ?></b></h1>
            </div>
        </div>
    </section>
    <!-- Blog LIsting  -->
    <section class="common-padding blog-list-wrapper position-relative">
        <div class="container">
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
                                    <?php $image = get_the_post_thumbnail_url($post->ID,'medium_large'); ?>       
                                    <a class="d-block" href="<?php echo get_the_permalink(); ?>">
                                        <img class="w-100" width="300" height="164" src="<?php echo $image; ?>" loading="lazy" alt="fantasy">
                                    </a>                        
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
</div>
<?php get_footer();?>

 