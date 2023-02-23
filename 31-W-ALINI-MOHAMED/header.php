<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entete</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="site__entete">  
        <section class="logomenu">
            <?php the_custom_logo(); ?> 
            <?php wp_nav_menu(array(
                'menu' => 'entete',
                'container' => 'nav'
            )); ?> 
            <?= get_search_form(); ?>    
        </section>
        <h1><a href="<?php  bloginfo('url'); ?>"><?php  bloginfo('name'); ?></a></h1>  <!-- H1 avec un lien a l'inter -->
        <h2><?php  bloginfo('description'); ?></h2>
    </header>
    



<!-- Le bloginfo est une fonction de WordPress qui permet de récupérer des informations sur le site Web et de les afficher dans des templates ou des articles. Cette fonction peut être utilisée pour afficher des informations telles que le nom du site, l'URL du site, la description du site, l'adresse e-mail de l'administrateur du site, entre autres. -->