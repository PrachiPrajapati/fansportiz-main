<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->
<?php if(!is_front_page() && !is_page_template(array('template/home.php','template/game-page.php'))){ ?>
	<div class="cta-section bg-blue position-relative wow fadeIn common-blue-cta">
		<div class="container">
			<div class="inner-content-box">
				<div class="title-box">
					<h2 class="has-text-align-center" id="start-a-conversation">Start a Conversation</h2>
					<p class="has-text-align-center">Let’s Create Something Awesome</p>
				</div>
				<div class="is-horizontal is-content-justification-center is-layout-flex wp-container-41 wp-block-buttons">
					<div class="cta-btn wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.fansportiz.com/#form-section">talk with us</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="site-name">
				<p>© <?php echo date("Y") ?> Fansportiz | Powered By 
					<a href="https://www.yudiz.com/" target="_blank" aria-label="yudiz">
						<img width="78" height="20" width="24" height="24" loading="lazy" src="<?php echo home_url(); ?>/wp-content/uploads/2023/01/yudiz-footer-logo.svg" alt="yudiz" />
					</a>
				</p>
			</div><!-- .site-name -->
			<div class="footer-nav-menu">
		<?php
			wp_nav_menu( array( 
				'theme_location' => 'footer-nav', 
				'container_class' => 'custom-menu-class' ) ); 
			?>
		</div>
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->

</div><!-- #page -->
<a href="#banner-section" id="scroll-to-top-btn" class="scroll-to-top-btn">
	<img alt="scroll" width="24" height="24" loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/images/up-icon.svg" />
</a>
<?php wp_footer(); ?>

<script src="<?php echo get_stylesheet_directory_uri() ?>/js/lib/jquery.min.js"></script>
<!-- <script async src="<?php echo get_stylesheet_directory_uri() ?>/js/bootstrap.min.js"></script> -->
<!-- <script src="<?php echo get_stylesheet_directory_uri() ?>/js/parallax.min.js"></script> -->
<!-- <script src="<?php echo get_stylesheet_directory_uri() ?>/js/wow.min.js"></script> -->
<!-- <script src="<?php echo get_stylesheet_directory_uri() ?>/js/tilt.jquery.min.js"></script> -->
<?php if( is_page_template('template/home.php')){ ?>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/js/slick.min.js"></script>
<?php } ?>
<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "Product",
		"name": "Fansportiz",
		"url": "https://www.fansportiz.com/",
		"aggregateRating": {
			"@type": "AggregateRating",
			"ratingValue": "4.4",
			"reviewCount": "68"
		},
		"sameAs": [
			"https://www.facebook.com/Fansportiz",
			"https://www.instagram.com/fansportiz",
			"https://twitter.com/FanSportiz"
		]
	}
</script>


<script>
	jQuery(window).on("scroll", function() {
    if(jQuery(window).scrollTop() > 10) {
        jQuery(".site-header").addClass("header-style");
    } else {
       jQuery(".site-header").removeClass("header-style");
    }
});	

/* $(document).ready(function () {
            $('.js-tilt').tilt({
				axis: x
                glare: true,
                maxGlare: .01,
				axis: x
			});
		});
		$( document ).ready(function() {
		  $(".card-box").attr("data-tilt");
		  $(".feature-item").attr("data-tilt");
}); */
/* $( document ).ready(function() {
		  $(".card-box").attr("data-tilt-perspective" , "200");
		  $(".feature-item").attr("data-tilt-perspective" , "200");
}); */
/* counter */
		jQuery('.count span').each(function () {
    jQuery(this).prop('Counter',0).animate({
        Counter: jQuery(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            jQuery(this).text(Math.ceil(now));
        }
    });
});
var btn = $('#scroll-to-top-btn');

