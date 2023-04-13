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
    <h3>Nos choix de cours</h3>
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
   <section class="blocflex">
   <h3>Les notes de cours</h3>
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
   </section>
</main>
<?php get_footer(); ?>