<?php
/***Va permettre d'afficher un seul article****/ 

/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">
    <h3>Single.php</h3>
<?php 
if (have_posts()):
   while(have_posts()): the_post();
        the_title('<h1>','</h1>');
        the_content();  
    endwhile;    
endif;
?>   
</main> 
<?php get_footer(); ?>