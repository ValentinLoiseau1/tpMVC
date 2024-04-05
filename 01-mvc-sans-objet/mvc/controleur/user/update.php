<?php

require_once( 'modele/user/db_update.php' );
	
$valide = false;
	
foreach ($_POST as $param_name => $param_val) {
	
	list($id, $type, $name) = explode('_', $param_name);
	
	if($name === "born") $name = "ne_le";
	
	//$dbug .= $id . " => " . $name . " => " . $param_val . "\n";
	
	if ( update_user("clients_tbl", $name, $param_val, $id) ) $valide = true;
	

}

//die($dbug);


//Retours pour AJAX :

if (!$valide) echo "err";

if ($valide) {

	require_once( 'modele/user/db_read.php' );

	$user = read_users("clients_tbl", 0, 3);

	if (count($user) === 0) die("La table est vide"); 
		
	include('vue/user/usr_data.php');
	
	$JS_data = null;
	
}
