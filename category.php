<?php 
/**
 * Modèle categorie par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
<h2 class="desc"><?php echo bloginfo('description') ?>-</h2>
    <h3 class="first">category.php</h3>
    <section class="blockflex">
    <?php 
        if(have_posts()) : 
            while(have_posts()) : the_post(); ?>
            <article>
                <h1 class="post_title">
                    <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
                </h1>
                <p class="contentWp">
                <?= wp_trim_words(get_the_excerpt(),10,"&#10148"); ?>           
                </p>
            </article>
            <?php    endwhile;
            endif;
    ?>
    </section>
</main>
<?php get_footer(); ?>