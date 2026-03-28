<?php get_header(); ?>

<main class="page">
    <section class="section">
        <div class="images">
            <?php

            $image_info = get_field("photo_1");

            //Si l'image est définie dans ACF
            if ($image_info != null) {

                //Utiliser la balise picture pour le redimensionnement de l'image 
            ?>
                <picture class="picture-volet1">
                    <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["large"]; ?>">
                    <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>">
                    <img src="<?php echo $image_info['sizes']['thumbnail']; ?>" alt="<?php echo $image_info["alt"]; ?>">
                </picture>

            <?php } ?>
            <img src="etage-lumineux.jpg" alt="Étage lumineux" class="photo photo-2">
        </div>

        <div class="texte">
            <?php the_content() ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>