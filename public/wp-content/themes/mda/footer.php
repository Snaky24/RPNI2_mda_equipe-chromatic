</div>
<footer class="piedDePage">
    <div class="separateur__footer">
        <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/line1_footer.png" alt="Girl in a jacket">
    </div>
    <div class="main__footer">
        <div class="footer__logo">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/logo_beige.png" alt="Logo">
            </a>
        </div>
    </div>
    <div class="footer__hr">
        <hr class="hr_beige">
    </div>
    <div class="footer__politque">
        <?php if (has_nav_menu('politique')) { ?>
            <nav class="navigation__politique">
                <?php wp_nav_menu(array('theme_location' => 'politique')); ?>
            </nav>
        <?php } ?>
        <p class="credit">@2026&#160;-&#160;Tous droits réservés</p>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>