<?php

/**
 * Contrôleur secondaire : deconnexion
 */

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
    die('Erreur : ' . basename(__FILE__));
}

// Inclusion du fichier de configuration et des fonctions d'authentification
require_once "config.php";
require_once RACINE . "/modele/authentification.inc.php";

// Déconnexion de l'utilisateur
if (logout()) {
    echo "Vous avez été déconnecté avec succès.";
} else {
    echo "Une erreur s'est produite lors de la déconnexion.";
}

// Inclusion des vues
$titre = "Déconnexion";
include RACINE . "/vue/entete.html.php";
include RACINE . "/vue/vueDeconnexion.php";
include RACINE . "/vue/pied.html.php";
