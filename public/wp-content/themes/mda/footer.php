Gemini a dit
On va régler ça une bonne fois pour toutes ! Si ton footer ne prend pas toute la largeur, c'est souvent parce qu'il est coincé dans un conteneur parent (comme une div .contenu ou .site-container) qui a une largeur maximale.

Pour corriger cela, on va fermer toutes les div avant d'ouvrir le footer et utiliser des unités de mesure précises (px) pour ton padding de 250px.

1. Le PHP (footer.php)
Assure-toi de bien fermer la div du contenu global avant d'ouvrir la balise <footer>.

PHP
    </div> <footer class="piedDePage">
        <div class="footer__inner">
            
            <div class="footer__ligne"></div>

            <div class="footer__contenu">
                <div class="footer__gauche">
                    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/logo_beige.png" alt="Logo" class="footer__logo">
                    <p class="footer__description">
                        Un projet culturel en développement,<br>
                        porté par et pour la communauté.
                    </p>
                </div>

                <div class="footer__droite">
                    <div class="footer__contact">
                        <p>📍 325 Route 138, Saint-Augustin-de-Desmaures, QC, G3A 1G7</p>
                        <p>✉️ <a href="mailto:lepresbytere.arts@gmail.com">lepresbytere.arts@gmail.com</a></p>
                    </div>

                    <div class="footer__abonnement">
                        <span>Abonnez-vous pour suivre l’évolution du projet</span>
                        <a href="#" class="footer__btn">Abonnez-vous</a>
                    </div>
                </div>
            </div>

            <div class="footer__ligne"></div>

            <div class="footer__bas">
                <nav class="footer__nav">
                    <?php wp_nav_menu(array('theme_location' => 'politique', 'container' => false)); ?>
                </nav>
                <p class="footer__copyright">@2026 - Tous droits réservés</p>
            </div>

            <div class="footer__credits">
                Ce site a été réalisé par Yannick Blanchet, Sammuel Fiset Fontaine, Camille Marion et Mouhamed Syll
            </div>
            
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>