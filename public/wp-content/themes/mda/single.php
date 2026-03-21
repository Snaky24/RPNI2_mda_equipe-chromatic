<?php
get_header();
echo "single.php";
?>

<main class="page">

    <?php the_post(); //nécessaire à the_author() et the_date()
    // var_dump($post); //Ce que reçoit la page
    ?>
    <article class="article">
        <header class="article__entete">
            <h2 class="article__titre"><?php the_title() ?></h2>
        </header>



        <?php if (has_post_thumbnail()) { ?>
            <div class="article__imageUne">
                <?php //affiche l'image de l'article
                the_post_thumbnail("medium"); //peut être thumbnail, ou large. Il y a plusieurs possibilités
                ?>
            </div>
        <?php } ?>



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