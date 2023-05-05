<footer class="site__footer">
    <section><?php the_custom_logo(); ?></section>
    <section>Colonne 2</section>
    <section>
        <div class="sidebar">
            <?php dynamic_sidebar( 'footer_1' ); ?>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>