<?php 
 function wpd_theme_setup(){
    register_nav_menus(array(
        'primary' => __('primary menu')
    ));
 }
 
 function wp_custom_list_class($atts, $items, $args){
    $class = 'p-2 text-muted';
    $atts ['class' ] = $class;
    return $atts;
 }
  function set_excerpt_lenght(){
    return 35;
  }

 add_action('after_setup_theme', 'wpd_theme_setup');
 add_filter('nav_menu_link_attributes','wp_custom_list_class', 10 , 3);
 add_filter('excerpt_length', 'set_excerpt_lenght');

?>