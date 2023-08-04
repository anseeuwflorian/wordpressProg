<?php
// <!-- Appel des fichiers de bootstrap -->
// <!-- Pour utiliser des fichiers ccs/js dans wp, il faut les ajoute rà la file d'attente de wp -->
// <!-- On commence par enregistrer des fichiers puis on les ajoute à la file d'attente -->
// <!-- Pour cela on utilise des hook -->

// fonction pour afficher l'image mise en avant des articles
function myThemeSupport(){
    // j'autorise l'utilisation d'images mises en avant dans un article
    add_theme_support('post-thumbnails');
    // j'autorise l'utilisation d'un menu
    add_theme_support('menus');
    // j'enregistre l'emplacement de mon menu
    register_nav_menu('principal', 'menu de navigation du header');
}

// le hook auquel j'accroche cette fonction
add_action('after_setup_theme', 'myThemeSupport');

//  La méthode pour ajouter mes scripts et mon css
function monThemeStyleAssets(){
    // on enregistre le style depuis l'url bootstrap
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css');
    // on l'ajoute à la file d'attente
    wp_enqueue_style( 'bootstrap' );
    // on enregistre le style en saisissant le chemin qui mène au fichier style.css
    wp_register_style('styleCss', '/wp-content/themes/montheme/style.css');
    // on l'ajoute à la file d'attente
    wp_enqueue_style( 'styleCss' );



    // wp_register_script( 'my_customizer_script', 'add_customizer_button' );
    // wp_enqueue_script( 'my_customizer_script' );


}


// add_action( 'customize_controls_print_scripts', 'add_customizer_button' );



// le hook auquel j'accroche la fonction définie plus haut
add_action('wp_enqueue_scripts', 'monThemeStyleAssets');

// création de widgets
// on doit utiliser un hook pour accrocher nos widgets
// widgets_init

function monThemeWidgetsInit(){
    // région footer
    register_sidebar([
        'name' => 'bottom-left',
        'id' => 'bottom-left',
        'description' => 'footer partie gauche'
    ]);
    register_sidebar([
        'name' => 'bottom-center',
        'id' => 'bottom-center',
        'description' => 'footer partie centre'
    ]);
    register_sidebar([
        'name' => 'bottom-right',
        'id' => 'bottom-right',
        'description' => 'footer partie droite'
    ]);
        register_sidebar([
        'name' => 'top-left',
        'id' => 'top-left',
        'description' => 'header partie gauche'
    ]);
    register_sidebar([
        'name' => 'top-center',
        'id' => 'top-center',
        'description' => 'header partie centre'
    ]);
    register_sidebar([
        'name' => 'top-right',
        'id' => 'top-right',
        'description' => 'header partie droite'
    ]);
}

// le hook
add_action('widgets_init', 'monThemeWidgetsInit');

