<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header(); ?>
<main>
    <code>front-page.php</code>
    <h3>Mes articles</h3>
    <section class="blocflex">
    <?php 
    if (have_posts()):
        while (have_posts()) : the_post(); ?>
        <?php 
            $ma_categorie = "note-wp";
            if (in_category('galerie')){$ma_categorie = "galerie";}
            get_template_part("template-parts/categorie", $ma_categorie);
         endwhile; 
      endif; ?>
</main> 
    </section>
<?php get_footer(); ?>
