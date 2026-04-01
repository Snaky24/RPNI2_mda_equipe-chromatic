<?php

get_header();
echo "single-equipe.php";
?>
<!-- <link rel="stylesheet" type="text/css" media="all" href="liaisons/css/styles.css"> -->

<main class="page">

    <?php the_post(); //nécessaire à the_author() et the_date()
    // var_dump($post); //Ce que reçoit la page
    ?>
    <button class="retourFiches" type="button"><a class="article__lien" href="?page_id=39">Retour à l'Équipe</a></button>
    <header class="article__entete">
            <h2 class="article__titre"><?php the_title() ?></h2>
    </header>
    <article class="article">
        

        <?php  //remplacer cette balise pas le code de l'étape 3 ici! 

        ?>
        <?php  //remplacer cette balise pas le code de l'étape 3 ici! 
        if (isset($_GET['fiche_id'])) {
            $fiche_id = $_GET['fiche_id'];
            // Afficher le contenu selon l'ID
            if ($fiche_id == '1') {
                return "<h2>Fiche A</h2><p>Contenu de la fiche 1</p>";
            } elseif ($fiche_id == '2') {
                return "<h2>Fiche B</h2><p>Contenu de la fiche 2</p>";
            } else {
                return "Fiche non trouvée.";
            }
        }
        ?>

        
        <div class="article__texte"> 
            <?php the_content() ?>
        </div>

        <footer class="article__piedPage">
            <!-- <h4>Par: <?php //the_author(); //Attention! Nécessite un appel à the_post() avant cet affichage 
                        ?></h4> -->
            <!-- <h4> Publié le: <?php //the_date(); //Attention! Nécessite un appel à the_post() avant cet affichage 
                            ?></h4> -->
        </footer>
    </article>
    <div class="navigation-fiches">

<?php
$prev_post = get_previous_post();
if ($prev_post) :
?>
    <button class="precedentFiche" type="button"><a class="article__lienP" href="<?php echo get_permalink($prev_post->ID); ?>">
        Précédent
    </a></button>
<?php endif; ?>


<?php
$next_post = get_next_post();
if ($next_post) :
?>
    <button class="suivantFiche" type="button"><a class="article__lien" href="<?php echo get_permalink($next_post->ID); ?>">
        Suivant
    </a></button>
<?php endif; ?>

</div>
</main>

<?php get_footer() ?>