<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header(); ?>
<main>
    <h3>Mes articles</h3>
    <section class="blocflex">
    <?php 
    if (have_posts()):
        while (have_posts()) : the_post();
            // the_title('<h1>','</h1>');
            // the_permalink(); ?>

            <article>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <!-- the_content();    -->
                <!-- the_excerpt();   /* Permet d'afficher un résumé (le petit extrait qu'on retrouve à droite sur wordpress)  -->
                <p><?php echo wp_trim_words(get_the_excerpt(),4);   //get_the_excerpt va retourner une chaîne de caractères ?></p>
            </article>
        <?php endwhile; ?> 
     <?php endif;?>    
</main> 
    </section>
<?php get_footer(); ?>

