<!-- <?php
/**
* Template footer.php
*/
?>
<footer class="site__footer">
<h3> All rights reserved to Momo.Royal inc.</h3>
</footer>
<?php wp_footer(); ?>
</body>
</html>

 -->

<?php
/**
* Template footer.php
*/
?>
<footer class="site__footer">
<section class="footer__widget">   
    <div><?php dynamic_sidebar( 'pied-page-1' ); ?></div>
    <div><?php dynamic_sidebar( 'pied-page-2' ); ?></div>
    <div><?php dynamic_sidebar( 'pied-page-3' ); ?></div>
</section> 
<section class="footer__lien">
<div><?php wp_nav_menu(array('menu'=>'lien-externe-1',
                                         'container_class'=>'footer_lien_nav'
                                                          )); ?></div>
<div><?php wp_nav_menu(array('menu'=>'lien-externe-2',
                                         'container_class'=>'footer_lien_nav'
                                                          )); ?></div>
<div><?php wp_nav_menu(array('menu'=>'lien-externe-3',
                                         'container_class'=>'footer_lien_nav'
                                                          )); ?></div>
</section>

</footer>
<?php wp_footer(); ?>
</body>
</html>