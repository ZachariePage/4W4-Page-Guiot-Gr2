<article class="blocflex__article">
    
                <h3 class="post_title">
                    <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
                </h3>
                <?php 
                if(has_post_thumbnail()){
                    the_post_thumbnail("thumbnail");
                }
                else{echo get_the_post_thumbnail(40,'thumbnail');}

                 ?>
                <p>
                <?= wp_trim_words(get_the_excerpt(),10,"&#10148"); ?>           
                </p>
            </article>