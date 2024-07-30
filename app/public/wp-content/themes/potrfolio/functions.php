<?php 
if(!defined('ABSPATH')) exit; // Exit if accessed directly

// Define constants
if(!defined('VERSION')){
    define('VERSION', '1.0.0');
}

// Include style and scripts
require get_template_directory() . '/inc/_custom.php';

// Post types
require get_template_directory(  ) . '/inc/-post-types.php';
?>