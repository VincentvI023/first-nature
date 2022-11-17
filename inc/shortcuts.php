<?php
// Setup theme support
if ( ! function_exists( 'cross_pro_setup' ) ) :
	function cross_pro_setup() {
		load_theme_textdomain( 'cross_pro', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		/* Register Menu */
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'cross_pro' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'gallery',
			'caption',
		) );
	} endif;
add_action( 'after_setup_theme', 'cross_pro_setup' );


// ====================== \\
//   All the  shortcuts   \\
// ====================== \\


// Functie excerpt length function
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}


// Remove comments
add_action('admin_init', function () {
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

// add template folder for pages
define( 'PAGE_TEMPLATE_SUB_DIR_ONE', 'pages' );

function page_template_add_subdir( $templates = array() ) {
    if( empty( $templates ) || ! is_array( $templates ) || count( $templates ) < 3 )
        return $templates;
        $page_tpl_idx = 0;

    if( $templates[0] === get_page_template_slug() ) {
        $page_tpl_idx = 1;
    }
    $page_tpls = array( PAGE_TEMPLATE_SUB_DIR_ONE . '/' . $templates[$page_tpl_idx] );

    if( $templates[$page_tpl_idx] === urldecode( $templates[$page_tpl_idx + 1] ) ) {
        $page_tpls[] = PAGE_TEMPLATE_SUB_DIR_ONE . '/' . $templates[$page_tpl_idx + 1];
    }

    array_splice( $templates, $page_tpl_idx, 0, $page_tpls );
    return $templates;
}
add_filter( 'page_template_hierarchy', 'page_template_add_subdir' );


// Remove Yoast SEO notifications
add_filter( 'wpseo_update_notice_content', '__return_null' );

// Redirect urls wordpress
function redirect_page()
{

  if (
    isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
  ) {
    $protocol = 'https://';
  } else {
    $protocol = 'http://';
  }

  $currenturl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $currenturl_relative = wp_make_link_relative($currenturl);

  switch ($currenturl_relative) {

    case '/footer/':
      $urlto = home_url('/');
      break;

    default:
      return;
  }

  if ($currenturl != $urlto){
    exit(wp_redirect($urlto, 301));
  }
}
add_action('template_redirect', 'redirect_page');