jQuery(window).scroll(function() {
  if (jQuery(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

jQuery(document).ready(function () {
	var lazy_ele = [].slice.call(document.querySelectorAll("img.yswp_lazy"));
	if ("IntersectionObserver" in window) {
		let lazy_t = new IntersectionObserver(function (lazy_ele, lazy_o) {
			lazy_ele.forEach(function (lazy_ele) {
				if (lazy_ele.isIntersecting) {
					let lazy_o = lazy_ele.target;
					(lazy_o.src = lazy_o.dataset.lzy_src), lazy_o.classList.remove("yswp_lazy"), lazy_t.unobserve(lazy_o);
				}
			});
		});
		lazy_ele.forEach(function (lazy_ele) {
			lazy_t.observe(lazy_ele);
		});
	}
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

window.addEventListener('mousemove', load, { passive: true })
window.addEventListener('scroll', load, { passive: true })
var isLoaded = false
function load() {
	if (isLoaded) return true
	isLoaded = true
	loadParalex()
	loadExtraJavascript()
	window.removeEventListener('mousemove', load)
	window.removeEventListener('scroll', load)
}

function loadParalex() {
	const width = window.innerWidth
	if(width > 1199) {
		var script = document.createElement('script');
		script.setAttribute('src','<?php echo get_stylesheet_directory_uri() ?>/js/parallax.min.js');
		script.onload = function(){		
			loadParalexAnimation()
			// console.log("Script is loaded");
		};
		document.head.appendChild(script);
	}
}

function loadExtraJavascript() {
	var animationCss = document.createElement('link');
	animationCss.setAttribute('href','<?php echo get_stylesheet_directory_uri() ?>/css/animate.css');
	animationCss.setAttribute('rel','stylesheet');
	document.head.appendChild(animationCss);

	var bsScript = document.createElement('script');
	bsScript.setAttribute('src','<?php echo get_stylesheet_directory_uri() ?>/js/bootstrap.min.js');
	document.head.appendChild(bsScript);

	var wowScript = document.createElement('script');
	wowScript.setAttribute('src','<?php echo get_stylesheet_directory_uri() ?>/js/wow.min.js');
	document.head.appendChild(wowScript);
	wowScript.onload = function(){		
		new WOW().init();
	};
	var tiltScript = document.createElement('script');
	tiltScript.setAttribute('src','<?php echo get_stylesheet_directory_uri() ?>/js/tilt.jquery.min.js');
	document.head.appendChild(tiltScript);
}

function loadParalexAnimation() {
	var scene = document.getElementById('scene');
	var parallaxInstance = new Parallax(scene);
	var scene2 = document.getElementById('scene2');
	var parallaxInstance = new Parallax(scene2);
	var scene3 = document.getElementById('scene3');
	var parallaxInstance = new Parallax(scene3);
	var scene4 = document.getElementById('scene4');
	var parallaxInstance = new Parallax(scene4);
	var scene5 = document.getElementById('scene5');
	var parallaxInstance = new Parallax(scene5);
	var scene6 = document.getElementById('scene6');
	var parallaxInstance = new Parallax(scene6);
	var scene7 = document.getElementById('scene7');
	var parallaxInstance = new Parallax(scene7);
	var scene8 = document.getElementById('scene8');
	var parallaxInstance = new Parallax(scene8);
	var scene9 = document.getElementById('scene9');
	var parallaxInstance = new Parallax(scene9);
	var scene10 = document.getElementById('scene10');
	var parallaxInstance = new Parallax(scene10);
	var scene11 = document.getElementById('scene11');
	var parallaxInstance = new Parallax(scene11);
	var scene12 = document.getElementById('scene12');
	var parallaxInstance = new Parallax(scene12);
	var scene13 = document.getElementById('scene13');
	var parallaxInstance = new Parallax(scene13);
	var scene14 = document.getElementById('scene14');
	var parallaxInstance = new Parallax(scene14);
	var scene15 = document.getElementById('scene15');
	var parallaxInstance = new Parallax(scene15);
	var scene16 = document.getElementById('scene16');
	var parallaxInstance = new Parallax(scene16);
	var scene17 = document.getElementById('scene17');
	var parallaxInstance = new Parallax(scene17);
	var scene18 = document.getElementById('scene18');
	var parallaxInstance = new Parallax(scene18);
	var scene19 = document.getElementById('scene19');
	var parallaxInstance = new Parallax(scene19);
}
</script>
<script>
	/* loadmore */
	$(document).ready(function () {		
		/* load more result Script*/  
		jQuery( "#loadmore-form-submit" ).on('submit', function( e ){
            e.stopPropagation();
            e.preventDefault();
            var cuurentForm =jQuery( this );
            var totalPages = cuurentForm.find("input[name=total-pages]").val();
            var pageNo = cuurentForm.find("input[name=page-no]");
            cuurentForm.find(".load-more-btn").hide();
            cuurentForm.find( ".loading-btn" ).show();
            jQuery.ajax({
                url : ' <?php echo admin_url( 'admin-ajax.php'); ?>',
				crossDomain: true,
                type : 'POST',
                data : cuurentForm.serialize(),
                success : function(data){
                    jQuery(".blog-list-wrap-box").append(data);
                    if( parseInt(totalPages) <=  parseInt(pageNo.val())  ){
                        cuurentForm.hide();
                    }
                    else{                           
                        pageNo.val( ( pageNo.val() ) - 1 + 2 );
                        cuurentForm.find(".load-more-btn").show();
                        cuurentForm.find( ".loading-btn" ).hide();
                    }
                },
                
            }); 
		});
});
</script>
<script>
    jQuery(document).ready(function () {
        jQuery("a").on("click",function(){
            jQuery(".title-desc").slideUp();
            jQuery(this).parent().find(".title-desc").slideToggle(); 
            jQuery('.acc-listbox').removeClass('current');
            jQuery(this).parent().addClass('current');
        });
    });
</script>
<?php if(is_page_template('template/home.php')){ ?>
<script>
jQuery(document).ready(function () {
		jQuery('.sport-we-server-det').slick({
    infinite: true,
	arrows:true,
	autoplay:true,
	autoplaySpeed: 1500,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
        breakpoint: 1199,
        settings: {
            slidesToShow: 3,
        }
        },
        {
        breakpoint: 991,
        settings: {
            slidesToShow: 2,
        }
        },
        {
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
        }
        }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
});
</script>
<?php } ?>
</body>
</html>
