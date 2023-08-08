<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'blankslate' ) ) );
register_nav_menus( array( 'footer-menu' => esc_html__( 'Footer Menu', 'blankslate' ) ) );
register_nav_menus( array( 'gateway-menu' => esc_html__( 'Gateway Menu', 'blankslate' ) ) );
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts() {
wp_enqueue_style( 'blankslate-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'blankslate_footer_scripts' );
function blankslate_footer_scripts() {
?>
<script>
    jQuery(document).ready(function($) {
        var deviceAgent = navigator.userAgent.toLowerCase();
        if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
            $("html").addClass("ios");
            $("html").addClass("mobile");
        }
        if (navigator.userAgent.search("MSIE") >= 0) {
            $("html").addClass("ie");
        } else if (navigator.userAgent.search("Chrome") >= 0) {
            $("html").addClass("chrome");
        } else if (navigator.userAgent.search("Firefox") >= 0) {
            $("html").addClass("firefox");
        } else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
            $("html").addClass("safari");
        } else if (navigator.userAgent.search("Opera") >= 0) {
            $("html").addClass("opera");
        }
    });
</script>
<?php
}
add_filter( 'document_title_separator', 'blankslate_document_title_separator' );
function blankslate_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'blankslate_read_more_link' );
function blankslate_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'blankslate_excerpt_read_more_link' );
function blankslate_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
}
}
add_filter( 'intermediate_image_sizes_advanced', 'blankslate_image_insert_override' );
function blankslate_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'blankslate_pingback_header' );
function blankslate_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function blankslate_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'blankslate_comment_count', 0 );
function blankslate_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
/** To add custom classes dynamically
 * Custom walker class.
 */
class innasol_walker_nav_menu extends Walker_Nav_Menu {

    // add classes to ul sub-menus
    function start_lvl( &$output, $depth = 0, $args = array()  ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
            );
        $class_names = implode( ' ', $classes );

        // build html
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // passed classes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

        // build html
        $dataTeaser = '';
        if ($depth == 1){
            $dataTeaser = 'data-teaser="'.$item->object_id.'"';
        }
        $chlidClasss = explode(" ",$class_names );
        $submenuArrrow ="";
        if (in_array('menu-item-has-children',$chlidClasss)) {
            $submenuArrrow = "<span class='sub-menu-arrow'></span>";

        }
        $output .= $indent . '<li id="menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names .'" '.$dataTeaser.'>';

        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>'.$submenuArrrow.'%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );

        // build html
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0){

        if ($depth == 1){

            $teaser_content = get_field('menu_descriptions',$item->object_id);
            if ($item->type == 'taxonomy'){
                $teaser_content = get_field('menu_descriptions',$item->object.'_'.$item->object_id);

            }

            if ($teaser_content){
                $output .= '<div class="teaser-main-box"><div class="teaser-box-seprator"></div><div class="teaser-box-seprator-2"></div><div id="teaser'. $item->object_id.'" class="teaser-box">'.$teaser_content.'</div></div></li>';
            }

        }

    }
}

add_filter( 'gettext', 'wpse6096_gettext', 10, 2 );
function wpse6096_gettext( $translation, $original )
{
    if ( 'Biographical Info' == $original ) {
        return 'Company Name';
    }
    return $translation;
}

add_action( 'wp_head', 'my_action_javascript' );

function my_action_javascript() {

        ?>
<script type="text/javascript">
    jQuery(document).ready(function() {

        jQuery(".delete_user").click(function() {

            var current_element_var = jQuery(this);

            var data = {
                'action': 'delete_user_action',
                'user_id': current_element_var.attr('delete-user-id'),
                'security': '<?php echo wp_create_nonce( "security-special-string" ) ?>'
            };
            jQuery.post('<?php echo admin_url( 'admin-ajax.php' ) ?>', data, function(response) {
                if (response == 'deleted_successfully') {
                    current_element_var.hide();
                    current_element_var.after('<button class="">User Deleted</button>');
                    current_element_var.remove();
                    location.reload();  
                }
            });
            
            return false;

        });

    });
</script>
<?php

}

add_action( 'wp_ajax_delete_user_action', 'delete_user_action_callback' );
add_action( 'wp_ajax_nopriv_delete_user_action', 'delete_user_action_callback' );

function delete_user_action_callback() {
        check_ajax_referer( 'security-special-string', 'security' );
        wp_delete_user( $_POST['user_id'] );
        echo 'deleted_successfully';
        die();

}

add_action( 'show_user_profile', 'add_profile_fields' );
add_action( 'edit_user_profile', 'add_profile_fields' );

