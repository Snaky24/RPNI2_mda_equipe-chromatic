<?php get_header(); ?>

<?php
$page_nouvelles = get_pages(array(
    'meta_key'   => '_wp_page_template',
    'meta_value' => 'page-nouvelles.php',
    'number'     => 1,
));

$retour_nouvelles_url = !empty($page_nouvelles)
    ? get_permalink($page_nouvelles[0]->ID)
    : get_post_type_archive_link('nouvelles');
?>

<main class="single-nouvelle" id="contenu-principal">

    <?php if (have_posts()) : the_post(); ?>

    <?php
    // Suivant 
    // Précédent 
    $nouvelle_suivante   = get_previous_post();
    $nouvelle_precedente = get_next_post();
    $date_nouvelle       = get_post_meta(get_the_ID(), 'date_nouvelle', true);
    $date_affichee       = !empty($date_nouvelle)
        ? $date_nouvelle
        : wp_date('j F Y', get_post_timestamp(get_the_ID(), 'date'));
    $date_iso            = get_post_time('c', true);
    $a_une_image         = has_post_thumbnail();

    $titre_courant = trim(wp_strip_all_tags(get_the_title()));

    $nouvelles_contenu = array(
        'Pourquoi une Maison des arts à Saint-Augustin-de-Desmaures ?' => array(
            'date' => '20 novembre 2025',
            'contenu' => <<<HTML
<p>Ce projet est né d’une conviction : la culture doit vivre au cœur du village. Nous avons imaginé un lieu où les artistes et les citoyens se rencontrent, où le patrimoine devient un moteur de créativité. Dans cet article, découvrez les coulisses de notre démarche, nos inspirations et pourquoi nous croyons que la Maison des arts changera la vie culturelle de Saint-Augustin.</p>
<ul>
    <li>Le constat : manque d’offre culturelle locale.</li>
    <li>Notre vision : un lieu vivant, inclusif, durable.</li>
    <li>Ce que cela changera pour vous : accessibilité, rencontres, vitalité économique.</li>
    <li>Comment vous pouvez agir : s’abonner, contribuer, partager.</li>
</ul>
<p>Saint-Augustin-de-Desmaures est une ville dynamique, en pleine croissance, mais elle ne dispose d’aucun lieu dédié aux arts professionnels et à la médiation culturelle. Les citoyen·nes doivent se rendre à Québec pour accéder à une programmation spécialisée.</p>
<p>La Maison des arts répond à ce besoin en transformant le presbytère, un bâtiment patrimonial emblématique, en un espace vivant où création artistique, diffusion pluridisciplinaire et rencontres citoyennes se côtoient.</p>
<p>Ce projet s’inscrit dans une logique de culture de proximité, favorisant l’inclusion sociale, la participation citoyenne et la transmission intergénérationnelle. Il permettra :</p>
<ul>
    <li>De préserver le patrimoine bâti tout en lui donnant une vocation contemporaine ;</li>
    <li>D’offrir des résidences d’artistes et des ateliers pour les écoles et organismes ;</li>
    <li>De créer un lieu de vie culturel avec café, galerie et programmation variée.</li>
</ul>
HTML
        ),
        'Les retombées d’un projet culturel structurant pour la communauté' => array(
            'date' => '4 décembre 2025',
            'contenu' => <<<HTML
<p>La Maison des arts de Saint-Augustin-de-Desmaures n’est pas qu’un lieu culturel : c’est un levier de développement durable pour la communauté. Voici ses principaux impacts :</p>
<h2>1. Retombées sociales et culturelles</h2>
<ul>
    <li>Accessibilité à la culture pour toutes les générations, à proximité des écoles et des résidences.</li>
    <li>Renforcement du tissu social grâce à des activités intergénérationnelles et des projets de médiation.</li>
    <li>Valorisation du patrimoine par une requalification écoresponsable du presbytère.</li>
</ul>
<h2>2. Retombées économiques</h2>
<ul>
    <li>Création d’emplois locaux : coordination, billetterie, café culturel, médiation.</li>
    <li>Dynamisation des commerces : chaque spectateur dépense en moyenne 59,53 $ dans l’économie locale lors d’une sortie culturelle.</li>
    <li>Attractivité touristique : un nouveau point d’intérêt pour les excursionnistes et cyclistes en route vers Portneuf et Québec.</li>
</ul>
<p>En investissant dans la culture, nous investissons dans la qualité de vie, la cohésion sociale et la vitalité économique de notre territoire.</p>
HTML
        ),
        'Comment la culture de proximité transforme nos communautés' => array(
            'date' => '5 janvier 2026',
            'contenu' => <<<HTML
<p>La culture de proximité est bien plus qu’un concept : c’est une stratégie de développement durable pour les villes et villages. En offrant des activités culturelles accessibles, ancrées dans le quotidien des citoyen·nes, elle crée des liens, favorise l’inclusion et dynamise l’économie locale.</p>
<p>À Saint-Augustin-de-Desmaures, la Maison des arts incarne cette vision. Située au cœur du village, elle propose :</p>
<ul>
    <li>Des ateliers intergénérationnels pour rapprocher les générations ;</li>
    <li>Des résidences d’artistes qui nourrissent la création locale ;</li>
    <li>Une programmation pluridisciplinaire qui répond aux besoins exprimés par la population.</li>
</ul>
<p>Les bénéfices sont multiples :</p>
<ul>
    <li>Social : briser l’isolement, renforcer le sentiment d’appartenance ;</li>
    <li>Économique : chaque dollar investi en culture génère 1,22 $ dans l’économie locale ;</li>
    <li>Patrimonial : préserver et valoriser des lieux historiques.</li>
</ul>
<p>Sources : Culture de proximité de Chantal Deschamps, Facteur C de Simon Brault</p>
HTML
        ),
        'Résidences d’artistes : pourquoi sont-elles essentielles ?' => array(
            'date' => '19 janvier 2026',
            'contenu' => <<<HTML
<p>Les résidences d’artistes sont des espaces-temps précieux où les créateurs peuvent se consacrer pleinement à leur art. Elles offrent un cadre propice à l’expérimentation, à la recherche et à la rencontre avec les publics.</p>
<p>À la Maison des arts de Saint-Augustin-de-Desmaures, nous croyons que ces résidences sont essentielles pour :</p>
<ul>
    <li>Soutenir la création professionnelle en arts visuels, vivants, littéraires et numériques ;</li>
    <li>Favoriser la médiation culturelle en permettant aux artistes de partager leur processus avec les écoles et la communauté ;</li>
    <li>Stimuler l’innovation artistique grâce à des espaces adaptés et inspirants.</li>
</ul>
<p>Chaque résidence se conclut par une sortie publique : lecture, exposition, spectacle ou atelier, créant un dialogue unique entre l’artiste et la population.</p>
HTML
        ),
    );

    $contenu_personnalise = '';

    if (isset($nouvelles_contenu[$titre_courant])) {
        $date_affichee = $nouvelles_contenu[$titre_courant]['date'];
        $contenu_personnalise = $nouvelles_contenu[$titre_courant]['contenu'];
    }
    ?>

    <article class="single-nouvelle__article">

        <a href="<?php echo esc_url($retour_nouvelles_url); ?>" class="single-nouvelle__btn-retour single-nouvelle__btn-retour--top" aria-label="Retour à la liste des nouvelles">Retour aux nouvelles</a>

            <section class="single-nouvelle__hero <?php echo $a_une_image ? '' : 'single-nouvelle__hero--sans-image'; ?>">
                <?php if ($a_une_image) : ?>
                <?php the_post_thumbnail('large', array('class' => 'single-nouvelle__hero-image')); ?>
                <?php endif; ?>

                <div class="single-nouvelle__hero-contenu">
                    <h1 class="single-nouvelle__titre"><?php the_title(); ?></h1>
                    <p class="single-nouvelle__date">
                        <span class="single-nouvelle__date-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
                                <g clip-path="url(#clip-date-single)">
                                    <path d="M4.50049 0.969482V2.90835" stroke="currentColor" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.00049 0.969482V2.90835" stroke="currentColor" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.6882 1.93896H2.81259C2.19122 1.93896 1.6875 2.37299 1.6875 2.9084V9.69443C1.6875 10.2298 2.19122 10.6639 2.81259 10.6639H10.6882C11.3096 10.6639 11.8133 10.2298 11.8133 9.69443V2.9084C11.8133 2.37299 11.3096 1.93896 10.6882 1.93896Z" stroke="currentColor" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1.6875 4.84717H11.8133" stroke="currentColor" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip-date-single">
                                        <rect width="13.501" height="11.6332" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <time datetime="<?php echo esc_attr($date_iso); ?>"><?php echo esc_html($date_affichee); ?></time>
                    </p>
                </div>
            </section>

        <section class="single-nouvelle__intro" aria-labelledby="single-nouvelle-contenu-titre">
            <h2 id="single-nouvelle-contenu-titre" class="u-visually-hidden">Contenu de la nouvelle</h2>
            <?php
            if (!empty($contenu_personnalise)) {
                echo wp_kses_post($contenu_personnalise);
            } else {
                the_content();
            }
            ?>
        </section>

        <nav class="single-nouvelle__navigation" aria-label="Navigation entre les nouvelles">
            <?php if ($nouvelle_precedente) : ?>
                <a href="<?php echo esc_url(get_permalink($nouvelle_precedente->ID)); ?>" class="single-nouvelle__btn-nav single-nouvelle__btn-nav--prev" aria-label="Article précédent : <?php echo esc_attr(get_the_title($nouvelle_precedente->ID)); ?>">← Précédent</a>
            <?php endif; ?>

            <?php if ($nouvelle_suivante) : ?>
                <a href="<?php echo esc_url(get_permalink($nouvelle_suivante->ID)); ?>" class="single-nouvelle__btn-nav single-nouvelle__btn-nav--next" aria-label="Article suivant : <?php echo esc_attr(get_the_title($nouvelle_suivante->ID)); ?>">Suivant →</a>
            <?php endif; ?>
        </nav>

    </article>

    <?php endif; ?>

</main>

<?php get_footer(); ?>