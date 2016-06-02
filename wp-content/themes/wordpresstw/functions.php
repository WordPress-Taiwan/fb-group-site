<?php

/*------------------------------------*\
    增加主題支援
\*------------------------------------*/

if (!isset($content_width)) {
    $content_width = 900;
}
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true);                                                                                 // 大尺寸縮圖
    add_image_size('medium', 250, '', true);                                                                                // 中尺寸縮圖
    add_image_size('small', 120, '', true);                                                                                 // 小尺寸縮圖
    add_image_size('custom-size', 700, 200, true);                                                                          // 自定義縮圖 the_post_thumbnail('custom-size');
    add_theme_support('automatic-feed-links');
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');                                           //載入翻譯檔
}

/*------------------------------------*\
	要載入的檔案
\*------------------------------------*/

//include_once "include/post-type/cpt1.php";                                                                                  // 載入自定義文章
include_once "include/nav/nav.php";                                                                                         // 載入選單
include_once "include/widget/widget.php";                                                                                   // 載入側邊欄小工具

function html5blank_header_scripts() {                                                                                      // 載入js檔
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), null); // Modernizr
        wp_enqueue_script('modernizr');
        wp_register_script('plugin', get_template_directory_uri() . '/js/plugin.js', array(), null); // Modernizr
        wp_enqueue_script('plugin'); 
        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null); // Custom scripts
        wp_enqueue_script('html5blankscripts');
    }
}
function html5blank_styles() {                                                                                              // 載入css檔
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), null, 'all');
    wp_enqueue_style('normalize'); 
    wp_register_style('html5blank', get_template_directory_uri() . '/css/style.css', array(), null, 'all');
    wp_enqueue_style('html5blank'); 
}

/*------------------------------------*\
    要移除的功能
\*------------------------------------*/
function html5_style_remove($tag){return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);}                           // 移除 text/css
function my_wp_nav_menu_args($args = ''){$args['container'] = false;return $args;}                                          // 移除選單的div
function my_css_attributes_filter($var){return is_array($var) ? array() : '';}                                              // 移除選單多餘的ID
function remove_category_rel_from_category_list($thelist){return str_replace('rel="category tag"', 'rel="tag"', $thelist);} // 移除分類invalid rel
function my_remove_recent_comments_style() {                                                                                // 移除最新留言style
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}
function remove_thumbnail_dimensions( $html ) {                                                                             // 移除特色圖片長寬屬性
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

/*------------------------------------*\
    修改原有的功能
\*------------------------------------*/
function html5_blank_view_article($more) {                                                                                  // 自定閱讀全文按鈕
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}
function html5blankgravatar ($avatar_defaults) {                                                                            // 自定大頭貼
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}
function enable_threaded_comments() {                                                                                       // 自定留言格式
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}
function html5blankcomments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
?>
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment-author vcard">
    <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
    <?php printf(__('<span class="fn">%s</span>'), get_comment_author_link()) ?>
<?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
    <br />
<?php endif; ?>
    <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
        <?php
            printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
        ?>
    </div>
    <div class="clearfix"></div> 
    </div>
    <?php comment_text() ?>
    <div class="reply">
    <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
<?php }

/*------------------------------------*\
    新加入的功能
\*------------------------------------*/

// 加入 body class 名稱
function add_slug_to_body_class($classes) {
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }
    return $classes;
}

// 分頁導覽
function html5wp_pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}
function html5wp_index($length){return 20;}         // 首頁文章摘要 html5wp_excerpt('html5wp_index');
function html5wp_custom_post($length){return 40;}   // 內頁文章摘要 html5wp_excerpt('html5wp_custom_post');
function html5wp_excerpt($length_callback = '', $more_callback = '') {
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// infinite scroll
function wp_infinitepaginate(){ 
    $loopFile        = $_POST['loop_file'];
    $paged           = $_POST['page_no'];
    $posts_per_page  = get_option('posts_per_page');
 
    # Load the posts
    query_posts(array('paged' => $paged )); 
    get_template_part( $loopFile );
 
    exit;
}

/*------------------------------------*\
    後臺相關功能
\*------------------------------------*/

function new_login_logo() {                                                             /* 自訂登入畫面LOGO */ 
     echo '<style type="text/css">.login h1 a { background-image:url('.get_template_directory_uri().'/img/femtopath-dashboard.png) !important; background-size: 270px 164px!important; width:270px!important; height:164px !important; }</style>';
}
function custom_loginlogo_url($url) { return get_bloginfo('url'); }                     /* 變更自訂登入畫面上LOGO的連結 */ 
function put_my_title(){ return ('FemtoPath'); }                                        /* 變更自訂登入畫面上LOGO的Hover所出現的標題 */
function remove_wp_logo( $wp_admin_bar ) { $wp_admin_bar->remove_node( 'wp-logo' ); }   /* 移除控制台左上角WP-LOGO */ 
function custom_dashboard_footer () {                                                   /* 修改後台底下的wordpress文字宣告 */ 
    echo '官網維護單位 : <a href="#">自定</a>。後台如有任何問題, 請聯絡<a href="#">自定</a>'; 
}     
function change_footer_admin () {return '&nbsp;';}                                      /* 隱藏後台右下角wp版本號 */ 
function change_footer_version() {return ' ';}

/* 強制關閉後台登入首頁的小工具 */ 
function wpc_dashboard_widgets() {
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);        // 活動
    //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);        // 現況
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);  // 近期迴響
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);   // 收到新鏈結
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);          // 外掛
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);        // 快貼
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);      // 近期草稿
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);            // WordPress Blog
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);          // Other WordPress News
}

/*------------------------------------*\
	Actions + Filters 
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination
add_action( 'login_head', 'new_login_logo' );
add_action('wp_dashboard_setup', 'wpc_dashboard_widgets');
add_action('wp_ajax_infinite_scroll', 'wp_infinitepaginate');           // for logged in user
add_action('wp_ajax_nopriv_infinite_scroll', 'wp_infinitepaginate'); 

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('welcome_panel', 'wp_welcome_panel');

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images
add_filter( 'login_headerurl', 'custom_loginlogo_url' );
add_filter('login_headertitle', 'put_my_title');
add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );
add_filter('admin_footer_text', 'custom_dashboard_footer');
add_filter('admin_footer_text', 'change_footer_admin', 9999);
add_filter( 'update_footer', 'change_footer_version', 9999);

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

?>
