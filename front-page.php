<?php 
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
    <h3>front-page.php</h3>
    <?php 
        if(have_posts()) : 
            while(have_posts()) : the_post();
            echo '<h1>' . the_title('<h1>',' ! ! !', '</h1>') . '</h1>';
            //the_content('<p>', '</p>'); ?>
            <hr>
            <?php
        endwhile;
    endif;


    ?>
</main>
<?php get_footer(); ?>