<?php 
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
<?php  get_search_form(); ?>
    <h1>404.php</h1>
    <h3>Page introuvable, vous pouvez tentez une recherche.</h3>
    <section class="blocflex">
    
            <?php get_template_part("template-parts/error") ?>
            <?php get_template_part("template-parts/errorNote") ?>
            
    </section>
</main>
<?php get_footer(); ?>