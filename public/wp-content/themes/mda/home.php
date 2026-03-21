<?php get_header(); ?>
<main class="page">
    <?php echo "home.php"; ?>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <article class="article">
                <header class="article__entete">
                    <h2 class="article__titre">
                        <?php ?>
                        <a class="article__lien" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                    </h2>
                </header>
                <?php
                // Utiliser le code ci-dessous pour créer une image responsive
                if (has_post_thumbnail()) {
                    $sizes = array();
                    $sizes[0] = wp_get_attachment_image_src(get_post_thumbnail_id(), "large");
                    $sizes[1] = wp_get_attachment_image_src(get_post_thumbnail_id(), "medium");
                    $sizes[2] = wp_get_attachment_image_src(get_post_thumbnail_id(), "thumbnail"); ?>

                    <picture>
                        <source media="(min-width: 801px)" srcset="<?php echo $sizes[0][0]; ?>">
                        <source media="(min-width: 601px)" srcset="<?php echo $sizes[1][0]; ?>">
                        <img src="<?php echo $sizes[2][0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                    </picture>
                <?php } ?>
                <p class="article__texte">
                    <?php
                    the_content();
                    ?>
                </p>
            </article>
    <?php }
    } ?>
</main>
<?php get_footer(); ?>