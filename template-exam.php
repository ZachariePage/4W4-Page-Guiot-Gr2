<?php 
/**
 * Template name: Exam
 * 
 */
 get_header(); ?>
<main class="site__main">

<div class="blanc">
<?php
if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail("thumbnail") ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<p>L'adresse de l'evénement<?php the_field('adresse'); ?></p>
<p>La date et l'heure de l'événement<?php the_field('date_et_heure_de_levenement'); ?></p>     
<?php endif;?>
</div>
</main><!-- #main -->
<?php
get_footer();