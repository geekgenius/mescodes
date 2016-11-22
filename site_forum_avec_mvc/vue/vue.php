<?php
	function afficherClient($client){

		$contenuAffichage='';
		foreach ($client as $ligne){
			$contenuAffichage.= '<p>
									<input type="checkbox" name="laBox[]" value="'.$client->id.'">
									<label for="listeclient">Client numéro '. $client->id. ' : </label>
									<input type="text" id="listeclient" readonly="readonly" value="' .$client->nom.' né le '.$client->date_naiss.' joignable sur le '.$client->tel.'"></p>
									<input type="submit" name="toutEffacer" value="Supprimer client">
								</p>';
				
					
		}
		require_once('vue/gabarit.php');
	}

	function afficherAccueil(){
		$contenuAffichage='';
		require_once('vue/gabarit.php');
	}
	
	function afficherErreur($erreur){
		
		$contenuAffichage= '<p>' .$erreur. '</p>';
		require_once('vue/gabarit.php');
		echo '<p><a href="site.php">Revenir à la page d\accueil</a></p>';
	}