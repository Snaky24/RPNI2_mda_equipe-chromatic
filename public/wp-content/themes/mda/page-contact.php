<?php
/* Template name: Contact */
get_header(); //Appel de l'inclusion d'entête de page
?>

<main class="page">

    <?php //var_dump($post); //Ce que reçoit la page
    ?>
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
    <p>
        <?php the_content(); ?>
        <?php  //echo $post->post_content; 
        ?>
    </p>

</main>

<?php get_footer() ?>