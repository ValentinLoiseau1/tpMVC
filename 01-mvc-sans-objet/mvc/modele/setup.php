<?php

$db = 'pdotest';

$connexion->exec("CREATE DATABASE $db");
echo "BDD <b>".$db."</b> créee.<br>";

die();

$table = "clients_tbl";
 
 /* -------------------------- */
 
// Création d'une table 'clients_tbl' :
$sql = "CREATE TABLE $table(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE,
    ne_le VARCHAR(30) NOT NULL,
    ville VARCHAR(30) NOT NULL,
    enfants VARCHAR(30) NOT NULL,
    tel VARCHAR(30) NOT NULL
)";

$connexion->exec($sql);

echo "Table <b>".$table."</b> créee.<br>";

/* -------------------------- */

function insert_data($id,$nom,$prenom,$email,$nele,$ville,$enfants,$tel) {

	//Nom de la base (voir : config.php) :
	$db = "pdotest";
	$table = "clients_tbl";

	include( __DIR__ . '/config.php');

	$sql = "INSERT INTO $table (id, nom, prenom, email, ne_le, ville, enfants, tel) VALUES ($id, '$nom', '$prenom', '$email', '$nele', '$ville', '$enfants', '$tel')";

	$connexion->exec($sql);
	
	echo "<li>Utilisateur : <b>".$prenom."</b> crée;</li>";
	
}
 
insert_data(1, 'Dupont', 'Bob', 'boby@gmail.com', '04/10/1984', 'Paris', '1', '0607080910');
insert_data(2,"Durieux","Marie","marie@yahoo.fr","15/12/1972","Nantes","3","0203040506");
insert_data(3,"Dupond","Paul","paul@hotmail.fr","25/03/1999","Vannes","0","0708091011");