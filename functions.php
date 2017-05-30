<?php
function polaroide_setup() {
    
    // add feature image support
    add_theme_support('post-thumbnails');
    
    // register image sizes 
    // last param is hard crop by WP
    add_image_size('index-polaroid-thumbnail', 315, 315, true);
    add_image_size('banner-image', 720, 540, true); 
}


add_action('after_setup_theme', 'polaroide_setup');

/* https://stackoverflow.com/questions/965235/how-can-i-truncate-a-string-to-the-first-20-words-in-php */
function limit_text($text, $limit) {
      if (str_word_count($text, 0) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          $text = substr($text, 0, $pos[$limit]) . '...';
      }
      return $text;
    }



?>