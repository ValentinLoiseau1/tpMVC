<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
	// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
    die('Erreur : '.basename(__FILE__));
}

?>

<h1>Mon profil</h1>

Mon adresse électronique : <?= $util["mailU"] ?> <br />
Mon pseudo : <?= $util["pseudoU"] ?> <br />

<hr>

les restaurants que j'aime : <br>
<?php foreach ($mesRestosAimes as $resto) {
        // Construire l'URL du détail du restaurant avec son identifiant
        $url = "./?action=detail&idR=" . $resto['idR'];
        // Afficher le lien avec le nom du restaurant et l'URL construite
        echo '<a href="' . $url . '">' . $resto['nomR'] . '</a><br>';
    }?>
<hr>
les types de cuisine que j'aime : 
<ul id="tagFood">		
    <li class="tag"><span class="tag">#</span>sud ouest</li>
    <li class="tag"><span class="tag">#</span>viande</li>
    <li class="tag"><span class="tag">#</span>grillade</li>
</ul>
<hr>

<a href="./?action=deconnexion">se deconnecter</a>


