<article class="blocflex__article">
                <h3 class="post_title">
                    <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
                </h3>
                
                <p>
                <?= wp_trim_words(get_the_excerpt(),10,"&#10148"); ?>           
                </p>
            </article>