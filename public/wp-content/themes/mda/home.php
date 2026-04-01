<?php get_header(); ?>

<main class="site-main">
    <h1 class="titre-principal"><?php bloginfo('name'); ?></h1>

    <section class="nouvelles">
        <h2 class="section__titre">Nouvelles</h2>
        <div class="nouvelles__grille">
            <?php 
            $query_news = new WP_Query(array(
                'post_type'      => 'nouvelles',
                'posts_per_page' => 3
            ));
            if ($query_news->have_posts()) : while ($query_news->have_posts()) : $query_news->the_post(); ?>
                <article class="carte-polaroid">
                    <div class="tape"></div> <div class="polaroid__image">
                        <?php 
                        if(has_post_thumbnail()) : 
                            the_post_thumbnail('large'); 
                        else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/placeholder.jpg" alt="Image par défaut">
                        <?php endif; ?>
                    </div>
                    <div class="polaroid__texte">
                        <h3><?php the_title(); ?></h3>
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
                <div class="img-wrapper img-inclinee-1">
                    <div class="tape"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/presbytere-1.jpg" alt="Presbytère">
                </div>
                <div class="img-wrapper img-inclinee-2">
                    <div class="tape"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/presbytere-2.jpg" alt="MDA">
                </div>
            </div>
        </div>
    </section>

<section class="volet-culturel">
<div class="volet-culturel__slider">
    <?php 
    $query_volet = new WP_Query(array(
        'post_type'      => 'voletsculturels',
        'posts_per_page' => -1 
    ));
    
    $count = 0;

    if ($query_volet->have_posts()) : 
        while ($query_volet->have_posts()) : 
            $query_volet->the_post(); 

            $photo_base = get_field('photo_1', get_the_ID());
            $photo_dessus = get_field('photo_2', get_the_ID());
    ?>
        
        <div class="volet-culturel__item <?php echo ($count === 0) ? 'is-active' : ''; ?>" data-volet="<?php echo $count; ?>">
            <div class="volet-culturel__conteneur">

                <div class="volet-culturel__images">
                    
                    <!-- IMAGE BASE -->
                    <div class="img-polaroid img-polaroid--base">
                        <div class="tape"></div>

                        <?php 
                        if($photo_base) : 

                            if(is_array($photo_base)) {
                                echo wp_get_attachment_image($photo_base['ID'], 'large');
                            } else {
                                echo wp_get_attachment_image($photo_base, 'large');
                            }

                        else : 
                            the_post_thumbnail('large'); 
                        endif; 
                        ?>
                    </div>

                    <!-- IMAGE DESSUS -->
                    <div class="img-polaroid img-polaroid--dessus">
                        <div class="tape"></div>

                        <?php 
                        if($photo_dessus) : 

                            if(is_array($photo_dessus)) {
                                echo wp_get_attachment_image($photo_dessus['ID'], 'large');
                            } else {
                                echo wp_get_attachment_image($photo_dessus, 'large');
                            }

                        else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/photo-2.jpg" alt="Image par défaut">
                        <?php endif; ?>
                    </div>

                </div>

                <div class="volet-culturel__bloc-info">
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-beige">En apprendre plus</a>
                </div>

            </div>
        </div>

    <?php 
        $count++; 
        endwhile; 
        wp_reset_postdata(); 
    endif; 
    ?>
</div>

<div class="volet-culturel__controles">
    <button class="fleche fleche--gauche" id="prevVolet"></button>

    <div class="points-container">
        <?php for($i = 0; $i < $count; $i++): ?>
            <span class="point <?php echo ($i === 0) ? 'point--actif' : ''; ?>" data-target="<?php echo $i; ?>"></span>
        <?php endfor; ?>
    </div>

    <button class="fleche fleche--droite" id="nextVolet"></button>
</div>
</section>
</main>

<?php get_footer(); ?>