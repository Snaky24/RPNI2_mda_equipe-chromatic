    <?php
    /* Template name: Nouvelles */
    get_header();
    ?>

    <main class="page-nouvelles">
      <section class="page-nouvelles__intro">
        <h1 class="page-nouvelles__titre"><?php the_title(); ?></h1>
        <div class="page-nouvelles__description">
          <?php the_content(); ?>
        </div>
      </section>

      <?php
      $requete_nouvelles = new WP_Query(array(
        'post_type' => 'nouvelles',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
      ));
      ?>

      <section class="page-nouvelles__liste">
        <?php if ($requete_nouvelles->have_posts()) { ?>
          <div class="nouvelles-grid">
            <?php while ($requete_nouvelles->have_posts()) {
              $requete_nouvelles->the_post(); ?>
              <article class="nouvelle-carte">
                <a class="nouvelle-carte__image-lien" href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('image-single', array(
                      'class' => 'nouvelle-carte__image',
                      'loading' => 'lazy',
                    ));
                  } else { ?>
                    <span class="nouvelle-carte__image--placeholder" aria-hidden="true"></span>
                  <?php } ?>
                </a>

                <div class="nouvelle-carte__contenu">
                  <p class="nouvelle-carte__date"><?php echo get_the_date('j F Y'); ?></p>
                  <h2 class="nouvelle-carte__titre">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h2>
                  <p class="nouvelle-carte__extrait"><?php echo wp_trim_words(get_the_excerpt(), 28); ?></p>
                  <a class="nouvelle-carte__btn" href="<?php the_permalink(); ?>">Lire la nouvelle</a>
                </div>
              </article>
            <?php } ?>
          </div>
          <?php wp_reset_postdata(); ?>
        <?php } else { ?>
          <p class="page-nouvelles__vide">Aucune nouvelle n'est disponible pour le moment.</p>
        <?php } ?>
      </section>
    </main>

    <?php get_footer(); ?>