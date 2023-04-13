<?php 
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="index">
    <h1>search</h1>
    <h3>Resultat de la recherche</h3>
    <?php 
        if(have_posts()) : 
            while(have_posts()) : the_post();
            $ma_categori = "4w4";
            if (in_category('cours')){$ma_categori = "cours";}
            get_template_part('template-parts/search', $ma_categori);
            the_title('<h4>',' ! ! !', '</h4>');
            ?>
            <p><?= wp_trim_words(get_the_excerpt(),50,"[...]");?></p>
            <hr>
            <?php
        endwhile;
    endif;


    ?>
</main>
<?php get_footer(); ?>