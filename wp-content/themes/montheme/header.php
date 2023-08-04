<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>



<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>



<body>

    <header id="headerMain">
        <div id="logoTelMail">
            <!-- <?php if (is_active_sidebar('top-left') &&  is_active_sidebar('top-center') &&  is_active_sidebar('top-right')) : ?>
                <ul id="sidebarTop"> -->
                    <?php dynamic_sidebar('top-left') ?>

                    <?php dynamic_sidebar('top-center') ?>

                    <?php dynamic_sidebar('top-right') ?>
                <!-- </ul>
            <?php endif; ?> -->
        </div>



        <div id="navBar">
            <div> <?= get_bloginfo('name') ?></div>
            <!-- On appelle le menu -->
            <?php wp_nav_menu(['theme_location' => 'principal', 'container' => 'nav']) ?>
            <!-- affichage du form de recherche -->
            <span>
                <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Recherche</button>
            </form> -->
                <!-- on utilise le fichier searchform.php -->
                <?php get_search_form() ?>
            </span>
        </div>
    </header>
    <main>
        <div class="container">