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

            <section class="text-center m-5 shadow-lg">
                <h2>Films qui pourraient vous plaire</h2>
                <!-- on veut afficher un film de la même catégorie -->
                <?php
                // on récup l'id de l'article affiché
                $id = get_the_ID();
                // cat contient la catégorie de l'article
                $cat = get_the_category($id);
                // var_dump($cat);
                // die();
                // je récup uniquement l'id
                $cat = $cat[0]->cat_ID;
                // echo $cat;
                // die();
                // je peux maintenant faire une requête pour récup le ou les films de cette catégorie
                $request = new WP_Query([
                    'post__not_in' => [$id],
                    'post_type_' => 'post',
                    'cat' => $cat,
                    'posts_per_page' => 2,
                    // 'orderby' => 'rand' // met en avant 2 articles aléatoirement par date/auteur/titre... 
                ]);

                // Code pour récupérer les id des articles de la catégorie
                $posts_ids = array();

                $args = array(
                    'cat' => $cat,
                    'posts_per_page' => -1,
                );

                $cat_query = new WP_Query($args);

                while ($cat_query->have_posts()) {
                    $cat_query->the_post();
                    $posts_ids[] = get_the_ID();
                }
                // var_dump($posts_ids);
                $idArticle = array_rand($posts_ids, 1);
                $idPost = $posts_ids[$idArticle];
                // die();
                wp_reset_postdata();
                $request = new WP_Query([
                    'post__not_in' => [$id],
                    'post_type' => 'post',
                    'cat' => $cat,
                    'p' => $idPost,
                    'posts_per_page' => 1,
                ]);

                ?>
                <!-- // var_dump($request); -->
                <!-- // on utilise la boucle wp pour afficher le résultat -->
                <div class="container">
                    <?php if ($request->have_posts()) : while ($request->have_posts()) : $request->the_post(); ?>

                            <a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium', ['class' => 'img-fluid border border-white']) ?></a>

                        <?php endwhile;
                        wp_reset_postdata();
                        ?>
                    <?php endif; ?>
                </div>

            </section>

        <?php endwhile;else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer() ?>