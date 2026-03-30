<?php
get_header();
?>

<main class="single-nouvelle">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="single-nouvelle__article">

            <header class="single-nouvelle__hero">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="single-nouvelle__image-principale">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>

                <div class="single-nouvelle__hero-contenu">
                    <p class="single-nouvelle__date"><?php echo get_the_date('j F Y'); ?></p>
                    <h1 class="single-nouvelle__titre"><?php the_title(); ?></h1>
                </div>
            </header>

            <section class="single-nouvelle__contenu">
                <a class="single-nouvelle__retour" href="<?php echo esc_url(get_post_type_archive_link('nouvelles')); ?>">
                    ← Retour aux nouvelles
                </a>

                <div class="single-nouvelle__texte">
                    <?php the_content(); ?>
                </div>
            </section>

            <nav class="single-nouvelle__navigation">
                <div class="single-nouvelle__precedent">
                    <?php previous_post_link('%link', '← Précédent', true, '', 'category'); ?>
                </div>

                <div class="single-nouvelle__suivant">
                    <?php next_post_link('%link', 'Suivant →', true, '', 'category'); ?>
                </div>
            </nav>

        </article>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>