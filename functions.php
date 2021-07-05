<?php

// Theme hooks
require (get_template_directory() . '/inc/theme-hooks.php');

// Custom functions
require (get_template_directory() . '/inc/custom-functions.php');

//Post Types
require (get_template_directory() . '/inc/custom-posttypes.php');
    
/**
 * Post Thumbnail
 */    
add_theme_support( 'post-thumbnails' );  

