<?php // Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {  
	$filetype = wp_check_filetype( $filename, $mimes );
  
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  /* to add external files in to it */
function add_scripts()
{
    /* **Main JQuery Included** */
     //wp_enqueue_script('jquery-js', get_stylesheet_directory_uri().'/js/lib/jquery.min.js');
    /**Font-Awesome Included***/
    // wp_enqueue_style('fontawesome-css', get_stylesheet_directory_uri() . '/css/fontawesome.css');
    // wp_enqueue_style('fontawesome-css', get_stylesheet_directory_uri() . '/css/fontawesome.min.css');
      /* bootstrap style-css-js included */
  wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri().'/css/bootstrap/bootstrap.css');
  // wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/js/bootstrap.min.js');
  /* parallex */
  // wp_enqueue_script('parallax-js', get_stylesheet_directory_uri().'/js/parallax.min.js');
  // wp_enqueue_script('wow.min-js', get_stylesheet_directory_uri().'/js/wow.min.js');

  // wp_enqueue_script('tilt-jquery-js', get_stylesheet_directory_uri().'/js/tilt.jquery.min.js');
  // wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/css/animate.css');
  // wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/css/animate.min.css');
  /* style.css included */
  // wp_enqueue_style('twenty-twenty-one-style', get_stylesheet_directory_uri() . '/style.css');
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  
  wp_enqueue_style('twenty-twenty-one-style', get_stylesheet_directory_uri() . '/style.min.css');
  if( is_page("blog") || is_singular( 'post' ) || is_search()){
		wp_enqueue_style( 'blog-style', get_stylesheet_directory_uri() . '/css/blog-style.min.css' );
	}
  if( is_page_template('template/home.php')){
    wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri().'/css/slick.css');
    wp_enqueue_style( 'home-style', get_stylesheet_directory_uri() . '/css/home-style.css' );
	}
  if( is_page_template(array('template/home.php','template/game-page.php', 'template/contact-us.php'))){
    wp_enqueue_style( 'common-style', get_stylesheet_directory_uri() . '/css/common-style.css' );
	}
  if(is_page_template('template/game-page.php')){
    wp_enqueue_style( 'game-style', get_stylesheet_directory_uri() . '/css/game-style.css' );
	}
  if(is_page_template('template/contact-us.php')){
    wp_enqueue_style( 'game-style', get_stylesheet_directory_uri() . '/css/contact-style.css' );
	}
}
add_action('wp_enqueue_scripts', 'add_scripts');
/*****---------------------------  widget registration  - -------------------------****/
function twentytwenty_custom_widget_registration()
{

    // Arguments used in all register_sidebar() calls.
    $shared_args = array(
        'before_title' => '<h2 class="widget-title subheading heading-size-3">',
        'after_title' => '</h2>',
        'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
        'after_widget' => '</div></div>',
    );
    // Top Header Contact Widget.
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name' => __('Social Share', 'fansportiz'),
                'id' => 'sidebar-2',
                'description' => __('Social Icons ', 'fansportiz'),
            )
        )
    );
    // Blog Sidebar
    register_sidebar(
      array_merge(
          $shared_args,
          array(
              'name' => __('Blog Sidebar', 'fansportiz'),
              'id' => 'blog-sidebar',
              'description' => __('Blog Sidebar content ', 'fansportiz'),
          )
      )
  );
}
add_action('widgets_init', 'twentytwenty_custom_widget_registration');
/* footer menu */
function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		'footer-nav' => __( 'footer-nav' ),
    'header-new-menu' => __( 'header-new-menu' )
	  )
	);
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  function fans_body_class($classes) {
    if(is_page("blog") || is_singular( 'post' )){
      $classes[] = 'secondary-header';
    }
    return $classes;
}

add_filter('body_class', 'fans_body_class');

function richedit_wp_cloudfront () {
   add_filter('user_can_richedit','__return_true');
}

