<?php
    // get the header from header.php
    get_header();

    if (have_posts()) :  

?> 
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