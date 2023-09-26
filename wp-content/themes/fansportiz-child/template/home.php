<?php
/*
Template Name: Home
 */
get_header();
$loading_img = get_stylesheet_directory_uri() . "/images/loader-img.svg";
$home_template = get_field("home_template");
$banner_fields = $home_template["banner_fields"];
$client_fields = $home_template["client_fields"];
$sports_we_serve_fields = $home_template["sports_we_serve_fields"];
$cta_first_fields = $home_template["cta_first_fields"];
$our_offering_fields = $home_template["our_offering_fields"];
$cta_second_fields = $home_template["cta_second_fields"];
$platform_exclusivity_fields = $home_template["platform_exclusivity_fields"];
$feature_fields = $home_template["feature_fields"];
$techstack_fields = $home_template["techstack_fields"];
$faq_section_title = $home_template["faq_section_title"];
$faq_section_questionanswer = $home_template["faq_section_questionanswer"];
$cta_third_fields = $home_template["cta_third_fields"];
?>
<div class="overflow-hidden">
<div class="banner-section" id="banner-section" style="background:url('<?php echo $banner_fields["background_image"]; ?>')no-repeat center center/cover !important;">
    <div class="banner-detail">
        <div class="banner-content">
            <h1 id="captivate-your-audience-with-our-whitelabel-solution">
                <?php echo $banner_fields["title"]; ?>
            </h1>
            <div class="outline-btn">
                <a href="<?php echo $banner_fields["button_link"]["url"]; ?>" <?php echo ( $banner_fields["button_link"]["target"] ) ? " target='_blank' " : "" ; ?> ><?php echo $banner_fields["button_link"]["title"]; ?></a>
            </div>
        </div>
        <div class="banner-images-box">
            <figure id="scene">
                <div class="layer" data-depth="0.60">
                    <img width="362" height="356" alt="baseball" src="https://www.fansportiz.com/wp-content/uploads/2021/09/baseball.svg">
                </div>
            </figure>
            <figure id="scene2">
                <div class="layer" data-depth="0.85">
                    <img loading="lazy" width="261" height="370" alt="football" src="https://www.fansportiz.com/wp-content/uploads/2021/09/football.svg">
                </div>
            </figure>
            <figure id="scene3">
                <div class="layer" data-depth="0.75">
                    <img loading="lazy" width="259" height="401" alt="cricket" src="https://www.fansportiz.com/wp-content/uploads/2021/09/cricket.svg">
                </div>
            </figure>
            <figure id="scene4">
                <div class="layer" data-depth="0.85">
                    <img loading="lazy" width="521" height="367" alt="basketball" src="https://www.fansportiz.com/wp-content/uploads/2021/09/basketball.svg">
                </div>
            </figure>
            <figure id="scene5">
                <div class="layer" data-depth="0.50">
                    <img loading="lazy" width="318" height="349" alt="Kabaddi" src="https://www.fansportiz.com/wp-content/uploads/2021/09/Kabaddi.svg">
                </div>
            </figure>
        </div>
        <div class="text-center">
            <a href="#section-down" class="scroll-down">
                <span>scroll</span>
                <img loading="lazy" alt="scroll" width="24" height="24" src="https://www.fansportiz.com/wp-content/uploads/2023/05/double-down-icon.svg">
            </a>
        </div>
    </div>
</div>
<section id="section-down" class="client-section-box common-padding-small position-relative">
    <div class="container">
        <h6 class="clnt-title"><?php echo $client_fields["title"]; ?></h6>
            <?php if( ! empty( $client_fields["global_companies_image"] ) ): ?>
                <div class="client-section-content ">
                    <?php foreach( $client_fields["global_companies_image"] as $single_img ): ?>
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
                <img  src="https://www.fansportiz.com/wp-content/uploads/2023/08/client-pattern.webp" alt="client-pattern" />
            </div>
        </figure>
        <figure id="scene7" class="clien-pat-right">
            <div  class="layer" data-depth="0.50">
                <img  src="https://www.fansportiz.com/wp-content/uploads/2023/08/client-pattern.webp" alt="client-pattern" />
            </div>
        </figure>
    </div>
