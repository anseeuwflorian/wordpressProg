<?php
/**
 * Plugin Name: Mon Plugin
 * Description: Ce pplugin ajoute le menu Webtoon à mon BackOffice, il permet de créer des post personnalisés
 */

 // Notre site contient des artciles qui parlent de films? Nous voulons ajouter une section BD (Webtoon)

function webtoonPlugin(){
    register_post_type('webtoon',[
        'label' => 'Webtoon',
        'public' => true,
        'support' => [
            'title', 'editor', 'thumbnail', 'comments', 'author', 'excerpt'
        ],
        'menu_icon' => 'dashicons-book',
        'show_in_rest' => true,
        'has_archive' => true
    ]);
};


 // le hook
 add_action('init', 'webtoonPlugin');