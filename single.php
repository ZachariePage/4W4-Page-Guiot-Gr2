<?php 
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="single">
<h2 class="descSingle"><?php echo bloginfo('description') ?>-</h2>

    <?php 
        if(have_posts()) : 
            while(have_posts()) : the_post();
            ?><div class="singleDiv"><?php

           
            the_title('<h1 class="titleSingle">',' ! ! !', '</h1>');
            the_post_thumbnail("thumbnail");
            echo get_the_id();
            the_content('<p class="contentSingle">','</p>'); ?>
             </div>
            
            <?php
        endwhile;
    endif;


    ?>
</main>
<?php get_footer(); ?>