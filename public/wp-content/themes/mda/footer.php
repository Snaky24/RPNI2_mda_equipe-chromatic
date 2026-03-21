</div>
<?php echo "footer.php"; ?>
<footer class="pied_de_page">
    <?php if (has_nav_menu('secondaire')) { ?>
        <nav class="navigation__secondaire">
            <?php wp_nav_menu(array('theme_location' => 'secondaire')); ?>
        </nav>
    <?php } ?>
    <h2><?php bloginfo('description'); ?></h2>
</footer>
<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri() ?>/liaisons/js/menuwp.js"></script>
</body>

</html>