</section>
<section class="sports-we-serve common-padding-small common-banner-bg" style="background-image:url('<?php echo $sports_we_serve_fields["background_image"]; ?>');">
    <div class="container">
        <div class="title-box mb-0 left-underline white-text-box">
            <h2><?php echo $sports_we_serve_fields["title"]; ?></h2>
        </div>
        <div class="sport-we-server-det">
            <?php foreach( $sports_we_serve_fields['sports_game_box'] as $single_ser ): ?>
                <div>
                    <div class="sports-box">
                        <div class="img-bx">
                            <img class="yswp_lazy" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo $single_ser['image']['url']; ?>" alt="<?php echo $single_ser['image']['alt']; ?>" />
                        </div>
                        <h5><a href="<?php echo $single_ser['url']; ?>"><?php echo $single_ser['title']; ?></a></h5>
                        <?php echo $single_ser['description']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="new-cta-section common-space-small common-banner-bg position-relative overflow-hidden" style="background-image:url('<?php echo $cta_first_fields["background_image"]; ?>');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="title-box mb-0 left-underline">
                    <h2><?php echo $cta_first_fields["title"]; ?></h2>
                    <?php echo $cta_first_fields['description']; ?>
                </div>
            </div>
            <div class="col-md-4 text-md-center text-start">
                <div class="outline-btn solid-btn">
                    <a href="<?php echo $cta_first_fields["button_link"]["url"]; ?>" <?php echo ( $cta_first_fields["button_link"]["target"] ) ? " target='_blank' " : "" ; ?> ><?php echo $cta_first_fields["button_link"]["title"]; ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="pattern-img-box">
        <figure id="scene8" class="player-pat-right">
            <div class="layer" data-depth="0.60">
                <img src="https://www.fansportiz.com/wp-content/uploads/2023/08/cta-player.webp" alt="player-pattern" />
            </div>
        </figure>
    </div>
</section>
<section class="new-our-offering-section" >
    <div class="common-padding-small new-our-offering-box  position-relative" >
        <div class="container">
            <div class="offering-details">
                <div class="row g-0">
                    <div class="col-md-4 title-sec ">
                        <div class="title-box h-100 d-flex flex-column justify-content-center align-items-center mb-0 offer-box left-underline">
                            <h2 class="mb-0"><?php echo $our_offering_fields["title"]; ?></h2>
                        </div>
                    </div>
                    <?php foreach( $our_offering_fields['offering_box'] as $single_feat ): ?>
                        <div class="col-md-4">
                            <div class="offer-box common-space-small">
                                <img class="yswp_lazy" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo $single_feat['image']['url']; ?>" alt="<?php echo $single_feat['image']['alt']; ?>" />
                                <h4><?php echo $single_feat["title"]; ?></h4>
                                <?php echo $single_feat["description"]; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="platform-exclusivity-section common-padding-small position-relative overflow-hidden">
    <div class="container">
        <div class="title-box text-center">
            <h2 class="mb-0"><?php echo $platform_exclusivity_fields["title"]; ?></h2>
        </div>
        <div class="row">
            <?php foreach( $platform_exclusivity_fields['platform_exclusivity_box'] as $single_ser ): ?>
                <div class="col-md-6 platform-exclusivity-box">
                    <div class="platform-exclusivity-det">
                        <img class="yswp_lazy" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo $single_ser['image']['url']; ?>" alt="<?php echo $single_ser['image']['alt']; ?>" />
                        <div class="text-det">
                             <h5><?php echo $single_ser['title']; ?></h5>
                            <?php echo $single_ser['description']; ?>
                        </div>
                    </div>
                </div>
           <?php endforeach; ?>
        </div>
    </div>
    <div class="pattern-img-box">
        <figure id="scene9" class="platform-left-ball">
            <div class="layer" data-depth="0.60" >
                <img  src="https://www.fansportiz.com/wp-content/uploads/2023/08/platform-left-ball.webp" alt="platform-pattern" />
            </div>
        </figure>
        <figure id="scene10" class="platform-right-player">
            <div class="layer" data-depth="0.60">
                <img  src="https://www.fansportiz.com/wp-content/uploads/2023/08/platform-right-player.webp" alt="platform-pattern" />
            </div>
        </figure>
        <figure id="scene11" class="platform-dotpattern-top">
            <div class="layer" data-depth="0.60">
                <img  src="https://www.fansportiz.com/wp-content/uploads/2023/08/dot-pattern-right.webp" alt="platform dot-pattern" />
            </div>
        </figure>
        <figure id="scene12" class="platform-dotpattern-bottom">
            <div class="layer" data-depth="0.60">
                <img  src="https://www.fansportiz.com/wp-content/uploads/2023/08/dot-pattern-left.webp" alt="platform dot-pattern" />
            </div>
        </figure>
    </div>
