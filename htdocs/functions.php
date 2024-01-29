<?php

function acf_files(){
  wp_enqueue_style('acf_styles', get_theme_file_uri('../src/dist/css/styles.min.css')); 
  wp_enqueue_script('scripts', get_template_directory_uri() . '/dist/js/scripts.min.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'acf_files');
register_nav_menu('headerMenuLocation', 'Header Menu Location');
?>