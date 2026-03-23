</div>
<footer class="piedDePage">
    <?php if (has_nav_menu('secondaire')) { ?>
        <nav class="navigation__secondaire">
            <?php wp_nav_menu(array('theme_location' => 'secondaire')); ?>
        </nav>
    <?php } ?>
    <h2><?php bloginfo('description'); ?></h2>
</footer>
<?php wp_footer(); ?>

</body>

</html>