function add_profile_fields( $user ) { ?>

<h2><?php _e("Additional Information"); ?></h2>

<table class="form-table">

<tr>
<th><label for="rank"><?php _e("Title"); ?></label></th>
<td>

<select name="title" id="title">

<option value="">Select</option>
<option value="Mr" <?php if(get_user_meta($user->ID, 'title', true) == 'Mr') echo 'selected'; ?>>Mr</option>
<option value="Mrs" <?php if(get_user_meta($user->ID, 'title', true) == 'Mrs') echo 'selected'; ?>>Mrs</option>
<option value="Sir" <?php if(get_user_meta($user->ID, 'title', true) == 'Sir') echo 'selected'; ?>>Sir</option>
<option value="Miss" <?php if(get_user_meta($user->ID, 'title', true) == 'Miss') echo 'selected'; ?>>Miss</option>
<option value="Snr" <?php if(get_user_meta($user->ID, 'title', true) == 'Snr') echo 'selected'; ?>>Snr</option>
<option value="Ms" <?php if(get_user_meta($user->ID, 'title', true) == 'Ms') echo 'selected'; ?>>Ms</option>
<option value="Rev" <?php if(get_user_meta($user->ID, 'title', true) == 'Rev') echo 'selected'; ?>>Rev</option>

</select>

</td>
</tr>
    
<tr>
<th><label for="rank"><?php _e("Verified Partner"); ?></label></th>
<td>

<select name="verified_partner" id="verified_partner">

<option value="">Select</option>
<option value="yes" <?php if(get_user_meta($user->ID, 'verified_partner', true) == 'yes') echo 'selected'; ?>>Yes</option>
<option value="no" <?php if(get_user_meta($user->ID, 'verified_partner', true) == 'no') echo 'selected'; ?>>No</option>

</select>

</td>
</tr>

</table>

<?php }

add_action( 'personal_options_update', 'save_add_profile_fields' );
add_action( 'edit_user_profile_update', 'save_add_profile_fields' );

function save_add_profile_fields( $user_id ) {

if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }

update_user_meta( $user_id, 'title', $_POST['title'] );
update_user_meta( $user_id, 'verified_partner', $_POST['verified_partner'] );

}

function button_function( $atts = array(), $content = null ) {
  
    extract(shortcode_atts(array(
     'link' => '#',
     'target' => '_self',
     'align' => 'left'
    ), $atts));
    
    return '<p style="width:100%;float:left;"><a href="'. $link .'" target="'. $target .'" class="btn btnGrey" style="line-height:1.2;color:#fff;float:'. $align .';"><span class="text">' . $content . '</span> <span class="shard"></span></a></p>';
}

add_shortcode('innasol_button', 'button_function');

function smallenvelop_login_message( $message ) {
    if ( empty($message) ){
        return "<p style='color:#fff;text-align:center'>Please click <a style='color: #8eb435 !important;text-decoration:none !important;' href='https://innasol.com/innasol-partner-gateway/register/'>here</a> to register if you don't already have a Partner account.</p>";
    } else {
        return $message;
    }
}

add_filter( 'login_message', 'smallenvelop_login_message' );

function my_login_redirect( $url, $request, $user ){
if( $user && is_object( $user ) && is_a( $user, 'WP_User' ) ) {
if( $user->has_cap( 'administrator') or $user->has_cap( 'editor')) {
$url = admin_url();
} else {
$url = home_url('/innasol-partner-gateway/');
}
}
return $url;
}
add_filter('login_redirect', 'my_login_redirect', 10, 3 );

add_action('wp_logout','auto_redirect_after_logout');
function auto_redirect_after_logout(){
wp_redirect( home_url() );
exit();
}

//Nutcracker added functions by James Maiden 2023

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Sitewide Settings',
        'menu_title'    => 'Sitewide Settings',
        'menu_slug'     => 'sitewide-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

add_image_size( 'slider', 1680, 920, true );
add_image_size( 'promo', 960, 480, true );  
add_image_size( 'six-four', 600, 400, true ); 
add_image_size( 'square-ish', 560, 480, true ); 
add_image_size( 'square', 380, 380, true );

/*
function filter_posts() {
    $catSlug = $_POST['category'];
  
    $ajaxposts = new WP_Query([
      'post_type' => 'blogs',
      'posts_per_page' => 20,
      'category_name' => $catSlug,
      'orderby' => 'date', 
      'order' => 'desc',
    ]);
    $response = '';
  
    if($ajaxposts->have_posts()) {
      while($ajaxposts->have_posts()) : $ajaxposts->the_post();
        $response .= get_template_part('partials/post-content');
      endwhile;
    } else {
      $response = 'empty';
    }
  
    echo $response;
    exit;
  }
  add_action('wp_ajax_filter_posts', 'filter_posts');
  add_action('wp_ajax_nopriv_filter_posts', 'filter_posts');
*/
//////

  add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');

function misha_filter_function(){
	$args = array(
		'orderby' => 'date', // we will sort posts by date
		'order'	=> $_POST['date'] // ASC or DESC
	);
 
	// for taxonomies / categories
	if( isset( $_POST['categoryfilter'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $_POST['categoryfilter']
			)
		);

	// if you want to use multiple checkboxed, just duplicate the above 5 lines for each checkbox
 
	$query = new WP_Query([
        'post_type' => 'blogs',
        'posts_per_page' => 20,
        'category_name' => $catSlug,
        'orderby' => 'date', 
        'order' => 'desc',
      ]);
	
	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post();
			echo '<h2>' . $query->post->post_title . '</h2>';
		endwhile;
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;
	
	die();
}


////


