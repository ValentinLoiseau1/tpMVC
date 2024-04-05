<?php

/* 
*  Connection à la base de donnée
*/

$db = "pdotest"; // nom de la base de données

$PARAM_nom_bd=$db; // nom de la base de données
$PARAM_utilisateur='root'; // nom d'utilisateur
$PARAM_mot_passe='root@sio'; // mot de passe de l'utilisateur
$PARAM_hote='localhost';
$PARAM_port='3306';

try {
	
	/* 
	*  Objet PDO Connexion 
	*  https://www.php.net/manual/fr/pdo.construct.php
	*/
	
	//Le Data Source Name, ou DSN, contient les informations requises pour se connecter à la base :
	//$dsn = 'mysql:host=127.0.0.1;port=3333;dbname=testdb';
	
	//Sans le port :
	//$dsn = 'mysql:host=' . $PARAM_hote . ';dbname=' . $PARAM_nom_bd;
	
	//Avec le port :
	$dsn = 'mysql:host=' . $PARAM_hote . ';port=' . $PARAM_port . ';dbname=' . $PARAM_nom_bd;
	
	//Options PDO sur les requettes :
	$options = array(
					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_EMULATE_PREPARES => false 
				);	//Désactiver ATTR_EMULATE_PREPARES permet d'ajouter des variables dans un tableau sur les requettes execute()
	
	//Constructeur PDO :
	$connexion = new PDO( $dsn , $PARAM_utilisateur, $PARAM_mot_passe, $options );
	
	// fermeture de la connexion
	//$connexion = null;
	
}
 
catch(Exception $e) {
	
	if($e->getCode() === 1049) {
		//include("model/setup.php");
		//die("recharger cette page");
	}
	
	echo 'Erreur : '.$e->getMessage().'<br />';
	echo 'N° : '.$e->getCode();
	die('<br>Une erreur est survenue !');
}

// Fin de l'objet connexion stocké dans : $connexion
