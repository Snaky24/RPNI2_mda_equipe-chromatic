document.addEventListener('DOMContentLoaded', function() {
    // 1. Sélection des éléments du DOM
    let listeDesArticles = document.querySelectorAll('.volet-culturel__item');
    let listeDesPointsNavigation = document.querySelectorAll('.volet-culturel__controles .point');
    let boutonPrecedent = document.querySelector('.fleche--gauche');
    let boutonSuivant = document.querySelector('.fleche--droite');
    
    // 2. Suivi de la position actuelle
    let indexArticleActif = 0;

    // 3. Fonction principale pour changer d'article
    function changerArticle(nouvelIndex) {
        // Désactivation de tous les articles
        for (let cptArticles = 0; cptArticles < listeDesArticles.length; cptArticles++) {
            listeDesArticles[cptArticles].classList.remove('is-active');
        }
        
        // Désactivation de tous les points de navigation
        for (let cptPoints = 0; cptPoints < listeDesPointsNavigation.length; cptPoints++) {
            listeDesPointsNavigation[cptPoints].classList.remove('point--actif');
        }

        // Activation de l'élément cible
        listeDesArticles[nouvelIndex].classList.add('is-active');
        listeDesPointsNavigation[nouvelIndex].classList.add('point--actif');
        
        // Mise à jour de l'index global
        indexArticleActif = nouvelIndex;
    }

    // 4. Gestion du bouton "Suivant"
    if (boutonSuivant) {
        boutonSuivant.addEventListener('click', function() {
            let indexSuivant = indexArticleActif + 1;
            
            // Boucle : si on dépasse la fin, on revient au début
            if (indexSuivant >= listeDesArticles.length) {
                indexSuivant = 0;
            }
            changerArticle(indexSuivant);
        });
    }

    // 5. Gestion du bouton "Précédent"
    if (boutonPrecedent) {
        boutonPrecedent.addEventListener('click', function() {
            let indexPrecedent = indexArticleActif - 1;
            
            // Boucle : si on recule avant le début, on va à la fin
            if (indexPrecedent < 0) {
                indexPrecedent = listeDesArticles.length - 1;
            }
            changerArticle(indexPrecedent);
        });
    }

    // 6. Gestion du clic sur les points (Pagination)
    for (let cptNavigation = 0; cptNavigation < listeDesPointsNavigation.length; cptNavigation++) {
        listeDesPointsNavigation[cptNavigation].addEventListener('click', function() {
            changerArticle(cptNavigation);
        });
    }
});