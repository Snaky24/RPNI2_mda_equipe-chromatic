<?php get_header(); ?>

<main class="page">
    <div class="volets-fond">
        <div class="titre-paragraphe">
            <h2 class="volets__titre"><?php the_title() ?></h2>
            <p class="volets__paragraphe"><?php the_content() ?></p>
        </div>
        <div class="volets_images">
            <?php

            $image_info = get_field("photo_1");

            //Si l'image est définie dans ACF
            if ($image_info != null) {

                //Utiliser la balise picture pour le redimensionnement de l'image 
            ?>
                <picture class="volets_images-rotate1">
                    <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["large"]; ?>">
                    <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>">
                    <img class="volets_images-img1" src="<?php echo $image_info['sizes']['thumbnail']; ?>" alt="<?php echo $image_info["alt"]; ?>">
                </picture>

            <?php } ?>
        </div>
        <div class="volets_images">
            <?php

            $image_info = get_field("photo_2");

            //Si l'image est définie dans ACF
            if ($image_info != null) {

                //Utiliser la balise picture pour le redimensionnement de l'image 
            ?>
                <picture class="volets_images-rotate2">
                    <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["large"]; ?>">
                    <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>">
                    <img class="volets_images-img2" src="<?php echo $image_info['sizes']['thumbnail']; ?>" alt="<?php echo $image_info["alt"]; ?>">
                </picture>

            <?php } ?>
        </div>
        <?php the_content() ?>
    </div>
</main>

<?php get_footer(); ?>