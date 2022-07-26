<?php
require_once get_template_directory() . '/inc/helpers.php';

// SINGLE - Default page for articles

get_header();


if ( have_posts() ){
  while( have_posts() ){ the_post();?>

    <div class="rad-gruppe"><?php
      sak([ 'size' => 'cover' ]); ?>
    </div><?php

    get_template_part('template-parts/share-icons'); ?>

    <div class="rad-gruppe article-wrap">
      <article><?php
        the_content(null,false); ?>
      </article>
    </div><?php
    
  }
} ?>

<!--
<div class="rad-gruppe">
  <div class="rad-overskrift">Les også</div>
  <div class="rad three-split"><?php 
    //sak(['img' => "https://www.stoffmagasin.no/wp-content/uploads/2022/05/makt-quiz-uten-bakgrunn-scaled.jpg"]);
    //sak(['img' => "https://www.stoffmagasin.no/wp-content/uploads/2022/02/endre.png"]);
    //sak(['img' => "https://www.stoffmagasin.no/wp-content/uploads/2022/06/trekule_55.jpg"]);
  ?></div>
</div>
-->

<?php get_footer(); ?>
