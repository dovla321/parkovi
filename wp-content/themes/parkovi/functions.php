




<?php



//form


add_action('wp_ajax_enquiry','enquiry_form');
add_action('wp_ajax_nopriv_enquiry','enquiry_form');

function enquiry_form(){


     if( !wp_verify_nonce($_POST['nonce'],'ajax-nonce')){

        wp_send_json_error('Nonce is incorrect',401);
        die();
     }




    $formdata=[];

    wp_parse_str($_POST['enquiry'], $formdata);


    // Admin email address

    $admin_email=get_option('admin_email');

   // Email headers

    $headers[]='Content-Type: text/html;charset=UTF-8';
    $headers[]='From: My Website <' . $admin_email . '>';
    $headers[]='Reply-to:' . $formdata['email'];

    // Who are we sanding email to?

    $send_to = $admin_email;


   //Subject

    $subject ="Poruka od" . $formdata['Ime'] . ' ' . $formdata['Prezime'];

    //Message

    $message='';

    foreach($formdata as $index => $field){

        $message .='<strong>'. $index . '</strong>:' . $field . '<br/>';
    }

    try{

        if (wp_mail($send_to, $subject, $message, $headers) ) {

            wp_send_json_success('Email poslan');
        }
        else{
            wp_send_json_error('Email greška');

        }
        
    }catch(Exception $e){

        wp_send_json_error($e->getMessage());
    }



    wp_send_json_success($formdata['fname']);
}







function set_excerpt_length(){
    return 40;
}
add_filter('excerpt_length','set_excerpt_length');





// Theme Options

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Custom image Sizes

add_image_size('blog-large',1000,550,true);
add_image_size('blog-small',300,200,true);

add_image_size('small', 600, 600, false);
add_image_size('my_custom_size', 1200, 600, true);



function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}


function add_slug_to_body_class($classes)
{
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


function remove_admin_bar()
{
    return false;
}



register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'secondary' => __('Secondary Menu'),
));

add_filter('body_class', 'add_slug_to_body_class'); 
add_filter('show_admin_bar', 'remove_admin_bar');
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args');
require_once 'class-wp-bootstrap-navwalker.php';

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

// Removes from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
// Removes from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );
add_filter( 'wpml_custom_field_original_data', 'disable_original_lang_data' );

function disable_original_lang_data(){
return;
}


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Footer',
        'menu_title'    => 'Footer',
        'menu_slug'     => 'footer',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    
    
}
add_action( 'dashboard_glance_items', 'cpad_at_glance_content_table_end' );
function cpad_at_glance_content_table_end() {
    $args = array(
        'public' => true,
        '_builtin' => false
    );
    $output = 'object';
    $operator = 'and';

    $post_types = get_post_types( $args, $output, $operator );
    foreach ( $post_types as $post_type ) {
        $num_posts = wp_count_posts( $post_type->name );
        $num = number_format_i18n( $num_posts->publish );
        $text = _n( $post_type->labels->singular_name, $post_type->labels->name, intval( $num_posts->publish ) );
        if ( current_user_can( 'edit_posts' ) ) {
            $output = '<a href="edit.php?post_type=' . $post_type->name . '">' . $num . ' ' . $text . '</a>';
            echo '<li class="post-count ' . $post_type->name . '-count">' . $output . '</li>';
        }
    }
}




function my_sidebars(){


  register_sidebar(
          

          array(

            'name'=>'Page Sidebar',
            'id'=>'page-sidebar',
            'before_title'=>'<h4 class="widget-title">',
            'after_title'=>'</h4>'


          )
  );

  register_sidebar(
          

          array(

            'name'=>'Blog Sidebar',
            'id'=>'blog-sidebar',
            'before_title'=>'<h3 class="widget-title">',
            'after_title'=>'</h3>'


          )
  );


  register_sidebar(
          

          array(

            'name'=>'Slider Sidebar',
            'id'=>'slider-sidebar',
            'before_title'=>'<h3 class="widget-title">',
            'after_title'=>'</h3>'


          )
  );

}
add_action('widgets_init','my_sidebars');

?>
