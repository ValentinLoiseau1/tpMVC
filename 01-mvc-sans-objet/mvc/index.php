<?php

	require_once( 'modele/connect.php' );
	
	
	foreach ($_GET as $param_name => $param_val) {
		
		if($param_name === "update") include_once( 'controleur/user/update.php' );
		
	}
	
	if ( count($_GET) === 0 ) include_once( 'controleur/user/read.php' );
		
?>