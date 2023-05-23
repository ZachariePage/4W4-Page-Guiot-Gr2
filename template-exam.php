<?php 
/**
 * Template name: Exam
 * 
 */
 get_header(); ?>
<main class="site__main">

<div class="blanc">
<div><h3>Les atelier du TIM</h3></div>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<table class="tg">
<thead>
  <tr>
    <th class="tg-6sky">Date</th>
    <th class="tg-c0hy"><?php the_field('date'); ?></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-bnpj">Heure</td>
    <td class="tg-c0hy"><?php the_field('heure'); ?></td>
  </tr>
  <tr>
    <td class="tg-bnpj">Duree</td>
    <td class="tg-c0hy"><?php the_field('duree'); ?></td>
  </tr>
  <tr>
    <td class="tg-bnpj">Local</td>
    <td class="tg-c0hy"><?php the_field('local'); ?></td>
  </tr>
  <tr>
    <td class="tg-bnpj">Formateur</td>
    <td class="tg-c0hy"><?php the_field('formatage'); ?></td>
  </tr>
</tbody>
</table>
</div>
</main><!-- #main -->
<?php
get_footer();