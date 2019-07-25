<?php


// ADD STYLESHEETS
function behshad_enqueue_styles() {
  //wp_enqueue_style( name/handle, source, dependencies array, version/String or boolean, media/String(all, print, screen));
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i', false );
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css',array('bootstrap','google-fonts'));
  wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'behshad_enqueue_styles');

//ADD JAVASCRIPT
function behshad_enqueue_scripts() {
  //wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer(BOOL) );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ,'bootstrap'));
}
add_action( 'wp_enqueue_scripts', 'behshad_enqueue_scripts');


//ADD CUSTOM MENU
function behshad_custom_new_menu() {
  // register_nav_menu('my-custom-menu',__( 'Behshad Custom Menu' ));
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'Behshad Custom Menu' ),
      'my-other-custom-menu' => __( 'Behshad Other Custom Menu' )
    )
  );
}
add_action( 'init', 'behshad_custom_new_menu' );

// https://github.com/dupkey/bs4navwalker#bs4navwalker
require_once('bs4navwalker.php');

// Remove Content edit box from ALL pages
// add_action('admin_init', 'remove_textarea');
// function remove_textarea() {
//         remove_post_type_support( 'page', 'editor' );
// }

// Hide the WordPress Content Editor on a Specific Page
add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  $pagetitle = get_the_title($post_id);
  if($pagetitle == 'ACF Page'){
    remove_post_type_support('page', 'editor');
  }
}

// Hide the WordPress Content Editor on Multiple Pages
// add_action( 'admin_init', 'hide_editor' );
// function hide_editor() {
//   $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
//   if( !isset( $post_id ) ) return;
//   $about = get_the_title($post_id);
//   $contact = get_the_title($post_id);
//   if($about == 'About' || $contact == 'Contact'){ 
//     remove_post_type_support('page', 'editor');
//   }
// }


//SHORTCODE EXAMPLES
function shortcode_text() {
  return 'WOW! This text is generated using a shortcode in function.php!';
}
add_shortcode('SampleTextComingFromShortcode', 'shortcode_text');


function update_text( $atts, $content = null ) {
  return '<p class="text-uppercase text-danger lead">'.$content.'</p>';
}
add_shortcode("modifyThisText", "update_text");


function custom_link($atts, $content = null) {
  extract(shortcode_atts(array(
      "to" => $to,
      "class" => $class,
      "foo" => $foo
  ), $atts));
  return '<a href="'.$to.'" class="'.$class.'" foo="'.$foo.'">'.$content.'</a>';
}
add_shortcode("linkToMyWebsite", "custom_link");


function social_button_shortcode($type) {
  extract(shortcode_atts(array(
      'type' => 'type'
  ), $type));
  // check what type user entered
  switch ($type) {
    
      case 'twitter':
          return '<a href="https://twitter.com/beshadghorbani">
                                <i class="fab fa-twitter fa-2x"></i>
                        </a>';
          break;
      case 'github':
          return '<a href="https://www.github.com/beshad">
                                <i class="fab fa-github fa-2x"></i>
                        </a>';
          break;
      case 'linkedin':
          return '<a href="https://www.linkedin.com/in/beshadghorbani">
                            <i class="fab fa-linkedin fa-2x"></i>
                      </a>';
          break;
  }
}
add_shortcode('socialButton', 'social_button_shortcode');

// OR enclosing tag
function custom_social_button_shortcode( $atts, $content = null ) {
  extract( shortcode_atts( array(
     'account' => 'account',
     'size' => 'size',
     'type' => 'type'
     ), $atts ) );

  return '
      <a href="https://'.$type.'.com/' . esc_attr($account) . '">
            <i class="fab fa-'.$type.' fa-'.$size.'x"></i>
      </a>
      <p>'.$content.'</p>
  ';
}
add_shortcode('customSocialButton', 'custom_social_button_shortcode');

// Embed YouTube video
function youtube_shortcode($atts) {
	extract(shortcode_atts(array(
		"source" => $source,
		"width" => $width,
		"height" => $height
  ), $atts));
  return '
  <iframe width="'.$width.'" height="'.$height.'" src="'.$source.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  ' ; 
}
add_shortcode('embededYoutubeVideo', 'youtube_shortcode');

// adding an action example
add_action( 'insert_text_here' , 'add_some_text' ); 
function add_some_text() { 
	echo "<p style='color:red;'>This text is added here to bottom of header tag via an action in function.php!</p>";
}

// adding a filter example
add_filter( 'the_title', 'simple_filter_example' );
// Where $priority is default 10, $accepted_args is default 1.
function simple_filter_example($title) {
	return 'I am in function.php and hooking myself to title: ' . $title;
}

add_filter( 'the_content', 'filter_hook_example' );
// Where $priority is default 10, $accepted_args is default 1.
function filter_hook_example($content) {
  $content .= '<p>Example Text added to end of the_content</p>';
	return $content;
}

// remove posts from sidebar menu
function remove_menus(){
  
  // remove_menu_page( 'index.php' );                  //Dashboard
  // remove_menu_page( 'jetpack' );                    //Jetpack* 
  remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  // remove_menu_page( 'themes.php' );                 //Appearance
  // remove_menu_page( 'plugins.php' );                //Plugins
  // remove_menu_page( 'users.php' );                  //Users
  // remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings
  
}
add_action( 'admin_menu', 'remove_menus' );


// Remove WP admin dashboard widgets
function isa_disable_dashboard_widgets() {
  remove_meta_box('dashboard_right_now', 'dashboard', 'normal');// Remove "At a Glance"
  remove_meta_box('dashboard_activity', 'dashboard', 'normal');// Remove "Activity" which includes "Recent Comments"
  remove_meta_box('dashboard_quick_press', 'dashboard', 'side');// Remove Quick Draft
  remove_meta_box('dashboard_primary', 'dashboard', 'core');// Remove WordPress Events and News
}
add_action('admin_menu', 'isa_disable_dashboard_widgets');

// example custom dashboard widget
function custom_dashboard_widget() {
	echo "<p>Hello, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi officia ad suscipit reiciendis exercitationem expedita animi sequi, recusandae illo saepe nemo inventore omnis harum, eligendi fugit excepturi ipsam, corrupti vitae? ...</p>";
}
function add_custom_dashboard_widget() {
	wp_add_dashboard_widget('custom_dashboard_widget', 'How to create custom something in WordPress dashboard area', 'custom_dashboard_widget');
}
add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');