<?php

	require_once( 'modele/user/db_read.php' );

	$user = read_users("clients_tbl", 0, 3);

	if (!is_array($user)) die($user); 
	
	include('vue/user/users.html');

?>