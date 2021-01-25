<?php
/*
Plugin Name: Category Dog
Description: Limit the categories that can be posted for each user
Version: 1.0.0
Author: Takaomi Ogawa
License: MIT
Text Domain: category-dog
*/
define( 'CATDOG_VERSION', '1.0.0' );
define( 'CATDOG_DIR', plugin_dir_path( __FILE__ ) );

require_once( CATDOG_DIR . 'class-category-dog.php' );


if( is_admin() ){
  add_action( 'init', array( 'Category_Dog', 'init' ) );
}