<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$featured_img_url= get_the_post_thumbnail_url($post->ID,'full');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class();  ?>>
    <section class="common-banner-section common-padding"
        style="background-image:url('<?php echo home_url(); ?>/wp-content/uploads/2023/05/fansportiz-blog-banner-img.jpg');">
        <div class="container">
            <div class="banner-desc-common blog-inner">
                <h1 class="text-center page-title-box"><b><?php echo get_the_title(); ?></b></h1>
            </div>
        </div>
    </section>
    <div class="blog-inner-content common-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8  blog-content">
                    <h6 class="post_date"><span>Published on - </span> <?php echo get_the_date( 'M  dS, Y' ); ?></h6>
                    <div class="blog-banner-img">
                        <img width="1981" height="1080" src="<?php echo $featured_img_url; ?>" alt="Image" class="img-fluid"/>
                    </div>
                    <?php the_content(); ?>
                </div>
                <div class="col-lg-4  blog-sidebar">
                    <div class="sidebar-border">
                        <div class="blog-sidebar-box">
                            <?php dynamic_sidebar('blog-sidebar') ?>
                        </div>
                    </div>
                </div>	
        	</div>
		</div>	
	</div>
	<!-- .entry-content -->
</article><!-- #post-<?php //the_ID(); ?> -->