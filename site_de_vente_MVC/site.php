<?php
	require_once('controleur/controleur.php');
	try{
		//Ajouter client
		if (isset($_POST['addClient'])){
			// echo 'okokok';
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$date_naiss=$_POST['date_naiss'];
			$tel=$_POST['tel'];
			($nom,$prenom,$date_naiss,$tel);
		}
		//afficher liste des clients
		elseif(isset($_POST['displayClient'])){
			CtlAfficherclient();
		}
		// supprimer client
		elseif(isset($_POST['toutEffacer'])){
			if(isset($_POST['laBox'])){
				CtlSupprimerClient();
			}
			CtlAfficherClient();			
		}
		// rechecher client
		elseif(isset($_POST['search'])){
			$nom=$_POST['nom'];
			CtlChercherClient($nom);
		}
		else{
			CtlAccueil();
		}

	}
	catch(PDOException $e){
		$msg=$e->getMessage().'----'. $e->getLine();
		exit($msg);
	}
?>