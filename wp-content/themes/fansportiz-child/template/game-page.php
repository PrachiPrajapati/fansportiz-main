<?php
/*
Template Name: Game Page
 */
get_header();
$loading_img = get_stylesheet_directory_uri() . "/images/loader-img.svg";
$game_template = get_field("game_template");
$banner_fields = $game_template["banner_fields"];
$client_fields = $game_template["client_fields"];
$cta_first_fields = $game_template["cta_first_fields"];
$core_features_fields = $game_template["core_features_fields"];
$admin_panel_fields = $game_template["admin_panel_fields"];
$cta_second_fields = $game_template["cta_second_fields"];
$reality_tv_fantacy_fields = $game_template["reality_tv_fantacy_fields"];
$case_study_fields = $game_template["case_study_fields"];
$blog_section_fields = $game_template["blog_section_fields"];
$faq_section_title = $game_template["faq_section_title"];
$faq_section_questionanswer = $game_template["faq_section_questionanswer"];
$cta_third_fields = $game_template["cta_third_fields"];
?>
<div class="overflow-hidden">
    <!-- Banner Start -->
    <section class="sports-banner overflow-hidden position-relative" style="background-image:url('<?php echo $banner_fields["background_image"]; ?>');">
        <div class="container d-flex align-items-center position-relative">
            <div class="ps-4 ps-lg-5 position-relative banner-desc">
                <h1 class="mb-2 mb-md-3 mb-lg-4"><?php echo $banner_fields["title"]; ?></h1>
                <div class="outline-btn solid-btn small-btn">
                    <a href="<?php echo $banner_fields["button_link"]["url"]; ?>" <?php echo ($banner_fields["button_link"]["target"]) ? " target='_blank' " : ""; ?>><?php echo $banner_fields["button_link"]["title"]; ?></a>
                </div>
            </div>
            <div id="scene2" class="banner-artwork position-absolute bottom-0 end-0">
                <img class="layer yswp_lazy" data-depth="0.60" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo $banner_fields['banner_image']['url']; ?>" alt="<?php echo $banner_fields['banner_image']['alt']; ?>" />
            </div>
            <div class="rect-pattern position-absolute top-50 start-0 translate-middle-y">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/rect-pattern.svg" alt="pattern">
            </div>
        </div>
        <div class="wave-pattern position-absolute end-0">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/wave-pattern.svg" alt="wave">
        </div>
    </section>
    <!-- Banner End -->
    <section class="client-section-box common-padding-small position-relative">
        <div class="container">
            <h6 class="clnt-title"><?php echo $client_fields["title"]; ?></h6>
            <?php if (!empty($client_fields["global_companies_image"])) : ?>
                <div class="client-section-content">
                    <?php foreach ($client_fields["global_companies_image"] as $single_img) : ?>
                        <div class="client-box">
                            <div class="clien-bx-img">
                                <img src="<?php echo $loading_img; ?>" class="yswp_lazy" data-lzy_src="<?php echo $single_img["url"]; ?>" alt="client-bx" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="pattern-img-box">
            <figure id="scene6" class="clien-pat-left">
                <div class="layer" data-depth="0.60">
                    <img src="https://www.fansportiz.com/wp-content/uploads/2023/08/client-pattern.webp" alt="client-pattern" />
                </div>
            </figure>
            <figure id="scene7" class="clien-pat-right">
                <div class="layer" data-depth="0.50">
                    <img src="https://www.fansportiz.com/wp-content/uploads/2023/08/client-pattern.webp" alt="client-pattern" />
                </div>
            </figure>
        </div>
    </section>
    <!-- Core Features Start -->
    <section class="core-features-section common-padding-small common-banner-bg overflow-hidden position-relative">
        <div class="container">
            <div class="title-box mb-0 text-center">
                <h2 class="mb-5 mb-md-4 mb-lg-5"><?php echo $core_features_fields["title"]; ?></h2>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <div class="feature-list text-center">
                        <?php $index=1; foreach ($core_features_fields['feature_list_left'] as $single_ser) : ?>
                            <div class="item position-relative d-flex align-items-center wow fadeInLeft" data-wow-delay="<?php echo $index/10; ?>s">
                                <div class="count rounded-circle fw-bold position-absolute top-0 start-50 translate-middle"><?php echo $index++; ?></div>
                                <p class="w-100 mb-0"><?php echo $single_ser["title"]; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="item mt-3 mt-md-0 mb-1 mb-md-0 wow fadeIn" data-wow-delay="0.2s">
                        <img class="yswp_lazy" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo $core_features_fields['image']['url']; ?>" alt="<?php echo $core_features_fields['image']['alt']; ?>" />
                    </div>
                </div>
                <div class="col">
                    <div class="feature-list text-center">
                            <?php $index=5; $ind=1; foreach ($core_features_fields['feature_list_right'] as $single_ser) : ?>
                                <div class="item position-relative d-flex align-items-center wow fadeInRight" data-wow-delay="<?php echo $ind++/10; ?>s">
                                    <div class="count rounded-circle fw-bold position-absolute top-0 start-50 translate-middle"><?php echo $index++; ?></div>
                                    <p class="w-100 mb-0"><?php echo $single_ser["title"]; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
            </div>
        </div>
        <div class="game-icon game-icon-1 opacity-50 position-absolute top-0 start-0">
            <img class="yswp_lazy" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo $core_features_fields['left_top_shape']['url']; ?>" alt="<?php echo $core_features_fields['left_top_shape']['alt']; ?>" />
        </div>
        <div class="game-icon game-icon-2 opacity-50 position-absolute bottom-0 end-0">
            <img class="yswp_lazy" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo $core_features_fields['bottom_right_shape']['url']; ?>" alt="<?php echo $core_features_fields['bottom_right_shape']['alt']; ?>" />
        </div>
    </section>
    <!-- Core Features End -->
    <section class="new-cta-section common-space-small common-banner-bg position-relative overflow-hidden" style="background-image:url('<?php echo $cta_first_fields["background_image"]; ?>');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-10 col-lg-9">
                    <div class="title-box mb-0 left-underline white-text-box">
                        <h2><?php echo $cta_first_fields["title"]; ?></h2>
                        <?php echo $cta_first_fields['description']; ?>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 text-md-center text-start">
                    <div class="outline-btn solid-btn red-btn small-btn">
                        <a class="me-0" href="<?php echo $cta_first_fields["button_link"]["url"]; ?>" <?php echo ($cta_first_fields["button_link"]["target"]) ? " target='_blank' " : ""; ?>><?php echo $cta_first_fields["button_link"]["title"]; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Admin Panel View Start -->
    <section class="admin-panel-section common-padding-small common-banner-bg overflow-hidden position-relative">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-6">
                    <div class="admin-panel-img mt-4 mt-md-0 wow fadeIn">
                        <img class="yswp_lazy" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo $admin_panel_fields['image']['url']; ?>" alt="<?php echo $admin_panel_fields['image']['alt']; ?>" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="title-box mb-0 left-underline wow fadeIn">
                        <h2><?php echo $admin_panel_fields['title']; ?></h2>
                    </div>
                    <div class="mb-3 mb-md-4 wow fadeIn">
                        <?php echo $admin_panel_fields['description']; ?>
                    </div>
                    <ul class="admin-features d-flex ps-0 flex-wrap wow fadeIn">
                        <?php foreach ($admin_panel_fields['admin_panel_feature_list'] as $single_ser) : ?>
                            <li class="d-flex align-items-center">
                                <img class="yswp_lazy flex-shrink-0" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo get_stylesheet_directory_uri() ?>/images/checkmark-icon.svg" alt="<?php echo $single_ser['image']['alt']; ?>" />
                                <p><?php echo $single_ser["title"]; ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ground position-absolute top-50 end-0 translate-middle-y">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/football-ground-dark.svg ?>" alt="game icon">
        </div>
    </section>
    <!-- Admin Panel View End -->
    <!-- Reality Tv Fantasy Start -->
    <section class="reality-tv-fantasy-section common-space-small common-banner-bg overflow-hidden position-relative" style="background-image:url('<?php echo $reality_tv_fantacy_fields["background_image"]; ?>');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeIn">
                    <div class="title-box mb-0 left-underline white-text-box">
                        <h2><?php echo $reality_tv_fantacy_fields["title"]; ?></h2>
                    </div>
                    <?php echo $reality_tv_fantacy_fields['description']; ?>
                    <ul class="reality-feature-box ps-0">
                        <?php foreach ($reality_tv_fantacy_fields['feature_list'] as $single_ser) : ?>
                            <li class="pe-md-5 pe-0">
                                <div class="img-box p-2">
                                    <img class="yswp_lazy" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo $single_ser['image']['url']; ?>" alt="<?php echo $single_ser['image']['alt']; ?>" />
                                </div>
                                <h5><?php echo $single_ser["title"]; ?></h5>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-md-6 wow fadeIn">
                    <div class="img-right-main">
                        <img class="yswp_lazy" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo $reality_tv_fantacy_fields['image']['url']; ?>" alt="<?php echo $reality_tv_fantacy_fields['image']['alt']; ?>" />
                    </div>
                </div>
            </div>
        </div>
        <div class="pattern-img-box">
            <figure id="scene14" class="dot-left-tv">
                <div class="layer" data-depth="0.60">
                    <img src="https://www.fansportiz.com/wp-content/uploads/2023/09/white-fot-pattern.png" alt="platform-pattern" />
                </div>
            </figure>
        </div>
    </section>
    <!-- Reality Tv Fantasy End -->
    <section class="new-cta-section common-space-small common-banner-bg position-relative" style="background:url('<?php echo $cta_second_fields["background_image"]; ?>')no-repeat center center/cover;">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-xxl-10 col-lg-9">
                    <div class="title-box mb-0 left-underline ">
                        <h2><?php echo $cta_second_fields["title"]; ?></h2>
                        <div class="wrapper-box position-relative">
                            <div class="row">
                                <div class="col-lg-11">
                                    <p><?php echo $cta_second_fields['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 text-md-end text-start">
                    <div class="outline-btn solid-btn">
                        <a class="me-0" href="<?php echo  $cta_second_fields["button_link"]["url"]; ?>" <?php echo ($cta_second_fields["button_link"]["target"]) ? " target='_blank' " : ""; ?>><?php echo  $cta_second_fields["button_link"]["title"]; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Case Study Start -->
    <section class="case-study-section common-padding-small common-banner-bg overflow-hidden position-relative">
        <div class="container position-relative">
            <div class="title-box mb-0 text-center white-text-box">
                <h2 class="mb-4 mb-lg-5 wow fadeIn"><?php echo $case_study_fields["title"]; ?></h2>
            </div>
            <div class="row position-relative">
                <?php foreach ($case_study_fields['case_study_block'] as $single_ser) : ?>
                    <div class="col-md-4 wow fadeIn">
                        <div class="item mb-4">
                            <a  class="img-block d-block mb-2 mb-md-3">
                                <img class="yswp_lazy" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo $single_ser['image']['url']; ?>" alt="<?php echo $single_ser['image']['alt']; ?>" />
                            </a>
                            <h4 class="mb-md-1"><a ><?php echo $single_ser["title"]; ?></a></h4>
                            <!-- <p class="mb-0">Design, Web Design </p> -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- <div class="outline-btn solid-btn small-btn red-btn text-center mt-2 mt-md-4">
                <a href="#">View more</a>
            </div> -->
        </div>
        <div class="ground position-absolute top-50 end-0 translate-middle-y">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/football-ground-right.svg ?>" alt="game icon">
        </div>
        <div class="ground position-absolute top-50 start-0 translate-middle-y">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/football-ground-left.svg ?>" alt="game icon">
        </div>
    </section>
    <!-- Case Study End -->
    <!-- Blog Section -->
    <section class="common-padding blog-section position-relative overflow-hidden">
        <div class="container">
            <div class="title-box text-center wow fadeIn">
                <h2 class="mb-0">Blogs</h2>
            </div>
            <div class="blog-listing">
                <ul class="row ps-0 blogs">
                    <?php
                    /* short-code for Blog Event Post Start (Pagination)  */
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : "";
                    $args = array(
                        'paged' => $paged,
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    );
                    $blogposts = new WP_Query($args);
                    if ($blogposts->have_posts()) {
                        add_filter('the_content', 'wpautop'); ?>
                        <?php while ($blogposts->have_posts()) : $blogposts->the_post(); ?>
                            <li class="col-lg-4 col-sm-6 blog-item-wrapper wow fadeIn">
                                <div class="blog-item-box">
                                    <div class="blog-item">
                                        <div class="blog-banner-img">
                                            <?php $image = get_the_post_thumbnail_url($post->ID, 'medium_large'); ?>
                                            <a class="d-block" href="<?php echo get_the_permalink(); ?>">
                                                <img class="w-100" width="300" height="164" src="<?php echo $image; ?>" loading="lazy" alt="fantasy">
                                            </a>
                                        </div>
                                        <div class="blog-desc">
                                            <h6 class="post_date"><img src="https://www.fansportiz.com/wp-content/uploads/2023/09/clock-img.png" alt="clock" /><?php echo get_the_date('M  dS, Y'); ?></h6>
                                            <h5><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h5>
                                            <a class="read_more" href="<?php echo get_the_permalink(); ?>">Read More <img src="https://www.fansportiz.com/wp-content/uploads/2023/09/read-more-triangle.png" alt="read more" /></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                </ul>
            </div>
            <?php } else {
                            echo __('No Results Found!', 'Fansportiz');
                        }
                        wp_reset_postdata(); ?>
        </div>
        <div class="pattern-img-box">
            <figure id="scene14" class="blogdot-left-patt">
                <div class="layer" data-depth="0.60">
                    <img src="https://www.fansportiz.com/wp-content/uploads/2023/08/dot-pattern-left.webp" alt="platform-pattern" />
                </div>
            </figure>
            <figure id="scene15" class="hexagon-right-blog">
                <div class="layer" data-depth="0.60">
                    <img src="https://www.fansportiz.com/wp-content/uploads/2023/09/hexagon-patt-blog.png" alt="platform-pattern" />
                </div>
            </figure>
            <figure id="scene16" class="left-dotpattern-top">
                <div class="layer" data-depth="0.60">
                    <img src="https://www.fansportiz.com/wp-content/uploads/2023/09/blog-left-pattern.png" alt="platform dot-pattern" />
                </div>
            </figure>
            <figure id="scene16" class="start-0 bottom-0" style="z-index:50;">
                <div class="layer" data-depth="0.60">
                    <img class="yswp_lazy" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo $blog_section_fields['image']['url']; ?>" alt="<?php echo $blog_section_fields['image']['alt']; ?>" />
                </div>
            </figure>
        </div>
    </section>
    <!-- Blog Section -->
    <section class="faq-section common-padding-small common-banner-bg position-relative" style="background-image:url('https://www.fansportiz.com/wp-content/uploads/2023/08/background-img-faq.webp');">
        <div class="container">
            <div class="title-box text-center wow fadeIn">
                <h2 class="mb-0"><?php echo $faq_section_title; ?></h2>
            </div>
            <div class="service-ind-acc-list mt-32 wow fadeIn">
                <?php if (!empty($faq_section_questionanswer)) : ?>
                    <div class="accordion">
                        <?php foreach ($faq_section_questionanswer as $ind => $single_acco) : ?>
                            <div class="title-<?php echo $ind + 1; ?> acc-listbox">
                                <a>
                                    <span><?php echo esc_html($single_acco["question"]); ?></span>
                                </a>
                                <div class="title-desc">
                                    <?php echo $single_acco["answer"]; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="pattern-img-box">
            <figure id="scene18" class="right-queimg-top">
                <div class="layer" data-depth="0.40">
                    <img src="https://www.fansportiz.com/wp-content/uploads/2023/08/pattern-right.webp" alt="platform-pattern" />
                </div>
            </figure>
            <figure id="scene19" class="left-bottom-img">
                <div class="layer" data-depth="0.55">
                    <img src="https://www.fansportiz.com/wp-content/uploads/2023/08/triangle-box.webp" alt="platform-pattern" />
                </div>
            </figure>
        </div>
    </section>
    <section class="new-cta-section common-space-small common-banner-bg position-relative" style="background-image:url('<?php echo $cta_third_fields["background_image"]; ?>');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="title-box mb-0 left-underline white-text-box">
                        <h2><?php echo $cta_third_fields["title"]; ?></h2>
                        <?php echo $cta_third_fields['description']; ?>
                    </div>
                </div>
                <div class="col-md-4 text-md-center text-start">
                    <div class="outline-btn solid-btn white-btn">
                        <a href="<?php echo  $cta_third_fields["button_link"]["url"]; ?>" <?php echo ($cta_third_fields["button_link"]["target"]) ? " target='_blank' " : ""; ?>><?php echo  $cta_third_fields["button_link"]["title"]; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>