<?php 
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>

<section id="evenementSection" class="blocflex">
    <?php 
    wp_nav_menu(array(
        "menu" => "evenement",
        "container" => "nav"
    ));
    wp_nav_menu(array(
        "menu" => "block-archive",
        "container" => "nav"
    ));
    ?>

</section>

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
        <section class="separateurLapin"><h3>Article de Lapin</h3></section>
        <section class="blocflex" id="lapinSection">
            <section class="sectionLapin">
                <div class="lapinPost">
                  <?php 
                  wp_nav_menu(array(
                      "menu" => "lapin",
                      "container" => "nav"
                  ));?>
                </div>
            </section>
        </section>
        
</main>
<?php get_footer(); ?>