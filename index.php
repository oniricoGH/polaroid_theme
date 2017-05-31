<?php
    // Get the header from header.php
    get_header();

    if (have_posts()) :  

?> 

<!-- Main Navigation Bar -->

<nav class="navbar navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
        </div>
        <?php

            $args = array (
                'theme-location' => 'primary',
                'menu_class' => 'nav navbar-nav navbar-center',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbar-collapse-1'
            );        

            wp_nav_menu($args);
        ?>
	</div>
</nav>

<!-- Main index container -->

<div class="container-fluid index-container-fluid">
<?php
        while(have_posts()) : 
        
            the_post();
?>
    <div class="col-md-4 col-sm-6 col-xs-12 col-xxs-12">
        <div class="index-post">
            <div class="img-photo-polaroid">
                <img alt="polaroid blank photo " src="<?php bloginfo('url');?>/wp-content/themes/polaroide/images/photo_polaroid_350x427.jpg">
            </div>
            <div class="index-photo-date">
                <p><?php the_time('j F, Y'); ?></p>
            </div>
            <a href="<?php the_permalink(); ?>">
                <div class="img-featured-index">
                    <?php the_post_thumbnail('index-polaroid-thumbnail'); ?>
                </div>
            </a>
            <h2 class="label-photo-polaroid"><a href="<?php the_permalink(); ?>"> 
                <?php 
                $title=the_title('','',false);
                echo limit_text($title, 19);
                ?>
                </a></h2>
        </div>
    </div>
<?php
    endwhile;
?>
</div> <!-- container -->       
<?php
    else :

        echo '<p> No content found </p>';

    endif;

    // get the footer from footer.php
    get_footer();

?>