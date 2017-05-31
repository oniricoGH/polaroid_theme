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

/* Navigation menus */
register_nav_menus(array(
    'primary' => __('Primary navigation menu')

    ));

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 -- Header background color --
 */
function customizer_header_background_color( $wp_customize ) {
    /* 1. Create the new section */
    $wp_customize->add_section(
        'section_header_background_color',
        array(
            'title' => 'Header Background Color',
            'description' => 'You can set the header background color',
            'priority' => 35,
        )
    );
    
    /* 2. Register the new setting */
    $wp_customize->add_setting(
        'setting_header_background_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    
    /* 3.  Give control over the new setting */
    /* Share the add_setting ID */
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'setting_header_background_color',
            array(
                'label' => 'Put the color hex code here:',
                'section' => 'section_header_background_color',
                'settings' => 'setting_header_background_color',
            )
        )
    );
}

add_action( 'customize_register', 'customizer_header_background_color' );

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 -- HTML footer text --
 */
function customizer_footer_text_html( $wp_customize ) {
    /* 1. Create the new section */
    $wp_customize->add_section(
        'section_footer_text_html',
        array(
            'title' => 'Footer HTML text',
            'description' => 'You can set the footer text in HTML format',
            'priority' => 35,
        )
    );
    
    /* 2. Register the new setting */
    $wp_customize->add_setting(
        'setting_footer_text_html',
        array(
            'default' => 'Default copyright text',
            'sanitize_callback' => 'example_sanitize_text',
        )
    );
    
    /* 3.  Give control over the new setting */
    /* Share the add_setting ID */
    $wp_customize->add_control(
        'setting_footer_text_html',
        array(
            'label' => 'Copyright text',
            'section' => 'section_footer_text_html',
            'type' => 'text',
        )
    );
}

function example_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

add_action( 'customize_register', 'customizer_footer_text_html' );



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