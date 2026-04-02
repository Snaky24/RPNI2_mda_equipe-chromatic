<?php get_header(); ?>

<main class="site-main accueil">
    <h1 class="titre-principal"><?php bloginfo('name'); ?></h1>

    <section class="nouvelles">
        <h2 class="section__titre">Nouvelles</h2>
        <div class="nouvelles__grille">
            <?php 
            $query_news = new WP_Query([
                'post_type'      => 'nouvelles',
                'posts_per_page' => 3
            ]);
            if ($query_news->have_posts()) {
                while ($query_news->have_posts()) {
                    $query_news->the_post(); ?>
                    <article class="carte-polaroid">
                        <div class="polaroid__image">
                            <?php if(has_post_thumbnail()) {
                                the_post_thumbnail('large'); 
                            } else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/placeholder.jpg" alt="Image par défaut">
                            <?php } ?>
                        </div>
                        <div class="polaroid__texte">
                            <p><?php echo wp_trim_words(get_the_excerpt(), 12); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn-voir-plus">Voir plus</a>
                        </div>
                    </article>
                <?php }
                wp_reset_postdata();
            } ?>
        </div>
    </section>

    <?php
    $query_propos = new WP_Query([
        'name'           => 'section-a-propos',
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 1
    ]);

    if ($query_propos->have_posts()) {
        while ($query_propos->have_posts()) {
            $query_propos->the_post();
            $photo1 = get_field('photo_a_propos_1');
            $photo2 = get_field('photo_a_propos_2'); ?>
            
            <section class="a-propos">
                <div class="separateur_haut"></div>

                <div class="a-propos__contenu">
                    <div class="a-propos__texte">
                        <h2><?php the_title(); ?></h2>
                        <div class="mission-p">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="a-propos__images">
                        <div class="img-wrapper img-inclinee-1">
                            <?php if($photo1) { ?>
                                <img src="<?php echo esc_url($photo1['url']); ?>" alt="<?php echo esc_attr($photo1['alt']); ?>">
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/presbytere-1.jpg" alt="Backup">
                            <?php } ?>
                        </div>
                        <div class="img-wrapper img-inclinee-2">
                            <?php if($photo2) { ?>
                                <img src="<?php echo esc_url($photo2['url']); ?>" alt="<?php echo esc_attr($photo2['alt']); ?>">
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/presbytere-2.jpg" alt="Backup">
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="separateur_bas"></div>
            </section>
        <?php }
        wp_reset_postdata();
    } ?>

    <section class="volet-culturel">
        <div class="volet-culturel__slider">
            <?php 
            $query_volet = new WP_Query([
                'post_type'      => 'voletsculturels',
                'posts_per_page' => -1 
            ]);
            $count = 0;

            if ($query_volet->have_posts()) {
                while ($query_volet->have_posts()) {
                    $query_volet->the_post(); 
                    $photo_base = get_field('photo_1');
                    $photo_dessus = get_field('photo_2'); ?>
                    
                    <div class="volet-culturel__item <?php echo ($count === 0) ? 'is-active' : ''; ?>" data-volet="<?php echo $count; ?>">
                        <div class="volet-culturel__conteneur">
                            <div class="volet-culturel__images">
                                <div class="img-polaroid img-polaroid--base">
                                    <?php if($photo_base) {
                                        echo wp_get_attachment_image(is_array($photo_base) ? $photo_base['ID'] : $photo_base, 'large');
                                    } else {
                                        the_post_thumbnail('large');
                                    } ?>
                                </div>
                                <div class="img-polaroid img-polaroid--dessus">
                                    <?php if($photo_dessus) {
                                        echo wp_get_attachment_image(is_array($photo_dessus) ? $photo_dessus['ID'] : $photo_dessus, 'large');
                                    } else { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/photo-2.jpg" alt="Default">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="volet-culturel__bloc-info">
                                <h2><?php the_title(); ?></h2>
                                <p><?php echo get_the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn-beige">En apprendre plus</a>
                            </div>
                        </div>
                    </div>
                <?php $count++; 
                }
                wp_reset_postdata();
            } ?>
        </div>

        <div class="volet-culturel__controles">
            <button class="fleche fleche--gauche" id="prevVolet"></button>
            <div class="points-container">
                <?php for($i = 0; $i < $count; $i++) { ?>
                    <span class="point <?php echo ($i === 0) ? 'point--actif' : ''; ?>" data-target="<?php echo $i; ?>"></span>
                <?php } ?>
            </div>
            <button class="fleche fleche--droite" id="nextVolet"></button>
        </div>
    </section>
</main>

<?php get_footer(); ?>