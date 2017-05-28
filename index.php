<?php
    // get the header from header.php
    get_header();

    if (have_posts()) :  

?> 
    <div class="container">
        <div class="row">
<?php
        while(have_posts()) : 
        
            the_post();
?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <article class="index-post">
                    <div class="img-photo-polaroid">
                        <img src="<?php bloginfo('url');?>/wp-content/themes/booty/images/photo_polaroid.png">
                    </div>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('small-thumbnail'); ?>
                    </div>
                    <h2 class="label-photo-polaroid"><a href="<?php the_permalink(); ?>"> <?php the_title()?> </a></h2>
                </article>
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