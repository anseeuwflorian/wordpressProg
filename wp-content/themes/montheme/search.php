<?php get_header() ?>

<h1>Résultat de votre recherche</h1>

<div class="container">
    <div class="row justify-content-around">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article class="card col-3 mx-2">
                    <h2 class="card-header"><?php the_title() ?></h2>
                    <?php the_post_thumbnail('thumbnail', ['class' => 'card-img-top img-fluid']) ?>
                    <p><?php the_excerpt() ?></p>
                    <footer class="card-footer">
                        <a href="<?php the_permalink() ?>">Voir l'article</a>
                    </footer>
                </article>


            <?php endwhile; else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer() ?>