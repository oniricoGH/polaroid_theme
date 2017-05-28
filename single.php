<?php

    // this file specifies what is shown in the single post view

    // get the header from header.php
    get_header();

    // I think that simply the_post method could be called instead of the loop
    if (have_posts()) :
        while(have_posts()) : the_post(); ?>
    
    <div class="container">
        <article class="single-post">
            <h2><a href="<?php the_permalink(); ?>"> <?php the_title()?> </a></h2>
            <?php the_content() ?> 
        </article>
    </div>
    
    <?php
        endwhile;

    else :

        echo '<p> No content found </p>';

    endif;


    // get the footer from footer.php
    get_footer();

?>