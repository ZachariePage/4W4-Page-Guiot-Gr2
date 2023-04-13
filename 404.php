<?php 
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
<div class="image">

    <h1 class="titre404">Erreur 404</h1>
    <h3 class="titre">Page introuvable, vous pouvez tentez une recherche.</h3>
    <h1 class="rechercheErreur"><?php  get_search_form(); ?></h1>
    
    <h3 class="titreErreur">Nos choix de cours</h3>
    <section class="erreur">
      <?php
      $args = array(
         'category_name' => "cours",
         'orderby' => 'title',
         'order' => 'ASC'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
         <?php 
         get_template_part("template-parts/errorNote") ?>
            
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
   </div>
   <div class="blanche">
   <h3 class="titreErreur">Les notes de cours</h3>
   <section class="erreurBlanche">
      <?php
      $args = array(
         'category_name' => "4w4",
         'orderby' => 'title',
         'order' => 'ASC'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
         <?php 
         $mon_template = "4w4";
         get_template_part("template-parts/error", $mon_template ) ?>
            
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
      </div>
   </section>
</main>
<?php get_footer(); ?>