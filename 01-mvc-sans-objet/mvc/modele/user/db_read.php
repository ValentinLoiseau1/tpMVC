<?php

function read_users($in_table, $from, $total) {

	global $connexion;

	/* 
	*  Lecture des tuples dans une table
	*/

	try {
		
		$sql = "SELECT * FROM $in_table ORDER BY id LIMIT ?, ?";
		
		$query = $connexion->prepare($sql);
		
		$query->execute( [ $from, $total ] );
		
		return $query->fetchAll();	
			
	}

	catch(Exception $e) {
		//Dbug
		//echo $e->getMessage();
		return "Impossible de récupérer les données sur la table :".$in_table;
	}

	//on libère la requette 
	//https://www.php.net/manual/fr/pdostatement.closecursor.php
	$query->closeCursor();

}

