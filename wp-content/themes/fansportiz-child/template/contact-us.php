<?php
/*
Template Name: Contact Us
 */
get_header();
?>
<div class="overflow-hidden">
    <!-- Contact Us Start -->
    <section class="contact-section overflow-hidden position-relative" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/images/contact-bg.jpg');">
        <div class="container">
            <div class="title-box mb-0 text-center white-text-box">
                <h2 class="mb-4 mb-lg-5 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">Talk to our experts</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <?php echo do_shortcode('[contact-form-7 id="f0afe4b" title="Contact form"]'); ?>
                </div>
            </div>
    </section>
    <!-- Contact Us End -->
</div>
<?php get_footer(); ?>