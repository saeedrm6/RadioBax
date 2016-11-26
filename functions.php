<?php

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_post_type_support( 'support', 'thumbnail' );
}

@ini_set( 'upload_max_size' , '100M' );
@ini_set( 'post_max_size', '100M');
@ini_set( 'max_execution_time', '300' );

remove_filter('the_content', 'wpautop');
 
$GLOBALS[ 'index_check' ] = 0;
$GLOBALS[ 'index_result' ] = 0;

$GLOBALS[ 'index_keywords' ] = 0;

?>