<?php 
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>

    <?php 
        if(have_posts()) : 
            while(have_posts()) : the_post();
            the_title('<h1 class="titleSingle">',' ! ! !', '</h1>');
            the_content('<p class="contentSingle">','</p>'); ?>
            <hr>
            <?php
        endwhile;
    endif;


    ?>
</main>
<?php get_footer(); ?>