<?php 
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
    <h3 class="first">front-page.php</h3>
    <?php 
        if(have_posts()) : 
            while(have_posts()) : the_post(); ?>
            <h1 class="post_title">
                <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
            </h1>
            <?= wp_trim_words(get_the_excerpt(),10,"&#10148"); ?>
            <hr>
    <?php    endwhile;
    endif;


    ?>
</main>
<?php get_footer(); ?>