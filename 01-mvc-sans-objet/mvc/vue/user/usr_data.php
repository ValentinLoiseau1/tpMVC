<?php
		
		$JS_data = null;
		
		// on scanne tous les tuples stockés sur $user :
		foreach ($user as  $data) {
			
			//Données pour JQuery :
			
			$JS_data .= "'".$data['id']."_u_prenom':$('#".$data['id']."_u_pnom').val(),";
			$JS_data .= "'".$data['id']."_u_nom':$('#".$data['id']."_u_nom').val(),";
			$JS_data .= "'".$data['id']."_u_email':$('#".$data['id']."_u_mail').val(),";
			$JS_data .= "'".$data['id']."_u_born':$('#".$data['id']."_u_born').val(),";
			$JS_data .= "'".$data['id']."_u_ville':$('#".$data['id']."_u_ville').val(),";
			$JS_data .= "'".$data['id']."_u_enfants':$('#".$data['id']."_u_child').val(),";
			$JS_data .= "'".$data['id']."_u_tel':$('#".$data['id']."_u_tel').val(),";
			
			
			// on affiche les résultats trouvés sur le table :
			
			echo "
				<p>
				<b>".$data['id']."&rarr; </b> 
				Prénom : <input type='text' value='".$data['prenom']."' id='".$data['id']."_u_pnom' size='5' /> 
				Nom : <input type='text' value='".$data['nom']."' id='".$data['id']."_u_nom' size='5' /> 
				Email : <input type='text' value='".$data['email']."' id='".$data['id']."_u_mail' size='5' /> 
				Né(e) le : <input type='text' value='".$data['ne_le']."' id='".$data['id']."_u_born' size='5' /> 
				Ville : <input type='text' value='".$data['ville']."' id='".$data['id']."_u_ville' size='5' /> 
				Enfants : <input type='text' value='".$data['enfants']."' id='".$data['id']."_u_child' size='5' /> 
				Téléphone : <input type='text' value='".$data['tel']."' id='".$data['id']."_u_tel' size='5' />
				</p>
			";
			
		}
		
?>
