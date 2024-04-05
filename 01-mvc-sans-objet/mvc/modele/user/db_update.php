<?php

function update_user($in_table, $name, $value, $id) {
	
	global $connexion;

	/* 
	*  Mise à jour d'une donnée dans un tuple
	*/

	try {
		
		//$sql = "UPDATE $in_table SET $name='?' WHERE id=?";
		$sql = "UPDATE ".$in_table." SET ".$name."='".$value."' WHERE id=".$id;
		
		$query = $connexion->prepare($sql);
		
		$query->execute( );
	
		return true;
			
	}

	catch(Exception $e) {
		//Dbug
		//echo $e->getMessage();
		return false;
	}

	//on libère la requette 
	//https://www.php.net/manual/fr/pdostatement.closecursor.php
	$query->closeCursor();

}
