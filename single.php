<?php
get_header();
?>

Dette er ei artikkelside!

<?php

if ( have_posts() ){

    while( have_posts() ){

        the_post();
        get_template_part('template-parts/test-content', false, ['big' => true]);

    }

}


get_footer();
?>