</section>
<section class="new-cta-section common-space-small common-banner-bg position-relative" style="background-image:url('<?php echo $cta_second_fields["background_image"]; ?>');">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="title-box mb-0 left-underline white-text-box">
                    <h2><?php echo $cta_second_fields["title"]; ?></h2>
                    <div class="wrapper-box position-relative">
                        <p> <?php echo $cta_second_fields['description']; ?></p>
                        <h3 class="title-bg-text"><?php echo $cta_second_fields['description']; ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-md-end text-start">
                <div class="outline-btn solid-btn white-btn">
                    <a href="<?php echo  $cta_second_fields["button_link"]["url"]; ?>" <?php echo (  $cta_second_fields["button_link"]["target"] ) ? " target='_blank' " : "" ; ?> ><?php echo  $cta_second_fields["button_link"]["title"]; ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="pattern-img-box">
        <figure id="scene13" class="player-pat-right">
            <div class="layer" data-depth="0.60">
                <img  src="https://www.fansportiz.com/wp-content/uploads/2023/08/cta-player.webp" alt="player-pattern" />
            </div>
        </figure>
    </div>
</section>
<section class="platform-exclusivity-section feature-section common-padding-small position-relative overflow-hidden">
    <div class="container">
        <div class="title-box text-center">
            <h2 class="mb-0"><?php echo $feature_fields["title"]; ?></h2>
        </div>
        <div class="row justify-content-between">
            <?php foreach( $feature_fields['feature_box'] as $single_ser ): ?>
                <div class="col-md-6 platform-exclusivity-box">
                    <div class="platform-exclusivity-det">
                        <img class="yswp_lazy" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo $single_ser['image']['url']; ?>" alt="<?php echo $single_ser['image']['alt']; ?>" />
                        <div class="text-det">
                            <h5><?php echo $single_ser['title']; ?></h5>
                            <?php echo $single_ser['description']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="pattern-img-box">
    <figure id="scene14" class="platform-left-ball">
            <div class="layer" data-depth="0.60">
                <img  src="https://www.fansportiz.com/wp-content/uploads/2023/08/feature-left.webp" alt="platform-pattern" />
            </div>
        </figure>
        <figure id="scene15" class="platform-right-player">
            <div class="layer" data-depth="0.60">
                <img  src="https://www.fansportiz.com/wp-content/uploads/2023/08/feature-right.webp" alt="platform-pattern" />
            </div>
        </figure>
        <figure id="scene16" class="platform-dotpattern-top">
            <div class="layer" data-depth="0.60">
                <img  src="https://www.fansportiz.com/wp-content/uploads/2023/08/dot-pattern-right.webp" alt="platform dot-pattern" />
            </div>
        </figure>
        <figure id="scene17" class="platform-dotpattern-bottom">
            <div class="layer" data-depth="0.60">
                <img  src="https://www.fansportiz.com/wp-content/uploads/2023/08/dot-pattern-left.webp" alt="platform dot-pattern" />
            </div>
        </figure>
    </div>
</section>
<section class="tech-stack-section common-padding-small common-banner-bg" style="background-image:url('https://www.fansportiz.com/wp-content/uploads/2023/08/tech-stack-bg.webp');">
    <div class="container">
        <div class="title-box text-center white-text-box">
            <h2 class="mb-0"><?php echo $techstack_fields["title"]; ?></h2>
        </div>
        <ul class="techstack-wrap">
            <?php $index=1; foreach( $techstack_fields['technology_box'] as $single_tech ): ?>
            <li>
                <div class="heading-bx">
                    <h4><?php echo $single_tech["title"]; ?></h4>
                    <span>0<?php echo $index++; ?></span>
                </div>
                <ul class="techlogos">
                    <?php foreach( $single_tech['tech_logo'] as $single_lg ): ?>
                    <li><div><img class="yswp_lazy" src="<?php echo $loading_img; ?>" data-lzy_src="<?php echo $single_lg['image']['url']; ?>" alt="<?php echo $single_lg['image']['alt']; ?>" /></div></li>
                <?php endforeach; ?>
                </ul>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<section class="faq-section common-padding-small common-banner-bg position-relative" style="background-image:url('https://www.fansportiz.com/wp-content/uploads/2023/08/background-img-faq.webp');">
    <div class="container">
        <div class="title-box text-center">
            <h2 class="mb-0"><?php echo $faq_section_title; ?></h2>
        </div>
        <div class="service-ind-acc-list mt-32">
        <?php $index=1; if( ! empty( $faq_section_questionanswer ) ): ?>
            <div class="accordion">
                <?php foreach( $faq_section_questionanswer as $ind => $single_acco ): ?>
                    <div class="title-<?php echo $ind+1; ?> acc-listbox" >
                        <a>
                            <span><?php echo $index++; ?>. <?php echo esc_html( $single_acco["question"] ); ?></span>
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
                <img  src="https://www.fansportiz.com/wp-content/uploads/2023/08/pattern-right.webp" alt="platform-pattern" />
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
                    <a href="<?php echo  $cta_third_fields["button_link"]["url"]; ?>" <?php echo (  $cta_third_fields["button_link"]["target"] ) ? " target='_blank' " : "" ; ?> ><?php echo  $cta_third_fields["button_link"]["title"]; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php get_footer();?>