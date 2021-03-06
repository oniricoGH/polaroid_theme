<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> <?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
        <link href="<?php bloginfo('url');?>/wp-content/themes/polaroide/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php bloginfo('url');?>/wp-content/themes/polaroide/style.css" rel="stylesheet">
    </head>    
    
    <body <?php body_class(); ?>>

    <header>
        <div class="page-header" style="background-color: <?php 
                    echo get_theme_mod( 'setting_header_background_color', '#ffffff' ); ?>;">
            <h1><a href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?></a>
            <small><?php bloginfo('description'); ?></small></h1>
        </div>
    </header>