<?php

    // get the header from header.php
    get_header();

    if (have_posts()) :
        while(have_posts()) : the_post(); ?>
    
    <div class="container">
        <article class="post">
            <h2><a href="<?php the_permalink(); ?>"> <?php the_title()?> </a></h2>
            <?php the_content(); ?>
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