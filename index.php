<?php
    // get the header from header.php
    get_header();

    if (have_posts()) :  

?> 
    <div class="container-fluid index-container-fluid">
        <div class="row">
<?php
        while(have_posts()) : 
        
            the_post();
?>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="index-post">
                    <div class="img-photo-polaroid">
                        <img alt="polaroid blank photo " src="<?php bloginfo('url');?>/wp-content/themes/booty/images/photo_polaroid_204x253.png">
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <div class="img-highlight-index">
                            <?php the_post_thumbnail('small-thumbnail'); ?>
                        </div>
                    </a>
                    <h2 class="label-photo-polaroid"><a href="<?php the_permalink(); ?>"> <?php the_title()?> </a><br /><p><?php the_time('j F, Y'); ?></p></h2>
                </div>
            </div>
<?php
    endwhile;
?>
        </div> <!-- row -->
    </div> <!-- container -->       
<?php
    else :

        echo '<p> No content found </p>';

    endif;

    // get the footer from footer.php
    get_footer();

?>