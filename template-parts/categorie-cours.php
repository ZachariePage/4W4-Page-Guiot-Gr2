<?php $titre =  get_the_title(); $titre_long = substr($titre,7,-5);?>
<article class=" blocflex__article">         
               <h2><a href="<?php the_permalink(); ?>"> <?= substr($titre,0,7); ?></a></h2>
               <h5 class="titreCategorieCour"><?= $titre_long; ?></h5>
               <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
               <h5>{60}</h5>
</article>