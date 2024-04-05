<?php
/**

*	Testez ce code en créant un nouveau document nommé « doc1.php ».
*	Sur la dernière ligne, modifier le code afin de créer un lien HTML en 
*	utilisant la balise de type <a href ..>.
*	Copier le document « doc1.php » en « doc2.php » et faire en sorte 
*	que l’on puisse retourner (en cliquant) sur le document « doc1.php ».
*	Attention : dans votre code, le contenu du paramètre href ne doit pas être
*	semblable à ceci : href="doc1.php"
*/

define( "NEXTPAGE", "doc2.php" );
echo "&bull; Chemin absolu où le script est exécuté : ", __DIR__ ;
echo "<br />Son dossier parent : ", dirname(__DIR__);
echo "<br />&bull; Chemin absolu de ce script : ", __FILE__;
echo "<br />Page courante : ", basename(__FILE__), "<br />Page suivante : ", NEXTPAGE;

?>
