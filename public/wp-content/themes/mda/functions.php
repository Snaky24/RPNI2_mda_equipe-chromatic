<?php
//initialise la fonctionnalité de gestion des menus pour ce thème
if (function_exists("register_nav_menus")) {
    register_nav_menus(
        array(
            "principal" => "Menu principal",
            "secondaire" => "Menu secondaire",
            "politique" => "Menu politiques"
        )
    );
}
?>

<?php
//Déclaration du type d'article personnalisé des volets culturels****************************
//À mettre dans le fichier functions.php et adapter en fonction du type d'article.

//Déclaration des Volets culturels
function agence_voletsculturels_custom_post()
{

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x('Volets culturels de MDA', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Volets culturels', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Volets culturels'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __('Tous nos volets culturels'),
        'view_item'           => __('Voir nos volets culturels'),
        'add_new_item'        => __('Ajouter un volet'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer un volet'),
        'update_item'         => __('Modifier un volet'),
        'search_items'        => __('Rechercher un volet'),
        'not_found'           => __('Non trouvé'),
        'not_found_in_trash'  => __('Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __('Nos volets culturels'),
        'description'         => __('Tous sur nos volets culturels'),
        'labels'              => $labels,
        'supports'            => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'revisions',
            'custom-fields'
        ),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'              => array('slug' => 'voletsculturels')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "voletsculturels" et ses arguments
    register_post_type('voletsculturels', $args);
}

add_action('init', 'agence_voletsculturels_custom_post', 0);
?>

<?php
//Déclaration du type d'article personnalisé des équipe****************************
//À mettre dans le fichier functions.php et adapter en fonction du type d'article.

//Déclaration des Volets culturels
function agence_equipe_custom_post()
{

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x('Équipe de MDA', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Équipe', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Équipe'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __('Tous nos membres'),
        'view_item'           => __('Voir nos membres'),
        'add_new_item'        => __('Ajouter un membre'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer un membre'),
        'update_item'         => __('Modifier un membre'),
        'search_items'        => __('Rechercher un membre'),
        'not_found'           => __('Non trouvé'),
        'not_found_in_trash'  => __('Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __('Nos membres'),
        'description'         => __('Tous sur nos membres'),
        'labels'              => $labels,
        'supports'            => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'revisions',
            'custom-fields'
        ),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'              => array('slug' => 'equipe')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "voletsculturels" et ses arguments
    register_post_type('equipe', $args);
}

add_action('init', 'agence_equipe_custom_post', 0);
?>

<?php
//Déclaration du type d'article personnalisé des nouvelles****************************
//À mettre dans le fichier functions.php et adapter en fonction du type d'article.

//Déclaration des Volets culturels
function agence_nouvelles_custom_post()
{

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x('Nouvelles de MDA', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Nouvelles', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Nouvelles'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __('Toutes nos nouvelles'),
        'view_item'           => __('Voir nos nouvelles'),
        'add_new_item'        => __('Ajouter une nouvelle'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer une nouvelle'),
        'update_item'         => __('Modifier une nouvelle'),
        'search_items'        => __('Rechercher une nouvelle'),
        'not_found'           => __('Non trouvé'),
        'not_found_in_trash'  => __('Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __('Nos nouvelles'),
        'description'         => __('Toutes sur nos nouvelles'),
        'labels'              => $labels,
        'supports'            => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'revisions',
            'custom-fields'
        ),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'              => array('slug' => 'nouvelles')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "voletsculturels" et ses arguments
    register_post_type('nouvelles', $args);
}

add_action('init', 'agence_nouvelles_custom_post', 0);
?>

<?php
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
?>

<?php 
/* Désactivation des formats d’images générés automatiquement par WordPress */
add_filter( 'intermediate_image_sizes_advanced', 'prefix_remove_default_images');
function prefix_remove_default_images ( $sizes ) {
    unset( $sizes['thumbnail'] ); // 150px
    unset( $sizes['medium'] ); // 300px 
    unset( $sizes['large'] ); // 1024px 
    unset( $sizes['medium_large'] ); // 768px
    unset( $sizes['1536x536'] );
    return $sizes;
}

/* Ajout de nouveaux formats d'images générés par WordPress */
if(function_exists ( "add_image_size" )){
    add_image_size( "image-single", 768, 432, true);
    add_image_size( "image-bande", 1000, 320, true);
}

/* Désactivation de la compression automatique des images */
add_filter( 'jpeg_quality', 'my_prefix_regenerate_thumbnail_quality');
function my_prefix_regenerate_thumbnail_quality() {
    return 100;
}

/* Création du réglage "Image mise en avant" */
if(function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
}
?>