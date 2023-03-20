<?php 
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
<h2 class="desc"><?php echo bloginfo('description') ?>-</h2>
<h3 class="first">front page</h3>
    <section class="blocflex">
    <?php 
        if(have_posts()) : 
            while(have_posts()) : the_post(); ?> 
            <?php 
            $mon_template = "4w4";
            if(in_category('galerie')){
                $mon_template = "galerie";
            }
            get_template_part("template-parts/categorie", $mon_template) ?>
            <?php    endwhile;
            endif;
            ?>
            
    </section>
</main>
<?php get_footer(); ?>