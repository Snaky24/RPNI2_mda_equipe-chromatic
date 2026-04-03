<footer class="piedDePage" role="contentinfo">
    <div class="footer__inner">

        <div class="footer__ligne" aria-hidden="true"></div>

        <div class="footer__contenu">
            <div class="footer__gauche">
                <img 
                    src="<?php echo get_template_directory_uri(); ?>/liaisons/images/logo_beige.png" 
                    alt="<?php bloginfo('name'); ?>" 
                    class="footer__logo"
                >

                <p class="footer__description">
                    Un projet culturel en développement,<br>
                    porté par et pour la communauté.
                </p>
            </div>

            <div class="footer__droite">
                <div class="footer__contact">
                    <address class="footer__adresse">
                        <p class="footer__item">
                            <span class="footer__icone" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="32" viewBox="0 0 25 32" fill="none">
                                    <path d="M12.5 0C9.18595 0.00378108 6.00871 1.32949 3.66532 3.6863C1.32193 6.0431 0.00375956 9.23853 0 12.5716C0 23.3288 11.3636 31.4532 11.848 31.7932C12.0391 31.9278 12.2667 32 12.5 32C12.7333 32 12.9609 31.9278 13.152 31.7932C13.6364 31.4532 25 23.3288 25 12.5716C24.9962 9.23853 23.6781 6.0431 21.3347 3.6863C18.9913 1.32949 15.8141 0.00378108 12.5 0ZM12.5 8.00008C13.399 8.00008 14.2778 8.26819 15.0253 8.77051C15.7728 9.27283 16.3554 9.9868 16.6995 10.8221C17.0435 11.6575 17.1335 12.5766 16.9581 13.4634C16.7827 14.3502 16.3498 15.1647 15.7141 15.8041C15.0784 16.4434 14.2685 16.8788 13.3868 17.0552C12.505 17.2316 11.5911 17.1411 10.7605 16.795C9.92996 16.449 9.22005 15.8631 8.72059 15.1113C8.22113 14.3596 7.95455 13.4757 7.95455 12.5716C7.95455 11.3591 8.43344 10.1964 9.28588 9.33903C10.1383 8.48172 11.2945 8.00008 12.5 8.00008Z" fill="#F1E8DC"/>
                                </svg>
                            </span>
                            <span>325 Route 138, Saint-Augustin-de-Desmaures, QC, G3A 1G7</span>
                        </p>

                        <p class="footer__item">
                            <span class="footer__icone" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                    <path d="M45 25.2V37.9219C45.0001 39.219 44.5078 40.4669 43.6241 41.4097C42.7404 42.3526 41.5323 42.9188 40.2477 42.9922L39.9625 43H19.0375C17.7508 43.0001 16.5128 42.5038 15.5775 41.613C14.6423 40.7222 14.0806 39.5044 14.0078 38.2094L14 37.9219V25.2L28.9606 33.1C29.127 33.1879 29.3121 33.2338 29.5 33.2338C29.6879 33.2338 29.873 33.1879 30.0394 33.1L45 25.2ZM19.0375 18H39.9625C41.2111 17.9998 42.4154 18.4672 43.3416 19.3114C44.2678 20.1555 44.8499 21.3164 44.9752 22.5687L29.5 30.7406L14.0248 22.5687C14.145 21.3661 14.6867 20.2461 15.5527 19.4101C16.4187 18.5741 17.5521 18.0769 18.7492 18.0078L19.0375 18Z" fill="#EDE0D0"/>
                                </svg>
                            </span>
                            <a href="mailto:lepresbytere.arts@gmail.com">lepresbytere.arts@gmail.com</a>
                        </p>
                    </address>
                </div>

                <div class="footer__abonnement">
                    <p class="footer__abonnement-texte">
                        Abonnez-vous pour suivre l’évolution du projet
                    </p>
                    <a href="#" class="footer__btn" aria-label="S’abonner pour suivre l’évolution du projet">
                        Abonnez-vous
                    </a>
                </div>
            </div>
        </div>

        <div class="footer__ligne" aria-hidden="true"></div>

        <div class="footer__bas">
            <nav class="footer__nav" aria-label="Liens légaux">
                <?php wp_nav_menu(array(
                    'theme_location' => 'politique',
                    'container'      => false,
                    'menu_class'     => 'footer__menu',
                    'fallback_cb'    => false
                )); ?>
            </nav>

            <p class="footer__copyright">© 2026 - Tous droits réservés</p>
        </div>

        <p class="footer__credits">
            Ce site a été réalisé par Yannick Blanchet, Sammuel Fiset Fontaine, Camille Marion et Mouhamed Syll
        </p>

    </div>
</footer>

<?php wp_footer(); ?>