add_action( 'admin_init', 'richedit_wp_cloudfront', 9 );
/* load more  */
/*/---- Ajex Function For loadmore Browse Apartments ----/*/
add_action('wp_ajax_loadMorePostsFuncAjax', 'loadMorePostsFuncAjax');
add_action('wp_ajax_nopriv_loadMorePostsFuncAjax', 'loadMorePostsFuncAjax');
function loadMorePostsFuncAjax()
{
    if (!isset($_POST['page-no']) || empty($_POST['page-no'])) {
        echo 'No Results Found!';
        exit;
    }
    ob_start();

    $blogpostArgs = array(
        'post_type' => 'post',
        'paged' => $_POST['page-no'],
        'posts_per_page' => 3,
        'post_status' => 'publish',
    );
    $blogpost = new WP_Query($blogpostArgs);
    if ($blogpost->have_posts()) {add_filter('the_content', 'wpautop');
        $pagecount = $blogpost->max_num_pages;?>
    <?php while ($blogpost->have_posts()): $blogpost->the_post();?>
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
    <?php endwhile;?>
    <?php } else {
        echo __('No Results Found!', 'Fansportiz');
    }
    wp_reset_postdata();
    echo ob_get_clean();
    exit;
}
/* Shortcode Blog Cta */
function Blog_cta($atts)
{  
  ob_start();
  extract(shortcode_atts(array(
    'title' => "title",
    'btntext' => "btntext",
    'description' => "desc"
  ), $atts));?>
  <div class="blogctasection" style="background:url('https://www.fansportiz.com/wp-content/uploads/2023/05/blog-cta-bg.jpg')no-repeat center center/cover;">
    <div class="blog-ctacontent">
        <div class="txtbox">
          <h2><?php echo $atts['title']; ?> </h2>
          <h6><?php echo $atts['description']; ?> </h6>
        </div>
        <a href="https://www.fansportiz.com/#form-section" class="theme-btn red-btn"><?php echo $atts['btntext']; ?> </a>
    </div>  
  </div>
  <?php
  return ob_get_clean();
}
add_shortcode('Blog_cta','Blog_cta');

add_filter( 'get_custom_logo', function ( $html ) {
  $width = '100';
  $height = '120';
  
  return str_replace(
      '<img src=',
      '<img width="' . $width . '" height="' . $height . '" src=',
      $html
   );
  } );


/* -------------------------------------------------------------------
------------------------ ADD CUSTOM CF7 TAGS -------------------------
------------------------------------------------------------------- */
add_action('wpcf7_init', 'fansportiz_cloudfront_tag');
function fansportiz_cloudfront_tag()
{
	wpcf7_add_form_tag('fansportiz_cloudfront_data', 'fansportiz_cloudfront_data');
}
function fansportiz_cloudfront_data()
{
	ob_start();
	$url = home_url();
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	// TRUE to exclude the body from the output.
	curl_setopt($ch, CURLOPT_NOBODY, 0);
	$response = curl_exec($ch);

	// After curl_exec
	$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
	$header = substr($response, 0, $header_size);
	$body = substr($response, $header_size);

	$headers = [];
	$url = home_url();
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt(
		$ch,
		CURLOPT_HEADERFUNCTION,
		function ($curl, $header) use (&$headers) {
			$len = strlen($header);
			$header = explode(':', $header, 2);
			if (count($header) < 2) // ignore invalid headers
				return $len;

			$headers[strtolower(trim($header[0]))][] = trim($header[1]);

			return $len;
		}
	);
	$response = curl_exec($ch);
?>
	<input type="hidden" name="time_zone" value="<?php echo $headers['cloudfront-viewer-time-zone'][0]; ?>">
	<input type="hidden" name="viewer_address" value="<?php echo $headers['cloudfront-viewer-address'][0]; ?>">
	<input type="hidden" name="country_region_name" value="<?php echo $headers['cloudfront-viewer-country-region-name'][0]; ?>">
	<input type="hidden" name="country_name" value="<?php echo $headers['cloudfront-viewer-country-name'][0]; ?>">
	<input type="hidden" name="city_name" value="<?php echo $headers['cloudfront-viewer-city'][0]; ?>">
	<input type="hidden" name="country_code" value="<?php echo $headers['cloudfront-viewer-country'][0]; ?>">
	<input type="hidden" name="region_code" value="<?php echo $headers['cloudfront-viewer-country-region'][0]; ?>">
<?php
	return ob_get_clean();
}