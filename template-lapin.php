<?php 
/**
 * Template name: Lapin
 * 
 */
 get_header(); ?>
<main class="site__main">
<?php
$widget = get_field('widget');
if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail("thumbnail") ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<a href="<?php the_field('url'); ?>"><?php the_field('url'); ?></a>
<?php dynamic_sidebar($widget); ?>
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();