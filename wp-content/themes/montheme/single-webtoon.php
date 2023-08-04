<?php get_header() ?>

<div class="containe p-3">
    <!-- même si je veux afficher un seul post, je dois utiliser la boucle wp -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="shadow-lg p-5">
                <header class="w-50 mx-auto">
                    <h1 class="text-center"><?php the_title() ?></h1>
                    <?php the_post_thumbnail('full', ['class' => 'img-fluid']) ?>
                </header>
                <div class="text-white">
                    <p><?php the_content() ?></p>
                </div>
            </article>
            
        <?php endwhile;else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer() ?>