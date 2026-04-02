<?php

get_header();
echo "single-equipe.php";
?>
<!-- <link rel="stylesheet" type="text/css" media="all" href="liaisons/css/styles.css"> -->

<main class="page">

    <?php the_post(); //nécessaire à the_author() et the_date()
    // var_dump($post); //Ce que reçoit la page
    ?>
    <button class="retourFiches article__lien" type="button" onclick="window.location.href='?page_id=39'">
    Retour à l'Équipe
    </button>
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
        <?php
$image_info = get_field("photo_1");

if ($image_info) :
    $image_url = $image_info['sizes']['Equipes'];
    $alt = $image_info['alt'];
?>
    <div class="equipe__img">
        <img class="image-single" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt); ?>">
    </div>

<?php elseif (has_post_thumbnail()) : ?>
    <div class="equipe__img">
        <?php the_post_thumbnail('Equipes', array('class' => 'image-single')); ?>
    </div>
<?php endif; ?>

        
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
    <button class="precedentFiche article__lienP" type="button" onclick="window.location.href='<?php echo get_permalink($prev_post->ID); ?>'">
        Précédent
    </button>
<?php endif; ?>


<?php
$next_post = get_next_post();
if ($next_post) :
?>
    <button class="suivantFiche article__lien" type="button" onclick="window.location.href='<?php echo get_permalink($next_post->ID); ?>'">
        Suivant
    </button>
<?php endif; ?>

</div>
</main>

<?php get_footer() ?>