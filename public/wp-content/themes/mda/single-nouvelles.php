<?php
get_header();
echo "single-nouvelles.php";
?>

<main class="page">

    <?php the_post(); //nécessaire à the_author() et the_date()
    // var_dump($post); //Ce que reçoit la page
    ?>
    <article class="article">
        <header class="article__entete">
            <h2 class="article__titre"><?php the_title() ?></h2>
        </header>



        <?php

        //Affichage de plusieurs images responsives définies dans les champs d'ACF

        //Boucler dans les champs d'images de ACF - un champ par image
        //Nommer les champs avec un numéro - photo_1, photo_2
        //Ici 8 images possibles
        for ($cpt = 1; $cpt <= 8; $cpt++) {

            //Le champ d'ACF doit être configuré pour retourner un tableau
            $image_info = get_field("photo_" . $cpt);

            //Si l'image est définie dans ACF
            if ($image_info != null) {
                //Utiliser la balise picture pour le redimensionnement de l'image
                //ici on utilise trois images personnalisées... Mais on peut utiliser thumbnail, medium, etc...
                //l'attribut sizes contient tout les formats d'image nécessaire.
        ?>
                <picture>
                    <source media="(min-width: 800px)" srcset="<?= $image_info['sizes']["large"] ?>">
                    <source media="(min-width: 601px)" srcset="<?= $image_info['sizes']["medium"] ?>">
                    <img src="<?= $image_info['sizes']["thumbnail"] ?>" alt="<?= $image_info["alt"]; ?>">
                </picture>
        <?php }
        } ?>



        <p class="article__texte">
            <?php the_content() ?>
        </p>
        <footer class="article__piedPage">
            <h4>Par: <?php the_author(); //Attention! Nécessite un appel à the_post() avant cet affichage 
                        ?></h4>
            <h4> Publié le: <?php the_date(); //Attention! Nécessite un appel à the_post() avant cet affichage 
                            ?></h4>
        </footer>
    </article>

</main>

<?php get_footer() ?>