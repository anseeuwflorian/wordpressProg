<?php get_header() ?>


<!-- <h1>Accueil</h1> -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="shadow-lg p-5">
        <header class="w-50 mx-auto">
                    <h1 class="text-center"><?php the_title() ?></h1>
        </header>
        <div class="text-white">
            <p><?php the_content() ?></p>
        </div>
    </article>

<?php endwhile; else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer() ?>