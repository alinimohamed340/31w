<?php
// Enfiler la feuille de style
function ajouter_styles() {
    wp_enqueue_style('31w-style-principal', // id de la feuille de style
                get_template_directory_uri() . '/style.css', // adresse url de la feuille de style
                array(), // les dépendances avec les autres feuilles de style
                filemtime(get_template_directory() . '/style.css')); // la de la dernière feuille de style
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );


add_theme_support( 'html5', 
            array( 'search-form', 
                    'comment-form', 
                    'comment-list', 
                    'gallery', 
                    'caption' 
                    ) );

add_theme_support( 'title-tag' );

add_theme_support( 'custom-logo', /* configurer le logo */
                    array(
                            'height' => 150,   
                            'width'  => 150,
                        ));


/* Enreigistrement des menus */


function enregistrement_des_menus() {
    register_nav_menus( array(
        'menu_entete' => 'Menu entête', /*c'est un tableau association dont le cles pointent sur nom complet*/
        'menu_footer' => 'Menu pied de page',  /* a droite c'est la classe qui va s'inserer */
    ) );
}
add_action( 'after_setup_theme', 'enregistrement_des_menus', 0 );





