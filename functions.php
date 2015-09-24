<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */


$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


show_admin_bar(false);

function permalink_url($id){
    $search = array(1,2,3,4);
    $is_pro_platinum= Am_Lite::getInstance()->haveSubscriptions($search)   ;
    if ($is_pro_platinum == 1) {
        $u = get_permalink($id);
    }else{
        $u = esc_url( home_url( '/' ) )."amember/login/";
    }
    return $u;
}


function limitar_palabras( $str, $num, $append_str='' ) {
    $palabras = preg_split( '/[\s]+/', $str, -1, PREG_SPLIT_OFFSET_CAPTURE );
    if( isset($palabras[$num][1]) ){
        $str = substr( $str, 0, $palabras[$num][1] ) . $append_str;
    }
    unset( $palabras, $num );
    return trim( $str );
}

session_start();
$au = Am_Lite::getInstance();

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_common-field',
        'title' => 'Common Field',
        'fields' => array (
            array (
                'key' => 'field_55ec726cc6827',
                'label' => 'SUBMIT A REVIEW',
                'name' => 'submit_a_review',
                'type' => 'page_link',
                'post_type' => array (
                    0 => 'page',
                ),
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array (
                'key' => 'field_55ec72d961efe',
                'label' => 'Facebook Url',
                'name' => 'facebook_url',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_55ec72f1872b5',
                'label' => 'Twitter Url',
                'name' => 'twitter_url',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_55ec7303872b7',
                'label' => 'Pinterest Url',
                'name' => 'pin_terest_url',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_55ec7336872b9',
                'label' => 'Linkedin Url',
                'name' => 'linkedin_url',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_55ec734b872bb',
                'label' => 'Google Plus Url',
                'name' => 'google_plus_url',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_55ec735b872bd',
                'label' => 'Youtube Url',
                'name' => 'youtube_url',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_55ec73727ce71',
                'label' => 'Footer',
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_55ec737c7ce72',
                'label' => 'About Us Text',
                'name' => 'about_us_text',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array (
                'key' => 'field_55ec73877ce73',
                'label' => 'Address',
                'name' => 'address',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array (
                'key' => 'field_55ec739c7ce74',
                'label' => 'Copyright Text',
                'name' => 'copyright_text',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_page-banner',
        'title' => 'Page Banner',
        'fields' => array (
            array (
                'key' => 'field_55edbf5a9f15f',
                'label' => 'Page Banner',
                'name' => 'page_banner',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'side',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}

add_action( 'wp_ajax_my_action', 'wpse_126886_ajax_handler' );

function wpse_126886_ajax_handler() {

    // maybe check some permissions here, depending on your app
    //if ( ! current_user_can( 'edit_posts' ) )
    //    exit;

    //$post_data = array();
    //handle your form data here by accessing $_POST

    $title     = $_POST['title'];
    $content   = $_POST['content'];
    $post_type = 'post';
    $post_category = $_POST['reviewtype'].',1';
    
    //$campo = $_POST['campo_extra'];

    $new_post = array(
        'post_title'    => wp_strip_all_tags($title),
        'post_content'  => wp_strip_all_tags($content),
        'post_status'   => 'pending',
        'post_type'     => $post_type,
        'post_category' =>array($post_category)
    );

    $new_post_ID =wp_insert_post($new_post);

    //$new_post_ID = wp_insert_post( $post_data );

    // send some information back to the javascipt handler
    $response = array(
        'status' => '200',
        'message' => 'OK',
        'new_post_ID' => $new_post_ID,
        'title' => $_POST['title']
    );

    // normally, the script expects a json respone
    header( 'Content-Type: application/json; charset=utf-8' );
    echo json_encode( $response );

    exit; // important
}
