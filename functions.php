<?php
function booty_setup() {
    
    // add feature image support
    add_theme_support('post-thumbnails');
    
    // register image sizes 
    // last param is hard crop by WP
    add_image_size('small-thumbnail', 185, 172, true);
    add_image_size('banner-image', 720, 540, true); 
}


add_action('after_setup_theme', 'booty_setup');

?>