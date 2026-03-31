<?php get_header(); ?>

<main class="single-nouvelle">

    <?php the_post(); ?>

    <article class="single-nouvelle__article">

        <?php if (has_post_thumbnail()) : ?>
            <section class="single-nouvelle__hero">
                <?php the_post_thumbnail('large', array('class' => 'single-nouvelle__hero-image')); ?>

                <div class="single-nouvelle__hero-contenu">
                    <p class="single-nouvelle__date"><?php echo get_the_date('j F Y'); ?></p>
                    <h1 class="single-nouvelle__titre"><?php the_title(); ?></h1>
                </div>
            </section>
        <?php endif; ?>

        <section class="single-nouvelle__intro">
            <?php the_content(); ?>
        </section>

        <section class="single-nouvelle__bloc single-nouvelle__bloc--infos">
            <div class="single-nouvelle__bloc-images">
                <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/photo-maison.png" alt="Maison des arts" class="single-nouvelle__polaroid single-nouvelle__polaroid--1">
                <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/photo-collage.png" alt="Collage artistique" class="single-nouvelle__polaroid single-nouvelle__polaroid--2">
                <span class="single-nouvelle__tape"></span>
            </div>

            <div class="single-nouvelle__bloc-texte">
                <h2>À Saint-Augustin-de-Desmaures</h2>
                <p>La Maison des arts propose :</p>
                <ul>
                    <li>Des ateliers intergénérationnels</li>
                    <li>Des résidences d’artistes</li>
                    <li>Une programmation pluridisciplinaire</li>
                </ul>
            </div>
        </section>

        <section class="single-nouvelle__bloc single-nouvelle__bloc--benefices">
            <div class="single-nouvelle__bloc-texte">
                <h2>Les bénéfices</h2>
                <ul>
                    <li><strong>Social :</strong> Briser l’isolement, renforcer le sentiment d’appartenance</li>
                    <li><strong>Économique :</strong> Chaque dollar investi en culture génère 1,25 $ d’activité</li>
                    <li><strong>Patrimonial :</strong> Préserver et valoriser un lieu historique</li>
                </ul>
            </div>

            <div class="single-nouvelle__bloc-images">
                <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/photo-maison.png" alt="Maison des arts" class="single-nouvelle__polaroid single-nouvelle__polaroid--3">
                <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/photo-collage.png" alt="Collage artistique" class="single-nouvelle__polaroid single-nouvelle__polaroid--4">
                <span class="single-nouvelle__tape single-nouvelle__tape--2"></span>
            </div>
        </section>

        <nav class="single-nouvelle__navigation">
            <a href="<?php echo get_post_type_archive_link('nouvelles'); ?>" class="single-nouvelle__btn-retour">← Précédent</a>
        </nav>

    </article>

</main>

<?php get_footer(); ?>