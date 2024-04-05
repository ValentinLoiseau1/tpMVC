<?php

/**
*	Controleur secondaire : connexion 
*/

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
	// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
    die('Erreur : '.basename(__FILE__));
}

require_once RACINE . "/modele/authentification.inc.php";

// creation du menu burger
$menuBurger = array();
$menuBurger[] = ["url"=>"./?action=connexion","label"=>"Connexion"];
$menuBurger[] = ["url"=>"./?action=inscription","label"=>"Inscription"];

// recuperation des donnees GET, POST, et SESSION
if (!isset($_POST['mailU']) || !isset($_POST['mdpU'])){
    // on affiche le formulaire de connexion
    $titre = "authentification";
    include RACINE . "/vue/entete.html.php";
    include RACINE . "/vue/vueAuthentification.php";
    include RACINE . "/vue/pied.html.php";

    var_dump($_SESSION);
    
} else {
    // Vérifier si les champs mailU et mdpU ne sont pas vides
    if (!empty($_POST['mailU']) && !empty($_POST['mdpU'])) {
        // Tentative de connexion
        login($_POST['mailU'], $_POST['mdpU']);
        
        // Vérifier si la connexion est réussie
        if(isLoggedOn()) {
            include RACINE . "/vue/entete.html.php";
            include RACINE . "/vue/vueConfirmationAuth.php";
            include RACINE . "/vue/pied.html.php";
        } else {
            // Gérer le cas où la connexion échoue
            echo "Identifiants incorrects. Veuillez réessayer.";
        }
    } else {
        // Gérer le cas où l'un des champs est vide
        echo "Veuillez remplir tous les champs.";
    }
}

?>