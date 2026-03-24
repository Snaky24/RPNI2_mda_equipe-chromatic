<?php get_header(); ?>

<main class="site-main">
    <h1 class="titre-principal">La Maison des arts de Saint-Augustin-de-Desmaures</h1>

    <section class="nouvelles">
        <h2 class="section__titre">Nouvelles</h2>
        <div class="nouvelles__grille">
            <?php 
            $query_news = new WP_Query(array(
                'category_name' => 'nouvelles', 
                'posts_per_page' => 3
            ));
            if ($query_news->have_posts()) : while ($query_news->have_posts()) : $query_news->the_post(); ?>
                <article class="carte-polaroid">
                    <div class="polaroid__image">
                        <?php if(has_post_thumbnail()) : the_post_thumbnail('medium'); endif; ?>
                    </div>
                    <div class="polaroid__texte">
                        <p><?php echo wp_trim_words(get_the_excerpt(), 12); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn-voir-plus">Voir plus</a>
                    </div>
                </article>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </section>

    <section class="a-propos">
        <div class="a-propos__contenu">
            <div class="a-propos__texte">
                <h2>À propos de nous</h2>
                <p>La Maison des arts de Saint-Augustin-de-Desmaures redonne vie au presbytère du village en le transformant en un lieu culturel accessible et rassembleur. Notre mission : offrir une programmation professionnelle en arts visuels, arts vivants, littérature et cinéma, accueillir des résidences d'artistes et développer des projets de médiation culturelle avec les écoles et les organismes du territoire. Ancré dans une approche durable et respectueuse du patrimoine, le projet crée un espace chaleureux où la communauté peut se rencontrer, s'inspirer et célébrer la création.</p>
            </div>
            <div class="a-propos__images">
                <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/presbytere-1.jpg" class="img-inclinee-1">
                <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/presbytere-2.jpg" class="img-inclinee-2">
            </div>
        </div>
    </section>

    <section class="volet-culturel">
        <h2 class="section__titre">Volet culturel</h2>
        <?php 
        $query_volet = new WP_Query(array(
            'category_name' => 'volets', 
            'posts_per_page' => 1 
        ));
        if ($query_volet->have_posts()) : while ($query_volet->have_posts()) : $query_volet->the_post(); ?>
            <div class="volet-culturel__conteneur">
                <div class="volet-culturel__images">
                    <div class="img-polaroid img-polaroid--base">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <div class="img-polaroid img-polaroid--dessus">
                        <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/photo-2.jpg">
                    </div>
                </div>

                <div class="volet-culturel__bloc-info">
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-beige">En apprendre plus</a>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>

        <div class="volet-culturel__controles">
            <span class="fleche">&lt;</span>
            <span class="point"></span>
            <span class="point point--actif"></span>
            <span class="point"></span>
            <span class="point"></span>
            <span class="fleche">&gt;</span>
        </div>
    </section>
</main>

<?php get_footer(); ?>